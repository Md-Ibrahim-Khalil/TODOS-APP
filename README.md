php artisan make:controller TodosController
php artisan make:mode Todo
php artisan make:migration create_todos_table
php artisan migrate
php artisan migrate:refresh


<!-- Fake Dummydata insert in database -->
php artisan make:factory TodoFactory
php artisan make:seed TodosSeeder
php artisan db:seed
<!-- To reduce the dummy data in todos user table -->
php artisan migrate:refresh --seed
