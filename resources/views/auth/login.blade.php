<x-base-layout title="Login" bodyClass="page-login">
    <main>
      <div class="container-small page-login">
        <div class="flex" style="gap: 5rem">
          <div class="auth-page-form">
            <div class="text-center">
              <a href="/">
                <img src="/img/L_logo_knifestore.svg" alt="" />
              </a>
            </div>
            <h1 class="auth-page-title">Login</h1>

            <form action="{{ route('login.store') }}" method="POST">
    @csrf

    @if ($errors->has('email'))
        <div class="text-danger mb-2">
            {{ $errors->first('email') }}
        </div>
    @endif

    <div class="form-group">
        <input type="email" name="email" placeholder="Your Email" required value="{{ old('email') }}" />
    </div>
    <div class="form-group">
        <input type="password" name="password" placeholder="Your Password" required />
    </div>
    <div class="text-right mb-medium">
        <a href="{{ route('password.request') }}" class="auth-page-password-reset">Reset Password</a>
    </div>

    <button class="btn btn-primary btn-login w-full">Login</button>

    <div class="form-group" style="margin-top: 1rem">
        <x-google-button/>
    </div>
    <div class="login-text-dont-have-account">
        Don't have an account? -
        <a href="{{ route('signup') }}"> Click here to create one</a>
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