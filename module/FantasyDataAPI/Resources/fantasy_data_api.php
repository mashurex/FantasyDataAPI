<?php
/**
 * @link      https://github.com/gridiron-guru/FantasyDataAPI for the canonical source repository
 * @copyright Copyright (c) 2014 Robert Gunnar Johnson Jr.
 * @license   http://opensource.org/licenses/Apache-2.0
 * @package   FantasyDataAPI
 */

$resources = [];
$resources['baseUrl'] = 'https://api.fantasydata.net/nfl/v2/{Format}/';

/**
 * Action: Check If Games In Progress
 * Resource: AreAnyGamesInProgress
 *
 * http://api.fantasydata.net/nfl/v2/{format}/AreAnyGamesInProgress?key=<Your_developer_key>
 */
$resources['operations']['AreAnyGamesInProgress'] = [
    'httpMethod' => 'GET',
    'uri' => 'AreAnyGamesInProgress',
    'responseModel' => 'XML_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'xml' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ],
    ]
];

/**
 * Action: Get Teams for Season
 * Resource: Teams
 *
 * http://api.fantasydata.net/nfl/v2/{format}/Teams/{season}?key=<Your_developer_key>
 */
$resources['operations']['Teams'] = [
    'httpMethod' => 'GET',
    'uri' => 'Teams{/Season}',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ],
        'Season' => [
            'required' => false,
            'type' => 'string',
            'location' => 'uri'
        ]
    ]
];

/**
 * Action: Get Schedules for Season
 * Resource: Schedules
 *
 * http://api.fantasydata.net/nfl/v2/{format}/Schedules/{season}?key=<Your_developer_key>
 */
$resources['operations']['Schedules'] = [
    'httpMethod' => 'GET',
    'uri' => 'Schedules{/Season}',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ],
        'Season' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ]
    ]
];

/**
 * Action: Get Bye Week for Season
 * Resource: Byes
 *
 * http://api.fantasydata.net/nfl/v2/{format}/Byes/{season}?key=<Your_developer_key>
 */
$resources['operations']['Byes'] = [
    'httpMethod' => 'GET',
    'uri' => 'Byes{/Season}',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ],
        'Season' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ]
    ]
];

// deprecated -- Get Last Completed Season
// deprecated -- Get Current Season
// deprecated -- Get Upcoming Season
// deprecated -- Get Last Completed Week
// deprecated -- Get Current Week
// deprecated -- Get Upcoming Week

/**
 * Action: Get Game Scores for Season
 * Resource: Scores
 *
 * http://api.fantasydata.net/nfl/v2/{format}/Scores/{season}?key=<Your_developer_key>
 */
$resources['operations']['Scores'] = [
    'httpMethod' => 'GET',
    'uri' => 'Scores{/Season}',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ],
        'Season' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ]
    ]
];

/**
 * Action: Get Scores for Season and Week
 * Resource: ScoresByWeek
 *
 * http://api.fantasydata.net/nfl/v2/{format}/ScoresByWeek/{season}/{week}?key=<Your_developer_key>
 */
$resources['operations']['ScoresByWeek'] = [
    'httpMethod' => 'GET',
    'uri' => 'ScoresByWeek{/Season}{/Week}',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ],
        'Season' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ],
        'Week' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ]
    ]
];

/**
 * Action: Get Team Stats per Game for Season for Week
 * Resource: TeamGameStats
 *
 * http://api.fantasydata.net/nfl/v2/{format}/TeamGameStats/{season}/{week}?key=<Your_developer_key>
 */
$resources['operations']['TeamGameStats'] = [
    'httpMethod' => 'GET',
    'uri' => 'TeamGameStats{/Season}{/Week}',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ],
        'Season' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ],
        'Week' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ]
    ]
];

/**
 * Action: Team Stats for Season
 * Resource: TeamSeasonStats
 *
 * http://api.fantasydata.net/nfl/v2/{format}/TeamSeasonStats{/Season}?key=<Your_developer_key>
 */
$resources['operations']['TeamSeasonStats'] = [
    'httpMethod' => 'GET',
    'uri' => 'TeamSeasonStats{/Season}',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ],
        'Season' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ]
    ]
];

/**
 * Action: Get Team Standings for Season
 * Resource: Standings
 *
 * http://api.fantasydata.net/nfl/v2/{format}/Standings{/Season}?key=<Your_developer_key>
 */
$resources['operations']['Standings'] = [
    'httpMethod' => 'GET',
    'uri' => 'Standings{/Season}',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ],
        'Season' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ]
    ]
];

/**
 * Action: Get Team Roster and Depth Charts
 * Resource: Players
 *
 * http://api.fantasydata.net/nfl/v2/{format}/Players/{team}?key=<Your_developer_key>
 */
$resources['operations']['Players'] = [
    'httpMethod' => 'GET',
    'uri' => 'Players{/Team}',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ],
        'Team' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ]
    ]
];

/**
 * Action: Get Player Stats and News
 * Resource: Player
 *
 * http://api.fantasydata.net/nfl/v2/{format}/Player{/PlayerID}?key=<Your_developer_key>
 */
$resources['operations']['Player'] = [
    'httpMethod' => 'GET',
    'uri' => 'Player{/PlayerID}',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ],
        'PlayerID' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ]
    ]
];

/**
 * Action: Get Free Agents
 * Resource: FreeAgents
 *
 * http://api.fantasydata.net/nfl/v2/{format}/FreeAgents?key=<Your_developer_key>
 */
$resources['operations']['FreeAgents'] = [
    'httpMethod' => 'GET',
    'uri' => 'FreeAgents',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ]
    ]
];

/**
 * Action: Get updated player stats for the past x amount of minutes.
 * Resource: PlayerGameStatsByWeekDelta
 *
 * http://api.fantasydata.net/nfl/v2/{format}/PlayerGameStatsByWeekDelta/{season}/{week}/{minutes}?key=<Your_developer_key>
 */
$resources['operations']['PlayerGameStatsByWeekDelta'] = [
    'httpMethod' => 'GET',
    'uri' => 'PlayerGameStatsByWeekDelta{/Season}{/Week}{/Minutes}',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ],
        'Season' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ],
        'Week' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ],
        'Minutes' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ],
    ]
];

/**
 * Action: Get Players Game Stats by Team for Season for Week
 * Resource: PlayerGameStatsByTeam
 *
 * http://api.fantasydata.net/nfl/v2/{format}/PlayerGameStatsByTeam/{season}/{week}/{team}?key=<Your_developer_key>
 */
$resources['operations']['PlayerGameStatsByTeam'] = [
    'httpMethod' => 'GET',
    'uri' => 'PlayerGameStatsByTeam{/Season}{/Week}{/Team}',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ],
        'Season' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ],
        'Week' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ],
        'Team' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ]
    ]
];

/**
 * Action: Get Players Season Stats by Team for Season
 * Resource: PlayerSeasonStatsByTeam
 *
 * http://api.fantasydata.net/nfl/v2/{format}/PlayerSeasonStatsByTeam/{season}/{team}?key=<Your_developer_key>
 */
$resources['operations']['PlayerSeasonStatsByTeam'] = [
    'httpMethod' => 'GET',
    'uri' => 'PlayerSeasonStatsByTeam{/Season}{/Team}',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ],
        'Season' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ],
        'Team' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ]
    ]
];

/**
 * Action: Get Players Game Stats by Player for Season for Week
 * Resource: PlayerGameStatsByPlayerID
 *
 * http://api.fantasydata.net/nfl/v2/{format}/PlayerGameStatsByPlayerID/{season}/{week}/{playerid}?key=<Your_developer_key>
 */
$resources['operations']['PlayerGameStatsByPlayerID'] = [
    'httpMethod' => 'GET',
    'uri' => 'PlayerGameStatsByPlayerID{/Season}{/Week}{/PlayerID}',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ],
        'Season' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ],
        'Week' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ],
        'PlayerID' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ]
    ]
];

/**
 * Action: Get Players Season Stats by Player for Season
 * Resource: PlayerSeasonStatsByPlayerID
 *
 * http://api.fantasydata.net/nfl/v2/{format}/PlayerSeasonStatsByPlayerID/{season}/{playerid}?key=<Your_developer_key>
 */
$resources['operations']['PlayerSeasonStatsByPlayerID'] = [
    'httpMethod' => 'GET',
    'uri' => 'PlayerSeasonStatsByPlayerID{/Season}{/PlayerID}',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ],
        'Season' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ],
        'PlayerID' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ]
    ]
];

/**
 * Action: Get Season League Leaders
 * Resource: SeasonLeagueLeaders
 *
 * http://api.fantasydata.net/nfl/v2/{format}/SeasonLeagueLeaders/{season}/{position}/{column}?key=<Your_developer_key>
 */
$resources['operations']['SeasonLeagueLeaders'] = [
    'httpMethod' => 'GET',
    'uri' => 'SeasonLeagueLeaders{/Season}{/Position}{/Column}',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ],
        'Season' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ],
        'Position' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ],
        'Column' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ]
    ]
];

/**
 * Action: Get Game League Leaders
 * Resource: GameLeagueLeaders
 *
 * http://api.fantasydata.net/nfl/v2/{format}/GameLeagueLeaders/{season}/{week}/{playerid}?key=<Your_developer_key>
 */
$resources['operations']['GameLeagueLeaders'] = [
    'httpMethod' => 'GET',
    'uri' => 'GameLeagueLeaders{/Season}{/Week}{/Position}{/Column}',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ],
        'Season' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ],
        'Week' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ],
        'Position' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ],
        'Column' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ]
    ]
];

/**
 * Action: Get Fantasy Defense By Game
 * Resource: FantasyDefenseByGame
 *
 * http://api.fantasydata.net/nfl/v2/{format}/FantasyDefenseByGame/{season}/{week}?key=<Your_developer_key>
 */
$resources['operations']['FantasyDefenseByGame'] = [
    'httpMethod' => 'GET',
    'uri' => 'FantasyDefenseByGame{/Season}{/Week}',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ],
        'Season' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ],
        'Week' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ]
    ]
];

/**
 * Action: Get Fantasy Defense By Season
 * Resource: FantasyDefenseBySeason
 *
 * http://api.fantasydata.net/nfl/v2/{format}/FantasyDefenseBySeason/{season}?key=<Your_developer_key>
 */
$resources['operations']['FantasyDefenseBySeason'] = [
    'httpMethod' => 'GET',
    'uri' => 'FantasyDefenseBySeason{/Season}',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ],
        'Season' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ]
    ]
];

/**
 * Action: Get Injuries for Season for Week
 * Resource: Injuries
 *
 * http://api.fantasydata.net/nfl/v2/{format}/Injuries/{season}/{week}?key=<Your_developer_key>
 */
$resources['operations']['Injuries'] = [
    'httpMethod' => 'GET',
    'uri' => 'Injuries{/Season}{/Week}{/Team}',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ],
        'Season' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ],
        'Week' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ],
        'Team' => [
            'required' => false,
            'type' => 'string',
            'location' => 'uri'
        ]
    ]
];


/**
 * Action: Get News
 * Resource: News
 *
 * http://api.fantasydata.net/nfl/v2/{format}/News?key=<Your_developer_key>
 */
$resources['operations']['News'] = [
    'httpMethod' => 'GET',
    'uri' => 'News',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ]
    ]
];

/**
 * Action: Get News for Player
 * Resource: NewsByPlayerID
 *
 * http://api.fantasydata.net/nfl/v2/{format}/NewsByPlayerID/{playerid}?key=<Your_developer_key>
 */
$resources['operations']['NewsByPlayerID'] = [
    'httpMethod' => 'GET',
    'uri' => 'NewsByPlayerID{/PlayerID}',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ],
        'PlayerID' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ]
    ]
];

/**
 * Action: Get News for Team
 * Resource: NewsByTeam
 *
 * http://api.fantasydata.net/nfl/v2/{format}/NewsByTeam/{team}?key=<Your_developer_key>
 */
$resources['operations']['NewsByTeam'] = [
    'httpMethod' => 'GET',
    'uri' => 'NewsByTeam{/Team}',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ],
        'Team' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ]
    ]
];

/**
 * Action: Get Box Score
 * Resource: BoxScore
 *
 * http://api.fantasydata.net/nfl/v2/{format}/BoxScore/{season}/{week}/{team}?key=<Your_developer_key>
 */
$resources['operations']['BoxScore'] = [
    'httpMethod' => 'GET',
    'uri' => 'BoxScore{/Season}{/Week}{/Team}',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ],
        'Season' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ],
        'Week' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ],
        'Team' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ]
    ]
];

/**
 * Action: Get Live Box Scores
 * Resource: LiveBoxScores
 *
 * http://api.fantasydata.net/nfl/v2/{format}/LiveBoxScores?key=<Your_developer_key>
 */
$resources['operations']['LiveBoxScores'] = [
    'httpMethod' => 'GET',
    'uri' => 'LiveBoxScores',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ]
    ]
];

/**
 * Action: Get Players Game Stats for Season for Week
 * Resource: PlayerGameStatsByWeek
 *
 * http://api.fantasydata.net/nfl/v2/{format}/PlayerGameStatsByWeek/{season}/{week}?key=<Your_developer_key>
 */
$resources['operations']['PlayerGameStatsByWeek'] = [
    'httpMethod' => 'GET',
    'uri' => 'PlayerGameStatsByWeek{/Season}{/Week}',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ],
        'Season' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ],
        'Week' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ]
    ]
];

/**
 * Action: Get Game Stats for Season
 * Resource: GameStats
 *
 * http://api.fantasydata.net/nfl/v2/{format}/GameStats/{season}?key=<Your_developer_key>
 */
$resources['operations']['GameStats'] = [
    'httpMethod' => 'GET',
    'uri' => 'GameStats{/Season}',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ],
        'Season' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ]
    ]
];

/**
 * Action: Get Game Stats for Season for Week
 * Resource: GameStatsByWeek
 *
 * http://api.fantasydata.net/nfl/v2/{format}/GameStatsByWeek/{season}/{week}?key=<Your_developer_key>
 */
$resources['operations']['GameStatsByWeek'] = [
    'httpMethod' => 'GET',
    'uri' => 'GameStatsByWeek{/Season}{/Week}',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ],
        'Season' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ],
        'Week' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ]
    ]
];

/**
 * Action: Get Timeframes
 * Resource: Timeframes
 *
 * http://api.fantasydata.net/nfl/v2/{format}/Timeframes/{type}?key=<Your_developer_key>
 */
$resources['operations']['Timeframes'] = [
    'httpMethod' => 'GET',
    'uri' => 'Timeframes{/Type}',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ],
        'Type' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ]
    ]
];

/**
 * Action: Get Final Box Scores
 * Resource: FinalBoxScores
 *
 * http://api.fantasydata.net/nfl/v2/{format}/FinalBoxScores?key=<Your_developer_key>
 */
$resources['operations']['FinalBoxScores'] = [
    'httpMethod' => 'GET',
    'uri' => 'FinalBoxScores',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ]
    ]
];

/**
 * Action: Get Active Box Scores
 * Resource: ActiveBoxScores
 *
 * http://api.fantasydata.net/nfl/v2/{format}/ActiveBoxScores?key=<Your_developer_key>
 */
$resources['operations']['ActiveBoxScores'] = [
    'httpMethod' => 'GET',
    'uri' => 'ActiveBoxScores',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ]
    ]
];

/**
 * Action: Get Box Scores for Season for Week
 * Resource: BoxScores
 *
 * http://api.fantasydata.net/nfl/v2/{format}/BoxScores/{season}/{week}?key=<Your_developer_key>
 */
$resources['operations']['BoxScores'] = [
    'httpMethod' => 'GET',
    'uri' => 'BoxScores{/Season}{/Week}',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ],
        'Season' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ],
        'Week' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ]
    ]
];

/**
 * Action: Get Stadiums
 * Resource: Stadiums
 *
 * http://api.fantasydata.net/nfl/v2/{format}/Stadiums?key=<Your_developer_key>
 */
$resources['operations']['Stadiums'] = [
    'httpMethod' => 'GET',
    'uri' => 'Stadiums',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ]
    ]
];

/**
 * Action: Get Projected Players Game Stats by Season, Week and Team
 * Resource: PlayerGameProjectionStatsByTeam
 *
 * http://api.fantasydata.net/nfl/v2/{format}/PlayerGameProjectionStatsByTeam/{season}/{week}/{team}?key=<Your_developer_key>
 */
$resources['operations']['PlayerGameProjectionStatsByTeam'] = [
    'httpMethod' => 'GET',
    'uri' => 'PlayerGameProjectionStatsByTeam{/Season}{/Week}{/Team}',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ],
        'Season' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ],
        'Week' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ],
        'Team' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ]
    ]
];

/**
 * Action: Gets Fantasy Players with ADP
 * Resource: FantasyPlayers
 *
 * http://api.fantasydata.net/nfl/v2/{format}/FantasyPlayers?key=<Your_developer_key>
 */
$resources['operations']['FantasyPlayers'] = [
    'httpMethod' => 'GET',
    'uri' => 'FantasyPlayers',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ]
    ]
];

/**
 * Action: Get Projected Fantasy Defense Stats By Season and Week
 * Resource: FantasyDefenseProjectionsByGame
 *
 * http://api.fantasydata.net/nfl/v2/{format}/FantasyDefenseProjectionsByGame/{season}/{week}?key=<Your_developer_key>
 */
$resources['operations']['FantasyDefenseProjectionsByGame'] = [
    'httpMethod' => 'GET',
    'uri' => 'FantasyDefenseProjectionsByGame{/Season}{/Week}',
    'responseModel' => 'JSON_Resource',
    'parameters' => [
        'Subscription' => [ 'type' => 'string', 'location' => 'uri' ],
        'Format' => [ 'type' => 'string', 'location' => 'uri', 'default' => 'json' ],
        'key' => [ 'type' => 'string', 'location' => 'query' ],
        'Season' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ],
        'Week' => [
            'required' => true,
            'type' => 'string',
            'location' => 'uri'
        ]
    ]
];

/**
 * These models are used by Guzzle to determine how to return the result
 * from any given call.
 *
 * The additionalProperties['location'] tells the guzzle response model
 * where to look for the response data and how to parse it.
 */
$resources['models'] = [
    'JSON_Resource' => [
        'type' => 'object',
        'additionalProperties' => [
            'location' => 'json'
        ]
    ],
    'XML_Resource' => [
        'type' => 'object',
        'additionalProperties' => [
            'location' => 'xml'
        ]
    ]
];

return $resources;