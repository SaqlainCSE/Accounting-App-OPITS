<x-guest-layout class="login-page">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="#" class="h1">{{ config('app.name', 'Laravel') }}</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
            <form action="{{ route('password.email') }}" method="post">
                @csrf
                <x-forms.input type="email" label="Email" name="email" placeholder="Enter your email" />
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Request new password</button>
                    </div>
                </div>
            </form>
            <p class="mt-3 mb-1">
                <a href="{{ route('login') }}">Login</a>
            </p>
        </div>
    </div>
</x-guest-layout>
