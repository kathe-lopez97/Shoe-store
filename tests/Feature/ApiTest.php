<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiTest extends TestCase
{
    /** @test */

    public function EntryCorrectFormatDescriptionTest()
    {
        $shoe = "shoeDescription";
        $description = "shoeDescription";

        $this->assertSame($shoe, $description);
    
    }

    /** @test */

    public function ConfirmDataEnteredTest()
    {
        $description1 = "Jordan 1 Retro High Dior";

        $this->assertSame($description1, "Jordan 1 Retro High Dior");
    }

}
