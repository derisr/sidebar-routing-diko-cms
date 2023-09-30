<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html"> <img alt="image" src="{{url('otika')}}/assets/img/logo.png" class="header-logo" /> <span class="logo-name">DIKO ADMIN</span>
      </a>
    </div>
    <ul class="sidebar-menu">
      <!-- <li class="menu-header">Main</li> -->
      <li class="dropdown @if(request()->routeIs('admin')) active @endif">
        <a href="{{ route('admin') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
      </li>
      <li class="dropdown @if(request()->routeIs('post')) active @endif">
        <a href="{{ route('post') }}" class="nav-link"><i data-feather="share"></i><span>Create Post</span></a>
      </li>
      <li class="dropdown @if(request()->routeIs('listPost')) active @endif">
        <a href="{{ route('listPost') }}" class="nav-link"><i data-feather="list"></i><span>List Post</span></a>
      </li>
      <li class="dropdown @if(request()->routeIs('Landing')) active @endif">
        <a class="nav-link"><i data-feather="home"></i><span>Landing Page</span></a>
        <div class="sidebar-submenu">
          <ul>
            <li class="@if(request()->routeIs('featuresLanding')) active @endif">
              <a href="{{ route('featuresLanding') }}">Features</a>
            </li>
            <li class="@if(request()->routeIs('reviewLanding')) active @endif">
              <a href="{{ route('reviewLanding') }}">Review</a>
            </li>
            <li class="@if(request()->routeIs('faqLanding')) active @endif">
              <a href="{{ route('faqLanding') }}">FAQ</a>
            </li>
            {{-- <li class="@if(request()->routeIs('berandaLanding')) active @endif">
              <a href="{{ route('berandaLanding') }}">Beranda</a>
            </li> --}}
            {{-- <li class="@if(request()->routeIs('aboutLanding')) active @endif">
              <a href="{{ route('aboutLanding') }}">About</a>
            </li> --}}
            {{-- <li class="@if(request()->routeIs('penggunaLanding')) active @endif">
              <a href="{{ route('penggunaLanding') }}">Jumlah Pengguna</a>
            </li> --}}
            {{-- <li class="@if(request()->routeIs('mottoLanding')) active @endif">
              <a href="{{ route('mottoLanding') }}">Motto</a>
            </li> --}}
            {{-- <li class="@if(request()->routeIs('mockupLanding')) active @endif">
              <a href="{{ route('mockupLanding') }}">Mockup</a>
            </li> --}}
            {{-- <li class="@if(request()->routeIs('mockupsLanding')) active @endif">
              <a href="{{ route('mockupsLanding') }}">Mockups</a>
            </li> --}}
            {{-- <li class="@if(request()->routeIs('contactLanding')) active @endif">
              <a href="{{ route('contactLanding') }}">Contact</a>
            </li> --}}
          </ul>
        </div>
      </li>
      
      <li class="dropdown @if(request()->routeIs('dikoSp')) active @endif">
        <a class="nav-link"><i data-feather="bell"></i><span>DIKO SP</span></a>
        <div class="sidebar-submenu">
          <ul>
            <li class="@if(request()->routeIs('featuresSp')) active @endif">
              <a href="{{ route('featuresSp') }}">Features</a>
            </li>
            <li class="@if(request()->routeIs('featuresApplicationSp')) active @endif">
              <a href="{{ route('featuresApplicationSp') }}">Features Application</a>
            </li>
            <li class="@if(request()->routeIs('faqSp')) active @endif">
              <a href="{{ route('faqSp') }}">FAQ</a>
            </li>
            </li>
            <li class="@if(request()->routeIs('hargaSp')) active @endif">
              <a href="{{ route('hargaSp') }}">Harga</a>
            </li>
            </li>
            <li class="@if(request()->routeIs('pluginSp')) active @endif">
              <a href="{{ route('pluginSp') }}">Plugin</a>
            </li>
            {{-- <li class="@if(request()->routeIs('berandaSp')) active @endif">
              <a href="{{ route('berandaSp') }}">Beranda</a>
            </li> --}}
            {{-- <li class="@if(request()->routeIs('keunggulanSp')) active @endif">
              <a href="{{ route('keunggulanSp') }}">Keunggulan</a>
            </li> --}}
            {{-- <li class="@if(request()->routeIs('mockupsSp')) active @endif">
              <a href="{{ route('mockupsSp') }}">Mockups</a>
            </li> --}}
            {{-- <li class="@if(request()->routeIs('promotionsSp')) active @endif">
              <a href="{{ route('promotionsSp') }}">Promotions</a>
            </li> --}}
            {{-- <li class="@if(request()->routeIs('blogSp')) active @endif">
              <a href="{{ route('blogSp') }}">Blog</a>
            </li> --}}
            {{-- <li class="@if(request()->routeIs('contactSp')) active @endif">
              <a href="{{ route('contactSp') }}">Contact</a>
            </li> --}}
          </ul>
        </div>
      </li>

      <li class="dropdown @if(request()->routeIs('dikoPos')) active @endif">
        <a class="nav-link"><i data-feather="bell"></i><span>DIKO POS</span></a>
        <div>
          <ul>
            <li class="@if(request()->routeIs('featuresPos')) active @endif">
              <a href="{{ route('featuresPos') }}">Features</a>
            </li>
            <li class="@if(request()->routeIs('featuresApplicationPos')) active @endif">
              <a href="{{ route('featuresApplicationPos') }}">Features Application</a>
            </li>
            <li class="@if(request()->routeIs('faqPos')) active @endif">
              <a href="{{ route('faqPos') }}">FAQ</a>
            </li>
            </li>
            <li class="@if(request()->routeIs('hargaPos')) active @endif">
              <a href="{{ route('hargaPos') }}">Harga</a>
            </li>
            </li>
            <li class="@if(request()->routeIs('pluginPos')) active @endif">
              <a href="{{ route('pluginPos') }}">Plugin</a>
            </li>
            {{-- <li class="@if(request()->routeIs('mockupsPos')) active @endif">
              <a href="{{ route('mockupsPos') }}">Mockups</a>
            </li> --}}
            {{-- <li class="@if(request()->routeIs('blogPos')) active @endif">
              <a href="{{ route('blogPos') }}">Blog</a>
            </li> --}}
          </ul>
        </div>
      </li>

      {{-- <li class="dropdown @if(request()->routeIs('dikoSp') || request()->routeIs('dikoPos')) active @endif">
        <a href="#" class="nav-link"><i data-feather="list"></i><span>DIKO</span></a>
        <ul class="dropdown-menu">
          <li class="@if(request()->routeIs('dikoSp')) active @endif">
            <a href="{{ route('dikoSp') }}">DIKO SP</a>
          </li>
          <li class="@if(request()->routeIs('dikoPos')) active @endif">
            <a href="{{ route('dikoPos') }}">DIKO POS</a>
          </li>
        </ul>
      </li> --}}

      {{-- <li class="sidebar-dropdown">
        <a href="#">
          <i class="fa fa-home" aria-hidden="true"></i>
          <span>Profil</span>
        </a>
        <div class="sidebar-submenu">
          <ul>
            <li>
              <a href="https://bankmultidhana.com/sejarah">Sejarah</a>
            </li>
            <li>
              <a href="https://bankmultidhana.com/dewan_pengawas">Dewan Pengawas</a>
            </li>
            <li>
              <a href="https://bankmultidhana.com/direksi">Direksi</a>
            </li>
            <li>
              <a href="https://bankmultidhana.com/visimisi">Visi & Misi</a>
            </li>
            <li>
              <a href="https://bankmultidhana.com/penghargaan">Penghargaan</a>
            </li>
            <li>
              <a href="https://bankmultidhana.com/dalamberita">Bank Dalam Berita</a>
            </li>
          </ul>
        </div>
      </li> --}}
    </ul>
  </aside>
</div>