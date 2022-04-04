<nav class="navbar navbar-expand-lg main-navbar">
<form class="form-inline mr-auto" method="GET" action="/cari">
  @csrf
    <div class="col-auto">
      <select onchange="yesnocheck(this);" class="form-control form-select" type="search">
        <option value="kota">Kota</option>
        <option value="tanggal">Tanggal</option>
        <option value="jam">Jam</option>
        <option value="suhu">Suhu</option>
      </select>
    </div>
    <div class="col">
      <div class="form-group">
        <input name="kota" id="ifkota" class="form-control" type="search" placeholder="Cari Kota" aria-label="search">
        <button id="ifkotaBtn" class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
      </div>
      <div class="form-group">
        <input name="tanggal" id="iftgl" style="display: none;" class="form-control" type="date" placeholder="Cari Tanggal" aria-label="search">
        <button id="ifBtnTgl" style="display: none;" class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
      </div>
      <div class="form-group">
        <input name="jam" id="ifjam" style="display: none;" class="form-control" type="time" placeholder="Cari Jam" aria-label="search">
        <button id="ifBtnjam" style="display: none;" class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
      </div>
      <div class="form-group">
        <input name="suhu" id="ifsuhu" style="display: none;" class="form-control" type="search" placeholder="Cari Suhu" aria-label="search">
        <button id="ifBtnsuhu" style="display: none;" class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
      </div>
    </div>
  </form>
  {{-- @auth
  @else
  @endauth --}}
  <ul class="navbar-nav navbar-right">
    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user"><i class="fas fa-user"></i> 
      <div class="d-sm-none d-lg-inline-block"><span>Hi,
        {{-- {{ auth()->user()->name }} --}}
          @if (!empty(auth()->user()->name))
            {{ auth()->user()->name }}
          @else
            user
          @endif
        </span></div></a>
      <div class="dropdown-menu dropdown-menu-right">
        <a href="/profile" class="dropdown-item has-icon">
          <i class="far fa-user"></i> Profile
        </a>
        <div class="dropdown-divider"></div>
        <form action="/logout" method="POST">
          @csrf
          <a href="/logout" class="dropdown-item has-icon text-danger">
            <i class="fas fa-sign-out-alt"></i> Logout
          </a>          
        </form>
      </div>
    </li>
  </ul>
</nav>

<script>
  function yesnocheck(that) {
    if (that.value == "tanggal") {
      document.getElementById("iftgl").style.display = "block";
      document.getElementById("ifBtnTgl").style.display = "block";
      
      document.getElementById("ifkota").style.display = "none";
      document.getElementById("ifkotaBtn").style.display = "none";
      
      document.getElementById("ifsuhu").style.display = "none";
      document.getElementById("ifBtnsuhu").style.display = "none";

      document.getElementById("ifjam").style.display = "none";
      document.getElementById("ifBtnjam").style.display = "none";

    } else if(that.value == "jam"){
      document.getElementById("iftgl").style.display = "none";
      document.getElementById("ifBtnTgl").style.display = "none";
      
      document.getElementById("ifkota").style.display = "none";
      document.getElementById("ifkotaBtn").style.display = "none";
      
      document.getElementById("ifsuhu").style.display = "none";
      document.getElementById("ifBtnsuhu").style.display = "none";

      document.getElementById("ifjam").style.display = "block";
      document.getElementById("ifBtnjam").style.display = "block";
    } else if(that.value == "suhu") {
      document.getElementById("iftgl").style.display = "none";
      document.getElementById("ifBtnTgl").style.display = "none";
      
      document.getElementById("ifkota").style.display = "none";
      document.getElementById("ifkotaBtn").style.display = "none";
      
      document.getElementById("ifsuhu").style.display = "block";
      document.getElementById("ifBtnsuhu").style.display = "block";

      document.getElementById("ifjam").style.display = "none";
      document.getElementById("ifBtnjam").style.display = "none";
    } else{
      document.getElementById("iftgl").style.display = "none";
      document.getElementById("ifBtnTgl").style.display = "none";
      
      document.getElementById("ifkota").style.display = "block";
      document.getElementById("ifkotaBtn").style.display = "block";
      
      document.getElementById("ifsuhu").style.display = "none";
      document.getElementById("ifBtnsuhu").style.display = "none";

      document.getElementById("ifjam").style.display = "none";
      document.getElementById("ifBtnjam").style.display = "none";
    }
  }
</script>