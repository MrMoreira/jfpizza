<?php

class View{

    public function
        renderizador($string){
        echo "<h1>";
        echo $string;
        echo "</h1>";

    }

    public function navbar(){
        echo "<link rel='stylesheet' href='Assets/Css/navbar.css'>";
        echo "<link rel='stylesheet' href='Assets/Css/root.css'>";
        require "Assets/Template/navbar.php";

    }

    public function footer(){
        echo "<link rel='stylesheet' href='Assets/Css/footer.css'>";
        require "Assets/Template/footer.php";
    }

    public function indexContent(){
        require "Assets/Template/index.php";
    }

}

?>