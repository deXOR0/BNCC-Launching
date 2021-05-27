<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Schedule;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        $schedule=Schedule::get(['date','quota']);
        return view('auth.register', compact('schedule'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // dd($data);
        if(array_key_exists('schedule_id',$data)){
            $schedule = Schedule::find($data['schedule_id']);
            // dd($schedule->quota);
            if($schedule->quota > 0){
                $data['isQuotaNotZero'] = 1;
            }else{
                $data['isQuotaNotZero'] = 0;
            }
            // dd($isQuotaNotZero);
            $message = [
                'isQuotaNotZero.accepted' => 'Selected schedule is full, please select another one'
            ];
            return Validator::make($data, [
                'name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]*$/'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'gender' => ['required'],
                'address' => ['required'],
                'city' => ['required'],
                'place_of_birth' => ['required'],
                'date_of_birth' => ['required'],
                'fyp_batch' => ['required'],
                'nim' => ['required', 'string', 'digits:10', 'regex:/^(22|23|24)\d+/', 'unique:App\User,nim'],
                'campus' => ['required', 'string'],
                'major' => ['required', 'string'],
                'phone_number' => ['required','string','numeric','digits_between:10,14'],
                'line_id' => ['required', 'string'],
                'isQuotaNotZero' => ['accepted'],
            ], $message);
        }else{
            return Validator::make($data, [
                'name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]*$/'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'gender' => ['required'],
                'address' => ['required'],
                'city' => ['required'],
                'place_of_birth' => ['required'],
                'date_of_birth' => ['required'],
                'fyp_batch' => ['required'],
                'nim' => ['required', 'string', 'digits:10', 'regex:/^(22|23|24)\d+/', 'unique:App\User,nim'],
                'campus' => ['required', 'string'],
                'major' => ['required', 'string'],
                'phone_number' => ['required','string','numeric','digits_between:10,14'],
                'line_id' => ['required', 'string'],
            ]);
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if(array_key_exists('schedule_id',$data)){
            $schedule = Schedule::find($data['schedule_id']);
            $schedule->quota--;
            $schedule->save();
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'gender' => $data['gender'],
                'address' => $data['address'],
                'city' => $data['city'],
                'place_of_birth' => $data['place_of_birth'],
                'date_of_birth' => $data['date_of_birth'],
                'fyp_batch' => $data['fyp_batch'],
                'nim' => $data['nim'],
                'campus' => $data['campus'],
                'major' => $data['major'],
                'phone_number' => $data['phone_number'],
                'line_id' => $data['line_id'],
                'schedule_id' => $data['schedule_id'],
                'lnt_subject' => $data['lnt_subject'],
            ]);
        }
        else
        {
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'gender' => $data['gender'],
                'address' => $data['address'],
                'city' => $data['city'],
                'place_of_birth' => $data['place_of_birth'],
                'date_of_birth' => $data['date_of_birth'],
                'fyp_batch' => $data['fyp_batch'],
                'nim' => $data['nim'],
                'campus' => $data['campus'],
                'major' => $data['major'],
                'phone_number' => $data['phone_number'],
                'line_id' => $data['line_id'],
                'lnt_subject' => $data['lnt_subject'],
                //sementara
                'schedule_id' => 19,
            ]);
        }
    }
}
