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
  <link rel="stylesheet" href="{{asset('assets/css/jquery.dataTables.min.css')}}">
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
          <a class="nav-link text-white " href="/menu">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="/barang">
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
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Pengelola Barang</li>
          </ol>
          <h6 class="font-weight-bolder mb-0 text-white">Tabel Barang</h6>
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
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          @if (session('success'))
          <div class="alert alert-success text-white mb-3">
              {{ session('success') }}
          </div>
      @elseif (session('warning'))
          <div class="alert alert-warning text-white mb-3">
              {{ session('warning') }}
          </div>
      @elseif (session('primary'))
          <div class="alert alert-primary text-white mb-3">
              {{ session('primary') }}
          </div>
      @elseif (session('danger'))
          <div class="alert alert-danger text-white mb-3">
              {{ session('danger') }}
          </div>
      @endif
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 px-4">
                <h6 class="text-white text-capitalize ps-3">Tabel Barang</h6>
                @if (session('id'))
                <a href="#" data-bs-toggle="modal" data-bs-target="#tambahKatModal" class="btn btn-warning float-end" style="margin-top:-35px; margin-left:5px;">
                  <i class="fa fa-plus"></i> Kategori
                </a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#tambahBarangModal" class="btn btn-success float-end" style="margin-top:-35px;">
                  <i class="fa fa-plus"></i> Tambah Barang
                </a>
                {{-- <a href="/logbarang" class="btn btn-info float-end mx-2" style="margin-top:-35px;">
                  <i class="fa fa-file-invoice mr-1"></i>
                </a> --}}
                @endif
              </div>
            </div>
            <div class="card-body px-4 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0" id="tabel">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">No</th>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Merek Barang</th>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Nama Supplier</th>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Kategori</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Jumlah Stok</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Lokasi Penempatan</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ">Pengaturan</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($barangjoin as $barang)
                    <tr>
                      <td> 
                        <div class="d-flex px-2 py-1">
                          <h4 class="mb-0 text-xs">{{$loop->iteration}}</h4>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs text-uppercase font-weight-bold mb-0">{{$barang->merek}}</p>
                      </td>
                      <td>
                        <p class="text-xs text-uppercase font-weight-bold mb-0">{{$barang->supplier}}</p>
                      </td>
                      <td class="align-middle text-center text-xs">
                        <p class="text-xs font-weight-bold mb-0">{{$barang->kategori}}</p>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$barang->stok}}</span>
                      </td>            
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$barang->lokasi}}</span>
                      </td>
                      <td class="align-middle">
                        @if(session('id'))
                        <a href="{{ route('barang.edit', $barang->id) }}" class="text-secondary font-weight-bold text-md" data-toggle="tooltip" data-original-title="Edit barang">
                          <span class="badge badge-sm bg-warning"><i class="fa fa-pen"></i> Ubah</span>
                        </a>
                        @endif
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
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
      <!-- Modal Tambah Barang -->
      <div class="modal fade" id="tambahBarangModal" tabindex="-3" role="dialog" aria-labelledby="tambahBarangModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header justify-content-center">
              <h5 class="modal-title font-weight-bolder" id="tambahBarangModalLabel"> Tambah Data Barang </h5>
            </div>
            <div class="modal-body">
              <form id="tambahBarang" action="{{ route('tambah') }}" method="POST" role="form" id="tambahBarangModal">
                @csrf
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group input-group input-group-outline mb-">
                        <label for="example-text-input" class="form-label">Merek Barang</label>
                        <input class="form-control" required autocomplete="off" type="text" name="merek">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group input-group input-group-outline mb-">
                        <label for="example-text-input" class="form-label">Supplier Barang</label>
                        <input class="form-control" required autocomplete="on" type="text" name="supplier">
                      </div>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-md-12">
                      <div class="form-group">
                        <select class="form-control" required name="kat_id" id="kat_id" style="border: 0.75px solid; ">
                          <option value="">Pilih Kategori</option>
                          @foreach ($kategori as $item)
                              <option value="{{ $item->id }}" >{{ $item->kategori }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-2 mb-4">
                  <div class="col-md-6">
                    <div class="form-group input-group input-group-outline mb-">
                      <label for="example-text-input" class="form-label">Stok Barang (dalam Box)</label>
                      <input class="form-control" required autocomplete="off" type="number" name="stok">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group input-group input-group-outline mb-">
                      <label for="example-text-input" class="form-label">Lokasi Barang</label>
                      <input class="form-control" required autocomplete="off" type="text" name="lokasi">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">  
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <a href="/addBarang" class="btn btn-success" onclick="event.preventDefault(); document.getElementById('tambahBarang').submit();"><i class="fa fa-pen"></i> Tambah</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Tambah Kategori -->
      <div class="modal fade" id="tambahKatModal" tabindex="-3" role="dialog" aria-labelledby="tambahKatModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header justify-content-center">
              <h5 class="modal-title font-weight-bolder" id="tambahKatModalLabel"> Tambah Jenis Kategori </h5>
            </div>
            <div class="modal-body">
              <form id="tambahKat" action="{{ route('tambahKat') }}" method="POST" role="form" id="tambahKatModal">
                @csrf
                <div class="form-group ">
                  <div class="col-md-12">
                    <div class="form-group input-group input-group-outline mb-">
                      <label class="form-label">Jenis Kategori</label>
                      <input class="form-control" required autocomplete="off" type="text" name="kategori" >
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <a href="/addBarang" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('tambahKat').submit();"><i class="fa fa-pen"></i> Tambah</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

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
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
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
  <script src="{{asset('assets/js/plugins/chartjs.min.js')}}"></script>>
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    $(document).ready(function(){
      $("#tabel").DataTable();
    });
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('assets/js/material-dashboard.min.js?v=3.1.0')}}"></script>
</body>

</html>