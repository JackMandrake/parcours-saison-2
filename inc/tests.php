<?php
function addRotative($minimum, $maximum) {
    $resultat = 0;
    for ($compteur = $minimum; $compteur <= $maximum; $compteur ++) {
        $resultat += $compteur;
    }

    return $resultat;
}

echo "test 1 =========== addRotative(4, 10)" . PHP_EOL;
echo  addRotative(4, 10). PHP_EOL;

echo "test 2 =========== addRotative(50,80)" . PHP_EOL;
echo  addRotative(50,80). PHP_EOL;

echo "test 3 =========== addRotative(-45,12)" . PHP_EOL;
echo  addRotative(-45,12). PHP_EOL;