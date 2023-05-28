<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\feedback;
use App\Models\panier;
use App\Models\commande;
use App\Models\reply;
use App\Models\product;
use App\Models\commentaires;
use Illuminate\Support\Facades\DB;
use Stripe;
use Illuminate\Notifications\Notification;
use App\Notifications\emailnotification;
use Illuminate\Notifications\Events\NotificationSent;
use Illuminate\Support\Facades\Session;

class homeController extends Controller
{
    public function redirect(){
       $usertype=Auth::user()->usertype;
       if($usertype=='1'){
        return view('pages.admin');
       }
       else{
        $comments=DB::table('commentaires')->get();
        $replys=DB::table('reply')->get();
        return view('pages.home',compact('comments','replys'));
       }
    }
    public function home(){
        $comments=DB::table('commentaires')->get();
        $replys=DB::table('reply')->get();
        return view('pages.home',compact('comments','replys'));
    }
    public function blogs(){
        return view('pages.blogs');
    }
    public function gallary(){
        return view('pages.gallary');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function message(Request $request){
        $feedback=new feedback();
        $feedback->name=$request->user_name;
        $feedback->email=$request->user_email;
        $feedback->message=$request->user_msg;
        $feedback->save();
        Session::put('success','your message had been sended');
        
        return redirect('/contact');
    
}
public function cart(){
    if(Auth::id()){
        $id=Auth::user()->id;
        $panier=panier::where('user_id','=',$id)->get();
        return view('pages.cart',compact('panier'));
    }
    else{
        return redirect('login');
    }
    
}
public function cash(){
    $user=Auth::user();
    $userid=$user->id;
    $data=panier::where('user_id','=',$userid)->get();
   foreach($data as $data){
    $commande=new commande;
    $commande->user_id=$data->user_id;
    $commande->product_id=$data->product_id;
    $commande->prd_name=$data->prd_name;
    $commande->prd_price=$data->prd_price;
    $commande->image=$data->image;
    $commande->user_name=$data->user_name;
    $commande->quantite=$data->quantite;
    $commande->email=$data->email;
    $commande->payment_status='cash on delivery';
    $commande->delivery_status='ongoing';
    $commande->save();
    $panier_id=$data->id;
    $panier=panier::find($panier_id);
    $panier->delete();
   }
   return redirect()->back()->with('msg','Your order has been received');
}
public function stripe($total){
    return view('pages.stripe',compact('total'));
}
public function stripePost(Request $request,$total)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => $total * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Thank you" 
        ]);
        $user=Auth::user();
    $userid=$user->id;
    $data=panier::where('user_id','=',$userid)->get();
   foreach($data as $data){
    $commande=new commande;
    $commande->user_id=$data->user_id;
    $commande->product_id=$data->product_id;
    $commande->prd_name=$data->prd_name;
    $commande->prd_price=$data->prd_price;
    $commande->image=$data->image;
    $commande->user_name=$data->user_name;
    $commande->quantite=$data->quantite;
    $commande->email=$data->email;
    $commande->payment_status='Paid';
    $commande->delivery_status='ongoing';
    $commande->save();
    $panier_id=$data->id;
    $panier=panier::find($panier_id);
    $panier->delete();
   }
      
        Session::flash('success', 'Payment successful!');
              
        return back();
    }
    public function getOrder(){
        $orders=DB::table('commande')->get();
        return view('pages.order',compact('orders'));
    }
    public function deliver($id){
        $order=commande::find($id);
        $order->delivery_status="DONE";
        $order->payment_status="Paid";
        $order->save();
        return redirect()->back();
    }
    public function mail($id){
        $order=commande::find($id);
        return view('pages.Smail',compact('order'));
    }
    public function Smail(Request $request,$id){
        $order=commande::find($id);
        $details=[
                'greeting'=>$request->greeting,
                'firstline'=>$request->firstline,
                'body'=>$request->body,
                'button'=>$request->button,
                'url'=>$request->url,
                'lastline'=>$request->lastline,
        ];
        $notification=new emailnotification($details);
        $order->notify($notification);
        return redirect()->back();

    }
    public function chercher(Request $request){
            $data=$request->search;
            $orders=commande::where('user_name','LIKE',"%$data%")->orWhere('prd_name','LIKE',"%$data%")->orWhere('quantite','LIKE',"%$data%")->orWhere('prd_price','LIKE',"%$data%")->orWhere('created_at','LIKE',"%$data%")->get();
            return view('pages.order',compact('orders'));
    }
    public function cherche_prd(Request $request){
            $data=$request->search;
            $products=product::where('name','LIKE',"%$data%")->orWhere('price','LIKE',"%$data%")->orWhere('description','LIKE',"%$data%")->get();
            return view('pages.ice',compact('products'));
    }
    public function cherche_prd1(Request $request){
        $data=$request->search;
        $products=product::where('name','LIKE',"%$data%")->orWhere('price','LIKE',"%$data%")->orWhere('description','LIKE',"%$data%")->orWhere('created_at','LIKE',"%$data%")->get();
        return view('pages.hot',compact('products'));
}
    public function comment(Request $request){
        if(Auth::id()){
            $id=Auth::user()->id;
            $name=Auth::user()->name;
            $comment=new commentaires();
            $comment->user_id=$id;
            $comment->name=$name;
            $comment->comment=$request->comment;
            $comment->save();
            
            return redirect()->back();
        }
        else{
            return redirect('login');
        }
        }
        public function reply(Request $request,$id){
            if(Auth::id()){
                $name=Auth::user()->name;
                $reply=new reply();
                $reply->user_id=Auth::user()->id;
                $reply->name=$name;
                $reply->reply=$request->reply;
                $reply->comment_id=$id;
                $reply->save();
                return redirect()->back();
            }
            else{
                return redirect('login');
            }
        }
        public function get_user(){
            $users=DB::table('users')->get();
            return view('pages.users',compact('users'));
        }
        public function user($id){
            $users=User::find($id);
            $users->delete();
            return redirect()->back();
        }
        public function feed($id){
            $feed=feedback::find($id);
            $feed->delete();
            return redirect()->back();
        }
        public function com($id){
            $comments=commentaires::find($id);
            $comments->delete();
            return redirect()->back();
        }
        public function rep($id){
            $replys=reply::find($id);
            $replys->delete();
            return redirect()->back();
        }

}
