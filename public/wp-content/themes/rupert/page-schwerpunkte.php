<?php 
  include('head.php'); 
  include('header.php');
?>
    <!--focus-->
<main> 
  <section id="focus" class="flex-container">
    <?php
        $context = Timber::context();
        $args = 'order=DESC&category_name=schwerpunkt&posts_per_page=2'; 
        $context['focus'] = Timber::get_posts( $args );
        Timber::render( 'focus.twig', $context);
    ?>
  </section>
</main>
<?php include('footer.php'); ?>