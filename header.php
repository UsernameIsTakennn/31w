<?php

/**
 * index.php - Le modèle par défaut de wordpress
 */
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>31W</title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="entete">
        <section class="global">
            <h1><?php bloginfo('name') ?></h1>
            <h2><?php bloginfo('description') ?></h2>
            <!-- <nav>
                <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav> -->
            <?php wp_nav_menu(
                array(
                    "menu"=>"principal", 
                    "container"=>"nav"
                )
                ); ?>

            <form class="recherche">
                <input type="search" class="recherche__input">
                <img src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="20" height="20">
            </form>
        </section>
    </header>