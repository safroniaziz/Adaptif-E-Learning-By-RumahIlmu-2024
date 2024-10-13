<?php
namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Facades\LogActivity;

class LogSuccessfulLogin
{
    public function handle(Login $event)
    {
        $user = $event->user;

        activity()
            ->causedBy(Auth::user())  // Pengguna yang login
            ->event('login')   // Event login
            ->withProperties([
                'ip' => request()->ip(),
                'user_agent' => request()->userAgent(),
            ])
            ->log($user->nama_user . ' telah login.');
    }
}
