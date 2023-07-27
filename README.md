Oggi facciamo la nostra prima vera interazione con il database utilizzando l’ORM di Laravel.
1 - Create un nuovo progetto Laravel 9. Se volete potete creare un template repository come visto a lezione e a partire da questo creare le vostre future nuove repo. Ricordatevi che quando le clonate in locale dovete:
a - lanciare il comando composer install;
b - lanciare il comando npm i;
c - copiare il file .env.example, rinominarlo in .env e lanciare il comando php artisan key:generate
2 - tramite phpMyAdmin create un nuovo database laravel_model_controller
3 - Importate nel vostro database la tabella comics in allegato (ricordatevi: nome della tabella in plurale, snake_case, minuscolo)
4 - inserite le vostre credenziali per il database nel file .env
5 - Create un model Comic php artisan make:model Comics 
6 - Create un controller che gestirà la rotta php artisan make:controller Guest/PageController
7 - All’interno della funzione index() del controller, recuperate tutti i fumetti dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.
BONUS:
1 - Fare la pagina di dettaglio andando a recuperare il fumetto attraverso il suo id;
2 - Stilare il layout nei dettagli con Sass
