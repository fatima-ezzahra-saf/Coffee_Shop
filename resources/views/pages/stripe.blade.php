<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payement</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <style>
        #navbar{
  background-color: #b2744c;
  font-family: 'Roboto', sans-serif;
}
#logo img{
  border-radius: 10px;
  width: 160px;
  margin-left: 40px;
}
#pannier img{
    border-radius: 10px;
    width: 40px;
    margin-left: 40px;
  }
.navbar-nav{
  margin-left: 50px;
}
#logout{
    width:20px;
}
.nav-item .nav-link{
  color: black;
  margin-left: 10px;
  font-weight: bold;
  transition: 0.5s;
}
.nav-item .nav-link:hover{
  background: #f7f5f2;
  border-radius: 5px;
  color: black;
}
#navbar form button{
  background: black;
  color: white;
  border: 1px solid white;
}
#logout{
    height: 5px;
    width: 0px;
}
body{
    background-color: rgba(157, 114, 6, 0.149);
}
      </style>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" id="logo"><img src="../images/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fa-solid fa-bars" style="color: white; font-size: 23px;"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{URL::to('/home')}}" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size:20px">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{URL::to('/about')}}" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size:20px">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{URL::to('/menu')}}" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size:20px">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{URL::to('/gallary')}}" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size:20px">Gallary</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{URL::to('/contact')}}" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size:20px">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{URL::to('/blogs')}}" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size:20px">Blogs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" ></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" ></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" ></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" ></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" ></a>
      </li>
      <li class="nav-item">
        <a class="nav-link"></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" ></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" ></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" ></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" ></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" ></a>
    </li>
    <li class="nav-item" id="logout">
        <x-app-layout>
        </x-app-layout>
      </li>
            </ul>
            <a class="navbar-brand" href="{{url('cart')}}" id="pannier"><img src="../images/pannier.png" alt=""></a>
          </div>
        </div>
        <div>
        </div>
      </nav>
      <!-- navbar -->
      <div class="container">
        <div class="row">

        <div style="text-align: center">
    
            <div class="panel panel-default credit-card-box">
    
                <div class="panel-heading display-table" >
    
                    <h1 class="panel-title" style="text-align: center;font-size:50px;color:darkgreen">Payment Details</h1>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('success'))
                            <div class="alert alert-success text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                                <p>{{ Session::get('success') }}</p>
                            </div>
                        @endif
                        <form 
                                role="form" 
                                action="{{ route('stripe.post',$total) }}" 
                                method="post" 
                                class="require-validation"
                                data-cc-on-file="false"
                                data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                id="payment-form">
                            @csrf
                            <div class='form-row row'>
                                <div class='col-xs-12 form-group required'>
                                    <label class='control-label' style="font-size:30px">Name on Card</label> <input
                                        class='form-control' size='4' type='text'> 
                                </div> 
                            </div>
                            <div class='form-row row'>
    
                                <div class='col-xs-12 form-group card required'>
    
                                    <label class='control-label' style="font-size:30px">Card Number</label> <input
    
                                        autocomplete='off' class='form-control card-number' size='20'
    
                                        type='text'>
    
                                </div>
    
                            </div>
    
        
    
                            <div class='form-row row'>
    
                                <div class='col-xs-12 col-md-4 form-group cvc required'>
    
                                    <label class='control-label' style="font-size:30px">CVC</label> <input autocomplete='off'
    
                                        class='form-control card-cvc' placeholder='ex. 311' size='4'
    
                                        type='text'>
    
                                </div>
    
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
    
                                    <label class='control-label' style="font-size:30px">Expiration Month</label> <input
    
                                        class='form-control card-expiry-month' placeholder='MM' size='2'
    
                                        type='text'>
    
                                </div>
    
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
    
                                    <label class='control-label' style="font-size:30px">Expiration Year</label> <input
    
                                        class='form-control card-expiry-year' placeholder='YYYY' size='4'
    
                                        type='text'>
    
                                </div>
    
                            </div>
    
        
    
                            <div class='form-row row'>
    
                                <div class='col-md-12 error form-group hide'>
    
                                    <div class='alert-danger alert'>Please correct the errors and try
    
                                        again.</div>
    
                                </div>
    
                            </div>
    
        
    
                            <div class="row">
    
                                <div class="col-xs-12">
    
                                    <button class="btn btn-primary btn-lg btn-block" type="submit" style="background-color: rgb(9, 47, 198)">Pay Now  {{$total}}DH</button>
    
                                </div>
    
                            </div>
    
                                
    
                        </form>
    
                    </div>
    
                </div>        
    
            </div>
    
        </div>
    
            
    
    </div>
    
        
    
    </body>
    
        
    
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    
        
    
    <script type="text/javascript">
    
      
    
    $(function() {
        var $form = $(".require-validation");
    
         
    
        $('form.require-validation').bind('submit', function(e) {
    
            var $form = $(".require-validation"),
    
            inputSelector = ['input[type=email]', 'input[type=password]',
    
                             'input[type=text]', 'input[type=file]',
    
                             'textarea'].join(', '),
    
            $inputs = $form.find('.required').find(inputSelector),
    
            $errorMessage = $form.find('div.error'),
    
            valid = true;
    
            $errorMessage.addClass('hide');
    
        
    
            $('.has-error').removeClass('has-error');
    
            $inputs.each(function(i, el) {
    
              var $input = $(el);
    
              if ($input.val() === '') {
    
                $input.parent().addClass('has-error');
    
                $errorMessage.removeClass('hide');
    
                e.preventDefault();
    
              }
    
            });
    
         
    
            if (!$form.data('cc-on-file')) {
    
              e.preventDefault();
    
              Stripe.setPublishableKey($form.data('stripe-publishable-key'));
    
              Stripe.createToken({
    
                number: $('.card-number').val(),
    
                cvc: $('.card-cvc').val(),
    
                exp_month: $('.card-expiry-month').val(),
    
                exp_year: $('.card-expiry-year').val()
    
              }, stripeResponseHandler);
    
            }
    
        
    
        });
    
    
        function stripeResponseHandler(status, response) {
    
            if (response.error) {
    
                $('.error')
    
                    .removeClass('hide')
    
                    .find('.alert')
    
                    .text(response.error.message);
    
            } else {
    
                /* token contains id, last4, and card type */
    
                var token = response['id'];
    
                     
    
                $form.find('input[type=text]').empty();
    
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
    
                $form.get(0).submit();
    
            }
    
        }
    
         
    
    });
    
    </script>
    
    </html>
</html>