<?php
namespace views\MainView;

// Here we can build the view of the main page
class MainView {

    public function view()
    {
        include __DIR__ . '/../Contents/Header.php';
        echo "
        <h1>Welcome</h1>
        <p>This is the main view of this PHP app.</p>";
        include __DIR__ . '/../Contents/Footer.php';
    }
}