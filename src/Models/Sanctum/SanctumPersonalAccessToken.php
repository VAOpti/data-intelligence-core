<?php

namespace VisionAura\DataIntelligenceCore\Models\Sanctum;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Laravel\Sanctum\PersonalAccessToken;

class SanctumPersonalAccessToken extends PersonalAccessToken
{
    use HasUuids;

    protected $connection = 'central_db';
}