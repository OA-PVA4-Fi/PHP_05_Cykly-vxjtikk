<?php
/**
* Asociativní pole
* Deklarujte pole months, které bude mít v hodnotách uložen český název měsíce. Index bude odpovídat pořadovému číslu měsíce.
* a) Za pomocí cyklu zobrazte všechny měsíce.
* b) Za pomocí cyklu zobrazte všechny měsíce z období 6-12.
*/

//reseni
$months = array("leden", "únor", "březen", "duben", "květen", "červen", "červenec", "srpen", "září", "říjen", "listopad", "prosinec");

foreach ($months as $value) {
    echo $value .'<br />';
}

echo "<br />";

for ($i = 5; $i < 12; $i++) {
    echo $months[$i] . '<br />';
}
?>