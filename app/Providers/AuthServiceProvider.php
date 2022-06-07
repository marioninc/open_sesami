<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // 管理者以上に許可
        Gate::define('master', function ($user) {
            return ($user->user_role_id == 1);
        });
        // ホスト以上に許可
        Gate::define('host', function ($user) {
            return ($user->user_role_id <= 2);
        });
        // ゲスト以上に許可
        Gate::define('guest', function ($user) {
            return ($user->user_role_id <= 3);
        });
    }
}
