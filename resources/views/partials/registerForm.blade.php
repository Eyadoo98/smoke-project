<style>
    @media screen and (max-width: 767px) {
        .custom-section {
            text-align: right !important;
        }
    }
</style>
<div class="container">
    <div class="row justify-content-center setup-content {{ $currentStep != 1 ? 'display-none' : '' }}"
         id="step-1">
        <div class="col-md-8 custom-section">
            <div class="card" style="direction: rtl;">
                <div class="card-header" style="background-color: #efb448;color: white;text-align: right;margin-bottom: 20px;">{{ __('تسجيل  بيانات جديدة') }}</div>


                        <form method=" POST" action="{{ route('register') }}" style="padding: 15px;">
                @csrf
                @php
                    $formDataName = request()->cookie('formDataName');
                @endphp
                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">الإسم</label>

                    <div class="col-md-6">
                        <input id="name" wire:model="name" type="text"
                               class="form-control @error('name') is-invalid @enderror" name="name"
                               value="{{ $name ?? old('name') }}" required autocomplete="name" autofocus>
{{--                               value="{{ $dataArray['name']}}" required autocomplete="name" autofocus>--}}

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="email"
                           class="col-md-4 col-form-label text-md-end">الإيميل</label>

                    <div class="col-md-6">
                        <input id="email" wire:model="email" type="email"
                               class="form-control @error('email') is-invalid @enderror" name="email"
                               value="{{ $email ?? old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password"
                           class="col-md-4 col-form-label text-md-end">كلمة السر</label>

                    <div class="col-md-6">
                        <input id="password" wire:model="password" type="password"
                               class="form-control @error('password') is-invalid @enderror" name="password"
                               required autocomplete="new-password" value="{{$password ?? old('password')}}">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password-confirm"
                           class="col-md-4 col-form-label text-md-end">تأكيد كلمة السر</label>

                    <div class="col-md-6">
                        <input id="password-confirm" wire:model="password_confirmation" type="password"
                               class="form-control"
                               name="password_confirmation" required autocomplete="new-password" value="{{$password_confirmation ?? old('password_confirmation')}}">
                    </div>
                </div>
                </form>


                <div class="card-body">
                </div>
            </div>

            <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="firstStepSubmit"
                    type="button" style="float: right;margin-top: 14px; background-color: #efb448;color: white; border-color:#efb448 ">التالي
            </button>
        </div>
    </div>
</div>