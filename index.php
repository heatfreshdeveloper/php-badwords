<?php 

$testoaScelta = "Ciao mi chiamo Alex";
$parolaDaCensurare = $_GET["badword"];

$parolaDaSostituire = str_replace($parolaDaCensurare, "***", $testoaScelta);

?>

<p>
    <?php  
    echo strlen($parolaDaSostituire);
    ?>
    <br>
    <?php
    echo strlen($testoaScelta);
    ?>
</p>

<h1>
    <?php echo $testoaScelta;
    ?>
    <br>
    <?php
    echo $parolaDaSostituire;
    ?>
</h1>