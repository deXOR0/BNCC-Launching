@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Change Schedule Data</div>

                <div class="card-body">
                    <form action="{{route('sch_update',$schedule)}}" method="POST">
                        @csrf
                        {{method_field('PUT')}}

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Last date value : {{$schedule->date}}</label>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Date</label>
                            <div class="col-md-6">
                                <input type="datetime-local" class="form-control @error('date') is-invalid @enderror" name="date" value="" required>
                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Quota</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control @error('quota') is-invalid @enderror" name="quota" value="{{$schedule->quota}}" required>
                                @error('quota')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Link</label>
                            <div class="col-md-6">
                                <input type="url" class="form-control @error('link') is-invalid @enderror" name="link" value="{{$schedule->link}}" required>
                                @error('link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Link2</label>
                            <div class="col-md-6">
                                <input type="url" class="form-control @error('link2') is-invalid @enderror" name="link2" value="{{$schedule->link2}}" required>
                                @error('link2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit Changes') }}
                                </button>
                                <a class="btn btn-danger" href="/schedule">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
