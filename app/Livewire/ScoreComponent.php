<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Carbon;
use Livewire\Component;

class ScoreComponent extends Component
{
    public $daysDifference;
    public $numberOfAvoidedCigarettesPerDays;
    public $savingMoneyPerDay;
    public $dayQuit;
    public $today;
    public $carbonDate1;
    public $carbonDate2;
    public $user;
    public $userCigarette;
    public $takeCigarette = 0;
    public string $switchView = 'main';
    public $avoidedCigarette;
    public function mount()
    {
//        $startTime = $request->attributes->get('startTime');
//
//        // Calculate the time spent
//        $timeSpent = now()->diffInSeconds($startTime);


        $this->dayQuit = User::query()->where('id', auth()->user()->id)->pluck('day_quit')->first();
        $this->today = date('Y-m-d');
        $this->carbonDate1 = Carbon::parse($this->dayQuit);
        $this->carbonDate2 = Carbon::parse($this->today);
        $this->daysDifference = $this->carbonDate1->diffInDays($this->carbonDate2);


        $this->user = User::query()->where('id', auth()->user()->id)->first();
        $this->userCigarette = $this->user->cigarette()->first();
        $this->numberOfAvoidedCigarettesPerDays = $this->daysDifference * $this->userCigarette['count_per_day'];
        $this->savingMoneyPerDay = $this->daysDifference * $this->userCigarette['price'];
        $this->avoidedCigarette = $this->userCigarette->avoidedCigarette;
    }

    public function render()
    {
        return view('livewire.score-component');
    }

    public function countOfCigarette()
    {
        $this->userCigarette->decrement('avoidedCigarette', $this->takeCigarette);

        return redirect()->route('score-page');
    }
}
