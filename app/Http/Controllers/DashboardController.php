<?php

namespace App\Http\Controllers;

use App\Models\Chess;
use App\Models\ChimpTest;
use App\Models\CrossWord;
use App\Models\Game;
use App\Models\Go;
use App\Models\NumberMemory;
use App\Models\Reversi;
use App\Models\Sudoku;
use App\Models\User;
use App\Models\VisualMemroy;
use App\Models\WordSearch;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {

        $games = Game::all();
        $playingGames = $games->where('status', 'playing');
        $todayGames = $playingGames->where('status', 'finish')->where('created_at', '=>', Carbon::now()->subDay())->count();
        $weekGames = $playingGames->where('status', 'finish')->where('created_at', '=>', Carbon::now()->subWeek())->count();

        $chess = Chess::all();
        $go = Go::all();
        $numberMemory = NumberMemory::all();
        $wordSearch = WordSearch::all();
        $sudoku = Sudoku::all();
        $chimpTest = ChimpTest::all();
        $crossWord = CrossWord::all();
        $reversi = Reversi::all();
        $visualMemory = VisualMemroy::all();

        return view('dashboard.index')->with([
            "games" => $games,
            "playingGames" => $playingGames,
            "todayGames" => $todayGames,
            "weekGames" => $weekGames,
            "chess" => $chess,
            "go" => $go,
            "numberMemory" => $numberMemory,
            "wordSearch" => $wordSearch,
            "sudoku" => $sudoku,
            "chimpTest" => $chimpTest,
            "crossWord" => $crossWord,
            "reversi" => $reversi,
            "visualMemory" => $visualMemory,
        ]);
    }

    public function indexSales()
    {
        return view('dashboard.sales');
    }

    public function indexUsers()
    {

        $users = User::all();
        $today = $users->where('created_at', '>=', Carbon::now()->subDay())->count();
        $week = $users->where('created_at', '>=', Carbon::now()->subWeek())->count();
        $month = $users->where('created_at', '>=', Carbon::now()->subMonth())->count();

        return view('dashboard.users')->with([
            'users' => $users,
            'today' => $today,
            'week' => $week,
            'month' => $month,
        ]);
    }

    public function user($id)
    {

        $user = User::find($id);


        return view('dashboard.user')->with([
            'user' => $user
        ]);
    }

    public function settings()
    {
        return view('dashboard.settings');
    }

    public function changePass(Request $request)
    {
        $request->validate([
            'current' => 'required',
            'new' => 'required',
            'newConf' => 'required',
        ]);

        $user = Auth::user();
        if (Hash::check($request->current, $user->password) && $request->new == $request->newConf) {
            $user->password = Hash::make($request->new);
            $user->save();
            return redirect()->back()->with('success', 'Password updated successfully');
        }
        return redirect()->back()->with('error', 'Password not updated');
    }
}
