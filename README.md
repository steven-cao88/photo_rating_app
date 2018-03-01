# Photo Rating App

A simple application that allows a user to login with an email and password. 

The user should be able to rate photos by clicking on either thumbs up or thumbs down icon.

Each photo is displayed with number of likes and dislikes.

After rating an image the user should be presented a new image to rate. 

The application stores the user's rating for each image and allows the user to see their own previous ratings on a user dashboard.



## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

What things you need to install the software and how to install them

* Laravel 5.6
* MySQL

### Installing

After clonning the code to your local repository, run the migration using artisan. 

```
php artisan migrate
```

Then use your preferred database tool (PHPMyAdmin, Sequel Pro, etc.) 
to run the commands in photos.sql under database folder to import sample photos.

Setup [valet](https://laravel.com/docs/5.6/valet) to call the application locally via photo_rating_app.dev

## Running the tests

Register a user account by providing username, email and matching password.

Then start rating photos by clicking like or dislike button at each photo.
