<?php

namespace VisionAura\DataIntelligenceCore\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;
use VisionAura\DataIntelligenceCore\Models\CoreUser;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Relation::enforceMorphMap([
            'user' => CoreUser::class,
        ]);
    }
}