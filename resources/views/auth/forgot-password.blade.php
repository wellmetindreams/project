<x-base-layout title="Reset Password" bodyClass="page-reset-password">
  <main>
    <div class="container-small page-login">
      <div class="flex" style="gap: 5rem">
        <div class="auth-page-form">
          <div class="text-center">
            <a href="/">
              <img src="/img/L_logo_knifestore.svg" alt="Logo" />
            </a>
          </div>
          <h1 class="auth-page-title">Reset Password</h1>

          @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
          @endif

          <form method="POST" action="{{ route('password.email') }}">
            @csrf

            @if ($errors->has('email'))
              <div class="text-danger mb-2">
                {{ $errors->first('email') }}
              </div>
            @endif

            <div class="form-group">
              <input
                type="email"
                name="email"
                placeholder="Your Email"
                value="{{ old('email') }}"
                required
                autofocus
              />
            </div>

            <button type="submit" class="btn btn-primary btn-login w-full">
              Send Password Reset Link
            </button>
          </form>

          <div class="login-text-dont-have-account" style="margin-top: 1rem;">
            <a href="{{ route('login') }}">Back to Login</a>
          </div>
        </div>

        <div class="auth-page-image">
          <img src="/img/butcher-knife-logo.png" alt="" class="img-responsive" />
        </div>
      </div>
    </div>
  </main>
</x-base-layout>
