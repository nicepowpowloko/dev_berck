<?php

$destinataire = 'thomas22751@gmail.com';

$expediteur = $_POST['mail'];

$objet = 'Candidature';

$headers = 'MIME-Version: 1.0 . "\n"; // Version MIME';
$headers .= 'content-type: test/html;ccharset=ISO-8859-1 . "\n"; //l\'en-tête Content-type pour le format HTML';

$message = '

bonjour je me nomme '.$_POST['Pseudo'].'!
je suis sur le monde '.$_POST['Monde'].'!
J\'ai '.$_POST['age'].'! et je souhaite rejoindre votre CL car je cherche à '.$_POST['activite'].'!
je joue '.$_POST['classe'].'! et j\aime la '.$_POST['bière'].'!

voici une petite présentation :
'.$_POST['presentation'].'!

a tres bientot !

';

if(mail($destinataire, $objet, $message, $headers)){
    echo '<script language="javascript">alert("votre message a bien été envoyer");</script>';
}
else{
    echo '<script language="javascript">alert("votre message n\' a pas été envoyé");</script>';
}
header('location: ../contact.php');
?>
