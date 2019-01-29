<?php
require 'form.php';
$meta = new meta($_POST);
echo $meta->up('formu', 'style.css');

$form = new Form(); // Debut de la function //
echo $form->form(); 
echo $form->input('text','');

if(isset($_POST['firstName'])) {
    $result = trim(filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING));

    if(empty($result)) {
        $firstNameErr = "Un prénom est requis";
    } elseif(!preg_match("/^[a-zA-Z éèçà-]*$/", $result)) {
        $firstNameErr = "Seulement les lettres et les espaces sont autorisés";
    } else {
        $firstName = $result;
    }
}



echo $firstNameErr;

echo $form->select('biiiiiiiiim','booooom');
$result = trim(filter_input(INPUT_POST, 'bom' ,FILTER_SANITIZE_NUMBER_INT));
if ($result == 0) {
    echo "coucou";
}

echo $form->textarea('Hello world');
if(isset($_POST['message'])) {
    $result = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING));

    if(empty($result)) {
        $erreurbox = "Quel est votre message!";
    } else if ($result =="Hello world") {
        $erreurbox = "Veuillez rentrer un message";
    } else {
        $erreurbox = $result;
    }
}
echo $erreurbox;
echo $form->radiobutton('radio');
echo $form->checkbox('checkbox');
echo $form->submit();

$lien = new lien();
echo $lien->liena('"https://www.w3schools.com/tags/tag_a.asp"', 'coucou');
echo $lien->lienJS('script.js');
?>