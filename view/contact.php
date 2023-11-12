<?php $titre = 'LearnHub - Nous Contacter'?>
<?php $CSS = '../style/contact.css'?>
<?php require_once 'links.php'?>

<?php ob_start(); ?> 

    <div class="container" id="container">

        <?php require "header.php"; ?>

        <div class="container-center-contact" id="container-center-contact">
            <div class="container-center-child" id="container-center-child">
                <div class="container-contact-us" id="container-contact-us">
                    <span class="contact-us-title" id="contact-us-title">Nous Contacter</span>
                </div>
                <div class="container-contact-form" id="container-contact-form">
                    <form action="index.php?action=sendContactMessage" method="post" class="contact-form" id="contact-form" onsubmit="return validateFormContact()">
                        <div class="container-name-mail" id="container-name-mail">
                            <div class="container-name" id="container-name">
                                <label for="name" class="name-label" id="name-label">Nom Complet</label>
                                <input type="text" name="name" class="name-input" id="name-input">
                                <div class="alerte-nom" id="alerte-nom">
                                    <p class="message-nom" id="message-nom">Saisissez un nom complet</p>
                                </div>
                            </div>
                            <div class="container-mail" id="container-mail">
                                <label for="email" class="email-label" id="email-label">Adresse &eacute;l&eacute;ctronique</label>
                                <input type="email" name="email" class="email-input" id="email-input">
                                <div class="alerte-email" id="alerte-email">
                                    <p class="message-email" id="message-email">Saisissez une adresse &eacute;l&eacute;ctronique valide</p>
                                </div>
                            </div>
                        </div>
                        <div class="container-subject" id="container-subject">
                            <label for="subject" class="subject-label" id="subject-label">Sujet</label>
                            <input type="text" name="subject" class="subject-input" id="subject-input">
                            <div class="alerte-subject" id="alerte-subject">
                                <p class="message-subject" id="message-subject">Saisissez un sujet</p>
                            </div>
                        </div>
                        <div class="container-message" id="container-message">
                            <label for="message" class="message-label" id="message-label">Message</label>
                            <textarea name="message" class="message-input" id="message-input"></textarea>
                            <div class="alerte-msg" id="alerte-msg">
                                <p class="message-msg" id="message-msg">Saisissez un message</p>
                            </div>
                        </div>
                        <div class="container-send" id="container-send">
                            <input type="submit" name="send" class="send-input" id="send-input" value="Envoyer">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="../assets/js/contactValid.js"></script>

        <?php require "footer.php"; ?>
        
    </div>
    
<?php $contenu = ob_get_clean(); ?>
<?php require 'commun.php'; ?>