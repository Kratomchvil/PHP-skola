<?php

declare(strict_types=1);

/**
 * Nadefinujte si pole deseti celých čísel.
 *
 * 2. Doplňte nakonec tohoto pole další číslo, které se zadá z klávesnice.
 *
 * 3. Vypište údaj o počtu prvků v tomto poli.
 *
 * 4. Pomocí cyklu vypište všechny prvky tohoto pole od posledního k prvnímu.
 *
 * 5. Zjistěte, zda v tomto poli se vyskytuje hodnota 1, v případě, že ano, zjistěte, kolikrát se vyskytuje.
 *
 * 6. Určete maximum a vypište ho.
 *
 * 7. Každý sudý prvek tohoto pole zvětšete o 10.
 *
 * 8. Vypište toto pole pomocí cyklu foreach.
 *
 * 9. Vynechejte 2 řádky.
 *
 * 10. Vytvořte další pole, do kterého budete z klávesnice zadávat celá čísla, zadávání se ukončí v případě, že se zadá -1, tento prvek už nebude součástí pole.
 *
 * 11. Vypište, o kolik prvků má více, méně, nebo zda má stejný počet prvků toto pole oproti prvnímu poli.
 *
 * 12. Vypište střídavě prvky těchto polí: prvek_z_prvního prvek_z_druhého prvek_z_prvního prvek_z_druhého atd.
 *
 * 13. Vypište z prvního pole všechna sudá a z druhého pole všechna lichá čísla.
 */

$pole1=[1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo"zadejte číslo které chcete přidat do pole: ";
$cislo = (int) readline();
$pole1[]=$cislo;

echo"počet prvků v poli je: ".count($pole1);

for($i=count($pole1)-1; $i>=0; $i--){
    echo $pole1[$i]."\n";
}

$pocet_jednicek=0;
foreach($pole1 as $prvek){
    if($prvek==1){
        $pocet_jednicek++;
    }
}
if($pocet_jednicek>0){
    echo"hodnota 1 se v poli vyskytuje a vyskytuje se $pocet_jednicek krát";
}
else{
    echo"hodnota 1 se v poli nevyskytuje";
}
$max=$pole1[0];
foreach($pole1 as $prvek){
    if($prvek>$max){
        $max=$prvek;
    }
}
echo"maximalni hodnota v poli je $max";

$sudy_prvek=0;
foreach($pole1 as $index => $prvek){
    if($prvek%2==0){
        $pole1[$index]=$prvek+10;
    }
}

echo"\n \n";


$pole2=[];

for($i=0; $i<100; $i++){
    echo"zadejte čísla (10) pro druhé pole, zadávání ukončíte zadáním -1 (maximum je 100)\n";
    $cislo2 = (int) readline();
    $pole2[]=$cislo2;
    if($cislo2==-1){
        array_pop($pole2);
        break;
    }
}
if(count($pole1)>count($pole2)){
    echo"první pole má o ".(count($pole1)-count($pole2))." prvků více než druhé pole";
}
elseif(count($pole1)<count($pole2)){
    echo"první pole má o ".(count($pole2)-count($pole1))." prvků méně než druhé pole";
}
else{
    echo"obě pole mají stejný počet prvků";
}

$max_pocet=max(count($pole1), count($pole2));
for($i=0; $i<$max_pocet; $i++){
    if(isset($pole1[$i])){
        echo $pole1[$i]." ";
    }
    if(isset($pole2[$i])){
        echo $pole2[$i]." ";
    }
}

echo"\n \n";
echo"z prvního pole vypisuji sudá čísla a z druhého pole lichá čísla\n";
foreach($pole1 as $prvek){
    if($prvek%2==0){    
        echo $prvek." ";
    }
}
echo"\n";
foreach($pole2 as $prvek){
    if($prvek%2!=0){
        echo $prvek." ";
    }
}





