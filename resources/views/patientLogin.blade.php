@extends('base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-5 mx-auto">
                <div class="card">
                    <div class="card-header"><h1>Patient Login</h1></div>
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="text" value="{{old('email')}}" class="form-control">
                                @error('email')
                                    <p class="small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">password</label>
                                <input type="password" value="{{old('password')}}" class="form-control">
                                @error('password')
                                    <p class="small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Patient Login" class="btn-btn-success w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection