<?php
use App\App;

class Test_App extends PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function can_return_secret_of_the_universe()
    {
        $app = new App();
        $this->assertEquals(42, $app->run());
    }
}

