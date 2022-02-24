<?php

namespace App;

class TennisMatch
{
    protected $playerOnePoints = 0;
    protected $playerTwoPoints = 0;

    public function score()
    {
        // check if we have a winner
        if ($this->playerOnePoints > 3 && $this->playerOnePoints >= $this->playerTwoPoints + 2) {
            return 'Winner: Player 1';
        }

        // check if we have a winner
        if ($this->playerTwoPoints > 3 && $this->playerTwoPoints >= $this->playerOnePoints + 2) {
            return 'Winner: Player 2';
        }

        //check for deuce
        if ($this->playerOnePoints >= 3 && $this->playerTwoPoints >=3 && $this->playerOnePoints === $this->playerTwoPoints) {
            return 'deuce';
        }

        //check for advantage
        if ($this->playerOnePoints >= 3 && $this->playerTwoPoints >=3 && $this->playerOnePoints > $this->playerTwoPoints) {
            return 'Advantage: Player 1';
        }

        //check for advantage
        if ($this->playerTwoPoints >= 3 && $this->playerOnePoints >=3 && $this->playerTwoPoints > $this->playerOnePoints) {
            return 'Advantage: Player 2';
        }
        
        //otherwise provide a default

        return sprintf(
            "%s-%s",
            $this->pointsToTerm($this->playerOnePoints),
            $this->pointsToTerm($this->playerTwoPoints),
        );
    }

    public function pointToPlayerOne()
    {
        $this->playerOnePoints++;
    }

    public function pointToPlayerTwo()
    {
        $this->playerTwoPoints++;
    }

    protected function pointsToTerm($points)
    {
        switch ($points) {
            case 0:
                return 'love';
            case 1:
                return 'fifteen';
            case 2:
                return 'thirty';
            case 3:
                return 'forty';
        }
    }
}