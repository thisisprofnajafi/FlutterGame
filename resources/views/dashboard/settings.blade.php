@extends('layout')


@section('content')
    <div class="container-fluid">
        @if (\Session::has('success'))
            <div class="alert alert-success" role="alert">
                <strong>Success - </strong> {!! \Session::get('success') !!}
            </div>
        @endif

            @if (\Session::has('error'))
                <div class="alert alert-success" role="alert">
                    <strong>Error - </strong> {!! \Session::get('error') !!}
                </div>
            @endif


        <div class="row">
            <div class="col-lg-6 d-flex align-items-center">
                <div class="card w-100 position-relative overflow-hidden">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold">Change Password</h5>
                        <p class="card-subtitle mb-4">To change your password please confirm here</p>
                        <form action="{{route('change pass')}}" method="post">
                            @csrf
                            <div class="mb-4">
                                <label for="exampleInputPassword1" class="form-label fw-semibold">Current
                                    Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="current">
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputPassword1" class="form-label fw-semibold">New Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="new">
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputPassword1" class="form-label fw-semibold">Confirm
                                    Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="newConf">
                            </div>
                            <div class="">
                                <input type="submit" class="form-control btn btn-primary" value="Change Password">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
