
<!DOCTYPE html>
<html lang="en">
@include('css.style')

<body>
    <div class="container mt-5">
      <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-7 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
          <div class="login-brand">
            <img src="{{asset('')}}assets/img/stisla1.jpg" alt="logo" width="100" class="shadow-light rounded-circle">
          </div>
          <div class="card card-success">
            <div class="card-header card text-center mb-0"><h4>REGISTRASI</h4></div>
            <div class="card-body">
              <main class="form-registration">
                <form method="POST" action="/simpanregister" class="needs-validation" novalidate="">
                  {{ csrf_field() }}
                  <div class="form-floating">
                    <label for="nik" >NIK</label>
                    <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="Masukan Data" required value="{{ old('nik') }}">
                    @error('nik')
                      <div class="invalid-feedback alert alert-danger">
                        {{ $message }}  
                      </div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <label for="email" >Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan Email" required value="{{ old('email') }}">
                      @error('email')
                        <div class="invalid-feedback alert alert-danger">
                          {{ $message }}
                        </div>
                      @enderror
                  </div>
                  <div class="form-floating">
                    <label for="name" >Nama</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukan Nama" required value="{{ old('name') }}">
                      @error('name')
                        <div class="invalid-feedback alert alert-danger">
                          {{ $message }}
                        </div>
                      @enderror
                  </div>
                  <div class="form-floating">
                    <label for="password" >Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Masukan Password" required>
                      @error('password')
                        <div class="invalid-feedback alert alert-danger">
                          {{ $message }}
                        </div>
                      @enderror
                  </div>
                  <div class="form-floating mt-4">
                    <button type="submit" class="btn btn-success btn-lg btn-block">
                      Registrasi
                    </button>
                  </div>
                </form>
              </main>
            </div>
            <div class="mt-lg-0 mb-lg-2 text-center">
            Sudah mempunyai akun!! <a href="/login">Silahkan login</a>
            </div>
          </div>
        </div>
      </div>
    </div>



  @include('css.scriptjavascript')
</body>
</html>