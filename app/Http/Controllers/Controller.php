<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $provider;
    public function __construct()
    {
        $clientId = '870463578108-fv7pjcof8gg68fpo6992bmuc8fsuqaga.apps.googleusercontent.com';
        $clientSecret = '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';
        $redirectUri = 'http://localhost/login/google/callback';

        session_start();
        $this->provider = new \OAuthClient2Google([
            'clientId' => $clientId,
            'clientSecret' => $clientSecret,
            'redirectUri' => $redirectUri
        ]);
    }
}
