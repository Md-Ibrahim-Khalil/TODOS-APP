![complete-todo](https://user-images.githubusercontent.com/69606911/117228565-1eebb780-ae3b-11eb-9701-9ef8e59bf83e.png)
![created-successfully](https://user-images.githubusercontent.com/69606911/117228570-201ce480-ae3b-11eb-9b3d-93403134177a.png)
![create-new-todo](https://user-images.githubusercontent.com/69606911/117228573-214e1180-ae3b-11eb-9be0-2bb0a9e60878.png)
![edit delete](https://user-images.githubusercontent.com/69606911/117228578-227f3e80-ae3b-11eb-9de1-1fad510a162e.png)
![home-page](https://user-images.githubusercontent.com/69606911/117228587-23b06b80-ae3b-11eb-83bb-c4b681fefa66.png)
![list-of-todos](https://user-images.githubusercontent.com/69606911/117228590-24e19880-ae3b-11eb-8b8a-5d5a10917fe1.png)
![update](https://user-images.githubusercontent.com/69606911/117228594-26ab5c00-ae3b-11eb-9799-e562df0406a2.png)

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

