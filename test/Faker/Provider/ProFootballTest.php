<?php

namespace Faker\Test\Provider;

use Faker\Provider\ProFootball;
use Faker\Generator;

class ProFootballTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider teamProvider
     */
    public function testTeam($conference, $division, $expected)
    {
        $faker = new Generator();
        $faker->addProvider(new ProFootball($faker));
        $this->assertContains($faker->proFootballTeam($conference, $division), $expected);
    }

    public function teamProvider()
    {
        $all = array_merge(
            ProFootball::$teams[ProFootball::CONFERENCE_AFC][ProFootball::DIVISION_NORTH],
            ProFootball::$teams[ProFootball::CONFERENCE_AFC][ProFootball::DIVISION_SOUTH],
            ProFootball::$teams[ProFootball::CONFERENCE_AFC][ProFootball::DIVISION_EAST],
            ProFootball::$teams[ProFootball::CONFERENCE_AFC][ProFootball::DIVISION_WEST],
            ProFootball::$teams[ProFootball::CONFERENCE_NFC][ProFootball::DIVISION_NORTH],
            ProFootball::$teams[ProFootball::CONFERENCE_NFC][ProFootball::DIVISION_SOUTH],
            ProFootball::$teams[ProFootball::CONFERENCE_NFC][ProFootball::DIVISION_EAST],
            ProFootball::$teams[ProFootball::CONFERENCE_NFC][ProFootball::DIVISION_WEST]
        );
        $afc = array_merge(
            ProFootball::$teams[ProFootball::CONFERENCE_AFC][ProFootball::DIVISION_NORTH],
            ProFootball::$teams[ProFootball::CONFERENCE_AFC][ProFootball::DIVISION_SOUTH],
            ProFootball::$teams[ProFootball::CONFERENCE_AFC][ProFootball::DIVISION_EAST],
            ProFootball::$teams[ProFootball::CONFERENCE_AFC][ProFootball::DIVISION_WEST]
        );

        $nfc = array_merge(
            ProFootball::$teams[ProFootball::CONFERENCE_NFC][ProFootball::DIVISION_NORTH],
            ProFootball::$teams[ProFootball::CONFERENCE_NFC][ProFootball::DIVISION_SOUTH],
            ProFootball::$teams[ProFootball::CONFERENCE_NFC][ProFootball::DIVISION_EAST],
            ProFootball::$teams[ProFootball::CONFERENCE_NFC][ProFootball::DIVISION_WEST]
        );
        return array(
            array(null, null, $all),
            array(ProFootball::CONFERENCE_NFC, null, $nfc),
            array(ProFootball::CONFERENCE_AFC, null, $afc),
            array(ProFootball::CONFERENCE_AFC, ProFootball::DIVISION_NORTH, ProFootball::$teams[ProFootball::CONFERENCE_AFC][ProFootball::DIVISION_NORTH]),
            array(ProFootball::CONFERENCE_AFC, ProFootball::DIVISION_SOUTH, ProFootball::$teams[ProFootball::CONFERENCE_AFC][ProFootball::DIVISION_SOUTH]),
            array(ProFootball::CONFERENCE_AFC, ProFootball::DIVISION_EAST, ProFootball::$teams[ProFootball::CONFERENCE_AFC][ProFootball::DIVISION_EAST]),
            array(ProFootball::CONFERENCE_AFC, ProFootball::DIVISION_WEST, ProFootball::$teams[ProFootball::CONFERENCE_AFC][ProFootball::DIVISION_WEST]),
            array(ProFootball::CONFERENCE_NFC, ProFootball::DIVISION_NORTH, ProFootball::$teams[ProFootball::CONFERENCE_NFC][ProFootball::DIVISION_NORTH]),
            array(ProFootball::CONFERENCE_NFC, ProFootball::DIVISION_SOUTH, ProFootball::$teams[ProFootball::CONFERENCE_NFC][ProFootball::DIVISION_SOUTH]),
            array(ProFootball::CONFERENCE_NFC, ProFootball::DIVISION_EAST, ProFootball::$teams[ProFootball::CONFERENCE_NFC][ProFootball::DIVISION_EAST]),
            array(ProFootball::CONFERENCE_NFC, ProFootball::DIVISION_WEST, ProFootball::$teams[ProFootball::CONFERENCE_NFC][ProFootball::DIVISION_WEST]),
        );
    }
}
