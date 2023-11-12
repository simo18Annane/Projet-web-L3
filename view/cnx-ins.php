<div class="container-formulaires" id="container-formulaires">
    <div class="container-left" id="container-left">
        <div class="container-logo" id="container-logo">
            <a href="../index.php">
                <span class="logo" id="logo">LearnHub.</span>
            </a>
        </div>
        <div class="container-content-parent" id="container-content-parent">
            <div class="container-content-child" id="container-content-child">
                <div class="container-title-connexion" id="container-title-connexion">
                    <h1 class="title-connexion" id="title-connexion">Connectez-vous!</h1>
                </div>
                <div class="container-text-connexion" id="container-text-connexion">
                    <p class="text-connexion" id="text-connexion">Acc&eacute;dez &agrave; votre compte et naviguer vos cours favoris.</p>
                </div>
                <div class="container-title-inscription" id="container-title-inscription">
                    <h1 class="title-inscription" id="title-inscription">Inscrivez-vous!</h1>
                </div>
                <div class="container-text-inscription" id="container-text-inscription">
                    <p class="text-inscription" id="text-inscription">Commencez votre aventure d'apprentissage avec nous!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-right" id="container-right">
        <div class="container-connexion" id="container-connexion">
            <div class="container-title-2" id="container-title-2">
                <h1 class="title-2" id="title-2">Connexion</h1>
            </div>
            <div class="container-form-1" id="container-form-1">
                <form action="../index.php?action=connexion" method="post" class="connexion" id="connexion" onsubmit="return validateFormCnx()">
                    <label for="email" class="email-label" id="email-label">Adresse &eacute;l&eacute;ctronique</label>
                    <input type="email" name="email" class="email-input-cnx" id="email-input-cnx" placeholder="E-mail">
                    <div class="alert-message-1" id="alert-message">
                        <p class="message-cnx-1" id="message-cnx-1">Saisissez une adresse mail valide</p>
                    </div>
                    <label for="mdp" class="pwd-label" id="pwd-label">Mot de passe</label>
                    <input type="password" name="mdp" class="pwd-input" id="pwd-input" placeholder="Mot de passe">
                    <div class="alert-message-2" id="alert-message">
                        <p class="message-cnx-2" id="message-cnx-2">Saisissez un mot de passe valide</p>
                    </div>
                    <input type="submit" value="S'identifier" class="button-input-1" id="button-input-1">
                </form>
            </div>
            <div class="container-redirection-inscription" id="container-redirection-inscription">
                <p class="redirection-inscription" id="redirection-inscription">Nouveau chez LearnHub? <span class="redirection-click-inscription" id="redirection-click-inscription">Inscrivez-vous!</a></p>
            </div>
        </div>
        <div class="container-inscription" id="container-inscription">
            <div class="container-title-2" id="container-title-2">
                <h1 class="title-2" id="title-2">Inscription</h1>
            </div>
            <div class="container-form-2" id="container-form-2">
                <form action="../index.php?action=inscription" method="post" class="inscription" id="inscription" onsubmit="return validateFormIns()">
                    <label for="nom" class="nom-label" id="nom-label">Nom</label>
                    <input type="text" name="nom" class="nom-input" id="nom-input" placeholder="Nom">
                    <div class="alert-message-3" id="alert-message">
                        <p class="message-cnx-3" id="message-cnx-3">Saisissez votre nom</p>
                    </div>
                    <label for="prenom" class="prenom-label" id="prenom-label">Pr&eacute;nom</label>
                    <input type="text" name="prenom" class="prenom-input" id="prenom-input" placeholder="Pr&eacute;nom">
                    <div class="alert-message-4" id="alert-message">
                        <p class="message-cnx-4" id="message-cnx-4">Saisissez votre pr&eacute;nom</p>
                    </div>
                    <label for="email" class="email-label" id="email-label">Adresse &eacute;l&eacute;ctronique</label>
                    <input type="email" name="email" class="email-input-ins" id="email-input-ins" placeholder="E-mail">
                    <div class="alert-message-5" id="alert-message">
                        <p class="message-cnx-5" id="message-cnx-5">Saisissez une adresse mail valide</p>
                    </div>
                    <label for="mdp" class="pwd-label" id="pwd-label">Mot de passe</label>
                    <input type="password" name="mdp" class="pwd-input-1" id="pwd-input-1" placeholder="Mot de passe">
                    <div class="alert-message-6" id="alert-message">
                        <p class="message-cnx-6" id="message-cnx-6">Saisissez un mot de passe valide</p>
                    </div>
                    <label for="mdpConfirm" class="pwd-label" id="pwd-label">Confirmez votre mot de passe</label>
                    <input type="password" name="mdpConfirm" class="pwd-input-2" id="pwd-input-2" placeholder="Mot de passe">
                    <div class="alert-message-7" id="alert-message">
                        <p class="message-cnx-7" id="message-cnx-7">Mots de passe non similaires </p>
                    </div>
                    <input type="submit" value="S'inscrire" class="button-input-2" id="button-input-2">
                </form>
            </div>
            <div class="container-redirection-connexion" id="container-redirection-connexion">
                <p class="redirection-connexion" id="redirection-connexion">Vous avez d&eacute;ja un compte? <span class="redirection-click-connexion" id="redirection-click-connexion">Connectez-vous!</a></p>
            </div>
        </div>
    </div>
</div>