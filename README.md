# Pràctica 1: Sign in + Sign up amb laravel
## Activitat
1. Crear les vistes i les seves rutes del sign in i sign up. Per això caldrà fer el següent:

- Crear les dues views corresponents (signin i signup).
- Crear les rutes (path) amb la següent nomenclatura a web.php.
    - /nomalumna/signin
    - /nomalumna/signup
- Crear el controlador (de nom SignController) que, segons la ruta renderitzarà la view corresponent.
- Enllaç entre views.

2. Afegir paràmetres a signin i signup. Aquests paràmetres ens ajudaran a construir els títols de cada pàgina. 

- signin => Títol Iniciar sessió de l’usuari, son 4 paraules, per tant, de la ruta s’hauran d’enviar 4 paràmetres (iniciar, sessió, de i l’usuari).
- signup => Titol Creació d’usuari nou. son 3 paraules, per tant, de la ruta s’hauran d’enviar 3 paràmetres (creació, d’usuari i nou).



**RECOMANACIÓ**
Primer feu l’exercici 1, verifiqueu que funciona i després feu l’ampliació (exercici 2)

[Video Joana](https://drive.google.com/file/d/1q2pLmu_QDDGKkiJw-JGSpVqZue7rE__k/view?usp=sharing)


# Pràctica 3: Preparació BBDD
## Activitat
1. Caldrà seguir el pas a pas de la diapositiva per a crear tot el paquet de funcionament del projecte de Laravel 10 i poder inserir dades fake a la taula (centres) de la BBDD de PHPMYADMIN.

Resum:
- Crear la Migration.
- Associar la Migration.
- Omplir dades amb Model i Factory.
- Utilitzar el Seeder. -> *per omplir de dades fake la BBDD. A la següent pràctica això no es farà.*

Aquestes passes us han ajudat a crear una taula, amb dades **fake**, a la BBDD

2. eguir les passes necessàries anteriors per a crear les taules, amb dades Fake, de:
- Professorat
- Alumnat
