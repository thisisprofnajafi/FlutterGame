@extends('layout')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 d-flex align-items-stretch">
                <div class="card w-100 bg-light-info overflow-hidden shadow-none">
                    <div class="card-body position-relative">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="d-flex align-items-center mb-7">
                                    <div class="rounded-circle overflow-hidden me-6">
                                        <img
                                            src="{{asset('users/avatars/'.\Illuminate\Support\Facades\Auth::user()->avatar)}}"
                                            alt="" width="40" height="40">
                                    </div>
                                    <h5 class="fw-semibold mb-0 fs-5">Welcome
                                        back {{\Illuminate\Support\Facades\Auth::user()->name}}!</h5>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="border-end pe-4  border-opacity-10">
                                        <h3 class="mb-1 fw-semibold fs-8 d-flex align-content-center">$0<i
                                                class="ti ti-arrow-up-right fs-5 lh-base text-success"></i></h3>
                                        <p class="mb-0 text-dark">Today’s Sales</p>
                                    </div>
                                    {{--                                    <div class="ps-4">--}}
                                    {{--                                        <h3 class="mb-1 fw-semibold fs-8 d-flex align-content-center">35%<i class="ti ti-arrow-up-right fs-5 lh-base text-success"></i></h3>--}}
                                    {{--                                        <p class="mb-0 text-dark">Overall Performance</p>--}}
                                    {{--                                    </div>--}}
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="welcome-bg-img mb-n7 text-end">
                                    <img src="../../dist/images/backgrounds/welcome-bg.svg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h4 class="fw-semibold">$0</h4>
                        <p class="mb-2 fs-3">Total</p>
                        <div id="expense"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h4 class="fw-semibold">$0</h4>
                        <p class="mb-1 fs-3">Week Sales</p>
                        <div id="sales" class="sales-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="d-sm-flex d-block align-items-center justify-content-between mb-3">
                            <div class="mb-3 mb-sm-0">
                                <h5 class="card-title fw-semibold">Orders</h5>
                                <p class="card-subtitle">Details</p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle text-nowrap mb-0">
                                <thead>
                                <tr class="text-muted fw-semibold">
                                    <th scope="col" class="ps-0">User</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Item</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                </tr>
                                </thead>
                                <tbody class="border-top">
                                <tr>
                                    <td class="ps-0">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 pe-1">
                                                <img
                                                    src="{{asset('users/avatars/'.\Illuminate\Support\Facades\Auth::user()->avatar)}}"
                                                    class="rounded-2" width="48" height="48" alt=""/>
                                            </div>
                                            <div>
                                                <h6 class="fw-semibold mb-1">Abolfazl</h6>
                                                <p class="fs-2 mb-0 text-muted">Abol@gmail.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0 fs-3 text-dark">$10</p>
                                    </td>
                                    <td>
                                        <p class="fs-3 text-dark mb-0 fw-bolder">100 coin</p>
                                    </td>
                                    <td>
                                        <p class="fs-3 text-dark mb-0">{{\Carbon\Carbon::now()->subWeeks(4)->subHours(23)->toDayDateTimeString()}}</p>
                                    </td>
                                    <td>
                                        <span class="badge fw-semibold py-1 w-85 bg-light text-success">Payed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-0">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 pe-1">
                                                <img
                                                    src="{{asset('users/avatars/'.\Illuminate\Support\Facades\Auth::user()->avatar)}}"
                                                    class="rounded-2" width="48" height="48" alt=""/>
                                            </div>
                                            <div>
                                                <h6 class="fw-semibold mb-1">Abolfazl</h6>
                                                <p class="fs-2 mb-0 text-muted">Abol@gmail.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0 fs-3 text-dark">$10</p>
                                    </td>
                                    <td>
                                        <p class="fs-3 text-dark mb-0 fw-bolder">100 coin</p>
                                    </td>
                                    <td>
                                        <p class="fs-3 text-dark mb-0">{{\Carbon\Carbon::now()->subWeeks(4)->subHours(23)->toDayDateTimeString()}}</p>
                                    </td>
                                    <td>
                                        <span class="badge fw-semibold py-1 w-85 bg-light text-success">Payed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-0">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 pe-1">
                                                <img
                                                    src="{{asset('users/avatars/'.\Illuminate\Support\Facades\Auth::user()->avatar)}}"
                                                    class="rounded-2" width="48" height="48" alt=""/>
                                            </div>
                                            <div>
                                                <h6 class="fw-semibold mb-1">Abolfazl</h6>
                                                <p class="fs-2 mb-0 text-muted">Abol@gmail.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0 fs-3 text-dark">$10</p>
                                    </td>
                                    <td>
                                        <p class="fs-3 text-dark mb-0 fw-bolder">100 coin</p>
                                    </td>
                                    <td>
                                        <p class="fs-3 text-dark mb-0">{{\Carbon\Carbon::now()->subWeeks(4)->subHours(23)->toDayDateTimeString()}}</p>
                                    </td>
                                    <td>
                                        <span class="badge fw-semibold py-1 w-85 bg-light text-success">Payed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-0">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 pe-1">
                                                <img
                                                    src="{{asset('users/avatars/'.\Illuminate\Support\Facades\Auth::user()->avatar)}}"
                                                    class="rounded-2" width="48" height="48" alt=""/>
                                            </div>
                                            <div>
                                                <h6 class="fw-semibold mb-1">Abolfazl</h6>
                                                <p class="fs-2 mb-0 text-muted">Abol@gmail.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0 fs-3 text-dark">$10</p>
                                    </td>
                                    <td>
                                        <p class="fs-3 text-dark mb-0 fw-bolder">100 coin</p>
                                    </td>
                                    <td>
                                        <p class="fs-3 text-dark mb-0">{{\Carbon\Carbon::now()->subWeeks(4)->subHours(23)->toDayDateTimeString()}}</p>
                                    </td>
                                    <td>
                                        <span class="badge fw-semibold py-1 w-85 bg-light text-success">Payed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-0">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 pe-1">
                                                <img
                                                    src="{{asset('users/avatars/'.\Illuminate\Support\Facades\Auth::user()->avatar)}}"
                                                    class="rounded-2" width="48" height="48" alt=""/>
                                            </div>
                                            <div>
                                                <h6 class="fw-semibold mb-1">Abolfazl</h6>
                                                <p class="fs-2 mb-0 text-muted">Abol@gmail.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0 fs-3 text-dark">$10</p>
                                    </td>
                                    <td>
                                        <p class="fs-3 text-dark mb-0 fw-bolder">100 coin</p>
                                    </td>
                                    <td>
                                        <p class="fs-3 text-dark mb-0">{{\Carbon\Carbon::now()->subWeeks(4)->subHours(23)->toDayDateTimeString()}}</p>
                                    </td>
                                    <td>
                                        <span class="badge fw-semibold py-1 w-85 bg-light text-success">Payed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-0">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 pe-1">
                                                <img
                                                    src="{{asset('users/avatars/'.\Illuminate\Support\Facades\Auth::user()->avatar)}}"
                                                    class="rounded-2" width="48" height="48" alt=""/>
                                            </div>
                                            <div>
                                                <h6 class="fw-semibold mb-1">Abolfazl</h6>
                                                <p class="fs-2 mb-0 text-muted">Abol@gmail.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0 fs-3 text-dark">$10</p>
                                    </td>
                                    <td>
                                        <p class="fs-3 text-dark mb-0 fw-bolder">100 coin</p>
                                    </td>
                                    <td>
                                        <p class="fs-3 text-dark mb-0">{{\Carbon\Carbon::now()->subWeeks(4)->subHours(23)->toDayDateTimeString()}}</p>
                                    </td>
                                    <td>
                                        <span class="badge fw-semibold py-1 w-85 bg-light text-success">Payed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-0">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 pe-1">
                                                <img
                                                    src="{{asset('users/avatars/'.\Illuminate\Support\Facades\Auth::user()->avatar)}}"
                                                    class="rounded-2" width="48" height="48" alt=""/>
                                            </div>
                                            <div>
                                                <h6 class="fw-semibold mb-1">Abolfazl</h6>
                                                <p class="fs-2 mb-0 text-muted">Abol@gmail.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0 fs-3 text-dark">$10</p>
                                    </td>
                                    <td>
                                        <p class="fs-3 text-dark mb-0 fw-bolder">100 coin</p>
                                    </td>
                                    <td>
                                        <p class="fs-3 text-dark mb-0">{{\Carbon\Carbon::now()->subWeeks(4)->subHours(23)->toDayDateTimeString()}}</p>
                                    </td>
                                    <td>
                                        <span class="badge fw-semibold py-1 w-85 bg-light text-success">Payed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-0">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 pe-1">
                                                <img
                                                    src="{{asset('users/avatars/'.\Illuminate\Support\Facades\Auth::user()->avatar)}}"
                                                    class="rounded-2" width="48" height="48" alt=""/>
                                            </div>
                                            <div>
                                                <h6 class="fw-semibold mb-1">Abolfazl</h6>
                                                <p class="fs-2 mb-0 text-muted">Abol@gmail.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0 fs-3 text-dark">$10</p>
                                    </td>
                                    <td>
                                        <p class="fs-3 text-dark mb-0 fw-bolder">100 coin</p>
                                    </td>
                                    <td>
                                        <p class="fs-3 text-dark mb-0">{{\Carbon\Carbon::now()->subWeeks(4)->subHours(23)->toDayDateTimeString()}}</p>
                                    </td>
                                    <td>
                                        <span class="badge fw-semibold py-1 w-85 bg-light text-success">Payed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-0">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 pe-1">
                                                <img
                                                    src="{{asset('users/avatars/'.\Illuminate\Support\Facades\Auth::user()->avatar)}}"
                                                    class="rounded-2" width="48" height="48" alt=""/>
                                            </div>
                                            <div>
                                                <h6 class="fw-semibold mb-1">Abolfazl</h6>
                                                <p class="fs-2 mb-0 text-muted">Abol@gmail.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0 fs-3 text-dark">$10</p>
                                    </td>
                                    <td>
                                        <p class="fs-3 text-dark mb-0 fw-bolder">100 coin</p>
                                    </td>
                                    <td>
                                        <p class="fs-3 text-dark mb-0">{{\Carbon\Carbon::now()->subWeeks(4)->subHours(23)->toDayDateTimeString()}}</p>
                                    </td>
                                    <td>
                                        <span class="badge fw-semibold py-1 w-85 bg-light text-success">Payed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-0">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 pe-1">
                                                <img
                                                    src="{{asset('users/avatars/'.\Illuminate\Support\Facades\Auth::user()->avatar)}}"
                                                    class="rounded-2" width="48" height="48" alt=""/>
                                            </div>
                                            <div>
                                                <h6 class="fw-semibold mb-1">Abolfazl</h6>
                                                <p class="fs-2 mb-0 text-muted">Abol@gmail.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0 fs-3 text-dark">$10</p>
                                    </td>
                                    <td>
                                        <p class="fs-3 text-dark mb-0 fw-bolder">100 coin</p>
                                    </td>
                                    <td>
                                        <p class="fs-3 text-dark mb-0">{{\Carbon\Carbon::now()->subWeeks(4)->subHours(23)->toDayDateTimeString()}}</p>
                                    </td>
                                    <td>
                                        <span class="badge fw-semibold py-1 w-85 bg-light text-success">Payed</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
