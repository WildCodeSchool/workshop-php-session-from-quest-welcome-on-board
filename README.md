# Support for PHP Session in Simple MVC

The aim of this short workshop is to practice the PHP session in an MVC context.

## Instructions
1. Adds the PHP `session_start()` command at a strategic point so that all pages have the session mechanism available.
2. Store the user data sent from the welcome form in the PHP session and display a personalised message when the user is redirected to the  `/form-success` page.
To do this, add the appropriate code to the place where `@todo` is indicated in the:
- `HomeController.php`
- `form-success.html.twig`

Display the message according to this model:

># Thank you for your message `<NAME>`!
>Your message is being processed.  
>Our team will get back to you within 48 hours at `<EMAIL>`.
>
>Have a nice day and see you soon 🙂
>
>## You've contacted us for
>- **Subject**: `<SUBJECT>`
>- **Message**: `<MESSAGE>`


⬇️ Follow instructions below to install this workshop ⬇️

---

# Simple MVC

## For Windows Users

:heavy_exclamation_mark: To do BEFORE CLONING REPOSITORY :heavy_exclamation_mark: :

If you develop on Windows, edit your git configuration to change your end of line rules with this command :

`git config --global core.autocrlf true`

Then clone this Repository safely :white_check_mark:

## Description

This repository is a simple PHP MVC structure from scratch.

It uses some cool vendors/libraries such as Twig and Grumphp.

## Steps

1. Clone the repo from Github.
2. Run `composer install`.
3. Create _config/db.php_ from _config/db.php.dist_ file. Don't delete this file, it must be kept.  
 You don't need to add your DB credentials since no data is persisted for this workshop but the `config/db.php` is needed for the application to run.
4. Run the internal PHP webserver with `php -S localhost:8000 -t public/`. The option `-t` with `public` as parameter means your localhost will target the `/public` folder.
6. Go to `localhost:8000` with your favorite browser.


You can find all these routes declared in the file `src/routes.php`. This is the very same file where you'll add your own new routes to the application.

## How does URL routing work ?

![simple_MVC.png](.tours/simple_MVC.png)

## Ask for a tour !

<img src="./.tours/photo-1632178151697-fd971baa906f.jpg" alt="Guided tour" width="150"/>

We prepare a little guided tour to start with the simple-MVC.

To take it, you need to install the `Code Tour` extension for Visual Studio Code : [Code Tour](https://marketplace.visualstudio.com/items?itemName=vsls-contrib.codetour)

It will give access to a new menu on your IDE where you'll find the different tours about the simple-MVC. Click on play to start one :

![menu](.tours/code_tour_menu.png)

