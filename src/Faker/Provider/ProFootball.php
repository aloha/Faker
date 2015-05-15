<?php

namespace Faker\Provider;

class ProFootball extends \Faker\Provider\Base
{
    const DIVISION_NORTH = 'North';
    const DIVISION_SOUTH = 'South';
    const DIVISION_EAST = 'East';
    const DIVISION_WEST = 'West';

    const CONFERENCE_AFC = 'AFC';
    const CONFERENCE_NFC = 'NFC';

    public static $divisions = array('East','North','South','West');

    public static $conferences = array('AFC','NFC');

    public static $teams = array(
        'AFC' => array(
            'North' => array(
                'Baltimore Ravens',
                'Cincinnati Bengals',
                'Cleveland Browns',
                'Pittsburgh Steelers'
            ),
            'South' => array(
                'Houston Texans',
                'Indianapolis Colts ',
                'Jacksonville Jaguar',
                'Tennessee Titans'
            ),
            'East' => array(
                'Buffalo Bills',
                'Miami Dolphins',
                'New England Patriots',
                'NY Jets'
            ),
            'West' => array(
                'Denver Broncos',
                'Kansas City Chiefs ',
                'Oakland Raiders',
                'San Diego Chargers'
            ),
        ),
        'NFC' => array(
            'North' => array(
                'Chicago Bears',
                'Detroit Lions',
                'Green Bay Packers',
                'Minnesota Vikings'
            ),
            'South' => array(
                'Atlanta Falcons',
                'Carolina Panthers',
                'New Orleans Saints ',
                'Tampa Bay Buccaneers'
            ),
            'East' => array(
                'Dallas Cowboys',
                'NY Giants',
                'Philadelphia Eagles',
                'Washington Redskins'
            ),
            'West' => array(
                'Arizona Cardinals',
                'St. Louis Rams',
                'San Francisco 49ers',
                'Seattle Seahawks'
            ),
        )
    );

    public function proFootballTeam($conference=null, $division=null)
    {
        if(is_null($conference) || !in_array($conference, static::$conferences)) {
            $conference = static::randomElement(static::$conferences);
        }

        if(is_null($division) || !in_array($division, static::$divisions)) {
            $division = static::randomElement(static::$divisions);
        }
        return static::randomElement(static::$teams[$conference][$division]);
    }
}