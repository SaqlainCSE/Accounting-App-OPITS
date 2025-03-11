<x-guest-layout class="login-page">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="login-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    {{-- <a href="#" class="h1">{{ config('app.name', 'Laravel') }}</a> --}}
                    <a href="/login" class="h3">কোম্পানীগঞ্জ সাফল্য সমিতি</a>
                </div>
                <div class="card-body">
                    {{-- <p class="login-box-msg">Sign in to start your session</p> --}}

                    <x-auth-session-status :status="$errors->first('failure')" />

                    <x-forms.input type="email" label="ইমেইল" name="email" placeholder="" />
                    <x-forms.input type="password" label="পাসওয়ার্ড" name="password" placeholder="" />

                    <div class="row">
                        {{-- <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div> --}}

                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">সাইন ইন</button>
                        </div>

                    </div><br>

                    {{-- <div class="social-auth-links text-center mt-2 mb-3">
                        <a href="#" class="btn btn-block btn-primary">
                            <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                        </a>
                        <a href="#" class="btn btn-block btn-danger">
                            <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                        </a>
                    </div> --}}


                    {{-- <p class="mb-1">
                        <a href="{{ route('password.request') }}">পাসওয়ার্ড ভুলে গেছি</a>
                    </p> --}}
                    @if(auth()->check() && auth()->user()->role === 'superuser')
                        <p class="mb-0">
                            <a href="{{ route('register') }}" class="text-center">নতুন অ্যাডমিন নিবন্ধন করুন</a>
                        </p>
                    @endif

                </div>

            </div>

        </div>
    </form>
</x-guest-layout>
