<header>
  <!--hero-->
  <section id="hero-index">
    <img src="<?php echo get_template_directory_uri() ?>/images/svg/Logo.svg" alt="Logo">
    <div id="hero_text">
      <h1>Dr. med. univ. Rupert Rettenbacher</h1>
      <?php
        $context = Timber::context();
        $args = get_the_title();
        $context['hero'] = Timber::get_posts( $args );
        Timber::render( 'hero.twig', $context );
      ?>
    </div>
  </section>
  <!--navbar-->
  <nav id="navbar">
    <?php wp_nav_menu( array( 'theme_location' => 'main-menu') ); ?>
  </nav> 
</header>