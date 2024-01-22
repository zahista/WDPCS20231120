<?php

$heslo = "rasmuslerdorf";

$pass1 =  password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
$pass2 = password_hash("rasmuslerdorf", PASSWORD_DEFAULT);

echo $pass1;

var_dump(password_verify($heslo,$pass2));



// z formuláře nám přijde email a heslo 

// vezmeme email a najdeme usera a u něj zjistíme heslo 

// vezmeme heslo z databáze (hash) a heslo z formuláře a proženeme to password verify 

// pokud to projde tak Auth::user(id)

// redirect do aplikace 