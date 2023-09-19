@extends('layout')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-xl-3">
                <div class="card bg-light-primary shadow-none">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center">
                            <div class="round rounded bg-primary d-flex align-items-center justify-content-center">
                                <i class="ti ti-users text-white fs-7"></i>
                            </div>
                            <h6 class="mb-0 ms-3">Total users</h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                            <h3 class="mb-0 fw-semibold fs-7">{{count($users)}}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card bg-light-danger shadow-none">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center">
                            <div class="round rounded bg-danger d-flex align-items-center justify-content-center">
                                <i class="ti ti-user text-white fs-7"></i>
                            </div>
                            <h6 class="mb-0 ms-3">Joined Today</h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                            <h3 class="mb-0 fw-semibold fs-7">{{$today}}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card bg-light-success shadow-none">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center">
                            <div class="round rounded bg-success d-flex align-items-center justify-content-center">
                                <i class="ti ti-user-plus text-white fs-7" title="LTC"></i>
                            </div>
                            <h6 class="mb-0 ms-3">Joined Last Week</h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                            <h3 class="mb-0 fw-semibold fs-7">{{$week}}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card bg-light-success shadow-none">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center">
                            <div class="round rounded bg-warning d-flex align-items-center justify-content-center">
                                <i class="ti ti-user-code text-white fs-7" title="LTC"></i>
                            </div>
                            <h6 class="mb-0 ms-3">Joined Last month</h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                            <h3 class="mb-0 fw-semibold fs-7">{{$month}}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="d-sm-flex d-block align-items-center justify-content-between mb-3">
                            <div class="mb-3 mb-sm-0">
                                <h5 class="card-title fw-semibold">Users</h5>
                                <p class="card-subtitle">Details</p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle text-nowrap mb-0">
                                <thead>
                                <tr class="text-muted fw-semibold">
                                    <th scope="col" class="ps-0">User</th>
                                    <th scope="col">Games Played</th>
                                    <th scope="col">Level</th>
                                    <th scope="col">Coins</th>
                                    <th scope="col">Date Joined</th>
                                </tr>
                                </thead>
                                <tbody class="border-top">

                                @foreach($users as $user)
                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 pe-1">
                                                    <a href="{{route('user',['id'=>$user->id])}}">
                                                    <img
                                                        src="{{asset('users/avatars/'.$user->avatar)}}"
                                                        class="rounded-2" width="48" height="48" alt=""/>
                                                    </a>
                                                </div>
                                                <div>
                                                    <h6 class="fw-semibold mb-1">{{$user->name}}</h6>
                                                    <p class="fs-2 mb-0 text-muted">{{$user->email}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 fs-3 text-dark">40</p>
                                        </td>
                                        <td>
                                            <p class="fs-3 text-dark mb-0 fw-bolder">12</p>
                                        </td>
                                        <td>
                                            <span class="badge fw-semibold py-1 w-85 bg-light-warning text-warning">1200</span>
                                        </td>
                                        <td>
                                            <p class="fs-3 text-dark mb-0">{{\Carbon\Carbon::create($user->created_at)->toDayDateTimeString()}}</p>
                                        </td>

                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
