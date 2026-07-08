<?php

     use Illuminate\Http\Request;

     define('LARAVEL_START', microtime(true));

     // Determine if the application is in maintenance mode...
     if (file_exists($maintenance = __DIR__.'/shortenn_laravel/storage/framework/maintenance.php'))  
   {
         require $maintenance;
     }

     // Register the Composer autoloader...
     require __DIR__.'/shortenn_laravel/vendor/autoload.php';

     // Bootstrap Laravel and handle the request...
     (require_once __DIR__.'/shortenn_laravel/bootstrap/app.php')
         ->handleRequest(Request::capture());
