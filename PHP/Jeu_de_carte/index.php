<!DOCTYPE html>
<html>
<head>
    <script src="script.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="nav-container">
    <hr>

    <div>
        <a href="/Jeu_de_carte">Random card</a>
    </div>

    <div>
        <a href="/Jeu_de_carte?compare=true">Random cards - compare</a>
    </div>

    <div>
        <button class="card_by_code" type="button">Display by code</button>
        <input type="text" id="card_title" name="card_title" minlength="2" maxlength="2" size="2">
    </div>

    <hr>
</div>

<div class="card-container">
<?php

    include 'card.php';
    include 'cardHelper.php';
    
    $cardHelper = new CardHelper();

    $card;

    if(isset($_GET["title"]) && isset($_GET["color"])) {
        $card = $cardHelper->getCard($_GET["title"], $_GET["color"]);
    } else {
        $card = $cardHelper->getRandomCard();
    }

    if(isset($_GET["compare"]) && $_GET["compare"] == "true") 
    {
        $card2 = $cardHelper->getRandomCard();

        echo '<img src="' . $cardHelper->getImagePathOfCard($card) . '" alt="card" width="150">';

        echo '<span class="card-comparator">' . $cardHelper->getCompareSign($card, $card2) . '</span>';

        echo '<img src="' . $cardHelper->getImagePathOfCard($card2) . '" alt="card" width="150">';
    } 
    else 
    {
        echo '<img src="' . $cardHelper->getImagePathOfCard($card) . '" alt="card" width="150">';
    }
?>
</div>

</body>
</html>