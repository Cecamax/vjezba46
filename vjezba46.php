<?php

    function login($boja = "red"){
        echo "<form style='background-color:{$boja}; color: #FFF; text-align:center; 
        padding: 10px;'action='#' method='GET'>";
        
            echo "<div>";
                echo "<label for='username'>Username</label>";
                echo "<input type='username' name='username'>";
            echo "</div>";
            echo "<div>";
                echo "<label for='pasword'>Pasword</label>";
                echo "<input type='password' name='password'>";
            echo "</div>";
            echo "<div>";
                echo "<input type='submit' value='Login'>";
            echo "</div>";
        echo "</form>";
    }

    login("blue");
    login("red");
    login("green");

?>