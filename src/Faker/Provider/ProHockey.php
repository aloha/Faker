<?php

namespace Faker\Provider;

class ProHockey extends \Faker\Provider\Base
{
    const DIVISION_ATLANTIC = 'Atlantic';
    const DIVISION_METROPOLITAN = 'Metropolitan';
    const DIVISION_PACIFIC = 'Pacific';
    const DIVISION_CENTRAL = 'Central';

    const CONFERENCE_WESTERN = 'Western';
    const CONFERENCE_EASTERN = 'Eastern';

    public static $divisions = array('Atlantic','Metropolitan','Pacific','Central');

    public static $conferences = array('Western','Eastern');

    public static $teams = array(
        'Atlantic' => array(
            'Boston Bruins',
            'Buffalo Sabres',
            'Detroit Red Wings',
            'Florida Panthers',
            'Montreal Canadiens',
            'Ottawa Senators',
            'Tampa Bay Lightning',
            'Toronto Maple Leafs'
        ),
        'Metropolitan' => array(
            'Carolina Hurricanes',
            'Columbus Blue Jackets',
            'New Jersey Devils',
            'New York Islanders',
            'New York Rangers',
            'Philadelphia Flyers',
            'Pittsburgh Penguins',
            'Washington Capitals'
        ),
        'Pacific' => array(
            'Anaheim Ducks',
            'Arizona Coyotes',
            'Calgary Flames',
            'Edmonton Oilers',
            'Los Angeles Kings',
            'San Jose Sharks',
            'Vancouver Canucks'
        ),
        'Central' => array(
            'Chicago Blackhawks',
            'Colorado Avalanche',
            'Dallas Stars',
            'Minnesota Wild',
            'Nashville Predators',
            'St. Louis Blues',
            'Winnipeg Jets'
        )
    );

    public function proHockeyTeam($division=null)
    {
        if(is_null($division) || !in_array($division, static::$divisions)) {
            $division = static::randomElement(static::$divisions);
        }
        return static::randomElement(static::$teams[$division]);
    }
}