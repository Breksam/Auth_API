# Auth_API

JWT Authentication & Authorization REST API with Laravel 9.

## Getting Started

for user:
- Handle registration, login, and logout controllers. 
- user profile controller to get all user's data.
- Use SMTP to send an email to verify the user's email address.
- Respond to forgotten passwords and reset them by emailing the user an OTP code.
- Handle mail notifications when the user has registered or logged in.
For administrator: 
- Create a user crud to manage all users.
- Create a role crud to manage all roles in the system, such as admin, moderator, tester, etc.
- Create permissions crud to set roles's permissions in the system.

### Tools

- Laravel 9.x.
- JWT.

### Installing

A step by step series of examples that tell you how to get a development
environment running

clone Repository in your local pc

    git clone https://github.com/Breksam/Auth_API.git

run on your cmd or terminal

    composer install

copy .env.example file to .env on the root folder

    copy .env.example .env

then open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.

after that, set mail SMTP settings in .env file.

open terminal in the project then:
run

    php artisan key:generate
run

    php artisan migrate
run

    php artisan db:seed
run

    php artisan serve

## Running the tests

Now you can test Routes at postman Platform.

### Sample Tests

All requests to test: https://github.com/Breksam/Auth_API/blob/master/requests.txt

## Authors

  - **Breksam Hassan Elsokkary** - (https://github.com/Breksam)



