<?php

namespace App\Livewire;

use App\Models\Cigarette;
use App\Models\ReasonForCraveSmoking;
use App\Models\ReasonForStopSmoking;
use App\Models\StartSmoking;
use App\Models\StillSmoking;
use App\Models\TypeOfCigarettes;

//use http\Cookie;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Livewire\Component;
use Illuminate\Support\Facades\Cookie;

class WizardForm extends Component
{

    public $currentStep = 1;
    public $name, $email, $password, $password_confirmation, $age, $price, $detail, $gender = 1;
    public $successMsg = '';

    public $startSmokingAge;

    public $startSmoking;
    public $stillSmoking;
    public $stopSmoking;
    public $craveSmoking;
    public $typeCigarette;
    public array $checkboxNameStartSmoking = [];
    public array $checkboxNameStillSmoking = [];
    public array $checkboxNameStopSmoking = [];
    public array $checkboxNameCraveSmoking = [];
    public array $checkboxTypeCigarette = [];

    public string $whenStartSmoking;
    public array $formData = [];
    public array $checkedIds;


    public string $electronicCigarette;
    public string $normalCigarette;
    public string $vipCigarette;
    public string $bubblyCigarette; //ارجيلة
    public string $spendDayNormalCigarette;
    public string $spendWeekNormalCigarette;

    public $takenCigarette;
//     this five function for save checkbox of user in cookie *********** start ***********
    public function checkBoxTypeCigarette($ids)
    {
        $minutes = 60 * 24; // 24 hours
        cookie()->queue('formDataCheckboxTypeCigarette', json_encode($this->checkboxTypeCigarette));

    }

    public function checkboxStartCigaretteType($ids)
    {
        cookie()->queue('formDataCheckboxStartCigarette', json_encode($this->checkboxNameStartSmoking));
    }

    public function checkboxStillCigaretteType($ids)
    {
        cookie()->queue('formDataCheckboxStillCigarette', json_encode($this->checkboxNameStillSmoking));
    }

    public function checkboxStopCigaretteType($ids)
    {
        cookie()->queue('formDataCheckboxStopCigarette', json_encode($this->checkboxNameStopSmoking));
    }

    public function checkboxCraveCigaretteType($ids)
    {
        cookie()->queue('formDataCheckboxCraveCigarette', json_encode($this->checkboxNameCraveSmoking));
    }

//     this five function for save checkbox of user in cookie *********** end ***********


    public function mount()
    {
        $this->name = str_replace('"', '', request()->cookie('formDataName'));
        $this->email = str_replace('"', '', request()->cookie('formDataEmail'));
        $this->password = str_replace('"', '', request()->cookie('formDataPassword'));
        $this->password_confirmation = str_replace('"', '', request()->cookie('formDataPasswordConfirmation'));
        $this->age = str_replace('"', '', request()->cookie('formDataAge'));
        $this->startSmokingAge = str_replace('"', '', request()->cookie('formDataStartSmokingAge'));

        $this->gender = str_replace('"', '', request()->cookie('formDataGender'));
//        $this->whenStartSmoking = str_replace('"', '', request()->cookie('formDataWhenStartSmoking'));


        $this->checkboxTypeCigarette = json_decode(request()->cookie('formDataCheckboxTypeCigarette'), true) ?? [];
        $this->checkboxNameStartSmoking = json_decode(request()->cookie('formDataCheckboxStartCigarette'), true) ?? [];
        $this->checkboxNameStillSmoking = json_decode(request()->cookie('formDataCheckboxStillCigarette'), true) ?? [];
        $this->checkboxNameStopSmoking = json_decode(request()->cookie('formDataCheckboxStopCigarette'), true) ?? [];
        $this->checkboxNameCraveSmoking = json_decode(request()->cookie('formDataCheckboxCraveCigarette'), true) ?? [];


        $this->currentStep = (int)\Illuminate\Support\Facades\Cookie::get('wizard_step', 1);
        $this->startSmoking = StartSmoking::query()->get();
        $this->stillSmoking = StillSmoking::query()->get();
        $this->stopSmoking = ReasonForStopSmoking::query()->get();
        $this->craveSmoking = ReasonForCraveSmoking::query()->get();
        $this->typeCigarette = TypeOfCigarettes::query()->get();
    }

    public function updatedCheckbox($index)
    {
//        dd('xxx');
        // Update the state of the checkbox
        $this->checkboxTypeCigarette[$index] = !$this->checkboxTypeCigarette[$index];

        // Save the updated states to the cookie
        cookie()->queue('formDataCheckboxTypeCigarette', json_encode($this->checkboxTypeCigarette));
    }

    public function render()
    {
        return view('livewire.wizard-form');
    }


    /**
     * Write code on Method
     */

    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);
        \Illuminate\Support\Facades\Cookie::queue('wizard_step', $this->currentStep + 1, 60);

        \Illuminate\Support\Facades\Cookie::queue('formDataName', json_encode($this->name), 60);
        \Illuminate\Support\Facades\Cookie::queue('formDataEmail', json_encode($this->email), 60);
        \Illuminate\Support\Facades\Cookie::queue('formDataPassword', json_encode($this->password), 60);
        \Illuminate\Support\Facades\Cookie::queue('formDataPasswordConfirmation', json_encode($this->password_confirmation), 60);
        $this->currentStep = 2;
    }


    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'gender' => 'required',
            'age' => 'required',
        ]);
        \Illuminate\Support\Facades\Cookie::queue('wizard_step', $this->currentStep + 1, 60);
        Cookie::queue('formDataAge', json_encode($this->age), 60);
        Cookie::queue('formDataGender', ($this->gender), 60);
        $this->currentStep = 3;
    }

    public function thirdStepSubmit()//for start smoking
    {
        //make Validation here if u want
        $validatedData = $this->validate([
            'startSmokingAge' => 'required',
        ]);
        \Illuminate\Support\Facades\Cookie::queue('wizard_step', $this->currentStep + 1, 60);
        Cookie::queue('formDataStartSmokingAge', json_encode($this->startSmokingAge), 60);
        $this->currentStep = 4;
    }

    public function forthStepSubmit()//for still smoking
    {
        //make Validation here if u want
        \Illuminate\Support\Facades\Cookie::queue('wizard_step', $this->currentStep + 1, 60);
        $this->currentStep = 5;
    }

    public function fifthStepSubmit()//for still smoking
    {
        //make Validation here if u want
        \Illuminate\Support\Facades\Cookie::queue('wizard_step', $this->currentStep + 1, 60);
        $this->currentStep = 6;
    }

    public function sixthStepSubmit()//for still smoking
    {
        //make Validation here if u want
        \Illuminate\Support\Facades\Cookie::queue('wizard_step', $this->currentStep + 1, 60);
        $this->currentStep = 7;
    }

    public function submitForm()
    {

        try {
            $arrCheckboxTypeCigarette = array_filter($this->checkboxTypeCigarette);//array_filter remove null value from array like false
            $arrCheckboxNameStartSmoking = array_filter($this->checkboxNameStartSmoking);
            $arrCheckboxNameStillSmoking = array_filter($this->checkboxNameStillSmoking);
            $arrCheckboxNameStopSmoking = array_filter($this->checkboxNameStopSmoking);
            $arrCheckboxNameCraveSmoking = array_filter($this->checkboxNameCraveSmoking);
//        dd($arrCheckboxTypeCigarette);


            $user = new User();
            $user->name = $this->name;
            $user->email = $this->email;
            $user->password = $this->password;
            $user->gender = $this->gender ? 'ذكر' : 'انثى';
            $user->age = $this->age;
            $user->day_quit = now()->toDateString();
            $user->start_smoking = $this->startSmokingAge;
            $user->save();
            foreach ($arrCheckboxNameStartSmoking as $key => $checkboxId) {
                $user->startSmoking()->attach($key);
            }

            foreach ($arrCheckboxNameStillSmoking as $key => $checkboxId) {
                $user->stillSmoking()->attach($key);
            }

            foreach ($arrCheckboxNameStopSmoking as $key => $checkboxId) {
                $user->reasonForStopSmoking()->attach($key);
            }
            foreach ($arrCheckboxNameCraveSmoking as $key => $checkboxId) {
                $user->reasonForCraveSmokings()->attach($key);
            }

            foreach ($arrCheckboxTypeCigarette as $key => $checkboxId) {
                $cigarette = new Cigarette();
                $cigarette->start_date = now()->toDateString();
                if ($key == 1) {
                    $cigarette->type_of_smoking = 'سيجارة لكترونية';;
                    if (!empty($this->electronicCigarette)) {
                        $cigarette->price = $this->electronicCigarette;
                    }
                } elseif ($key == 2) {
                    $cigarette->type_of_smoking = 'سيجارة عادية';
                    if (!empty($this->normalCigarette)) {
                        $cigarette->price = $this->normalCigarette;
                    }
                    if (!empty($this->spendDayNormalCigarette)) {
                        $cigarette->count_per_day = $this->spendDayNormalCigarette;
                        $cigarette->avoidedCigarette = $this->spendDayNormalCigarette;
                    }
                    if (!empty($this->spendWeekNormalCigarette)) {
                        $cigarette->count_per_week = $this->spendWeekNormalCigarette;
                    }
                } elseif ($key == 3) {
                    $cigarette->type_of_smoking = 'سيجارة فيب';
                    if (!empty($this->vipCigarette)) {
                        $cigarette->price = $this->vipCigarette;
                    }
                } elseif ($key == 4) {
                    $cigarette->type_of_smoking = 'ارجيلة';
                    if (!empty($this->bubblyCigarette)) {
                        $cigarette->price = $this->bubblyCigarette;
                    }
                }

                $cigarette->save();

                $user->cigarette()->attach($cigarette->id);
            }
            $this->clearForm();

            $this->currentStep = 1;
            return redirect()->route('score-page');
        } catch (\Exception $exception) {
            session()->flash('message', 'الايميل موجود مسبقاً');
            return 0;
        }
    }

    public function back($step)
    {
        \Illuminate\Support\Facades\Cookie::queue('wizard_step', $this->currentStep - 1, 60);
        $this->currentStep = $step;
    }

    public function clearForm()
    {
        $this->name = '';
        $this->price = '';
        $this->detail = '';
        $this->status = 1;
    }


}
