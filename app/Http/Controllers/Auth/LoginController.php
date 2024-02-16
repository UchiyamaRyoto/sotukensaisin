<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    protected $provider;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
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

    public function username()
    {
       return 'username';
    }

    public function newly()
    {
        $authUrl = $this->provider->getAuthorizationUrl();
        $_SESSION['oauth2state'] = $this->provider->getState();
        return redirect($authUrl);
    }
    public function create()
    {
        if (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {
        throw new Exception('invalid state');
        }
        $token = $this->provider->getAccessToken('authorization_code', [
            'code' => $_GET['code']
        ]);

        $_SESSION['token'] = serialize($token);

        return redirect($this->redirectTo);
        //return redirect()->route('OauthLogin');
    }
}
