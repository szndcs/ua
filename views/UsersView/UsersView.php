<?php
namespace views\UsersView;

// Here we can build the view of the user's page
class UsersView {

    public function view($content)
    {
        include __DIR__ . '/../Contents/Header.php';
        echo "<h1>Users currently stored in our database</h1>\n";
        foreach($content as $row){
            echo "\n<section class='user-row'>\n
            <h1>{$row['name']}</h1>\n</section>\n";
        }
        include __DIR__ . '/../Contents/Footer.php';
    }
}