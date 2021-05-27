<?php

namespace App\Http\Controllers;

use App\Visit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Schedule;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\RedirectsUsers;
use App\Http\Controllers\Auth\RegisterController;


class VisitController extends RegisterController
{
    
    public function showRegistrationForm(){
        $visit = Visit::where('id',1)->first();
        $visit->count++;
        $visit->save();
        $schedule=Schedule::get(['date','quota']);
        return view('auth.register-ig', compact('schedule'));
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        $visit = Visit::where('id',2)->first();
        $visit->count++;
        $visit->save();

        return $this->registered($request, $user)
                        ?: redirect('/home');
    }

    
}
