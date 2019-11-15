<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Models\OauthUser;
use Auth;


class OauthUserController extends Controller
{

    public function redirectToProvider($account)
    {
        return Socialite::driver($account)->redirect();
    }

    public function handleProviderCallback($account)
    {
        $oauth_user = Socialite::driver($account)->user();

        $user = OauthUser::where('provider_id', $oauth_user->getId())
                    ->where('provider_type', $account)
                    ->first();
        if ($user === null) {
            $user = OauthUser::create([
                'name' => $oauth_user->getName()?:'',
                'provider_type' => $account,
                'provider_id' => $oauth_user->getId(),
                'email' => $oauth_user->getEmail() ? :'',
                'avatar' => $oauth_user->getAvatar() ? :'',
            ]);
        }
        Auth::guard('api')->login($user);
        return redirect()->intended(route('root'));
    }

}
