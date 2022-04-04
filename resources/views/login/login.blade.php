<!DOCTYPE html>
<html lang="en">
@include('css.style')
<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-5 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="{{asset('')}}assets/img/stisla1.jpg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-info" id="sample-login">
              <form method="POST" action="/login" class="needs-validation">
                @csrf
                <div class="card-header card">
                  <h4>LOGIN</h4>
                </div>
                @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{session('status')}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                @endif
                @if (session('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  {{session('loginError')}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                @endif
                <div class="card-body pb-0">
                  <div class="form-floating">
                    <label for="nik">NIK</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-lock"></i>
                        </div>
                      </div>
                      <input type="text" id="nik" name="nik" class="form-control @error('nik') is-invalid @enderror" placeholder="NIK" autofocus required value="{{ old('nik') }}">
                      @error('nik')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>
                  <div class="form-floating">
                    <label for="password">Password</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-envelope"></i>
                        </div>
                      </div>
                      <input type="password" id="password" name="password" class="form-control" required placeholder="Password">
                    </div>
                  </div>
                </div>
                <div class="card-footer pt-">
                  <div class="form-group text-right">
                    <a href="auth-forgot-password.html" class="float-left mt-3">
                      Forgot Password?
                    </a>
                  <button type="submit" onclick="$.cardProgress('#sample-login', {dismiss: true,onDismiss: function() {alert('Dismissed :)')}});return false;" class="btn btn-info btn-lg btn-icon icon-right">Login</button>
                </div>
              </form>
            </div>
            <div class="mt-lg-0 mb-lg-2 text text-center">
              Anda tidak mempunyai akun? <a href="/register">Buatlah dulu</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  @include('css.scriptjavascript')
</body>
</html>