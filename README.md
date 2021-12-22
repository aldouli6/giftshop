Giftshop 

# giftshop

clone repo https://github.com/aldouli6/giftshop

Copy .env.example file to .env according your DB this is an example 

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sonora
DB_USERNAME=root
DB_PASSWORD=root
DB_SOCKET="/Applications/MAMP/tmp/mysql/mysql.sock"

composer install

php artisan key:generate

php artisan migrate

php artisan db:seed

// It creates Roles, Users, Categories and products to star testing
// The users created are 

Administrator 
user: admin@shop.com
pass: adminadmin

User 
user: user@shop.com
pass: useruser

php artisan serve

//at this point you shoul be able to login 
