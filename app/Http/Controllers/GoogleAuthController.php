<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirect()
    {

        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        try {
            $google_user = Socialite::driver('google')->user();

            $user=User::where('google_id',$google_user->getId())->first();
            if($user){
                if(!$user->google_id){
                    $user->google_id=$google_user->getId();
                    $user->save();
                //    Auth::login($user);
                }
                Auth::login($user);
               return redirect()->route('dashboard');
            }else{
                // Auth::login($user);
                // return redirect()->intended('dashboard');
                $new_user = User::create([
                    'username' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId()
                ]);
               Auth::login($new_user);
               return redirect()->route('dashboard');
            }

        } catch (\Throwable $th) {
          dd('Something went wrong', $th->getMessage());
          //  return redirect('/login')->with('error', 'Google authentication failed.');
        }
    }
}
