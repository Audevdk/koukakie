<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">       
        <img id="logo" data-0="top40%" data-450="70%" src=<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> alt="logo Fleurs d'oranger & chats errants">
        <script> var s =scrollr();</script>
        <video id="background-video" autoplay loop muted src="wp-content/themes/foce-child/images_koukaki/video.mp4" 
            type="video/mp4" poster="wp-content/themes/foce-child/images_koukaki/banner.png"></video> 

         
        </section>
        
        <section id="#story" class="story">
            <span >
            <h2><span class="toAnim">L'histoire</span></h2>
             </span>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <article id="characters">
                <div class="main-character">
                    <span >
                    <h3><span class="toAnim">Les personnages</span></h3>
                    </span>
                    <?php get_template_part('/template-parts/swiper');?>
                </div>
               
            </article>
            <article id="place">
                <div>
                    <h3><span class=toAnim>Le Lieu</span></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
                <div class="nuages">
                    <div class="grosnuage"data-center-top ="left:900px" data-top="left:600px">
                        <img src='/wp-content/themes/foce-child/images_koukaki/big_cloud.png' alt="gros nuages"></div>
                    <div class="petitnuage"data-bottom-top ="left:800px" data-top-bottom="left:500px">
                        <img src='/wp-content/themes/foce-child/images_koukaki/little_cloud.png' alt="petit nuages"></div>

                        
                        <script>
                         var s = skrollr.init();
                        </script>
                </div>
        </div>
            </article>
        </section>

        <section id="studio">
        <div>
            <h2><span class="toAnim">Studio</span>&nbsp;<span class="toAnim Anim-delay"> Koukaki</span></h2>
        </div>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>
            <?php get_template_part('/template-parts/oscar');?>
    </main><!-- #main -->
    
    
<?php
get_footer();
