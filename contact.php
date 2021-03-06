<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <?php include 'includes/metas.php' ?>

    <title>Contact | Les P'tits Soins, Esthétique Valenciennes,
        esthéticienne à Valenciennes, esthétique </title>

    <?php include 'includes/styles.php' ?>

    <link rel="stylesheet" href="styles/css/contact.css">
</head>
<body>

<div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

        <!-- OFF-CANVAS DISPLAY ON MOBILE -->

        <?php include 'includes/off-canvas.php' ?>

        <!-- CONTENT OF WEBPAGE -->
        <div class="off-canvas-content" data-off-canvas-content>
            <div class="title-bar hide-for-medium">
                <div class="title-bar-right">
                    <button class="menu-icon-style" type="button" data-open="offCanvas" aria-expanded="false"
                            aria-controls="offCanvas">
                        <i class="fa fa-navicon title-bar__icon"></i>
                    </button>
                </div>
            </div>

            <?php include 'includes/header.php' ?>

            <?php include 'includes/contactInformations.php' ?>

            <!-- MAIN -->
            <main>
                <div class="row">
                    <div class="medium-6 columns">
                        <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10177.89734790261!2d3.5176563!3d50.3763556!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe61c79c30e7de27b!2sCentrale+de+la+coiffure!5e0!3m2!1sfr!2sfr!4v1504880450338"
                        frameborder="0" style="" allowfullscreen></iframe>
                    </div>
                    <div class="medium-6 columns">

                        <h5><i class="fa fa-building"></i> Adresse</h5>
                        <p>
                            <address>
                                 238 Rue Jean Jaurès, 59410 Anzin, France
                            </address>
                        </p><br/>

                        <h5><i class="fa fa-subway"></i> Tram</h5>
                        <p>
                            Direction Condé, arrêt - Centre des Congrès
                        </p><br/>

                        <h5><i class="fa fa-phone"></i> Téléphone</h5>
                        <p>
                            <span id="phoneNumberLPSContact"></span>
                        </p>
                    </div>
                </div>
            </main>

            <?php include 'includes/footer.php' ?>
        </div>
    </div>
</div>

<!-- SCRIPTS -->
<?php include 'includes/scripts.php' ?>

</body>
</html>