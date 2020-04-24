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
- Create a virtual queue for self-employed and liberal professions
- Join and unjoin a queue en view the estimated time to wait
- Track how many people are in the shop. We can prevent too many people in the shop at once using this variable.
- Track how many people are waiting outside or home.

some important variables:
- Maximum allowed visitors
- Who has priority
- How many times a person visited a shop (to derermine priority)

## Tools
- Database: mySQL
- Back-end: Laravel framework (PHP)
- Front-end: Vue

## Instalation guide
To run our website, you need to make use of package managers.
For the front-end (JS) is this NPM.
The backend uses composer (PHP)

- If you haven't installed NPM on your computer yet, please browse to: [install_npm](https://www.npmjs.com/get-npm)
- If you haven't installed composer on your computer yet, please browse to: [install_composer](https://getcomposer.org/download/)

You can install the dependencies, executing the following commands in the command line:

- in the backend-folder:
```powershell
composer install
```
- in the frontend-folder:
```powershell
npm install
```
Now you have the tools for setting up your online-enviroment.

Another task that needs to be accompished, is to add a .env-file, that includes the environment variables.
Some of these variabeles are needed to make a connection to the database.
You can make a copy the '.env.example'-file and rename it to '.env'.
Now you can fill in the different parameters that are needed for the db-connection.

You can start a development server with this commands:

- in the backend-folde:
```powershell
php artisan serve
```

- in the frontend-folder:
```powershell
npm run serve
```
In normal circumstances, when these ports are not used yet, your backend will run on the localhost:8000 an your frontend wil run on the localhost:8080. Now you can surf to these websites.
The backend doesn't contain usable content on the webpages of laravel, but is needed to acomplish the connection between the frontend and the database (with some logic).

If you ever wish to connect to another backend, with a different hostname then 'localhost:8000', than you can change the 'axios.defaults.baseURL'-parameter in the main.js-file, located under /frontend/src.

## Team members
- [Arno Baecke](https://github.com/arnobaecke)
- [Dylan Missuwe](https://github.com/DylanMissu)
- [Timon Claerhout](https://github.com/TimonClaerhout)
- [Wout Peirens](https://github.com/wout297)

## Mentors
- [Sille Van Landschoot](https://github.com/sillevl)
- [Piet Cordemans](http://github.com/pcordemans)

## Movie

To presentate Waitsmart, we have made a short introduction movie: [Waitsmart](https://www.youtube.com/watch?v=LTp_kHYZK6w)
