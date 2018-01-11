<?php

// Maak een Array met 3 namen van medeleerlingen.
$namen = array('Billy','Wout','Tom');

// Itereer er over met een for-loop. Print ze af in een HTML ongenummerde lijst.
echo "<ul>";
for($i=0;$i<count($namen);$i++)
{
	echo"<li>$namen[$i]</li>";
} 
echo "</ul>";

// Itereer er over met een foreach-loop. Print ze af in HTML genummerde lijst.
echo "<ol>";
foreach($namen as $value)
{
	echo "<li>$value </li>";
}
echo"</ol>";
$naam = "Willy";

// Itereer met een for-loop over de variable $naam alsof het een array was.
for($i=0;$i<strlen($naam);$i++)
{
	echo"$naam[$i]";
} 

?>
