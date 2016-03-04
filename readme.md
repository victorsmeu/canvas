# Laravel Canvas Pluginable

Installing:
- download source files
- go to X:\LOCALHOST_PATH\canvas\
- run "composer install"
- create a new MySQL database
- open X:\LOCALHOST_PATH\canvas\.env.example and edit the database configuration file; save it as .env
- run php artisan migrate

Application structure at the moment:
- Unit Testing: canvas\tests\CanvasTest.php 

- canvas\app\ 
-   Canvas.php - creates the canvas where the plugins are loaded
-   Plugin.php - model for the plugins manager
-   PluginAbstract - abstract class that must be extended in all plugins
- canvas\app\Plugins\Users
-   Users.php - base class for the users plugin; extends PluginAbstract
-   User.php - model class for user table
