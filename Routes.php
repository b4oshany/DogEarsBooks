<?php 
    // Define all the routes for the website and renders there view
    Route::set('index.php', function(){
        Index::RenderView('Index');
    });
    Route::set('home', function(){
        Home::RenderView('home');
    });
    Route::set('404', function(){
        echo "Page not found";
    });
?>