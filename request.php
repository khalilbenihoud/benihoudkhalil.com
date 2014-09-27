<?php
 
if( 
    isset($_POST['nom']) AND
    isset($_POST['email']) AND
    isset($_POST['sujet']) AND
    isset($_POST['message'])
){
 
    if( 
    !empty($_POST['nom']) AND
    preg_match("#^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$#", $_POST['email']) AND
    !empty($_POST['sujet']) AND
    !empty($_POST['message'])
    ){
    
        $destinataire = "khalil.benihoud@gmail.com";
        $sujet = "[Fomulaire de contact] ".$_POST['sujet'];
        $message = "Nom: ".$_POST['nom']." \n\nEmail: ".$_POST['email']." \n\nMessage: ".$_POST['message'];
        $entete = "From: ".$_POST['nom']." <".$_POST['email'].">" . "\r\n" . "Reply-To: " . $_POST['email'];
 
        mail($destinataire, $sujet, $message, $entete);

        header('Refresh: .1; contact.php'); 
        echo '<script language="Javascript">alert ("Message sent !" )</script>';
    }
 
    else{ 
        echo "Message not sent.<br/> Please fill in all the blanks";
    }
 
}
else{
    echo "Message not sent<br/>";
}
 
?>