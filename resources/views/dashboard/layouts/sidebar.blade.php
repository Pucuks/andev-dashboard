<nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand text-decoration-none">
      <span>Halaman</span> Edit
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      {{-- Home Starts --}}
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item {{ Request::is(['dashboard']) ? 'active' : '' }}"> 
        <a href="{{ url('dashboard') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Home</span>
        </a>
      </li>
      {{-- Home Ends --}}

      {{-- Group Development Starts--}}
      <li class="nav-item nav-category">Core Part</li>
      <li class="nav-item {{ Request::is('dashboard/development-journey*') ? 'active' : '' }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#development-journey" role="button" aria-expanded="{{ Request::is(['development-journey/*']) ? 'true' : 'false' }}" aria-controls="development-journey">
          <i class="link-icon" data-feather="bookmark"></i>
          <span class="link-title">Development Journey</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ Request::is(['development-journey/*']) ? 'show' : ''}}" id="development-journey">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/development-journey/raw-material') }}" class="nav-link {{ Request::is(['development-journey/raw-material']) ? 'active' : '' }}">Raw Material</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/development-journey/finish-good') }}" class="nav-link {{ Request::is(['development-journey/finish-good']) ? 'active' : '' }}">Finish Good</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/development-journey/mikrobiologi') }}" class="nav-link {{ Request::is(['development-journey/mikrobiologi']) ? 'active' : '' }}">Mikrobiologi</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/development-journey/stabilita') }}" class="nav-link {{ Request::is(['development-journey/stabilita']) ? 'active' : '' }}">Stabilita</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ Request::is(['dashboard/rpv-riv/*']) ? 'active' : '' }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#rpv-riv" role="button" aria-expanded="{{ Request::is(['rpv-riv/*']) ? 'true' : 'false' }}" aria-controls="rpv-riv">
          <i class="link-icon" data-feather="bookmark"></i>
          <span class="link-title">RPV - RIV</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ Request::is(['rpv-riv/*']) ? 'show' : '' }}" id="rpv-riv">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/rpv-riv/raw-material') }}" class="nav-link {{ Request::is(['rpv-riv/raw-material']) ? 'active' : '' }}">Raw Material</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/rpv-riv/finish-good') }}" class="nav-link {{ Request::is(['rpv-riv/finish-good']) ? 'active' : '' }}">Finish Good</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/rpv-riv/mikrobiologi') }}" class="nav-link {{ Request::is(['rpv-riv/mikrobiologi']) ? 'active' : '' }}">Mikrobiologi</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/rpv-riv/stabilita') }}" class="nav-link {{ Request::is(['rpv-riv/stabilita']) ? 'active' : '' }}">Stabilita</a>
            </li>
          </ul>
        </div>
      </li>
      {{-- Group Development Ends --}}

      {{-- Data Report Starts --}}
      <li class="nav-item nav-category">Data Report</li>
      <li class="nav-item {{ Request::is(['dashboard/report-analysis/*']) ? 'active' : '' }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#report-analysis" role="button" aria-expanded="{{ Request::is(['report-analysis/*']) ? 'true' : 'false' }}" aria-controls="report-analysis">
          <i class="link-icon" data-feather="mail"></i>
          <span class="link-title">Report Analysis</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ Request::is(['report-analysis/*']) ? 'show' : '' }}" id="report-analysis">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/dashboard/report-analysis/raw-material') }}" class="nav-link {{ Request::is(['dashboard/report-analysis/raw-material']) ? 'active' : '' }}">Raw Material</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/dashboard/report-analysis/finish-good') }}" class="nav-link {{ Request::is(['dashboard/report-analysis/finish-good']) ? 'active' : '' }}">Finish Good</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/dashboard/report-analysis/mikrobiologi') }}" class="nav-link {{ Request::is(['dashboard/report-analysis/mikrobiologi']) ? 'active' : '' }}">Mikrobiologi</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/dashboard/report-analysis/stabilita') }}" class="nav-link {{ Request::is(['dashboard/report-analysis/stabilita']) ? 'active' : '' }}">Stabilita</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ Request::is(['dashboard/lka/*']) ? 'active' : '' }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#lka" role="button" aria-expanded="{{ Request::is(['lka/*']) ? 'true' : 'false' }}" aria-controls="lka">
          <i class="link-icon" data-feather="mail"></i>
          <span class="link-title">Lembar Kerja Analis</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ Request::is(['lka/*']) ? 'show' : '' }}" id="lka">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/dashboard/lka/raw-material') }}" class="nav-link {{ Request::is(['dashboard/lka/raw-material']) ? 'active' : '' }}">Raw Material</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/dashboard/lka/finish-good') }}" class="nav-link {{ Request::is(['dashboard/lka/finish-good']) ? 'active' : '' }}">Finish Good</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/dashboard/lka/mikrobiologi') }}" class="nav-link {{ Request::is(['dashboard/lka/mikrobiologi']) ? 'active' : '' }}">Mikrobiologi</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/dashboard/lka/stabilita') }}" class="nav-link {{ Request::is(['dashboard/lka/stabilita']) ? 'active' : '' }}">Stabilita</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ Request::is(['dashboard/jadwal-stabilita/*']) ? 'active' : '' }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#jadwal-stabilita" role="button" aria-expanded="{{ Request::is(['jadwal-stabilita/*']) ? 'true' : 'false' }}" aria-controls="jadwal-stabilita">
          <i class="link-icon" data-feather="mail"></i>
          <span class="link-title">Jadwal Stabilita</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ Request::is(['jadwal-stabilita/*']) ? 'show' : '' }}" id="jadwal-stabilita">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/dashboard/jadwal-stabilita/ss-1') }}" class="nav-link {{ Request::is(['dashboard/jadwal-stabilita/ss-1']) ? 'active' : '' }}">SS 1</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/dashboard/jadwal-stabilita/ss-2') }}" class="nav-link {{ Request::is(['dashboard/jadwal-stabilita/ss-2']) ? 'active' : '' }}">SS 2</a>
            </li>
          </ul>
        </div>
      </li>
      {{-- Report Data Ends --}}

      {{-- Others Starts --}}
      <li class="nav-item nav-category">Others</li>
      <li class="nav-item {{ Request::is(['dashboard/complience']) ? 'active' : '' }}">
        <a href="{{ url('/complience') }}" class="nav-link">
          <i class="link-icon" data-feather="calendar"></i>
          <span class="link-title">Complience</span>
        </a>
      </li>
      <li class="nav-item {{ Request::is(['resource-analysis/*']) ? 'active' : '' }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#resource-analysis" role="button" aria-expanded="{{ Request::is(['resource-analysis/*']) ? 'true' : 'false' }}" aria-controls="resource-analysis">
          <i class="link-icon" data-feather="inbox"></i>
          <span class="link-title">Resource Analysis</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ Request::is(['resource-analysis/*']) ? 'show' : '' }}" id="resource-analysis">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/resource-analysis/instrument') }}" class="nav-link {{ Request::is(['resource-analysis/instrument']) ? 'active' : '' }}">Instrument</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/resource-analysis/man-power') }}" class="nav-link {{ Request::is(['resource-analysis/man-power']) ? 'active' : '' }}">Man Power</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/resource-analysis/reagent-and-consumable') }}" class="nav-link {{ Request::is(['resource-analysis/reagent-and-consumable']) ? 'active' : '' }}">Reagent and Consumable</a>
            </li>
          </ul>
        </div>
      </li>
      
      {{-- Docs Starts --}}
      <li class="nav-item nav-category">Docs</li>
      <li class="nav-item">
        <a href="https://www.nobleui.com/laravel/documentation/docs.html" target="_blank" class="nav-link">
          <i class="link-icon" data-feather="hash"></i>
          <span class="link-title">Documentation</span>
        </a>
      </li>
      {{-- Docs Ends --}}

    </ul>
  </div>
</nav>