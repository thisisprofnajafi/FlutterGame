@extends('layout')


@section('content')
    <div class="container-fluid">
        <div class="card overflow-hidden">
            <div class="card-body p-0">
                <img src="{{asset('dist/images/backgrounds/profilebg.jpg')}}" alt="" class="img-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-8 order-lg-1 order-2">
                        <div class="d-flex align-items-center justify-content-around m-4">
                            <div class="text-center">
                                <i class="ti ti-device-gamepad-2 fs-6 d-block mb-2"></i>
                                <h4 class="mb-0 fw-semibold lh-1">123</h4>
                                <p class="mb-0 fs-4">Games Played</p>
                            </div>
                            <div class="text-center">
                                <i class="ti ti-coin fs-6 d-block mb-2"></i>
                                <h4 class="mb-0 fw-semibold lh-1">3,123</h4>
                                <p class="mb-0 fs-4">Coins</p>
                            </div>
                            <div class="text-center">
                                <i class="ti ti-medal fs-6 d-block mb-2"></i>
                                <h4 class="mb-0 fw-semibold lh-1">123</h4>
                                <p class="mb-0 fs-4">level</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-n3 order-lg-2 order-1">
                        <div class="mt-n5">
                            <div class="d-flex align-items-center justify-content-center mb-2">
                                <div class="d-flex align-items-center justify-content-center rounded-circle" style="width: 110px; height: 110px; background-color: #fff">
                                    <div class="border border-4 border-white d-flex align-items-center justify-content-center rounded-circle overflow-hidden" style="width: 100px; height: 100px;";>
                                        <img src="{{asset('users/avatars/'.$user->avatar)}}" alt="" class="w-100 h-100">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <h5 class="fs-5 mb-0 fw-semibold">{{$user->name}}</h5>
                                <p class="mb-0 fs-4">{{$user->role->role}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" >
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow-none border">
                            <div class="card-body">
                                <h4 class="fw-semibold mb-3">Detail</h4>
                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex align-items-center gap-3 mb-4">
                                        <i class="ti ti-mail text-dark fs-6"></i>
                                        <h6 class="fs-4 fw-semibold mb-0">{{$user->email}}</h6>
                                    </li>
                                    <li class="d-flex align-items-center gap-3 mb-4">
                                        <i class="ti ti-user text-dark fs-6"></i>
                                        <h6 class="fs-4 fw-semibold mb-0">{{$user->id}}</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title fw-semibold">Games Play</h5>
                                <p class="card-subtitle mb-3">states of all games {{$user->name}} played</p>
                                <div class="table-responsive rounded-2 mb-4">
                                    <table class="table border text-nowrap customize-table mb-0 align-middle">
                                        <thead class="text-dark fs-4">
                                        <tr>
                                            <th><h6 class="fs-4 fw-semibold mb-0">Games</h6></th>
                                            <th><h6 class="fs-4 fw-semibold mb-0">Total playes</h6></th>
                                            <th><h6 class="fs-4 fw-semibold mb-0">Total Week</h6></th>
                                            <th><h6 class="fs-4 fw-semibold mb-0">Total Month</h6></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="rounded-start bg-transparent">
                                                <div class="d-flex align-items-center gap-3">
                                                    <div>
                                                        <i class="ti ti-chess fs-7"></i>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Chess</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><p class="mb-0 fw-normal fs-4">0</p></td>
                                            <td><p class="mb-0 fw-normal fs-4">0</p></td>
                                            <td><p class="mb-0 fw-normal fs-4">0</p></td>

                                        </tr>
                                        <tr>
                                            <td class="rounded-start bg-transparent">
                                                <div class="d-flex align-items-center gap-3">
                                                    <div>
                                                        <i class="ti ti-go-game fs-7"></i>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Go</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><p class="mb-0 fw-normal fs-4">0</p></td>
                                            <td><p class="mb-0 fw-normal fs-4">0</p></td>
                                            <td><p class="mb-0 fw-normal fs-4">0</p></td>

                                        </tr>
                                        <tr>
                                            <td class="rounded-start bg-transparent">
                                                <div class="d-flex align-items-center gap-3">
                                                    <div>
                                                        <i class="ti ti-numbers fs-7"></i>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Number Memory</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><p class="mb-0 fw-normal fs-4">0</p></td>
                                            <td><p class="mb-0 fw-normal fs-4">0</p></td>
                                            <td><p class="mb-0 fw-normal fs-4">0</p></td>

                                        </tr>
                                        <tr>
                                            <td class="rounded-start bg-transparent">
                                                <div class="d-flex align-items-center gap-3">
                                                    <div>
                                                        <i class="ti ti-search fs-7"></i>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Word Search</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><p class="mb-0 fw-normal fs-4">0</p></td>
                                            <td><p class="mb-0 fw-normal fs-4">0</p></td>
                                            <td><p class="mb-0 fw-normal fs-4">0</p></td>

                                        </tr>
                                        <tr>
                                            <td class="rounded-start bg-transparent">
                                                <div class="d-flex align-items-center gap-3">
                                                    <div>
                                                        <img src="{{asset('games/sudoku.png')}}" width="30" height="30"/>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Sudoku</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><p class="mb-0 fw-normal fs-4">0</p></td>
                                            <td><p class="mb-0 fw-normal fs-4">0</p></td>
                                            <td><p class="mb-0 fw-normal fs-4">0</p></td>

                                        </tr>
                                        <tr>
                                            <td class="rounded-start bg-transparent">
                                                <div class="d-flex align-items-center gap-3">
                                                    <div>
                                                        <img src="{{asset('games/chimpanzee.png')}}" width="30" height="30"/>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Chimp Test</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><p class="mb-0 fw-normal fs-4">0</p></td>
                                            <td><p class="mb-0 fw-normal fs-4">0</p></td>
                                            <td><p class="mb-0 fw-normal fs-4">0</p></td>

                                        </tr>
                                        <tr>
                                            <td class="rounded-start bg-transparent">
                                                <div class="d-flex align-items-center gap-3">
                                                    <div>
                                                        <img src="{{asset('games/crossword.png')}}" width="30" height="30"/>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Cross Word</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><p class="mb-0 fw-normal fs-4">0</p></td>
                                            <td><p class="mb-0 fw-normal fs-4">0</p></td>
                                            <td><p class="mb-0 fw-normal fs-4">0</p></td>

                                        </tr>
                                        <tr>
                                            <td class="rounded-start bg-transparent">
                                                <div class="d-flex align-items-center gap-3">
                                                    <div>
                                                        <img src="{{asset('games/strategy-game.png')}}" width="30" height="30"/>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Reversi</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><p class="mb-0 fw-normal fs-4">0</p></td>
                                            <td><p class="mb-0 fw-normal fs-4">0</p></td>
                                            <td><p class="mb-0 fw-normal fs-4">0</p></td>

                                        </tr>
                                        <tr>
                                            <td class="rounded-start bg-transparent">
                                                <div class="d-flex align-items-center gap-3">
                                                    <div>
                                                        <img src="{{asset('games/visual-thinking.png')}}" width="30" height="30"/>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Visual Memory</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><p class="mb-0 fw-normal fs-4">0</p></td>
                                            <td><p class="mb-0 fw-normal fs-4">0</p></td>
                                            <td><p class="mb-0 fw-normal fs-4">0</p></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
