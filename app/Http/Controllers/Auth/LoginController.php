<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    
     /**
     * Prepare the route instance for serialization.
     *
     * @return void
     *
     * @throws LogicException
     */
    public function prepareForSerialization()
    {
        if ($this->action['uses'] instanceof Closure)
        {
            throw new LogicException("Unable to prepare route [{$this->uri}] for serialization. Uses Closure.");
        }

        unset($this->container);

        unset($this->compiled);
    }
}
