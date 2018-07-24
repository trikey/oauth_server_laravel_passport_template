# Passport OAuth template

## installation

`composer install`

`cp .env.example to .env`

set up database config

`php artisan migrate`

`php artisan db:seed`

`npm install`

`npm run dev`

`php artisan passport:install` - generate "personal access" 
and "password grant" clients which will be used to generate 
access tokens

When deploying Passport to your production servers for the first time, you will likely need to run the passport:keys command. This command generates the encryption keys Passport needs in order to generate access token. The generated keys are not typically kept in source control:

`php artisan passport:keys`