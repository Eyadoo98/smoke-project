<div>
    {{--    <div class="container">--}}
    {{--        @if ($step === 1)--}}

    {{--            @livewire('wizard-step1')--}}
    {{--        @elseif ($step === 2)--}}
    {{--            @livewire('wizard-step2')--}}
    {{--        @elseif ($step === 3)--}}
    {{--            @livewire('wizard-step3')--}}
    {{--        @endif--}}

    {{--        <div>--}}
    {{--            @if ($step > 1)--}}
    {{--                <button wire:click="previousStep">Previous</button>--}}
    {{--            @endif--}}

    {{--            @if ($step < 3)--}}
    {{--                <button wire:click="nextStep">Next</button>--}}

    {{--            @else--}}
    {{--                <button wire:click="submitForm">Submit</button>--}}
    {{--            @endif--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <div>
        @if(!empty($successMsg))
            <div class="alert alert-success">
                {{ $successMsg }}
            </div>
        @endif
        {{--        {{dd(request()->cookie())}}--}}
            <style>
                .multi-wizard-step{
                    width: 100px;
                }
                .stepwizard-row{
                    direction: block !important;
                    text-align: center !important;
                    text-align: -moz-center !important;
                }
            </style>
        <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
                <div class="multi-wizard-step">
                    <a href="#step-1" type="button" style="{{$currentStep == 1 ?'background-color: #efb448;color:white':'background-color: white'}}"
                       class="btn">1</a>
{{--                    <p>Step 1</p>--}}
                </div>
                <div class="multi-wizard-step">
                    <a href="#step-2" type="button" style="{{$currentStep == 2 ?'background-color: #efb448;color:white':'background-color: white'}}"
                       class="btn">2</a>
{{--                    btn {{ $currentStep != 2 ? 'btn-default' : 'btn-primary' }}--}}
{{--                    <p>Step 2</p>--}}
                </div>
                <div class="multi-wizard-step">
                    <a href="#step-3" type="button" style="{{$currentStep == 3 ?'background-color: #efb448;color:white':'background-color: white'}}"
                       class="btn"
                       disabled="disabled">3</a>
{{--                    <p>Step 3</p>--}}
                </div>
                <div class="multi-wizard-step">
                    <a href="#step-4" type="button" style="{{$currentStep == 4 ?'background-color: #efb448;color:white':'background-color: white'}}"
                       class="btn"
                       disabled="disabled">4</a>
{{--                    <p>Step 4</p>--}}
                </div>
                <div class="multi-wizard-step">
                    <a href="#step-5" type="button" style="{{$currentStep == 5 ?'background-color: #efb448;color:white':'background-color: white'}}"
                       class="btn"
                       disabled="disabled">5</a>
{{--                    <p>Step 5</p>--}}
                </div>
                <div class="multi-wizard-step">
                    <a href="#step-6" type="button" style="{{$currentStep == 6 ?'background-color: #efb448;color:white':'background-color: white'}}"
                       class="btn"
                       disabled="disabled">6</a>
{{--                    <p>Step 6</p>--}}
                </div>
                <div class="multi-wizard-step">
                    <a href="#step-7" type="button" style="{{$currentStep == 7 ?'background-color: #efb448;color:white':'background-color: white'}}"
                       class="btn"
                       disabled="disabled">7</a>
{{--                    <p>Step 7</p>--}}
                </div>
            </div>
        </div>

        @include('partials.registerForm')

        @include('partials.typeOfUser')

        @include('partials.questionSmoking')

        @include('partials.startSmoking')

        @include('partials.stillSmoking')

        @include('partials.stopSmoking')

        @include('partials.craveSmoking')



        {{--        <div class="row setup-content {{ $currentStep != 1 ? 'display-none' : '' }}" id="step-1">--}}
        {{--            <div class="col-md-12">--}}
        {{--                <h3> Step 1</h3>--}}
        {{--                <div class="form-group">--}}
        {{--                    <label for="title">Team Name:</label>--}}
        {{--                    <input type="text" wire:model="name" class="form-control" id="taskTitle">--}}
        {{--                    @error('name') <span class="error">{{ $message }}</span> @enderror--}}
        {{--                </div>--}}
        {{--                <div class="form-group">--}}
        {{--                    <label for="description">Team Price:</label>--}}
        {{--                    <input type="text" wire:model="price" class="form-control" id="teamPrice"/>--}}
        {{--                    @error('price') <span class="error">{{ $message }}</span> @enderror--}}
        {{--                </div>--}}
        {{--                <div class="form-group">--}}
        {{--                    <label for="detail">Team Details:</label>--}}
        {{--                    <textarea type="text" wire:model="detail" class="form-control"--}}
        {{--                              id="taskDetail">{{{ $detail ?? '' }}}</textarea>--}}
        {{--                    @error('detail') <span class="error">{{ $message }}</span> @enderror--}}
        {{--                </div>--}}
        {{--                <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="firstStepSubmit"--}}
        {{--                        type="button">Next--}}
        {{--                </button>--}}
        {{--            </div>--}}
        {{--        </div>--}}

        {{--        <div class="row setup-content {{ $currentStep != 2 ? 'display-none' : '' }}" id="step-2">--}}
        {{--            <div class="flex items-center mb-4">--}}
        {{--                <input id="default-checkbox" type="checkbox" value=""--}}
        {{--                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">--}}
        {{--                <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default--}}
        {{--                    checkbox</label>--}}
        {{--            </div>--}}
        {{--            <div class="flex items-center">--}}
        {{--                <input checked id="checked-checkbox" type="checkbox" value=""--}}
        {{--                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">--}}
        {{--                <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Checked--}}
        {{--                    state</label>--}}
        {{--            </div>--}}
        {{--        </div>--}}


    </div>
</div>
