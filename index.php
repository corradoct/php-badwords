<?php
$paragrafo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
echo $paragrafo;
$paragrafoLen = strlen($paragrafo);
echo nl2br ("\n Il paragrafo è lungo " . $paragrafoLen . " caratteri");
$badWord = $_GET['badword'];
echo nl2br ("\n La parola censurata è  " . $badWord . "\n");
$replaced_word = str_replace($badWord, '***', $paragrafo);
echo $replaced_word;
?>
