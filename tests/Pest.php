<?php

use IgorLealAntunes\SportmonksFootballApi\SportmonksFootballApi;
use IgorLealAntunes\SportmonksFootballApi\Tests\TestCase;

uses(TestCase::class)->in(__DIR__);

function football()
{
    return new SportmonksFootballApi(
        'https://api.sportmonks.com/v3/football/',
        'Your-Sportsmonks-Api-Token',
        'UTC'
    );
}
