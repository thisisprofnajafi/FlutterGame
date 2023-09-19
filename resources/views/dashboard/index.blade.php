@extends('layout')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-xl-3">
                <div class="card bg-light-primary shadow-none">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center">
                            <div class="round rounded bg-primary d-flex align-items-center justify-content-center">
                                <i class="ti ti-chess-knight text-white fs-7"></i>
                            </div>
                            <h6 class="mb-0 ms-3">Total Games</h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                            <h3 class="mb-0 fw-semibold fs-7">{{count($games)}}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card bg-light-danger shadow-none">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center">
                            <div class="round rounded bg-danger d-flex align-items-center justify-content-center">
                                <i class="ti ti-chess-bishop text-white fs-7"></i>
                            </div>
                            <h6 class="mb-0 ms-3">Playing Games</h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                            <h3 class="mb-0 fw-semibold fs-7">{{$playingGames->count()}}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card bg-light-success shadow-none">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center">
                            <div class="round rounded bg-success d-flex align-items-center justify-content-center">
                                <i class="ti ti-chess-king text-white fs-7" title="LTC"></i>
                            </div>
                            <h6 class="mb-0 ms-3">Today Plays</h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                            <h3 class="mb-0 fw-semibold fs-7">{{$todayGames}}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card bg-light-success shadow-none">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center">
                            <div class="round rounded bg-warning d-flex align-items-center justify-content-center">
                                <i class="ti ti-chess-queen text-white fs-7" title="LTC"></i>
                            </div>
                            <h6 class="mb-0 ms-3">Week Plays</h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                            <h3 class="mb-0 fw-semibold fs-7">{{$weekGames}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold">Games details</h5>
                <p class="card-subtitle mb-3">states of all games are here</p>
                <div class="table-responsive rounded-2 mb-4">
                    <table class="table border text-nowrap customize-table mb-0 align-middle">
                        <thead class="text-dark fs-4">
                        <tr>
                            <th><h6 class="fs-4 fw-semibold mb-0">Games</h6></th>
                            <th><h6 class="fs-4 fw-semibold mb-0">Total playes</h6></th>
                            <th><h6 class="fs-4 fw-semibold mb-0">Playing</h6></th>
                            <th><h6 class="fs-4 fw-semibold mb-0">Total Today</h6></th>
                            <th><h6 class="fs-4 fw-semibold mb-0">Total Week</h6></th>
                            <th><h6 class="fs-4 fw-semibold mb-0">Total Month</h6></th>
                            <th><h6 class="fs-4 fw-semibold mb-0">Total Year</h6></th>
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
@endsection
