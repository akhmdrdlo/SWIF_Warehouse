<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('assets/img/icons/swif_logo.png')}}">
  <title>
    SWIF - Warehouse Management System
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('assets/css/material-dashboard.css?v=3.1.0')}}" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-200">
  <div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('../assets/img/gudang2.jpeg'); background-position-y: 50%; background-position:center;">
    <span class="mask bg-primary opacity-6"></span>
  </div>
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="{{asset('assets/img/icons/swif_logo.png')}}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">SWIF Menu</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="/menu">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="/barang">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Tabel Barang</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="/historiBarang">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">watch</i>
            </div>
            <span class="nav-link-text ms-1">Record Data</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="/pengiriman">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">flight</i>
            </div>
            <span class="nav-link-text ms-1">Pengiriman Barang</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Jendela Akun</h6>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="#" data-bs-toggle="modal" data-bs-target="#logout">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">logout</i>
            </div>
            <span class="nav-link-text ms-1">Log Out</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Halaman</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Menu Utama</li>
          </ol>
          <h6 class="font-weight-bolder mb-0 text-white">Menu Utama</h6>
        </nav>
        <nav>
          <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <ul class="navbar-nav  justify-content-end">
              <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                  </div>
                </a>
              </li>
              <li class="nav-item px-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0">
                  <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer text-white"></i>
                </a>
              </li>
              <li class="nav-item d-flex align-items-center">
                <a href="" class="nav-link text-body font-weight-bold px-0 ">
                  <i class="fa fa-user me-sm-1 text-white"></i>
                  <span class="d-sm-inline d-none text-white">{{ Auth::user()->nama_lengkap }}</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </nav>
    <!-- End Navbar -->

    @if (session('success'))
        <div class="alert alert-success text-white text-center">
            {{ session('success') }}
        </div>
    @elseif (session('danger'))
        <div class="alert alert-danger text-white text-center">
            {{ session('danger') }}
        </div>
    @endif
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">inventory</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Total Stok</p>
                <h4 class="mb-0">{{ $totalStock }} Boks</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">input</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Total Barang Masuk</p>
                <h4 class="mb-0">{{$totalReceiveMonthly}} Boks</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">output</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Total Barang Keluar</p>
                <h4 class="mb-0">{{$totalPutawayMonthly}} Boks</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
          </div>
        </div>
      </div>
      <div class="container-fluid py-4">
        <div class="row">
          <div class="col-lg-4">
            <div class="row">
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h5 class="font-weight-bolder">Logo Gudang</h5>
                </div>
                <div class="card-body py-3 d-flex flex-row align-items-center justify-content-between">
                    <img src="{{asset('assets/img/icons/swif_full_black.png')}}" alt="Logo" width="270px" height="auto">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="card h-100">
              <div class="card-header pb-0 p-3">
                <div class="row">
                  <div class="col-6 d-flex text-center">
                    <h5 class="mb-0">Informasi Gudang</h5>
                  </div>
                </div>
              @foreach($dataGudang as $gudang)
              <div class="card-body p-3 pb-0">
                <ul class="list-group">
                  <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                    <div class="d-flex flex-column">  
                      <h6 class="mb-1 text-dark font-weight-bold text-lg">Nama Gudang</h6>
                    </div>
                    <div class="d-flex align-items-center text-lg">
                      {{$gudang->nama_gudang}}
                    </div>
                  </li>
                  <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                    <div class="d-flex flex-column">
                      <h6 class="mb-1 text-dark font-weight-bold text-lg">Tipe Gudang</h6>
                    </div>
                    <div class="d-flex align-items-center text-lg">
                      {{$gudang->tipe}}
                    </div>
                  </li>
                  <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                    <div class="d-flex flex-column">
                      <h6 class="mb-1 text-dark font-weight-bold text-lg">Lokasi Gudang</h6>
                    </div>
                    <div class="d-flex align-items-center text-lg">
                      {{$gudang->alamat}}
                    </div>
                  </li>
                  <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                    <div class="d-flex flex-column">
                      <h6 class="mb-1 text-dark font-weight-bold text-lg">Nama Pemilik/Instansi</h6>
                    </div>
                    <div class="d-flex align-items-center text-lg">
                      {{$gudang->nama_pemilik}}
                    </div>
                  </li>
                  <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                    <div class="d-flex flex-column">
                      <h6 class="mb-1 text-dark font-weight-bold text-lg">Luas Pemilik/Instansi</h6>
                    </div>
                    <div class="d-flex align-items-center text-lg">
                      {{$gudang->luas}}
                    </div>
                  </li>
                 @if(Auth::user()->status=='SuperAdmin')
                  <li class="list-group-item border-0 d-flex justify-content-between ps-0 mt-4 border-radius-lg">
                    <div class="d-flex flex-column-reverse">
                      <a href="#" data-bs-toggle="modal" data-bs-target="#ubahGudangModal" class="btn btn-success float-end" style="margin-top:-35px;">
                        <i class="fa fa-box"></i> Ubah Data Gudang
                      </a>
                    </div>
                  </li>
                  @endif
                </ul>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made by
                <a href="" class="font-weight-bold" target="_blank">SWIF Developer Team</a>
              </div>
            </div>
            <div class="col-lg-6">
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabelLogout">Upss!!</h4>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Apa kamu yakin ingin Logout, {{ Auth::User()->nama_lengkap }} ?</p>
        </div>
        <div class="modal-footer">
          <a href="/logout" class="btn btn-outline-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
          <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
            @csrf
          </form>
        </div>
      </div>
    </div>
  </div>

        <!-- Modal Ubah Gudang -->
        <div class="modal fade" id="ubahGudangModal" tabindex="-3" role="dialog" aria-labelledby="ubahGudangLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header justify-content-center">
                <h5 class="modal-title font-weight-bolder" id="ubahGudangLabel"> Ubah Data Gudang</h5>
              </div>
              <div class="modal-body">
                <form id="ubahGudang" action="{{ route('ubahGudang') }}" method="POST" role="form" id="ubahGudang">
                  @csrf
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group input-group input-group-outline mb-">
                          <label for="example-text-input" class="form-label">Nama Gudang</label>
                          <input class="form-control" required autocomplete="off" type="text" name="nama_gudang">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group input-group input-group-outline mb-">
                          <label for="example-text-input" class="form-label">Tipe Gudang</label>
                          <input class="form-control" required autocomplete="on" type="text" name="tipe">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-2 mb-4">
                    <div class="col-md-6">
                      <div class="form-group input-group input-group-outline mb-">
                        <label for="example-text-input" class="form-label">Alamat Gudang</label>
                        <input class="form-control" required autocomplete="off" type="text" name="alamat">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group input-group input-group-outline mb-">
                        <label for="example-text-input" class="form-label">Nama Pemilik</label>
                        <input class="form-control" required autocomplete="off" type="text" name="nama_pemilik">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group input-group input-group-outline mb-">
                        <label for="example-text-input" class="form-label">Luas Gudang</label>
                        <input class="form-control" required autocomplete="off" type="text" name="luas">
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">  
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-pen"></i> Tambah</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">SWIF - Warehouse Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/chartjs.min.js')}}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('assets/js/material-dashboard.min.js?v=3.1.0')}}"></script>
</body>

</html>