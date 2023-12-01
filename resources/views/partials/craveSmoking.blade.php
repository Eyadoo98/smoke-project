<div class="container">
    @if (session()->has('message'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
    @endif
    <div class="row setup-content {{ $currentStep != 7 ? 'display-none' : '' }}" id="step-7"
         style="justify-content: space-around;">
        <div class="col-md-12" style="text-align: right;">
            {{--            <h3> ما الذي يجعلك تشتهي التدخين </h3>--}}
            <div class="card">
                <div class="card-header"
                     style="background-color: #efb448;color: white;text-align: right;margin-bottom: 20px;">{{ __('ما الذي يجعلك تشتهي التدخين') }}</div>
                <div style="padding-right: 20px; padding-bottom: 20px;">
                    @foreach($craveSmoking as $reason)
                        {{ $reason->reason_for_crave_smoking }}
                        <input type="checkbox" value="{{ $reason->id }}"
                               wire:model="checkboxNameCraveSmoking.{{ $reason->id }}"
                               wire:click="checkboxCraveCigaretteType({{ $reason->id }})"
                        {{ $checkboxNameStartSmoking ? 'checked' : '' }}
                        <br>
                        {{--                <input type="checkbox" wire:model="checkboxNameCraveSmoking.{{$reason}}" value="{{ $reason->id }}">--}}
                        <br>
                    @endforeach
                </div>
            </div>
            {{--            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button"--}}
            {{--                    wire:click="submitForm">Next--}}
            {{--            </button>--}}
            {{--            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(6)">--}}
            {{--                Back--}}
            {{--            </button>--}}

            <br>
            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(6)"
                    style="background-color: black;border-color: black;">
                الخلف
            </button>
            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button"
                    wire:click="submitForm" style="background-color: #efb448;color: white;border-color: #efb448;">
                التالي
            </button>
            <div style="height: 10px;"></div>
        </div>
    </div>
</div>