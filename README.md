# Coffee_Shop
CoffeeShop est une application web développée avec le framework Laravel. Il s'agit d'un système de gestion pour un café qui permet de gérer les produits, les commandes et les utilisateurs.

## Prérequis

Avant de commencer, assurez-vous d'avoir les éléments suivants installés sur votre système :

- PHP (version 8.0.28)
- Composer (version 2.5.5)
- MySQL


## Installation

1. Clonez ce dépôt dans le répertoire de votre choix :

   ```shell
   git clone https://github.com/votre-utilisateur/CoffeeShop.git
2.Accédez au répertoire du projet :
cd CoffeeShop
3.Installez les dépendances du projet en exécutant la commande suivante :
composer install
4.Créez un fichier .env à partir du fichier .env.example et configurez les paramètres de votre base de données :
cp .env.example .env
5.Assurez-vous de configurer les informations de connexion à votre base de données (DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD).
6.Générez une clé d'application unique en exécutant la commande suivante :
php artisan key:generate
7.Exécutez les migrations de la base de données et générez des données de démonstration (facultatif) :
php artisan migrate --seed
8.Compilez les ressources front-end :
npm install
npm run dev
9.Lancez le serveur de développement :
php artisan serve



##Base de données:
Le schéma de base de données de CoffeeShop comprend les tables suivantes :

users : Stocke les informations des utilisateurs enregistrés.
products : Contient les détails des produits disponibles dans le café.
orders : Enregistre les commandes passées par les clients.
feedback :Enregistre les messages de tous les utilisateurs qui sont emis au administrateur.
panier:Contient les produits qu'un utilisateur à commander.
commande:Contient les produits qu'un utilisateur à acheter.
commentaires:Enregistre tous les commentaires qui sont ajouter à la page d'acceuil.
reply:contient les reponces sur chaque commantaires.
categories:Contient les categories dont chaque produit appartient.
notifications:c'est pour les emails qui vont etre envoyer en utilisant send mail.


Consultez le dossier database/migrations pour plus de détails sur les colonnes et les relations de chaque table.
