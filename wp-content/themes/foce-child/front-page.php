<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner sectionAnimation" data-0="transform:translateY(0px)" data-300="transform:translateY(-50px)">
            <video id="bannerVideo" autoplay loop muted>
                <source src="<?php echo get_stylesheet_directory_uri() . '/assets/Studio+Koukaki-vidéo+header+sans+son+(1).mp4'; ?> " type="video/mp4">
            </video>
            <div class="logoContainer" data-0="transform:translateY(0px)" data-400="transform:translateY(150px)">
                <!--<button id="btnVideo" onclick="playAndPause()">Pause II</button>-->
                <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
            </div>
            
        </section>
        <section id="#story" class="story sectionAnimation">
            <h2><span class="titreAnimation">L'histoire</span></h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>

            <?php get_template_part( 'parts/personnages' ); ?>
            
            <article id="place" class="sectionAnimation">
                <div class="clouds cloud__big">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/big_cloud.png'; ?>" data-1350="transform:translateX(0px)" data-2000="transform:translateX(-300px)">
                </div>
                <div class="clouds cloud__little">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/little_cloud.png'; ?>" data-1350="transform:translateX(0px)" data-2000="transform:translateX(-300px)">
                </div>
                <div>
                    <h3><span class="titreAnimation">Le Lieu</span></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

            </article>
        </section>


        <section id="studio" class="studio sectionAnimation">
            <h2 id="titreStudio"><span class="titreAnimation">Studio</span> <span class="titreAnimation">Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>

    </main><!-- #main -->

<?php
get_footer();
