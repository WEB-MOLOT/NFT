@extends('layouts.front')

@section('title') Reset Password @endsection

@section('content')
    <div class="main-page">

        <div class="page-top bottom">
            <div class="wrapper">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Reset Password</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="personal-area">
            <div class="wrapper">
                <div class="personal-area__title title bottom">Reset Password</div>

                <div class="personal-area__body bottom">
                    <div class="personal-area__block active">
                        <form class="personal-area__form form" method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="personal-area__form-body flex">
                                <div class="personal-area__coll">

                                    <label class="form__label bottom @error('email') error @enderror">
                                        <div class="form__caption">email</div>
                                        <input type="text" name="email" class="form__field field @error('email') error @enderror" placeholder="E-Mail"
                                               value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </label>

                                    <label class="form__label bottom password @error('password') error @enderror">
                                        <div class="form__caption">new password</div>
                                        <input type="password" name="password" class="form__field field @error('password') error @enderror" placeholder="New password*" required autocomplete="new-password">
                                        <div class="password__icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.7141 9.13533C18.1091 9.65199 18.1091 10.3495 17.7141 10.8653C16.4699 12.4895 13.4849 15.8337 9.99993 15.8337C6.51493 15.8337 3.52993 12.4895 2.28576 10.8653C2.09358 10.6179 1.98926 10.3136 1.98926 10.0003C1.98926 9.68706 2.09358 9.38272 2.28576 9.13533C3.52993 7.51116 6.51493 4.16699 9.99993 4.16699C13.4849 4.16699 16.4699 7.51116 17.7141 9.13533V9.13533Z"
                                                    stroke="#01baef" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M10 12.5C11.3807 12.5 12.5 11.3807 12.5 10C12.5 8.61929 11.3807 7.5 10 7.5C8.61929 7.5 7.5 8.61929 7.5 10C7.5 11.3807 8.61929 12.5 10 12.5Z" stroke="#01baef" stroke-width="2" stroke-linecap="round"
                                                      stroke-linejoin="round" />
                                            </svg>
                                        </div>


                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </label>
                                    <label class="form__label bottom password">
                                        <div class="form__caption">retype new password</div>
                                        <input type="password" class="form__field field" placeholder="Password confirmation*" name="password_confirmation" required autocomplete="new-password">
                                        <div class="password__icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.7141 9.13533C18.1091 9.65199 18.1091 10.3495 17.7141 10.8653C16.4699 12.4895 13.4849 15.8337 9.99993 15.8337C6.51493 15.8337 3.52993 12.4895 2.28576 10.8653C2.09358 10.6179 1.98926 10.3136 1.98926 10.0003C1.98926 9.68706 2.09358 9.38272 2.28576 9.13533C3.52993 7.51116 6.51493 4.16699 9.99993 4.16699C13.4849 4.16699 16.4699 7.51116 17.7141 9.13533V9.13533Z"
                                                    stroke="#01baef" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M10 12.5C11.3807 12.5 12.5 11.3807 12.5 10C12.5 8.61929 11.3807 7.5 10 7.5C8.61929 7.5 7.5 8.61929 7.5 10C7.5 11.3807 8.61929 12.5 10 12.5Z" stroke="#01baef" stroke-width="2" stroke-linecap="round"
                                                      stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="form__btn btn btn_blue bottom">
                                <div class="btn__caption">save</div>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
