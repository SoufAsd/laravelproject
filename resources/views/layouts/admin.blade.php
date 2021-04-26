<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">



<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>IMMOWAZE</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/bundles/datatables/datatables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.min.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/bundles/pretty-checkbox/pretty-checkbox.min.css') }}">
  <link rel='shortcut icon' type='image/x-icon' href="{{ asset('assets/img/icon.PNG') }}" />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
              <form class="form-inline mr-auto">
                <div class="search-element">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class=" ">
              <a href="/deconnexion"  class=" nav-link " style="color: #6777ef;"><i data-feather="log-out"></i></a>
          </li>
           
        </ul>
<!--         <div class="nav-wrapper">
                  <div class="sl-nav">
                    <ul>
                      <li><b>Français</b> <i class="fa fa-angle-down" aria-hidden="true"></i>
                        <div class="triangle"></div>
                        <ul>
                          <li><div class=" sl-flag flag-icon-gb" ></div><span class="active"><a href="{{ url('locale/en') }}"> Anglais</a></span></li>
                          <li><div class=" sl-flag flag-icon-fr" ></div><span><a href="{{ url('locale/fr') }}"> Français</a></span></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
      </div> -->
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{ url('home/')}}"> <img alt="image" src="{{ asset('assets/img/logo.png') }}" class="header-logo" /> <span
                class="logo-name"></span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown ">
              <a href="{{ url('home/')}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
              <a href="{{ url('agence/')}}" class="nav-link"><i
                  data-feather="briefcase"></i><span>Agence</span></a>
            </li>
            <li class="dropdown">
              <a href="{{ url('promotors/')}}" class="nav-link"><i
                  data-feather="user-check"></i><span>Promoteurs</span></a>
            </li>


            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="shopping-bag"></i><span>Tariff Plan</span></a>
              <ul class="dropdown-menu">
                <li><a href="{{ url('tariffagency/')}}" class="nav-link"><i
                  data-feather="shopping-bag"></i><span>Tariff Plan Agence</span></a></li>
                <li><a href="{{ url('tariffpromotors/')}}" class="nav-link"><i
                  data-feather="shopping-bag"></i><span>Tariff Plan Promoteurs</span></a></li>
                  
              </ul>
            </li>
            <li class="dropdown">
              <a href="{{ url('projet/')}}" class="nav-link"><i
                  data-feather="briefcase"></i><span>Projet</span></a>
            </li>
             <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="grid"></i><span>Parametre</span></a>
                <ul class="dropdown-menu">
                  <li><a href="{{ url('propertystatus/')}}" class="nav-link"><i
                    data-feather="shopping-bag"></i><span>Property Status</span></a></li>
                    <li><a href="{{ url('propertytypes/')}}" class="nav-link"><i
                    data-feather="shopping-bag"></i><span> Property types</span></a></li>
                    <li><a href="{{ url('apptypes/')}}" class="nav-link"><i
                  data-feather="shopping-bag"></i><span>App type</span></a></li>
                   <li><a href="{{ url('projectstages/')}}" class="nav-link"><i
                  data-feather="shopping-bag"></i><span>Project Stagese</span></a></li>
                  <li><a href="{{ url('projectstatus/')}}" class="nav-link"><i
                  data-feather="shopping-bag"></i><span>Project Status</span></a></li>
                </ul>
            </li>
          </ul>
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
       @yield('content')
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2020 <div class="bullet"></div> Design By <a href="#">immmowaze</a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="{{ asset('assets/js/app.min.js') }}"></script>
  <script src="{{ asset('assets/bundles/datatables/datatables.min.js') }}"></script>
  <script src="{{ asset('assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets/js/page/datatables.js') }}"></script>
  <script src="{{ asset('assets/bundles/jquery-ui/jquery-ui.min.js') }}"></script>
  <!-- JS Libraies -->
  <script src="{{ asset('assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
  <!-- Page Specific JS File -->
  <script src="{{ asset('assets/js/page/index.js') }}"></script>
  <!-- Template JS File -->
  <script src="{{ asset('assets/js/scripts.js') }}"></script>
  <!-- Custom JS File -->
  <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
 
</html>