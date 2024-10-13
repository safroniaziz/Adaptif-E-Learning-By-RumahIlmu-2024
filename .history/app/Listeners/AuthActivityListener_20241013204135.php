<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Container\Attributes\Auth;
use Spatie\Activitylog\Facades\CauserResolver;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class AuthActivityListener
{
    use LogsActivity;

    public function handle(Login|Logout $event): void
    {
        $user = $event->user;

        if ($user) {
            CauserResolver::setCauser($user);

            $eventName = $event instanceof Login ? 'login' : 'logout';

            activity()
                ->causedBy(Auth::user())
                ->event($eventName)
                ->withProperties([
                    'ip' => request()->ip(),
                    'user_agent' => request()->userAgent(),
                ])
                ->log($user->nama_user . ' telah ' . $eventName . '.');
        }
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['*'])
            ->logOnlyDirty();
    }
}
