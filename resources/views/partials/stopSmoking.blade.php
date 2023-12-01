<div class="container">
    <div class="row setup-content {{ $currentStep != 6 ? 'display-none' : '' }}" id="step-6"
         style="justify-content: space-around;">
        <div class="col-md-10" style="text-align: right;">
{{--            <h3> لماذا تريد ترك التدخين </h3>--}}
            <div class="card">
                <div class="card-header"
                     style="background-color: #efb448;color: white;text-align: right;margin-bottom: 20px;">{{ __('لماذا تريد ترك التدخين') }}</div>
                <div style="padding-right: 20px; padding-bottom: 20px;">
                    @foreach($stopSmoking as $reason)
                        {{ $reason->reason_for_stop_smoking }}
                        <input type="checkbox" value="{{ $reason->id }}"
                               wire:model="checkboxNameStopSmoking.{{ $reason->id }}"
                               wire:click="checkboxStopCigaretteType({{ $reason->id }})"
                        {{ $checkboxNameStartSmoking ? 'checked' : '' }}
                        <br>
                        {{--                <input type="checkbox" wire:model="checkboxNameStopSmoking.{{$reason}}" value="{{ $reason->id }}">--}}
                        <br>
                    @endforeach
                </div>
            </div>
            {{--        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button"--}}
            {{--                wire:click="sixthStepSubmit">Next--}}
            {{--        </button>--}}
            {{--        <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(5)">--}}
            {{--            Back--}}
            {{--        </button>--}}

            <br>
            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(5)"
                    style="background-color: black;border-color: black;">
                الخلف
            </button>
            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button"
                    wire:click="sixthStepSubmit" style="background-color: #efb448;color: white;border-color: #efb448;">
                التالي
            </button>
            <div style="height: 10px;"></div>
        </div>
    </div>
</div>