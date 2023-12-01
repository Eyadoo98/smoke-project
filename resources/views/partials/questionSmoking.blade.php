<div class="container">

<div class="row setup-content {{ $currentStep != 3 ? 'display-none' : '' }}" id="step-3" style="justify-content: space-around;">
        {{--        <h3> أسئلة خاصة لالتدخين!!</h3>--}}


        <div class="col-md-8" style="text-align: right;">
{{--            <h3> !!أسئلة خاصة في التدخين</h3>--}}

            <div class="card" >
                <div class="card-header"
                     style="background-color: #efb448;color: white;text-align: right;margin-bottom: 20px;">{{ __('أسئلة خاصة في التدخين') }}</div>
                <div style="padding: 20px;">
                <label for="whenStartSmoking">في أي عمر بدأت التدخين</label>

                <div class="">
                    <input id="whenStartSmoking" wire:model="startSmokingAge" type="text"
                           value="{{$startSmokingAge ?? old('whenStartSmoking')}}">
                </div>
            <div style="height: 10px;"></div>
                <div>
                    <label for="whenStartSmoking">نوع التدخين</label>
                    <br>
                    @foreach($typeCigarette as $type)
                        {{ $type->name }}

                        <input style="margin-bottom: 13px;" type="checkbox"
                               value="{{ $type->id }}"
                               wire:model="checkboxTypeCigarette.{{ $type->id }}"
                               wire:click="checkBoxTypeCigarette({{ $type->id }})"
                                {{ $checkboxTypeCigarette ? 'checked' : '' }}>


                        {{-- show input based on checkbox --}}
                        @if ($type->id == 1 && $checkboxTypeCigarette[$type->id] == 1)
                            <!-- Show this input when the checkbox is checked -->
                            <br>
                            <div style="margin-right: 10px;">
                                <span>كم تكلفة السيجارة الإلكترونية</span><br>
                                <input type="text" wire:model="electronicCigarette" style="margin-top: 10px;">
                            </div>
                        @endif

                        @if ($type->id == 2 && $checkboxTypeCigarette[$type->id] == 2)
                            <!-- Show this input when the checkbox is checked -->
                            <br>
                            <div style="margin-right: 10px;">
                                <span>كم تكلفة السيجارة العادية </span><br>
                                <input type="text" wire:model="normalCigarette" style="margin-top: 10px;">
                            </div>
                            <div style="margin-right: 10px;">
                                <span>كم عدد السجائر المستهلكة في اليوم الواحد</span><br>
                                <input type="text" wire:model="spendDayNormalCigarette" style="margin-top: 10px;">
                            </div>

                            <div style="margin-right: 10px;">
                                <span>كم عدد السجائر المستهلكة في اليوم الاسبوع</span><br>
                                <input type="text" wire:model="spendWeekNormalCigarette" style="margin-top: 10px;">
                            </div>
                        @endif

                        @if ($type->id == 3 && $checkboxTypeCigarette[$type->id] == 3)
                            <!-- Show this input when the checkbox is checked -->
                            <br>
                            <div style="margin-right: 10px;">
                                <span>كم تكلفة سيجارة الفيب </span><br>
                                <input type="text" wire:model="vipCigarette" style="margin-top: 10px;">
                            </div>
                        @endif

                        @if ($type->id == 4 && $checkboxTypeCigarette[$type->id] == 4)
                            <!-- Show this input when the checkbox is checked -->
                            <br>
                            <div style="margin-right: 10px;">
                                <span>كم تكلفة الارجيلة </span><br>
                                <input type="text" wire:model="bubblyCigarette" style="margin-top: 10px;">
                            </div>
                        @endif
                        {{--{{print_r(request()->cookie('formDataCheckboxTypeCigarette'))}}--}}
                        {{--                    <input type="checkbox" wire:model="checkboxTypeCigarette.{{$type->id}}" wire:click="checkBox({{$type->id}})"  value="{{ $type->id }}" {{ in_array($type->id, $checkedIds) ? trim("checked",'"') : ''}}>--}}
                        {{--                        {{ $checkedIds[$type->id] === $type->id ? trim("checked",'"')  : "" }}--}}

                        <br>
                    @endforeach
                </div>
                </div>
            </div>
            <br>
{{--            <button class="btn btn-primary btn-lg pull-right" wire:click="thirdStepSubmit" type="button">--}}
{{--                Next--}}
{{--            </button>--}}
{{--            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">--}}
{{--                Back--}}
{{--            </button>--}}

            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)"
                    style="background-color: black;border-color: black;">
                الخلف
            </button>
            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button"
                    wire:click="thirdStepSubmit" style="background-color: #efb448;color: white;border-color: #efb448;">
                التالي
            </button>
        </div>


        {{--        <table class="table">--}}
        {{--            <tr>--}}
        {{--                <td>Team Name:</td>--}}
        {{--                <td><strong>{{$name}}</strong></td>--}}
        {{--            </tr>--}}
        {{--            <tr>--}}
        {{--                <td>Team Price:</td>--}}
        {{--                <td><strong>{{$price}}</strong></td>--}}
        {{--            </tr>--}}
        {{--            <tr>--}}
        {{--                <td>Team status:</td>--}}
        {{--                <td><strong>{{$gender ? 'Active' : 'DeActive'}}</strong></td>--}}
        {{--            </tr>--}}
        {{--            <tr>--}}
        {{--                <td>Team Detail:</td>--}}
        {{--                <td><strong>{{$detail}}</strong></td>--}}
        {{--            </tr>--}}
        {{--        </table>--}}
        {{--        --}}{{--        <button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">--}}
        {{--        <button class="btn btn-primary btn-lg pull-right" wire:click="thirdStepSubmit" type="button">--}}
        {{--            Next--}}
        {{--        </button>--}}
        {{--        <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">--}}
        {{--            Back--}}
        {{--        </button>--}}
    </div>
    {{--</div>--}}
</div>