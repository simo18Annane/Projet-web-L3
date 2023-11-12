<?php $titre = 'LearnHub - Online Learning '?>
<?php $CSS = '../style/admin.css '?>

<?php ob_get_clean();?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="assets/js/ajax_admin.js"></script>

<div>
    <h1>
      Administration des utilisateurs
      <a href="../index.php?action=deconnexion" class="sign-out-b" id="sign-out-b">Sign out</a>

    </h1>

    <div id="form-container">
        <button id="Affich-form1">Ajouter Contact</button>
        <br>
        <div id="form1-container">
        <form action="../index.php?action=admin_ajout" method="post" id="form1">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email">
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password">
            <input type="submit"  value="Ajouter">
        </form>
        </div>
       
        <div id="formulaireContainer"></div>

        <button id="Zone_Recherche">Rechercher Contact</button>
      <div id="utilisateur"> 
          <label for="nom">Nom :</label>
          <input type="text" id="nom2" name="nom">
          <label for="prenom">Prénom :</label>
          <input type="text" id="prenom2" name="prenom">
          <button id="rechercher"> Rechercher </button>
          <div class="data"></div>
      </div>
        <div class="add_modif">
        <!-- <form action="../index.php?action=admin_modifier" method="post" enctype="multipart/form-data">
          <label for="id3">Id :</label>
            <input type="text" id="id3" name="id3">
            <label for="nom3">Nom :</label>
            <input type="text" id="nom3" name="nom3">
            <label for="prenom3">Prénom :</label>
            <input type="text" id="prenom3" name="prenom3">
            <label for="email3">Mail :</label>
            <input type="text" id="email3" name="mail3">
            <label for="MDP3">Mot de passe</label>
            <input type="text" id="MDP3" name="mdp3">
            <input type="submit" value="Modifier">
        <form> -->
          </div> 
    </div>

      
    <div class="cours">
       
    <button id="Zone_Pdf">Ajouter Cours en mode Pdf</button>
        <div id="Pdf">
          <form action="../index.php?action=admin_cours"  method="post" enctype="multipart/form-data">
            <input type="hidden" name="action" value="ajouter"> <br>
            <input type="text" id="titre" name="titre" placeholder="Titre">
            <input type="text" id="niveau" name="niveau" placeholder="Niveau">
            <input type="text" id="categorie" name="categorie" placeholder="Catégorie">
            <input type="text" id="image" name="image" placeholder="Image">
            <input type="text" id="prix" name="prix" placeholder="Prix">
            <input type="text" id="note" name="note" placeholder="Note">
            <input type="text" id="description" name="description" placeholder="Description">
            <input type="file" id="fichier1" name="fichier1">
            <input type="submit" value="Ajouter">
          </form>
        </div>
    </div>
    <div class="video">
        <button  id ="Boutton_video">Ajouter un cours en mode video</button>
        <div id="formulaireContainer3">
        <form action="../index.php?action=admin_video" method="post" enctype="multipart/form-data">
          <input type="hidden" name="action" value="ajouter"> <br>
          <input type="text" id="titre1" name="titre1" placeholder="Titre">
          <input type="text" id="niveau1" name="niveau1" placeholder="Niveau">
          <input type="text" id="categorie1" name="categorie1" placeholder="Catégorie">
          <input type="text" id="image1" name="image1" placeholder="Image">
          <input type="text" id="prix1" name="prix1" placeholder="Prix">
          <input type="text" id="note1" name="note1" placeholder="Note">
          <input type="text" id="description1" name="description1" placeholder="Description">
          <label for="video1">Sélectionnez une vidéo :</label>
          <input type="file" name="video1" id="video"><br><br>
          <input type="submit" value="Ajouter la vidéo">
        </form>
        </div>
    </div>
    
    <button  id ="Boutton_Qcm">Création Qcm</button>
    <div class ="xml"> 
      <div id="Creer_Qcm">
      <h1>Création du qcm</h1>
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              <label for="title">Titre du QCM: </label>
              <input type="text" id="title" name="title" required><br>
              <label for="type">Type du QCM :</label>
              <input type="text" id="type" name="type" required><br>
              <input type="submit" name="creerQCM" value="Submit">
          </form>

          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              <label for="nomQCM">Titre QCM : </label>
              <input type="text" id="nomQCM" name="nomQCM" required><br>
              <label for="question">Question : </label>
              <input type="text" id="question" name="question" required><br>
              <label for="propA">Proposition A : </label>
              <input type="text" id="propA" name="propA" required><br>
              <label for="propB">Proposition B : </label>
              <input type="text" id="propB" name="propB" required><br>
              <label for="propC">Proposition C : </label>
              <input type="text" id="propC" name="propC" required><br>
              <label for="answer">réponse : </label>
              <input type="text" id="answer" name="answer" placeholder="A,B,C ->une seule reponse possible" required><br>
              <input type="submit" name="addQuestion" value="ajouter question">
          </form>
      </div>
    </div>
</div>
<?php $contenu = ob_get_clean(); ?>
<?php require 'commun.php'; ?>