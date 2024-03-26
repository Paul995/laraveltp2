lien github :
https://github.com/Paul995/laraveltp2/

lien webdev:
https://e2395529.webdev.cmaisonneuve.qc.ca/Maisonneuve2395529/

COMMANDES:

composer create-project --prefer-dist laravel/laravel Maisonneuve2395529

php artisan make:model Villes -m
php artisan make:model Etudiants -m

php artisan migrate

php artisan make:factory VillesFactory --model=Villes
php artisan make:factory EtudiantsFactory --model=Etudiants

php artisan tinker
\App\Models\Villes::factory()->times(15)->create();
\App\Models\Etudiants::factory()->times(100)->create();



user 6 : pwdawson90@gmail.com
pswd : 123456


user 8 : mmecroft94@hotmail.com
pswd : 12345678
