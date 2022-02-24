<?php

use App\LikesDisplay;
use PHPUnit\Framework\TestCase;

class LikesDisplayTest extends TestCase {
    /**@test */
    public function test_it_correctly_formats_output_per_number_of_likes() {

        $this->assertEquals( 'no one likes this', LikesDisplay::likes( [] ) );
        $this->assertEquals( 'Peter likes this', LikesDisplay::likes( [ 'Peter' ] ) );
        $this->assertEquals( 'Jacob and Alex like this', LikesDisplay::likes( [ 'Jacob', 'Alex' ] ) );
        $this->assertEquals( 'Max, John and Mark like this', LikesDisplay::likes( [ 'Max', 'John', 'Mark' ]) );
        $this->assertEquals( 'Alex, Jacob and 2 others like this', LikesDisplay::likes( [ 'Alex', 'Jacob', 'Mark', 'Max' ] ) );
    }
}
