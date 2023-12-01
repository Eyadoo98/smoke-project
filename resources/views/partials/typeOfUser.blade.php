<div class="container">
    <div class="row setup-content {{ $currentStep != 2 ? 'display-none' : '' }}" id="step-2"
         style="justify-content: space-around;">
        <div class="col-md-8" style="text-align: right;">
            {{--            <h3> النوع والعمر</h3>--}}
            <div class="card">
                <div class="card-header"
                     style="background-color: #efb448;color: white;text-align: right;margin-bottom: 20px;">{{ __('النوع و العمر') }}</div>
                <div style="padding: 20px;">
                    <label for="description">الرجاء إختيار النوع</label><br/>
                    <label class="radio-inline"><input type="radio" wire:model="gender" value="1"
                                {{{ $gender == '1' ? "checked" : "" }}}> ذكر</label>
                    <label class="radio-inline"><input type="radio" wire:model="gender" value="0"
                                {{{ $gender == '0' ? "checked" : "" }}}> انثى</label><br/>
                    @error('gender') <span class="error" style="color: red !important;">{{ $message }}</span> @enderror
                    <br>
                    <label for="description">الرجاء إدخال العمر</label><br/>
                    <input type="text" value="{{$age ?? old('age') }}" name="age" wire:model="age"><br>

                    @error('age') <span class="error" style="color: red !important;">{{ $message }}</span> @enderror

                </div>
            </div>

            <br>

            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(1)"
                    style="background-color: black;border-color: black;">
                الخلف
            </button>
            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button"
                    wire:click="secondStepSubmit" style="background-color: #efb448;color: white;border-color: #efb448;">
                التالي
            </button>
        </div>
    </div>
</div>