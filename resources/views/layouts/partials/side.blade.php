 <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true"
     data-img="{{ asset('backend/theme-assets/images/backgrounds/02.jpg') }}">
     <div class="navbar-header">
         <ul class="nav navbar-nav flex-row">
             <li class="nav-item mr-auto">
                 <a class="navbar-brand" href="index.html"><img class="brand-logo" alt="Chameleon admin logo"
                         src="{{ asset('backend/theme-assets/images/logo/logo.png') }}" />
                     <h3 class="brand-text">SISUDE</h3>
                 </a>
             </li>
             <li class="nav-item d-md-none">
                 <a class="nav-link close-navbar"><i class="ft-x"></i></a>
             </li>
         </ul>
     </div>
     <div class="main-menu-content">
         <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
             <li class=" nav-item {{ Request::is('home') ? 'active' : '' }}">
                 <a href="{{ route('home') }}"><i class="ft-home"></i><span class="menu-title"
                         data-i18n="">Dashboard</span></a>
             </li>
             {{-- For Admin --}}
             @can('admin')
             <li class="nav-item {{ Request::is('user*') ? 'active' : '' }}">
                 <a href="{{ route('user.index') }}"><i class="ft-pie-chart"></i><span class="menu-title"
                         data-i18n="">Penduduk</span></a>
             </li>
            <li class="nav-item {{ Request::is('kk*') ? 'active' : '' }}">
                <a href="{{ route('kk.index') }}"><i class="ft-pie-chart"></i><span class="menu-title"
                        data-i18n="">Kartu Keluarga</span></a>
            </li>
            <li class="nav-item {{ Request::is('ktps*') ? 'active' : '' }}">
                <a href="{{ route('ktps.index') }}"><i class="ft-pie-chart"></i><span class="menu-title"
                        data-i18n="">KTP</span></a>
            </li>
            <li class="nav-item {{ Request::is('sktms*') ? 'active' : '' }}">
                <a href="{{ route('sktms.index') }}"><i class="ft-pie-chart"></i><span class="menu-title"
                        data-i18n="">SKTM</span></a>
            </li>
            <li class="nav-item {{ Request::is('domisilis*') ? 'active' : '' }}">
                <a href="{{ route('domisilis.index') }}"><i class="ft-pie-chart"></i><span class="menu-title"
                        data-i18n="">Domisili</span></a>
            </li>
            <li class="nav-item {{ Request::is('kelahirans*') ? 'active' : '' }}">
                <a href="{{ route('kelahirans.index') }}"><i class="ft-pie-chart"></i><span class="menu-title"
                        data-i18n="">Kelahiran</span></a>
            </li>
            <li class="nav-item {{ Request::is('kematians*') ? 'active' : '' }}">
                <a href="{{ route('kematians.index') }}"><i class="ft-pie-chart"></i><span class="menu-title"
                        data-i18n="">Kematian</span></a>
            </li>

             <li class="nav-item {{ Request::is('dusun*') ? 'active' : '' }}">
                <a href="{{ route('dusun.index') }}"><i class="ft-pie-chart"></i><span class="menu-title"
                        data-i18n="">Dusun</span></a>
            </li>
             <li class="nav-item {{ Request::is('kades*') ? 'active' : '' }}">
                <a href="{{ route('kades.index') }}"><i class="ft-pie-chart"></i><span class="menu-title"
                        data-i18n="">Kepala Desa</span></a>
            </li>
             @endcan

             {{-- endForAdmin --}}

             {{-- For User --}}
             @can('user')
             <li class="nav-item {{ Request::is('sktm*') ? 'active' : '' }}">
                 <a href="{{ route('sktm.index') }}"><i class="ft-file"></i><span class="menu-title"
                         data-i18n="">SKTM</span></a>
             </li>
             <li class="nav-item {{ Request::is('kartu*') ? 'active' : '' }}">
                 <a href="{{ route('kartu.index') }}"><i class="ft-layers"></i><span class="menu-title"
                         data-i18n="">Kartu
                         Keluarga</span></a>
             </li>
             <li class="nav-item {{ Request::is('domisili*') ? 'active' : '' }}">
                 <a href="{{ route('domisili.index') }}"><i class="ft-box"></i><span class="menu-title"
                         data-i18n="">Domisili</span></a>
             </li>
             <li class="nav-item {{ Request::is('kelahiran*') ? 'active' : '' }}">
                 <a href="{{ route('kelahiran.index') }}"><i class="ft-box"></i><span class="menu-title"
                         data-i18n="">Kelahiran</span></a>
             </li>
             <li class="nav-item {{ Request::is('Kematian*') ? 'active' : '' }}">
                 <a href="{{ route('Kematian.index') }}"><i class="ft-box"></i><span class="menu-title"
                         data-i18n="">Kematian</span></a>
             </li>
             <li class="nav-item {{ Request::is('ktp*') ? 'active' : '' }}">
                 <a href="{{ route('ktp.index') }}"><i class="ft-bold"></i><span class="menu-title"
                         data-i18n="">KTP</span></a>
             </li>
             @endcan
             {{-- End For User --}}
         </ul>
     </div>
     <div class="navigation-background"></div>
 </div>
