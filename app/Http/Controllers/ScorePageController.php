<?php

namespace App\Http\Controllers;

use App\Models\Cigarette;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\View\View;

class ScorePageController extends Controller
{
    public function index(Request $request):View
    {
//        if (auth()->check()) {
//            $loginTime = session('login_time');
//            $lastActivityTime = session('last_activity_time', now());
//            $timeSpent = $lastActivityTime->diffInSeconds($loginTime);
//
//            return view('Score.score-page', compact('timeSpent'));
//        }
        // Retrieve the start time from the request
        $startTime = $request->attributes->get('startTime');

        // Calculate the time spent
        $timeSpent = now()->diffInSeconds($startTime);


        $dayQuit = User::query()->where('id', auth()->user()->id)->pluck('day_quit')->first();
        $today = date('Y-m-d');
        $carbonDate1 = Carbon::parse($dayQuit);
        $carbonDate2 = Carbon::parse($today);
        $daysDifference = $carbonDate1->diffInDays($carbonDate2);



        $user = User::query()->where('id', auth()->user()->id)->first();
        $userCigarette = $user->cigarette()->first();
        $numberOfAvoidedCigarettesPerDays = $daysDifference * $userCigarette['count_per_day'];
        $savingMoneyPerDay = $daysDifference * $userCigarette['price'];
//        $numberOfAvoidedCigarettesPerWeeks = $daysDifference * $userCigarette['count_per_week'];



        return view('Score.score-page', compact('timeSpent', 'daysDifference', 'numberOfAvoidedCigarettesPerDays', 'savingMoneyPerDay'));
    }
}
