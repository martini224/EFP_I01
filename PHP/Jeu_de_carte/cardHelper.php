<?php

/**
 * This class manage playing cards
 * 
 * @author mrouff
 */
class CardHelper
{
    private ?array $cardColors = null;

    private ?array $cards = null;


    /**
     * Default constructor for CardHelper
     */
    function __construct()
    {
        $this->initCardColors();
        $this->initCards();
    }


    /**
     * Get the list of playing cards
     * 
     * @return array of playing cards
     */
    public function getCards(): array {
        return isset($this->cards) ? $this->cards : array();
    }

    /**
     * Get a Card with given title and color
     * 
     * @param title the title of the card
     * @param color the color of the card
     * @return Card a possiby null Card 
     */
    public function getCard(string $title, string $color): ?Card {
        $cardId = CardHelper::toCardId($title, $color);

        return isset($this->cards) && isset($this->cards[$cardId]) ? $this->cards[$cardId] : null;
    }

    /**
     * Get a random playing Card
     * 
     * @return Card a possiby null Card 
     */
    public function getRandomCard(): ?Card {
        return isset($this->cards) && sizeof($this->cards) > 0 ? $this->cards[array_rand($this->cards)] : null;
    }

    /**
     * Get the image path of the given Card
     * 
     * @param card a playing card
     * @return string the image path
     */
    public function getImagePathOfCard(Card $card): string {
        if($card == null || !$card->isComplete()) {
            return "";
        }

        return "images/" . $card->getTitle() . $card->getColor() . '.jpg';
    }

    /**
     * Get the sign that show the comparision between thow given cards.
     * 
     * @param card1 the first card to compare
     * @param card2 the second card to compare
     * @return string a sign that compare cards
     */
    public function getCompareSign(Card $card1, Card $card2): string {
        if($card1 == null || !$card1->isComplete() || $card2 == null || !$card2->isComplete()) {
            return "";
        }

        switch($card1->compareWith($card2)) {
            case 1 :
                return ">";
            case -1 :
                return "<";
            case 0 :
                return "=";
            default :
                return "";
        };
    }

    /**
     * Create a unique id for a card with given title and color
     * 
     * @param title the title of the card
     * @param color the color of the card
     * @return string the card id
     */
    public static function toCardId(string $title, string $color): string {
        return $title . $color;
    }

    /*
        PRIVATE METHODS
    */

    private function initCardColors() {
        $this->cardColors = array();

        // Spade = pique
        array_push($this->cardColors, "S");
        // Club = Trèfle
        array_push($this->cardColors, "C");
        // Heart = coeur
        array_push($this->cardColors, "H");
        // Diamond = carreau
        array_push($this->cardColors, "D");
    }

    private function initCards() {
        $this->cards = array();

        foreach ($this->cardColors as $key => $cardColor){
            $this->addNewCardToCards("A", $cardColor, 13);
            $this->addNewCardToCards("K", $cardColor, 12);
            $this->addNewCardToCards("Q", $cardColor, 11);
            $this->addNewCardToCards("J", $cardColor, 10);
            $this->addNewCardToCards("10", $cardColor, 9);
            $this->addNewCardToCards("9", $cardColor, 8);
            $this->addNewCardToCards("8", $cardColor, 7);
            $this->addNewCardToCards("7", $cardColor, 6);
            $this->addNewCardToCards("6", $cardColor, 5);
            $this->addNewCardToCards("5", $cardColor, 4);
            $this->addNewCardToCards("4", $cardColor, 3);
            $this->addNewCardToCards("3", $cardColor, 2);
            $this->addNewCardToCards("2", $cardColor, 1);
        }
    }

    private function addNewCardToCards(string $title, string $color, int $force) {
        $card = new Card($title, $color, $force);

         $this->cards[$card->getId()] = $card;
    }
}