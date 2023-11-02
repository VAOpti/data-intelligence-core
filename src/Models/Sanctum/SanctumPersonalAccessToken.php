<?php

namespace VisionAura\DataIntelligenceCore\Models\Sanctum;

use VisionAura\LaravelCore\Models\PersonalAccessToken;

class SanctumPersonalAccessToken extends PersonalAccessToken
{
    protected $connection = 'central_db';

    protected $table = 'personal_access_tokens';
}