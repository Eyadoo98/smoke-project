<?php

namespace App\Livewire;

use Livewire\Component;

class MainScoreComponent extends Component
{
//    public $daysDifference;
//    public $numberOfAvoidedCigarettesPerDays;
//    public $savingMoneyPerDay;
//    public $switchView = 'main';


    public function mount(){//$daysDifference,$numberOfAvoidedCigarettesPerDays,$savingMoneyPerDay,$switchView
//        $this->daysDifference = $daysDifference;
//        $this->numberOfAvoidedCigarettesPerDays = $numberOfAvoidedCigarettesPerDays;
//        $this->savingMoneyPerDay = $savingMoneyPerDay;
//        $this->switchView = $switchView;
    }
    public function render()
    {
        return view('livewire.main-score-component');
    }
}
