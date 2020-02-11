<?php

/*
 *

Envoi d'email avec PHP en objet

- Vous allez écrire une classe PHP permettant d'envoyer un email
en utilisant la fonction native de php mail()
Voir : http://php.net/manual/fr/function.mail.php

- Vous allez structurer ce code en Objet, la classe doit être instanciable.

- Réfléchissez à ce qu'un email contient : un sujet, un corps de message, un ou plusieurs destinataires
( ce sont des propriétés )

- Réfléchissez aux méthodes associées à un email : Envoyer l'email, Ecrire l'email,
Définir des options associées à l'envoi de l'email etc...

 *
 */


class email
{
    private $to;
    private $from;
    private $subject;
    private $message;

    //private $retour;

    public function __construct($to, $from, $subject, $message)
    {
        $this->to = "hortensere@aol.com";
        $this->from = "hortensere@aol.com";
        $this->subject = "Test";
        $this->message = "Ceci est un test";


        if (mail($to, $from, $subject, $message))
        {
            echo "message envoyé";
        }
        else{
            echo "erreur";
        }

    }


    public function envoyer() {
        $this->destinataire()->expediteur()->sujet()->message();



       /*
        $this->destinataire($this->to);
        $this->expediteur($this->from);
        $this->sujet($this->subject);
        $this->message($this->message);
       */
    }

}