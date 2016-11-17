# Basic Q&A with Laravel for Facebook messenger bot

This Project is currently Working In Progress(WIP)

This is basic Facebook messenger chat bot with Laravel yeah. You saved questions and answer to the database. When user ask question from Messenger. It answer back with the answer you saved in the database. That's for now yeah. Will add many more new features soon ;)

## Installation & Usage

 - clone this repo & composer install
 -  Setup your domain. Your Domain Must be with https, you can setup with [let's encrypt](https://github.com/setkyar/laravel-messenger-bot-management#server)
 - [Setup Facebook App](https://github.com/setkyar/laravel-messenger-bot-management#setup-facebook-app)
 - Fill Database credentials  and Facebook verify_token and token(app/page_token) in Laravel's **.env**
 - Modify Q&A in `database/seeds/QuestionsAndAnswerSeeder.php` Already added some basic, you can check it out there and run `php artisan migrate && php artisan db:seed`
 - Chat with your Facebook page. Base on your `QuestionsAndAnswerSeeder`'s Q&A

## Basic Requirement

### Server

- Read Let's Encrypt Installation [Nginx](https://www.digitalocean.com/community/tutorials/how-to-secure-nginx-with-let-s-encrypt-on-ubuntu-14-04)/[Apache](https://www.digitalocean.com/community/tutorials/how-to-secure-apache-with-let-s-encrypt-on-ubuntu-14-04)

### Setup Facebook App

For this step, I am really lazy to write everything. So, I just copy from [jw84 repo](https://github.com/jw84/messenger-bot-tutorial). Thanks [jw84](https://github.com/jw84)

 1. Create or configure a Facebook App or Page here https://developers.facebook.com/apps/

![Configure Facebook App/Page](https://github.com/jw84/messenger-bot-tutorial/raw/master/demo/shot1.jpg)

 2. In the app go to Messenger tab then click Setup Webhook. Here you will put in the URL of your Heroku server and a token. Make sure to check all the subscription fields.

![Setup Webhook](https://raw.githubusercontent.com/jw84/messenger-bot-tutorial/master/demo/shot3.jpg)

In this step https://guarded-dusk-21746.herokuapp.com/webhook/ will be https://yourdomain.com/webhook/ 

 3. Get a Page Access Token and save this somewhere.

![Get page access token](https://github.com/jw84/messenger-bot-tutorial/raw/master/demo/shot2.jpg)

 4. Go back to Terminal and type in this command to trigger the Facebbook app to send messages. Remember to use the token you requested earlier.

    $ curl -X POST "https://graph.facebook.com/v2.6/me/subscribed_apps?access_token=PAGE_ACCESS_TOKEN"

## Thanks

Thanks [jw84](https://github.com/jw84) for [Messenger Bot Tutorials](https://github.com/jw84/messenger-bot-tutorial) and [pimax](https://github.com/pimax) for [FB Messenger Bot PHP API](https://github.com/pimax/fb-messenger-php)

#Docs
[Facebook Messenger Platform](https://developers.facebook.com/docs/messenger-platform)

#Demo Bot

![Demo Bot](/demo/messenger.gif)