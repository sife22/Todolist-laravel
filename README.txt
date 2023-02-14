======== Creation base donnees à travers phpMyadmin ========

==== create a migration in the project ======
    * php artisan make:migration create_todos_table

==== add column task in the migration ======
    $table->string('task');

===== update the migration in the database ====
    * php artisan migrate

===== create a Model to interact with the database ====
    * php artisan make:model Todo


==== create our layouts/app.blade.php ======
