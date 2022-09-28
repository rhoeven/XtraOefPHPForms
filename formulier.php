<?php
    session_start();
    if (isset($_SESSION['btn'])) {
        echo "<br><br> Je naam is: " .$_SESSION['name'];
        echo "<br><br> Je E-mail is: " .$_SESSION['email'];
        echo "<br><br> Je klas is: " .$_SESSION['class'];
        echo "<br><br> Je workshop keuze is: " .$_SESSION['workshop'];
        echo "<br><br> Ben je akkoord gegaan met de voorwaarde?: ".$_SESSION['check'];
    }