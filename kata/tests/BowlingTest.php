<?php

use App\BowlingGame;
use PHPUnit\Framework\TestCase;

class BowlingTest extends TestCase
{
    /** @test */
    function it_scores_a_gutter_game_as_zero()
    {
        $game = new BowlingGame();

        foreach (range(1, 20) as $roll) {
            $game->roll(0);
        }
        
        $this->assertSame(0, $game->score());
    }

    /** @test */
    function it_scores_all_ones()
    {
        $game = new BowlingGame();

        foreach (range(1, 20) as $roll) {
            $game->roll(1);
        }
        
        $this->assertSame(20, $game->score());
    }

    /** @test */
    function it_awards_a_one_roll_bonus_for_every_spare()
    {
        $game = new BowlingGame();

        $game->roll(5);
        $game->roll(5); // spare

        $game->roll(8);

        foreach (range(1, 17) as $roll) {
            $game->roll(0);
        }
        
        $this->assertSame(26, $game->score());
    }

    /** @test */
    function it_awards_a_two_roll_bonus_for_every_strike()
    {
        $game = new BowlingGame();

        $game->roll(10);

        $game->roll(8);
        $game->roll(1);


        foreach (range(1, 16) as $roll) {
            $game->roll(0);
        }
        
        $this->assertSame(28, $game->score());
    }

    /** @test */
    function a_spare_on_the_final_frame_grants_one_extra_balls()
    {
        $game = new BowlingGame();

        foreach (range(1,18) as $roll) {
            $game->roll(0);
        }

        $game->roll(5);
        $game->roll(5); //spare

        $game->roll(5);

        $this->assertSame(15, $game->score());
    }

    /** @test */
    function a_strike_on_the_final_frame_grants_two_extra_balls()
    {
        $game = new BowlingGame();

        foreach (range(1,18) as $roll) {
            $game->roll(0);
        }

        $game->roll(10);
        $game->roll(10); //spare

        $game->roll(10);

        $this->assertSame(30, $game->score());
    }

    /** @test */
    function it_scores_a_perfect_game()
    {
        $game = new BowlingGame();

        foreach (range(1,12) as $roll) {
            $game->roll(10);
        }

        $this->assertSame(300, $game->score());
    }
}