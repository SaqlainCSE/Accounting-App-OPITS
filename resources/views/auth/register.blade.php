<x-guest-layout class="register-page">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="/register" class="h3">কোম্পানীগঞ্জ সাফল্য সমিতি</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">নতুন অ্যাডমিন তৈরি করুন</p>

                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <x-forms.input type="text" label="নাম" name="name" placeholder="নাম" />
                    <x-forms.input type="email" label="ইমেইল" name="email" placeholder="ইমেইল" />
                    <x-forms.input type="number" label="মোবাইল" name="mobile" placeholder="মোবাইল" />
                    <x-forms.input type="password" label="পাসওয়ার্ড" name="password" placeholder="পাসওয়ার্ড" />
                    <x-forms.input type="password" label="পাসওয়ার্ড নিশ্চিত করুন" name="password_confirmation" placeholder="পাসওয়ার্ড নিশ্চিত করুন" />
                    <div class="row">
                        {{-- <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div> --}}

                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">নিবন্ধন</button>
                        </div>

                    </div>
                </form><br>

                {{-- <div class="social-auth-links text-center">
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i>
                        Sign up using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i>
                        Sign up using Google+
                    </a>
                </div> --}}
                <a href="{{ route('login') }}" class="text-center">আমার ইতিমধ্যেই একটি অ্যাকাউন্ট আছে</a>
            </div>
        </div>
    </div>
</x-guest-layout>
