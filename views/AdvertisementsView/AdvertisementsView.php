<?php
namespace views\AdvertisementsView;

class AdvertisementsView {

    public function data($content)
    {
        include __DIR__ . '/../Contents/Header.php';
        echo "<h1>Advertisements currently stored in our database</h1>\n";
        foreach($content as $row){
            echo "\n<section class='advertisement-row'>
            <h1>{$row['title']}</h1>
            by {$row['username']}\n</section>\n";
        }
        include __DIR__ . '/../Contents/Footer.php';
    }
}