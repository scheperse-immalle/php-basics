<?php

$woord = "quotering";
$points=0;

// gebruik een switch-case-statement binnen een for-loop om
// te itereren over een woord en de Scrabble-punten ervan te berekenen

// Q 10 punten
// U 4 punten
// O 1 punt
// T 2 punten
// E 1 punt
// R 2 punten
// I 1 punt
// N 1 punt

for($i=0;$i<strlen($woord);$i++)
{
	switch($woord[$i])
	{
		case "q":
			$points +=10;
			break;
		case "u":
			$points +=4;
			break;
		case "o":
			$points +=1;
			break;
		case "t":
			$points +=2;
			break;
		case "e":
			$points +=1;
			break;
		case "r":
			$points +=2;
			break;
		case "i":
			$points +=1;
			break;
		case "n":
			$points +=1;
			break;
	
	}

}
echo $points;

?>
