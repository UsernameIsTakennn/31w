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
    <?php wp_head();?>
</head>

<body>
    <header class="entete">
        <section class="global">
            <h1>31W</h1>
            <nav>
                <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
            <form class="recherche">
                <input type="search" class="recherche__input">
                <img src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="20" height="20">
            </form>
        </section>
    </header>
    <main class="principal">
        <section class="global">
            <h2>Accueil</h2>
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                <article>
                    <h2><?php the_title(); ?></h2>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 20, null); ?></p>
                </article>
            <?php endwhile; ?>
            <?php endif ?>
        </section>
    </main>
    <footer class="pied">
        <section class="global">
            <div>1</div>
            <div>2</div>
            <div>3</div>
        </section>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>