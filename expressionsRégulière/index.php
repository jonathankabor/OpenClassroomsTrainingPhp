<?php

if (preg_match("** Votre REGEX **", "Ce dans quoi vous faites la recherche")) {
    echo 'Le mot que vous cherchez se trouve dans la chaîne';
} else {
    echo 'Le mot que vous cherchez ne se trouve pas dans la chaîne';
}
?>
<?php
if (preg_match('#guitare#' , 'J\'aime la guitare.'))
{
    echo 'VRAI';
}
else
    {
    echo 'FAUX';
}
?>
#(((https?|ftp)://(w{3}\.)?)(?<!www)(\w+-?)*\.([a-z]{2,4}))#