<?php

namespace Faker\Test\Provider;

use Faker\Provider\ProHockey;
use Faker\Generator;

class HockeyTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider teamProvider
     */
    public function testTeam($division, $expected)
    {
        $faker = new Generator();
        $faker->addProvider(new ProHockey($faker));
        $this->assertContains($faker->proHockeyTeam($division), $expected);
    }

    public function teamProvider()
    {
        return array(
            array(null, array_merge(ProHockey::$teams[ProHockey::DIVISION_ATLANTIC],ProHockey::$teams[ProHockey::DIVISION_CENTRAL],ProHockey::$teams[ProHockey::DIVISION_METROPOLITAN],ProHockey::$teams[ProHockey::DIVISION_PACIFIC])),
            array('shenanigans', array_merge(ProHockey::$teams[ProHockey::DIVISION_ATLANTIC],ProHockey::$teams[ProHockey::DIVISION_CENTRAL],ProHockey::$teams[ProHockey::DIVISION_METROPOLITAN],ProHockey::$teams[ProHockey::DIVISION_PACIFIC])),
            array(ProHockey::DIVISION_ATLANTIC, ProHockey::$teams[ProHockey::DIVISION_ATLANTIC]),
            array(ProHockey::DIVISION_PACIFIC, ProHockey::$teams[ProHockey::DIVISION_PACIFIC]),
            array(ProHockey::DIVISION_METROPOLITAN, ProHockey::$teams[ProHockey::DIVISION_METROPOLITAN]),
            array(ProHockey::DIVISION_CENTRAL, ProHockey::$teams[ProHockey::DIVISION_CENTRAL]),
        );
    }
}
