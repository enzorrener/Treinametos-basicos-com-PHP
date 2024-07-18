<?php

$ano = null;

echo "Digite aqui o ano para eu analisar se é bisexto ou não: ";
$ano = intval(readline());


function bissexto ($ano) {
    if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 ==0){
        return true;
    }
    else {
        return false;
    } 
};

if (bissexto($ano)) {
    echo "o ano $ano é bissexto";
}
else {
    echo "O ano $ano não é bissexto"
;}