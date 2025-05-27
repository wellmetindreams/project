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

            <form action="" method="post">
              <div class="form-group">
                <input type="email" placeholder="Your Email" />
              </div>
              <div class="form-group">
                <input type="password" placeholder="Your Password" />
              </div>
              <div class="text-right mb-medium">
                <a href="/password-reset.html" class="auth-page-password-reset"
                  >Reset Password</a
                >
              </div>

              <button class="btn btn-primary btn-login w-full">Login</button>

              <div class="form-group" style="margin-top: 1rem">
                <x-google-button/>
              </div>
              <div class="login-text-dont-have-account">
                Don't have an account? -
                <a href="/signup.html"> Click here to create one</a>
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