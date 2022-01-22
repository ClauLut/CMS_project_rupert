<?php 
    include('head.php'); 
    include('header.php');
?>
<main> 
<!--general-->
    <section id ="general" class="flex-container">
        <div class="left">
            <img src="<?php echo get_template_directory_uri() ?>/images/home.jpg" alt="working">
        </div>
        <div class="right">
            <p>Dr. med. univ. Rupert Rettenbacher, Oberarzt an der Universitätsklinik für Chirurgie der Paracelsus Privat Universität (PMU) in Salzburg.</p>
            <br>
            <p>Meine Schwerpunkte sind die Chirurgie der Schilddrüsen und Nebenschilddrüsen sowie die Minimal Invasive Chirurgie ("Schlüssellochchirurgie").</p>
        </div>
    </section>
<!--focus-->
    <section id="focus-index" class="flex-container">
        <h2>Schwerpunkte</h2>
        <div id="focus-box">
            <?php
                // $link = GetPageLink('schwerpunkte');
                $page = get_page_by_title( 'Schwerpunkte', '', 'page' );
                // $page = get_page_by_path('schwerpunkte');
                // $permalink = apply_filters('get_permalink', $page->post_permalink);
                $context = Timber::context();
                $args = 'order=DESC&category_name=schwerpunkt&posts_per_page=2'; 
                $context['focus'] = Timber::get_posts( $args );
                $context['id'] = $page->ID;
                Timber::render( 'front_focus.twig', $context );
            ?>
        </div>
    </section>
 
<!--news-->
    <section id="news" class="flex-container">
        <h2>News</h2>
          <ul>
            <?php
                $context = Timber::context();
                $args = 'order=DESC&category_name=news&posts_per_page=3'; 
                $context['news'] = Timber::get_posts( $args );
                Timber::render( 'news.twig', $context );
            ?>
          </ul>
    </section>
</main>
<?php include('footer.php'); ?>