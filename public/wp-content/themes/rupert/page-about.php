<?php 
    include('head.php'); 
    include('header.php');
?>

<!--focus-->
<main> 
    <section id="about" class="flex-container">
    <div class="left">
        <img src="<?php echo get_template_directory_uri() ?>/images/about.jpg" alt="Portrait" />
    </div> 
        
    <div class="right">
        <img src="<?php echo get_template_directory_uri() ?>/images/svg/Logo.svg" alt="Logo" />

        <ul>
            <li> <span class="bold">Privates:</span> verheiratet, Vater von 4 Kindern </li><br>
            <li> <span class="bold">Privatordination:</span> seit März 2011 </li><br>
            <li> <span class="bold">Facharzt für Chirurgie:</span> seit Jänner 2003 </li><br>
            <li> <span class="bold">Arzt für Allgemeinmedizin:</span> seit Februar 1997 </li><br>
            <li> <span class="bold">Promotion:</span> Juni 1993 </li>
        </ul>
    </div>
    </section>
</main>
<?php include('footer.php'); ?>