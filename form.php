<?php

$firstNameErr = $erreurselect = $erreurbutton = "";
$erreurbox = $erreurinput = $erreurcommentary = "";

class Form{

    private $data;
    public $surround = 'p';

    public function __construct($data=array()){

        $this->data = $data;

    }

    private function surround($html){

        return "<{$this->surround}>{$html}</{$this->surround}>";

    }

    public function form(){
        return $this->surround('<form action="exo1.php" method="post">');
    }

    public function input(){
        return $this->surround('<input type="text" name="firstName" value=""/>'); 
    }

    public function select($test1,$test2){
        return $this->surround('<select name="bom">
        <option name="bom" value="0">Faites un choix</option>
        <option name="bom" value="1">'.$test1.'</option>
        <option name="bom" value="2">'.$test2.'</option>
        </select>');
    }

    public function buttons($buttons){
        return $this->surround('<button type="'.$buttons.'"></button>');
    }

    public function submit(){
        return $this->surround('<button type="submit">Envoyer</button>
        </form>');
    }

    public function textarea($text){
        return $this->surround('<textarea name="message">' .$text. '</textarea>');
    }

    public function radiobutton($radio){
        return $this->surround('<input type="radio"'. $radio .'>');
    }

    public function checkbox($checkbox){
        return $this->surround('<input type="checkbox"' .$checkbox .'>');
}
}


class meta {
    public function up($title,$feuille) {
        return ('
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href =' .$feuille. '>
            <title>' .$title. '</title>
        </head>
        <body>');
    }
    
}


class lien {
    public function liena($url,$texte) {
        return ('<a href = '. $url. ' target="_blank">'. $texte .'</a>');
    }
    public function lienJS($url) {
        return '<script src=' . $url . '></script>
        </body>
        </html>';
    }
}

?>