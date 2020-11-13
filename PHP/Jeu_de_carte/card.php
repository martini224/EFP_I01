<?php

/**
 * This class represents a playing card
 * 
 * @author mrouff
 */
class Card
{
    private string $id;

    private string $title;

    private string $color;

    private int $force;


    /**
     * The Card complete constructor
     * 
     * @param title the title of the card (A, K, Q, ...)
     * @param color the color of the card (S, C, H, D)
     * @param force the force of the card (to compare with other one)
     */
    function __construct(string $title, string $color, int $force)
    {
        $this->title = $title;
        $this->color = $color;
        $this->force = $force;

        $this->createId();
    }


    /**
     * Compare this card with given one.
     * 
     * @param card a playing card
     * @return int 1 if this card is more powerfull than the given one, -1 if the given card is more powerfull than this card 
     * and 0 for equality.
     */
    public function compareWith(Card $cardToCompare): int {
        if($cardToCompare == null || !$cardToCompare->isComplete()) {
            return 1;
        }

        if(!$this->isComplete()) {
            return -1;
        }

        return ($this->force == $cardToCompare->getForce() ? 0 : 
            ($this->force > $cardToCompare->getForce() ? 1 : -1));
    }

    /**
     * Returns true if this card is complete. That's means title, color and force are not null.
     * 
     * @return bool true for complete, false otherwise
     */
    public function isComplete(): bool {
        return isset($this->title) && isset($this->color) && isset($this->force);
    }

    /*
        PRIVATE METHODS
    */

    private function createId() {
        $this->id = CardHelper::toCardId($this->title, $this->color);
    }

    /*
        GETTERS
    */


    public function getId(): string {
        return $this->id;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function getForce(): int {
        return $this->force;
    }
}