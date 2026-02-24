<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Výuka</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #f5f5f5;
        }
        h1 { color: #4F5B93; }
        .card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        code {
            background: #e8e8e8;
            padding: 2px 6px;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <h1>PHP Výuka</h1>

    <div class="card">
        <h2>Aktuální datum a čas</h2>
        <p><?= date('d.m.Y H:i:s') ?></p>
    </div>

    <div class="card">
        <h2>Informace o PHP</h2>
        <p>Verze PHP: <code><?= PHP_VERSION ?></code></p>
        <p>Operační systém: <code><?= PHP_OS ?></code></p>
    </div>

    <div class="card">
        <h2>Příklady</h2>
        <ul>
            <li><a href="formular.php">Formulář</a></li>
        </ul>
    </div>

    <?php
    // PHP kód můžeš psát přímo do HTML
    $pozdrav = "Vítej v PHP!";
    ?>

    <div class="card">
        <h2><?= $pozdrav ?></h2>
        <p>Tento text je generovaný PHP.</p>
    </div>

    <div class="card" style="color: #4F5B93; font-weight: bold;">
    <?php 
    $hrdinaJmeno = 'Batman';
    $hrdinaSila = 85;
    $hrdinaZdravi = 900;

    echo "Oblíbeny hrdina ukol v lekci 1: <br>";

    echo "Jmeno hrdiny: {$hrdinaJmeno} <br>";
    echo "Síla: {$hrdinaSila}<br>";
    echo "Zdraví: {$hrdinaZdravi}<br>";
    
    ?>
    </div>

    <div class="card"
        style="color: #4F5B93; font-weight: bold;">
        <h3>Výpočet známky podle skóre z ukolu 2.</h3>
    <?php
        $skore = 92;
    $znamka = match (true) {
    $skore >= 90 => 1,
    $skore >= 75 => 2,
    $skore >= 50 => 3,
    $skore >= 25 => 4,
    default => 5,
    };

    echo "Skóre: {$skore}, Známka: {$znamka}<br>";
    ?>
    </div>


    <div class="card" style="color: #4F5B93; font-weight: bold;">
        <h3>Obrácený počítadlo (10 až 1) ukol z 3 lekce:</h3>
        <h4>a.</h4>
        <?php
        for($i=10; $i>=1; $i--){
        echo "{$i} ";
}
    ?>
    <h4>b.</h4>
    <?php
    $nasobek = 7;
    for($i=1; $i<=10; $i++){
    echo "{$nasobek}x{$i}=".($nasobek*$i)."\n";
}   
    ?>
    </div>

    <div class="card" style="color: #4F5B93; font-weight: bold;">
        <h3>Seznam filmů ukol z 4 lekce:</h3>
        <?php
        $filmy = ['Matrix', 'Pulp Fiction', 'Mr Robot', 'Interstellar', 'Bohemian Rhapsody'];
        foreach ($filmy as $index => $film) {
        $poradi = $index + 1;
        echo "{$poradi}. {$film}\n";
}
    ?>
    </div>



    <div class="card" style="color: #4F5B93; font-weight: bold;">
        <h3>Výpočet obdélníku (ukol z 5 lekce):</h3>
        <?php
        function obdelnik(float $a=2, float $b=5):array
{
    $obvod = 2 * ($a + $b);
    $obsah = $a * $b;
    return ['obvod' => $obvod, 'obsah' => $obsah];
}
    $vysledky = obdelnik(2, 5);
    echo "Obdélník: obvod = {$vysledky['obvod']}, obsah = {$vysledky['obsah']}\n";
    ?>  
    </div>
    </body>
    
</html>


