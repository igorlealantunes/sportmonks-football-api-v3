<?php

it('can get schedules by season id', function () {
    expect(football()->schedule()->bySeasonId(
        id: 718
    ))->toBeArray();
});

it('can get schedules by team id', function () {
    expect(football()->schedule()->byTeamId(
        id: 1
    ))->toBeArray();
});

it('can get schedules by season id and team id', function () {
    expect(football()->schedule()->bySeasonIdAndTeamId(
        seasonId: 718,
        teamId: 1
    ))->toBeArray();
});
