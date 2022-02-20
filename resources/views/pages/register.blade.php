
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

            <div class="card card-success">
              <div class="card-header card"><h4>Registrasi</h4></div>

              <div class="card-body">
                <form method="POST" action="/simpanregister" class="needs-validation" novalidate="">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label for="nik">NIK</label>
                    <input id="nik" type="text" class="form-control" name="nik" tabindex="1" placeholder="Masukan Data" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your NIK
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    <label for="nama" class="control-label">Nama Lengkap</label>
                    </div>
                    <input type="text" class="form-control" name="nama" tabindex="1" id="nama_lengkap" placeholder="nama lengkap" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your Name
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg btn-block" tabindex="4">
                      Registrasi
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  @include('layouts.scriptjavascript')
</body>
</html>