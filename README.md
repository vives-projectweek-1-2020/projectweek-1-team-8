# Projectweek-1-team-8 (WAITSMART)

![WAITSMART](img/readme-logo.png)
 
## Goal
Make an app/website to track how many people are in or near a particular company at a time. These can be self-employed or small professions (convenience store, doctor, pharmacist, ...).
People can wait at home until it is their turn in line. This prevents long queues and a potential spread of the virus.

The shop accepts visitors until it has reached the maximum allowed visitors (can be 1).
The amount of visitors will be live updated on the app/website. If possible, there will be a display outside too.
the business owner can control the flow in his business on the same app.

## Technical details
With a (web) application, we can give users access to the queue. A digital column at the entrance can also show the current status.

Three main goals:
- Track Who is in the shop.
- Track how many people are in the shop. We can prevent too many people in the shop at once using this variable.
- Track how many people are waiting outside or home.

some important variables:
- Maximum allowed visitors
- Who has priority
- How many times a person visited a shop (to derermine priority)

## tools
- Database: mySQL
- Back-end: PHP
- Front-end: Vue

## Instalation guide
To run our website, you need to have some tools. This tools are composer (for back-end) and npm (for front-end). 

- To install composer on computer browse to: [install_composer](https://getcomposer.org/download/)

You can install npm and composer by executing the following commands in the command line:

- To install composer:
```powershell
composer install
```
- To install npm:
```powershell
npm install
```
Now you have the tools for setting up your localhosts (in the back-end and front-end). Make sure you run the back-end command in the back-end folder and the front-end command in the front-end folder.
- To run your back-end:
```powershell
php artisan serve
```
- To run your front-end:
```powershell
npm run serve
```
Normally, your back-end will run on the localhost:8000 an your front-end wil run on the localhost:8080. Now you can surf to this websites.

## Team members
- [Arno Baecke](https://github.com/arnobaecke)
- [Dylan Missuwe](https://github.com/DylanMissu)
- [Timon Claerhout](https://github.com/TimonClaerhout)
- [Wout Peirens](https://github.com/wout297)

## Mentors
- [Sille Van Landschoot](https://github.com/sillevl)
- [Piet Cordemans](http://github.com/pcordemans)

## Movie

To presentate Waitsmart, we have made a short introduction movie: [Waitsmart]()