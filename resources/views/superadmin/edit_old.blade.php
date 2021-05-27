@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Change User Data</div>

                <div class="card-body">
                    <form action="{{route('update',$user)}}" method="POST">
                        @csrf
                        {{method_field('PUT')}}

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Gender</label>
                            <div class="col-md-6">
                                <select type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" required>
                                    <option selected value="{{$user->gender}}">Unchanged ({{$user->gender}})</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Address</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{$user->address}}" required>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">place_of_birth</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('place_of_birth') is-invalid @enderror" name="place_of_birth" value="{{$user->place_of_birth}}" required>
                                @error('place_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">date_of_birth</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{$user->date_of_birth}}" required>
                                @error('date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">City</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{$user->city}}" required>
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">fyp_batch</label>
                            <div class="col-md-6">
                                <select type="text" class="form-control @error('fyp_batch') is-invalid @enderror" name="fyp_batch" required>
                                    <option selected value="{{$user->fyp_batch}}">Unchanged ({{$user->fyp_batch}})</option>
                                    <option value="Batch 1 (ABN/AAS)">Batch 1 (ABN/AAS)</option>
                                    <option value="Batch 2 (BBN/BAS)">Batch 2 (BBN/BAS)</option>
                                    <option value="Batch 3 (CBN/CAS)">Batch 3 (CBN/CAS)</option>
                                    <option value="Batch 4 (DBN/DAS)">Batch 4 (DBN/DAS)</option>
                                    <option value="Batch 5 (EBN/EAS)">Batch 5 (EBN/EAS)</option>
                                </select>
                                @error('fyp_batch')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">NIM</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{$user->nim}}" required>

                                @error('nim')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Campus</label>
                            <div class="col-md-6">
                                <select type="text" class="form-control @error('campus') is-invalid @enderror" name="campus" value="{{$user->campus}}" required>
                                    <option selected value="{{$user->campus}}">Unchanged ({{$user->campus}})</option>
                                    <option value="Kemanggisan">Kemanggisan</option>
                                    <option value="AlamSutera">Alam Sutera</option>
                                </select>
                                
                                @error('campus')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Major</label>
                            <div class="col-md-6">
                                <select type="text" class="form-control @error('major') is-invalid @enderror" id="major" name="major" value="{{$user->major}}" required>
                                    <option selected value="{{$user->major}}">Unchanged ({{$user->campus}})</option>
                                </select>
                                @error('major')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Phone Number</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{$user->phone_number}}" required>
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Line ID</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('line_id') is-invalid @enderror" name="line_id" value="{{$user->line_id}}" required>
                                @error('line_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Schedule</label>
                            <div class="col-md-6">
                                <select type="text" class="form-control @error('schedule_id') is-invalid @enderror" name="schedule_id" value="" required>
                                    @if($user->schedule!=NULL)
                                    <option selected value="{{$user->schedule->id}}">Unchanged ({{$user->schedule->date}})</option>
                                    @endif
                                    @foreach($schedule as $sch)
                                        <option value="{{$sch->id}}">{{$sch->date}}({{$sch->quota}} slots left)</option>
                                    @endforeach
                                </select>
                                @error('schedule_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">LnT Subject</label>
                            <div class="col-md-6">
                                <select type="text" class="form-control @error('lnt_subject') is-invalid @enderror" name="lnt_subject" value="{{$user->lnt_subject}}" required>
                                    <option selected value="{{$user->lnt_subject}}">Unchanged ({{$user->lnt_subject}})</option>
                                    <option value="Java Programming">Java Programming</option>
                                    <option value="Web Programming">Web Programming</option>
                                    <option value="Web Design">Web Design</option>
                                    <option value="UI/UX">UI/UX</option>
                                    <option value="Mobile Apps">Mobile Apps</option>
                                    <option value="C Programming'">C Programming'</option>
                                </select>
                                @error('lnt_subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit Changes
                                </button>
                                <a class="btn btn-danger" href="/superadmin">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script src="{{asset('asset/lib/jquery/jquery.js')}}" type="text/javascript"></script>
<script src="{{asset('asset/lib/bootstrap/bootstrap.js')}}" type="text/javascript"></script>
<script src="{{asset('js/regis.js')}}" type="text/javascript"></script>