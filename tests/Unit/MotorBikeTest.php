<?php

namespace Tests\Unit;

use Motor\MotorBike;
use Tests\TestCase;

class MotorBikeTest extends TestCase
{
    /**
     * @test
     */
    public function it_is_a_motorbike()
    {
        $motorBike = factory(MotorBike::class)->create();

        $this->assertInstanceOf(MotorBike::class, $motorBike);
    }

    /**
     * @test
     */
    public function it_has_weight_of_200()
    {
        $motorBike = factory(MotorBike::class)->create(['weight' => 200]);

        $this->assertEquals(200, $motorBike->weight);
    }

    /**
     * @test
     */
    public function it_image_file_exists()
    {
        $motorBike = factory(MotorBike::class)->create(['weight' => 200]);

        $this->assertFileExists($motorBike->image);
    }
}
