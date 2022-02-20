
<!DOCTYPE html>
<html lang="en">
@include('layouts.style')

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="{{asset('')}}assets/img/stisla1.jpg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-info" id="sample-login">
              <form>
                <div class="card-header card">
                  <h4>Login</h4>
                </div>
                <div class="card-body pb-0">
                  <div class="form-group">
                    <label>NIK</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-envelope"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" placeholder="NIK">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-lock"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" placeholder="Nama Lengkap">
                    </div>
                  </div>
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>
                </div>
                <div class="card-footer pt-">
                  <button type="submit" onclick="$.cardProgress('#sample-login', {dismiss: true,onDismiss: function() {alert('Dismissed :)')}});return false;" class="btn btn-info">Login</button>
                </div>
              </form>
            </div>
            <div class="mt-5 text- text-center">
              Anda tidak mempunyai akun? <a href="/register">Buatlah dulu</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  @include('layouts.scriptjavascript')
</body>
</html>