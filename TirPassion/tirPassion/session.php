<!-- 
Les balises <form> servent à dire que c'est un formulaire
on lui demande de faire fonctionner la page connexion.php une fois le bouton "Connexion" cliqué
on lui dit également que c'est un formulaire de type "POST" (récupéré via $_POST en PHP)
Les balises <input> sont les champs de formulaire
type="text" sera du texte
type="password" sera des petits points noir (texte caché)
type="submit" sera un bouton pour valider le formulaire
name="nom de l'input" sert à le reconnaitre une fois le bouton submit cliqué, pour le code PHP (récupéré via $_POST["nom de l'input"] en PHP)
 -->
 <form action="connexion.php" method="post">
  Pseudo: <input type="text" name="pseudo" />
  <br />
  Mot de passe: <input type="password" name="mdp" />
  <br />
  <input type="submit" name="connexion" value="Connexion" />
</form>