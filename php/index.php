<?php echo "Ceci est du texte"; ?>

<!-- Ou bien, avec des parenthèses -->
<?php echo("Ceci est du texte"); ?>

<?php
    $title = "Accueil";
    $contentPhp= ob_get_clean();
    include("../template.php");
?>

