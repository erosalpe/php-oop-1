<?php
class Movie
{
    public $nome;
    public $genere;
    public $durata;
    function __construct($nome, $genere, $durata)
    {
        $this->nome = $nome;
        $this->genere = $genere;
        $this->durata = $durata;
    }
    public function getMovieName()
    {
        return $this->nome;
    }
    public function getMovieGenere()
    {
        return $this->genere;
    }
    public function getMovieTime()
    {
        return $this->durata;
    }
}

$endGame = new Movie ('Avengers: Endgame', 'Fantascienza', '3h 2m');
$LotR1 = new Movie ("Il Signore degli Anelli - La Compagnia dell'Anello", 'Fantastico/Avventura', '2h 58m
');
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-1</title>
</head>
<body>
    <?php if($endGame?->nome && $endGame?->genere && $endGame?->durata ):?>
    <h2>Titolo:</h2>
    <?php echo "<span>$endGame->nome</span>"?>
    <h2>Genere:</h2>
    <?php echo "<span>$endGame->genere</span>"?>
    <h2>Durata:</h2>
    <?php echo "<span>$endGame->durata</span>"?>
    <?php endif ?>
    <hr>
    <?php if($LotR1?->nome && $LotR1?->genere && $LotR1?->durata ):?>
    <h2>Titolo:</h2>
    <?php echo "<span>$LotR1->nome</span>"?>
    <h2>Genere:</h2>
    <?php echo "<span>$LotR1->genere</span>"?>
    <h2>Durata:</h2>
    <?php echo "<span>$LotR1->durata</span>"?>
    <?php endif ?>
    
</body>
</html>