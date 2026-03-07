<?php

$i = 3;

/*if ($i == 1) {
   echo "One";
} elseif ($i == 2) {
   echo "Two";
} elseif ($i == 3) {
   echo "Three";
} elseif ($i == 4) {
   echo "Four";
} else {
   echo "> 4";
}*/

/*switch ($i) {
   case 1:
      echo "One";
      break;
   case 2:
      echo "Two";
      break;
   case 3:
      echo "Three";
      break;
   case 4:
      echo "Four";
      break;
   default:
      echo "> 4";
}*/
// Используется строгое сравнение, и обязательно одно совпадение. При первом совпадении прекращается
// сравнение
echo match ($i) {
   1 => "One",
   2 => "Two",
   3 => "Three",
   4 => "Four",
   default => "> 4",
};
echo "<br>";

$grade = 5;
echo match (true) {
   ($grade >= 10) => 'excellent',
   ($grade >= 7) => 'good',
   ($grade >= 4) => 'bad',
   default => 'very bad',
};
