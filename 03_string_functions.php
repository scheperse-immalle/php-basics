<?php

$zin = "Binnenkort is het weeral lente";
$search = array('lente');
$replace = array('zomer');
echo str_replace($search,$replace,$zin).'<br></br>';
echo str_word_count($zin);
// Print af hoeveel woorden $zin bevat.


// Vervang in $zin "lente" door "zomer" en druk af.


?>
