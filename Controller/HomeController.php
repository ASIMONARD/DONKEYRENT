<?php

class HomeController
{
    public function home()
    {
        include DB_ROOT . '\View\Home\index.php';
    }
}

?>