<div class="container">
    <div class="row setup-content {{ $currentStep != 4 ? 'display-none' : '' }}" id="step-4"
         style="justify-content: space-around;">
        <div class="col-md-10" style="text-align: right;">
            {{--        <h3> لماذا بدأت بالتدخين </h3>--}}
            <div class="card">
                <div class="card-header"
                     style="background-color: #efb448;color: white;text-align: right;margin-bottom: 20px;">{{ __('لماذا بدأت بالتدخين') }}</div>
                <div style="padding-right: 20px; padding-bottom: 20px;">
                    @foreach($startSmoking as $reason)
                        {{ $reason->name }}
                        <input type="checkbox" value="{{ $reason->id }}"
                               wire:model="checkboxNameStartSmoking.{{ $reason->id }}"
                               wire:click="checkboxStartCigaretteType({{ $reason->id }})"
                                {{ $checkboxNameStartSmoking ? 'checked' : '' }}
                        >
                        {{--                {{ $checkboxNameStartSmoking ? 'checked' : '' }}--}}
                        {{--                {{ $checkboxStartCigarette ? 'checked' : '' }}--}}
                        {{--                <input type="checkbox" wire:model="checkboxNameStartSmoking.{{$reason}}" value="{{ $reason->id }}" >--}}
                        <br>
                    @endforeach
                </div>
                {{--        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button"--}}
                {{--                wire:click="forthStepSubmit">Next--}}
                {{--        </button>--}}
                {{--        <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(3)">--}}
                {{--            Back--}}
                {{--        </button>--}}


            </div>
            <br>
            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(3)"
                    style="background-color: black;border-color: black;">
                الخلف
            </button>
            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button"
                    wire:click="forthStepSubmit" style="background-color: #efb448;color: white;border-color: #efb448;">
                التالي
            </button>
            <div style="height: 10px;"></div>
        </div>
    </div>
</div>