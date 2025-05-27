<x-base-layout title="Signup" bodyClass="page-signup">
<main>
    <div class="container-small page-login">
        <div class="flex" style="gap: 5rem">
            <div class="auth-page-form">
                <div class="text-center">
                    <a href="/">
                        <img src="/img/L_logo_knifestore.svg" alt="" />
                    </a>
                </div>
                <h1 class="auth-page-title">Signup</h1>

                <form action="{{ route('signup.store') }}" method="post">
                    @csrf

                    {{-- Email --}}
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your Email" required value="{{ old('email') }}" />
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Password --}}
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Your Password" required />
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Password Confirmation --}}
                    <div class="form-group">
                        <input type="password" name="password_confirmation" placeholder="Repeat Password" required />
                    </div>

                    <hr />

                    {{-- First Name --}}
                    <div class="form-group">
                        <input type="text" name="name" placeholder="First Name" required value="{{ old('name') }}" />
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Last Name --}}
                    <div class="form-group">
                        <input type="text" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" />
                    </div>

                    {{-- Phone --}}
                    <div class="form-group">
                        <input type="text" name="phone" placeholder="Phone" value="{{ old('phone') }}" />
                    </div>

                    {{-- Submit --}}
                    <button class="btn btn-primary btn-login w-full">Register</button>

                    {{-- Google Auth --}}
                    <div class="form-group" style="margin-top: 1rem">
                        <x-google-button />
                    </div>

                    {{-- Link to Login --}}
                    <div class="login-text-dont-have-account">
                        Already have an account? –
                        <a href="{{ route('login') }}">Click here to login</a>
                    </div>
                </form>
            </div>

            <div class="auth-page-image">
                <img src="/img/butcher-knife-logo.png" alt="" class="img-responsive" />
            </div>
        </div>
    </div>
</main>
</x-base-layout>