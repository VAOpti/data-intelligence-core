<?php

namespace VisionAura\DataIntelligenceCore\Http\Middleware;

use VisionAura\DataIntelligenceCore\Models\Application;
use VisionAura\LaravelCore\Http\Middleware\ValidateApplication as BaseValidateApplication;

class ValidateApplication extends BaseValidateApplication
{
    /** @inheritdoc */
    protected string $applicationClass = Application::class;
}