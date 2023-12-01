<div class="container">

    <div class="row setup-content {{ $currentStep != 5 ? 'display-none' : '' }}" id="step-5"
         style="justify-content: space-around;">

        <div class="col-md-10" style="text-align: right;">
{{--            <h3> لماذا ما زلت تدخن </h3>--}}
            <div class="card" >
                <div class="card-header"
                     style="background-color: #efb448;color: white;text-align: right;margin-bottom: 20px;">{{ __('لماذا ما زلت تدخن') }}</div>
                <div style="padding-right: 20px; padding-bottom: 20px;">
                    @foreach($stillSmoking as $reason)
                        {{ $reason->still_smoking_response }}
                        <input type="checkbox" value="{{ $reason->id }}"
                               wire:model="checkboxNameStillSmoking.{{ $reason->id }}"
                               wire:click="checkboxStillCigaretteType({{ $reason->id }})"
                                {{ $checkboxNameStartSmoking ? 'checked' : '' }}>

                        {{--                <input type="checkbox" wire:model="checkboxNameStillSmoking.{{$reason}}" value="{{ $reason->id }}">--}}
                        <br>
                    @endforeach
                </div>
            </div>
            {{--        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button"--}}
            {{--                wire:click="fifthStepSubmit">Next--}}
            {{--        </button>--}}
            {{--        <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(4)">--}}
            {{--            Back--}}
            {{--        </button>--}}

            <br>
            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(4)"
                    style="background-color: black;border-color: black;">
                الخلف
            </button>
            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button"
                    wire:click="fifthStepSubmit" style="background-color: #efb448;color: white;border-color: #efb448;">
                التالي
            </button>
            <div style="height: 10px;"></div>
        </div>
    </div>
</div>