<?php

// 1 --> open file  
$_pointer = fopen('teller.txt','r+b') 
                  or
                    die('file niet geopend');

// 2 --> lees teller
$_teller = fread($_pointer,255);

// 3 --> verhoog teller
$_teller = $_teller + 1;

// 4 --> toon de teller
$_output= "<h1> Aantal hits tot nu = $_teller </h1>";

// 5 --> rewind
rewind($_pointer);

// 6 --> schrijf (verhoogde) teller terug in file
fwrite($_pointer,$_teller);

// 7--> sluit file
fclose($_pointer);

echo $_output;
?>
