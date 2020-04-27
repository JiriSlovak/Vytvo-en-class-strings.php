<?php


class stringSlovak {
    // substr - Tohle vypise cast stringu
    static public function substrSlovak($retezec,$tadyzace) {
        return substr($retezec, $tadyzace);
}
//String z retezce vlozi na definovane misto
static public function substr__replaceSlovak($text,$tohlechcinahradit,$zacatek) {
   return substr_replace($text, $tohlechcinahradit, $zacatek);
}
//nahradi slovo v retezci
static public function strtrSlovak($veta,$tohlenahrazuji,$timhlenahrazuji) {
    return strtr($veta, $tohlenahrazuji, $timhlenahrazuji);
}
//Vsechna pismena ve stringu budou velka
static public function strtoupperSlovak($vsechnovelke) {
    return strtoupper($vsechnovelke);
}
//Vsechna pismena budou mala
static public function strtolowerSlovak($vsechnomale) {
    return strtolower($vsechnomale);
}
//Vyhleda ve stringu posledni vec z stringu
static public function strrposSlovak($odsudhledam,$cohledam) {
    return strrpos($odsudhledam, $cohledam);
}
//Najde dany string v retezcci
static public function strriposSlovak($odsudhledam,$presnecohledam) {
   return strripos($odsudhledam, $presnecohledam); 
}
//Hleda prvni shodu s tim co je definovano aby hledal
static public function strposSlovak($odsudhledam,$cohledam) {
    return strpos($odsudhledam, $cohledam);
}
//Zobrazi jak je retezec dlouhy
static public function strlenSlovak($reknidelku) {
    return strlen($reknidelku);
}
//Najde co je definované
static public function strchrSlovak($odsudhledam,$cohledam) {
    return strchr($odsudhledam, $cohledam);
}
// nahradi promene v danem poli
static public function str_replace($samohlasky,$tadyvtomrozmezi,$tady) {
   return str_replace($samohlasky, $tadyvtomrozmezi, $tady);
}
// zasifruje dane slovo
static public function md5Slovak($zprava) {
    return md5($zprava);
}
//vlozi do pole neco
static public function implodeSlovak($co,$kam) {
    return implode($co, $kam);
}
//rozdeli na substringy
static public function explodeSlovak($hranice,$vetastring) {
    return explode($hranice, $vetastring);
}
//pridaslash pred charaktery
static public function addcslashesSlovak($vtomhleretezci,$rozmezi) {
    return addcslashes($vtomhleretezci, $rozmezi);
}
//prida backshlashh
static public function addslashSlovak($vetastring) {
    return addslashes($vetastring);
}
//z necoho neco odebere 
static public function trimPSlovak($odsud,$topryc) {
    return trim($odsud, $topryc);
}
//Prvni pismeno v kazde vete bude velke
static public function ucfirstSlovak($veta) {
    return ucfirst($veta);
}
//VGsechna slova budou mit prvni pismeno velke
static public function ucwordsSlovak($veta) {
    return ucwords($veta);
}

}
$retezec = "ToHleJeRetezec";
$tadyzace =7;
$text="Tohle je text";
$tohlechcinahradit="neni";
$zacatek= 6;
$veta=" odstranit chibu";
$tohlenahrazuji ="chibu";
$timhlenahrazuji="chybu";
$vsechnovelke="Tohle chci velke";
$vsechnomale="Tohle chci vse male";
$odsudhledam ="TadyNecoHledamHmmmmm";
$cohledam= "Hmmmm";
$presnecohledam="Neco";
$reknidelku= "Chci Znat delku tohohle retezce";
$samohlasky= array ('a','e','i','o','u','y');
$tadyvtomrozmezi="";
$tady="tady nebudou zadne samohlasky";
$zprava= "TohleJeZprava";
$co=",";
$kam= array ('vek','pohlavi','etnikum','iq');
$hranice = '""';
$vetastring="tohle je veta";
$vtomhleretezci="Ahoj ja jsem Yzomandias";
$rozmezi= 'A..z';
$odsud="\a\aaaAhoj zde jsem\a\a";
$topryc="\a";

var_dump(stringSlovak::substrSlovak($retezec, $tadyzace));
var_dump(stringSlovak::substr__replaceSlovak($text, $tohlechcinahradit, $zacatek));
var_dump(stringSlovak::strtrSlovak($veta, $tohlenahrazuji, $timhlenahrazuji));
var_dump(stringSlovak::strtoupperSlovak($vsechnovelke));
var_dump(stringSlovak::strtolowerSlovak($vsechnomale));
var_dump(stringSlovak::strrposSlovak($odsudhledam, $cohledam));
var_dump(stringSlovak::strriposSlovak($odsudhledam, $presnecohledam));
var_dump(stringSlovak::strposSlovak($odsudhledam, $cohledam));
var_dump(stringSlovak::strlenSlovak($reknidelku));
var_dump(stringSlovak::strchrSlovak($odsudhledam, $cohledam));
var_dump(stringSlovak::str_replace($samohlasky, $tadyvtomrozmezi, $tady));
var_dump(stringSlovak::md5Slovak($zprava));
var_dump(stringSlovak::implodeSlovak($co, $kam));
var_dump(stringSlovak::explodeSlovak($hranice, $vetastring));
var_dump(stringSlovak::addcslashesSlovak($vtomhleretezci, $rozmezi));
var_dump(stringSlovak::addslashSlovak($vetastring));
var_dump(stringSlovak::trimPSlovak($odsud, $topryc));
var_dump(stringSlovak::ucfirstSlovak($veta));
var_dump(stringSlovak::ucwordsSlovak($veta));




?>
