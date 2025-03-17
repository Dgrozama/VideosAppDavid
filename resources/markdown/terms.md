# Guia del projecte i sprints

## Resum del projecte
Desenvolupament d'una aplicació similar a YouTube, on els usuaris poden pujar vídeos amb metadades com títol, descripció i URL.

## Sprint 1
1. **Gestió d'usuaris**: Implementació de la creació d'usuaris amb funcions associades.
2. **Test de Helpers**: Verificació de la creació dels usuaris per defecte (`name`, `email`, `password`).
3. **Helpers i credencials**: Creació de helpers i configuració de credencials a `.env`.

## Sprint 2
1. **Correcció d'errors**: Resolució d'errors detectats en el primer sprint.
2. **Configuració de PHPUnit**: Ús d'una base de dades temporal en tests.
3. **Migració i model de vídeos**: Creació dels camps per a vídeos i configuració de dates amb Carbon.
4. **Controlador i Helper de vídeos**: Desenvolupament del controlador `VideosController` i helper de vídeos per defecte.
5. **Seeder de base de dades**: Afegir usuaris i vídeos per defecte al `DatabaseSeeder`.
6. **Disseny i vistes**: Creació del layout `VideosAppLayout` i ruta per a mostrar vídeos.
7. **Tests**: Desenvolupament de tests unitaris i funcionals per verificar la creació i visualització de vídeos.

## Sprint 3
1. **Corregir errors**: Solucionar errors del segon sprint.
2. **Gestió de rols i permisos**: Instal·lació de `spatie/laravel-permission` per gestionar permisos d'usuaris.
3. **Migració per superadmin**: Afegir el camp `super_admin` a la taula d'usuaris.
4. **Models i funcions**: Crear funcions per verificar si un usuari és superadministrador.
5. **Funcions d'usuari i gestió de rols**: Crear funcions per generar usuaris amb rols específics.
6. **Registre de polítiques i portes**: Definir permisos i autoritzacions per gestionar rols.
7. **Seeder i tests**: Afegir usuaris per defecte amb els rols i crear tests per validar permisos.
8. **Proves amb Larastan**: Validació del codi amb Larastan per garantir la qualitat.

## Sprint 4
1. **Corregir errors**: Revisar i corregir errors relacionats amb els permisos d'accés a rutes.
2. **Controlador de gestió de vídeos**: Creació de funcions en el `VideosManageController` per al CRUD de vídeos.
3. **Funció `index` i vistes CRUD**: Crear la funció `index` per mostrar vídeos i les vistes per al CRUD de vídeos.
4. **Permisos i rutes**: Crear rutes per gestionar vídeos amb el middleware per verificar permisos d'usuari.
5. **Tests i comprovacions**: Desenvolupar tests per validar la gestió de vídeos per diferents tipus d'usuari.

Aquest document resumeix el projecte i les tasques realitzades en els primers quatre sprints.
