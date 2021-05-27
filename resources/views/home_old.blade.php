@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                <div>
                    <label for="">Name : </label>
                    <label for="">{{$user->name}}</label>
                </div>

                <div>
                    <label for="">NIM : </label>
                    <label for="">{{$user->nim}}</label>
                </div>
                
                <div>
                    <label for="">Gender : </label>
                    <label for="">{{$user->gender}}</label>
                </div>
                
                <div>
                    <label for="">Address : </label>
                    <label for="">{{$user->address}}</label>
                </div>
                
                <div>
                    <label for="">Domisili : </label>
                    <label for="">{{$user->city}}</label>
                </div>

                <div>
                    <label for="">Place of birth : </label>
                    <label for="">{{$user->place_of_birth}}</label>
                </div>

                <div>
                    <label for="">date_of_birth : </label>
                    <label for="">{{$user->date_of_birth}}</label>
                </div>
                
                <div>
                    <label for="">FYP batch : </label>
                    <label for="">{{$user->fyp_batch}}</label>
                </div>

                <div>
                    <label for="">Campus : </label>
                    <label for="">{{$user->campus}}</label>
                </div>

                <div>
                    <label for="">Major : </label>
                    <label for="">{{$user->major}}</label>
                </div>

                <div>
                    <label for="">Phone number : </label>
                    <label for="">{{$user->phone_number}}</label>
                </div>

                <div>
                    <label for="">Line ID : </label>
                    <label for="">{{$user->line_id}}</label>
                </div>

                <div>
                    <label for="">Schedule : </label>
                    <label for="">{{$user->schedule->date}}</label>
                </div>

                <div>
                    <label for="">Subject : </label>
                    <label for="">{{$user->lnt_subject}}</label>
                </div>

                <div>
                    <label for="">Link BL : </label>
                    <a href="{{$user->schedule->link}}" target="_blank" rel="noopener noreferrer">Link</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
