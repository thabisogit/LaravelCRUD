
## How to deploy on WAMP or LAMP

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- Download and Extrat your folder to your WAMP/LAMP wwww folder.
- Open the folder with your preferred IDE (I recommend PHPStorm)
- on your terminal run command - composer install
- rename the file ".env.example" to read ".env"
- put in your database details in the .env file from line 5 to line 14
- create a virtualhost with the your desired name "test.com" for your project linking to your project files
- restart DNS Server
- on your terminal run command - php artisan migrate --seed
- on your browser go to "test.com" and enjoy the app
