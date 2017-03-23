<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\SocialProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        try{
            $socialUser = Socialite::driver($provider)->user();
            $socialProvider = SocialProvider::where('provider_id',$socialUser->getId())->first();

            if(!$socialProvider)
            {
                $user = User::firstOrCreate(
                    ['email' => $socialUser->getEmail()],
                    ['name' => $socialUser->getName()]
                );

                $user->socialProvider()->create(
                    ['provider_id'=>$socialUser->getId(), 'provider'=>$provider]
                );
            }else{
                $user = $socialProvider->user;
            }
            auth()->login($user);
          return  redirect('/');
        }catch (\Exception $e)
        {
            return redirect('/');
        }

    }
}
