<?php 
    include('head.php'); 
    include('header.php');
?>
<main> 
    <section id="contact" class="flex-container">
    <div class="contact-box" id="green-box">
        <h3>Ich freue mich über eine Kontaktaufnahme!</h3>
        <form action="mailto:rettenbacher.r@aon.at" method="POST">
            <fieldset>
                <input type="text" name="firstName" id="firstName" placeholder="Vorname"/>
                <input type="text" name="lastName" id="lastName" placeholder="Nachname"/>
                <input type="email" name="mail" id="email" placeholder="E-Mail-Adresse" required/>
                <textarea name="message" id="message">Nachricht...</textarea>
            </fieldset>
            <input type="submit" value="Senden" class="submit"/>
        </form>
    </div> 
    <div class="contact-box">
        <ul>
            <li>
                <img src="<?php echo get_template_directory_uri() ?>/images/svg/location-BootstrapIcon.svg" alt="location-icon" />
                Rehhofstraße 18, 5400 Hallein
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri() ?>/images/svg/phone-BootstrapIcon.svg" alt="phone-icon" />
                +43 664 45 55 028
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri() ?>/images/svg/e-mail-BootstrapIcon.svg" alt="e-mail-icon" />
                rettenbacher.r@aon.at
            </li>
            <li>
                <img id="special_img" src="<?php echo get_template_directory_uri() ?>/images/svg/calendar-BootstrapIcon.svg" alt="calendar-icon" />
                Ordination nach telefonischer Vereinbarung
            </li>
        </ul>
    </div>
    </section>

    <section id="links" class="flex-container">
    <h2>Partnerlinks</h2>
    <?php
        $context = Timber::context();
        $args = 'order=DESC&category_name=Links'; 
        $context['links'] = Timber::get_posts( $args );
        Timber::render( 'links.twig', $context );
    ?>
    </section>
</main>
<?php include('footer.php'); ?>