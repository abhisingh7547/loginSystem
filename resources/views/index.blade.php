@extends('base')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 my-2">
                <h1 class="display-4 text-center">Happy Dcotor Day</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header text-center">Patient Login</div>
                    <div class="card-body d-flex">
                        <a href="{{route('patientLogin')}}" class="btn btn-success w-50 mx-2 py-3">Patient Login</a>
                        <a href="{{route('patientSignup')}}" class="btn btn-dark w-50 mx-2 py-3">create and Accoint</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header text-center">Doctor Login</div>
                    <div class="card-body d-flex">
                        <a href="{{route('doctorLogin')}}" class="btn btn-warning w-50 mx-2 py-3">Dcotor Login</a>
                        <a href="{{route('doctorSignup')}}" class="btn btn-dark w-50 mx-2 py-3">create and Accoint</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection