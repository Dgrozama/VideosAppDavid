# Guia del projecte i sprints

## Resum del projecte
El projecte consisteix en desenvolupar una aplicació semblant a YouTube, on els usuaris poden pujar vídeos amb metadades com el títol, la descripció i l'URL.

## Sprint 1
1. **Gestió d'usuaris**:
    - Implementació de la funcionalitat per crear usuaris amb les seves funcions associades.

2. **Creació del Test de Helpers**:
    - Creació d'un test per verificar que es poden crear:
        - L'usuari per defecte.
        - El professor per defecte.
    - Els camps han de ser `name`, `email` i `password`, on la contrasenya es xifra.
    - Els usuaris es vinculen a un `team`.

3. **Helpers**:
    - Creació de helpers a la carpeta `app`.

4. **Configuració de credencials**:
    - Configuració de les credencials dels usuaris a `config` perquè utilitzin el fitxer `.env` de manera predeterminada.

## Sprint 2
1. **Correcció d'errors**:
    - Solucionats els errors detectats en el primer sprint.

2. **Configuració de PHPUnit**:
    - Modificació del fitxer PHPUnit per utilitzar una base de dades temporal durant els tests, evitant afectar la base de dades real.

3. **Migració de vídeos**:
    - Creació de la migració amb els camps: `id`, `title`, `description`, `url`, `published_at`, `previous`, `next`, `series_id`.
    - Ús de URLs de vídeos de YouTube per als inserts de mostra.

4. **Controlador de vídeos**:
    - Desenvolupament del `VideosController` amb funcions per provar i mostrar vídeos.

5. **Model de vídeos**:
    - Creació del model de vídeos, configurant el camp `published_at` com a data.
    - Implementació de mètodes per formatar les dates amb la llibreria Carbon:
        - `getFormattedPublishedAtAttribute`: retorna una data tipus "13 de gener de 2025".
        - `getFormattedForHumansPublishedAtAttribute`: retorna una data tipus "fa 2 hores".
        - `getPublishedAtTimestampAttribute`: retorna el valor Unix timestamp.

6. **Helper de vídeos per defecte**:
    - Creació d'un helper per gestionar vídeos per defecte.

7. **Seeder de base de dades**:
    - Afegits usuaris i vídeos per defecte al `DatabaseSeeder`.

8. **Disseny del layout**:
    - Creació d'un layout anomenat `VideosAppLayout` a les carpetes `app/View/components` i `resources/views/layouts`.

9. **Ruta i vista del show de vídeos**:
    - Configuració de la ruta per mostrar vídeos i creació de la vista corresponent.

10. **Tests unitaris i funcionals**:
    - **Tests unitaris**:
        - `HelpersTest`: verificació de funcions auxiliars i de la creació de vídeos per defecte.
        - `VideosTest` (carpeta `tests/Unit`): comprova la formatació de dates, incloent:
            - `can_get_formatted_published_at_date()`.
            - `can_get_formatted_published_at_date_when_not_published()`.
    - **Tests funcionals**:
        - `VideosTest` (carpeta `tests/Feature/Videos`): valida:
            - `users_can_view_videos()`.
            - `users_cannot_view_not_existing_videos()`.


## Sprint 3

1. **Corregir errors del 2n Sprint**:
    - Solucionats els errors detectats durant el segon sprint per garantir el correcte funcionament del sistema.

2. **Instal·lació de `spatie/laravel-permission`**:
    - Instal·lació del paquet `spatie/laravel-permission` per gestionar rols i permisos dels usuaris.
    - Seguir la documentació oficial per a la seva instal·lació: [spatie/laravel-permission](https://spatie.be/docs/laravel-permission/v6/installation-laravel).

3. **Migració per afegir el camp `super_admin`**:
    - Creació d'una migració per afegir un nou camp `super_admin` a la taula d'usuaris per identificar als superadministradors.

4. **Model d'usuaris**:
    - Afegida la funció `testedBy()` i `isSuperAdmin()` al model d'usuari per facilitar la verificació de si un usuari és un superadministrador.

5. **Funció `create_default_professor` i gestió de rols**:
    - Afegit el superadmin al professor a la funció `create_default_professor` de helpers.
    - Creació de la funció `add_personal_team()` per separar la creació del `team` dels usuaris.
    - Creació de les funcions `create_regular_user()`, `create_video_manager_user()` i `create_superadmin_user()` per generar usuaris amb rols específics i credencials per defecte:
        - **create_regular_user()**: (regular, regular@videosapp.com, 123456789).
        - **create_video_manager_user()**: (Video Manager, videosmanager@videosapp.com, 123456789).
        - **create_superadmin_user()**: (Super Admin, superadmin@videosapp.com, 123456789).
    - Creació de les funcions `define_gates()` i `create_permissions()` per definir permisos i portes d'accés.

6. **Registre de polítiques d'autorització i definició de portes d'accés**:
    - A la funció `book` d'`app/Providers/AppServiceProvider`, es registren les polítiques d'autorització i es defineixen les portes d'accés per gestionar els permisos de l'aplicació.

7. **Seeder d'usuaris i permisos per defecte**:
    - Afegits els usuaris per defecte amb els rols de superadmin, usuari regular i video manager al `DatabaseSeeder`.

8. **Publicació de stubs**:
    - Publicació dels stubs per personalitzar els fitxers de l'aplicació, seguint l'exemple de la [documentació de Laravel](https://laravel-news.com/customizing-stubs-in-laravel).

9. **Creació del test `VideosManageControllerTest`**:
    - Creació del test per validar la gestió de vídeos:
        - **`user_with_permissions_can_manage_videos()`**: Verifica que els usuaris amb permisos poden gestionar vídeos.
        - **`regular_users_cannot_manage_videos()`**: Verifica que els usuaris regulars no poden gestionar vídeos.
        - **`guest_users_cannot_manage_videos()`**: Verifica que els usuaris convidats no poden gestionar vídeos.
        - **`superadmins_can_manage_videos()`**: Verifica que els superadministradors poden gestionar vídeos.
        - Funcions de login per a cada tipus d'usuari: `loginAsVideoManager()`, `loginAsSuperAdmin()`, `loginAsRegularUser()`.

10. **Creació del test `UserTest`**:
    - Creació del test per validar la funció `isSuperAdmin()` i comprovar si un usuari és un superadministrador.

11. **Documentació dels termes**:
    - Afegit a `resources/markdown/terms` el que s'ha fet en aquest sprint per mantenir la documentació actualitzada.

12. **Comprovació amb Larastan**:
    - Comprovats tots els fitxers creats durant aquest sprint amb Larastan per garantir la qualitat del codi i detectar possibles errors de tipus.

## Sprint 4

1. **Corregir errors del 3r sprint**:
    - Revisar i corregir els errors relacionats amb l'accés a la ruta `/videosmanage` en funció dels permisos dels usuaris. Si no s'ha comprovat als testos, modificar-ho per garantir que només els usuaris amb els permisos adequats poden accedir.

2. **Crear `VideosManageController`**:
    - Implementar les funcions següents en el controlador `VideosManageController`:
        - `testedby`
        - `index`
        - `store`
        - `show`
        - `edit`
        - `update`
        - `delete`
        - `destroy`

3. **Crear funció `index` a `VideosController`**:
    - Crear la funció `index` per a mostrar tots els vídeos.

4. **Revisar vídeos creats a helpers**:
    - Comprovar que tinguem 3 vídeos creats a `helpers` i que estiguin afegits al `databaseSeeder`.

5. **Crear vistes per al CRUD de vídeos**:
    - Crear les vistes per al CRUD de vídeos que només poden veure els usuaris amb els permisos adequats:
        - `resources/views/videos/manage/index.blade.php`
        - `resources/views/videos/manage/create.blade.php`
        - `resources/views/videos/manage/edit.blade.php`
        - `resources/views/videos/manage/delete.blade.php`

6. **Afegir taula de CRUD a `index.blade.php`**:
    - Afegir una taula amb la llista dels vídeos al fitxer `index.blade.php`.

7. **Afegir formulari de creació a `create.blade.php`**:
    - Afegir un formulari per a la creació de vídeos al fitxer `create.blade.php`. Utilitzar l'atribut `data-qa` per facilitar la identificació en els tests.

8. **Afegir taula de CRUD a `edit.blade.php`**:
    - Afegir una taula de CRUD per a editar vídeos al fitxer `edit.blade.php`.

9. **Afegir formulari de confirmació a `delete.blade.php`**:
    - Afegir un formulari de confirmació per eliminar vídeos a `delete.blade.php`.

10. **Afegir funcionalitat de CRUD a `VideosManageController`**:
    - Implementar la funcionalitat de CRUD complet per a la gestió de vídeos al `VideosManageController`.

11. **Documentació de la gestió de vídeos**:
    - Afegir la documentació explicativa de la gestió de vídeos dins del fitxer `README.md`.

12. **Test final**:
    - Realitzar els últims tests per assegurar el correcte funcionament del sistema de gestió de vídeos.

