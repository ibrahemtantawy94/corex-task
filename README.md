> ### Corex task - Ibrahem Tantawy

----------

## Installation

Clone the repository

    git clone https://github.com/ibrahemtantawy94/corex-task

Switch to the repo folder

    cd corex-task

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the application tests

    php artisan test

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000