<header>
  <!--hero-->
  <section id="hero-index">
    <img src="<?php echo get_template_directory_uri() ?>/images/svg/Logo.svg" alt="Logo">
    <div id="hero_text">
      <h1>Dr. med. univ. Rupert Rettenbacher</h1>
      <h3> <?php the_field('herotitle'); ?> </h3>
      <h3> <?php the_field('herosubtitle'); ?> </h3>
    </div>
  </section>
  <!--navbar-->
  <nav id="navbar">
    <?php wp_nav_menu( array( 'theme_location' => 'main-menu') ); ?>
  </nav> 
</header>