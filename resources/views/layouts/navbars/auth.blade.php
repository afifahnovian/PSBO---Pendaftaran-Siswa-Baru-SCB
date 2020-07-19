<div class="sidebar" data-color="white" data-active-color="success">
    <div class="logo">
        <a href="#" class="simple-text logo-normal">
            {{ Auth::user()->name}}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ $elementActive == 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('admin') }}">
                    <i class="nc-icon nc-istanbul"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'SMP' || $elementActive == 'Tahfidz' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="true" href="#laravelExamples">
                    <i class="nc-icon nc-single-02"></i>
                    <p>
                            {{ __('Belum Diseleksi') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExamples">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'SMP' ? 'active' : '' }}">
                            <a href="/tables/SMP/belum">
                                <span class="sidebar-mini-icon">{{ __('S') }}</span>
                                <span class="sidebar-normal">{{ __(' Calon Siswa SMP ') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'Tahfidz' ? 'active' : '' }}">
                            <a href="/tables/Tahfidz/belum">
                                <span class="sidebar-mini-icon">{{ __('T') }}</span>
                                <span class="sidebar-normal">{{ __(' Calon Siswa Tahfidz ') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="{{ $elementActive == 'SMP_sudah' || $elementActive == 'Tahfidz_sudah' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="true" href="#laravelExamples1">
                    <i class="nc-icon nc-single-02"></i>
                    <p>
                            {{ __('Sudah Diseleksi') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExamples1">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'SMP_sudah' ? 'active' : '' }}">
                            <a href="/tables/SMP/sudah">
                                <span class="sidebar-mini-icon">{{ __('S') }}</span>
                                <span class="sidebar-normal">{{ __(' Calon Siswa SMP ') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'Tahfidz_sudah' ? 'active' : '' }}">
                            <a href="/tables/Tahfidz/sudah">
                                <span class="sidebar-mini-icon">{{ __('T') }}</span>
                                <span class="sidebar-normal">{{ __(' Calon Siswa Tahfidz ') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="{{ $elementActive == 'Konten' || $elementActive == 'FAQ' || $elementActive == 'Syarat' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="true" href="#laravelExamples2">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>
                        {{__('Post Management')}}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExamples2">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'Konten' ? 'active' : '' }}">
                            <a href="{{ route('all_post') }}">
                                <span class="sidebar-mini-icon">{{ __('L') }}</span>
                                <span class="sidebar-normal">{{ __('Konten Landing Page') }}</span>
                                
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'FAQ' ? 'active' : '' }}">
                            <a href="{{ route('all_faq') }}">
                                <span class="sidebar-mini-icon">{{ __('F') }}</span>
                                <span class="sidebar-normal">{{ __(' FAQ ') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'Syarat' ? 'active' : '' }}">
                            <a href="{{ route('all_syarat_smp') }} ">
                                <span class="sidebar-mini-icon">{{ __('SS') }}</span>
                                <span class="sidebar-normal">{{ __(' Syarat Pendaftaran SMP ') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'Syarat_T' ? 'active' : '' }}">
                            <a href="{{ route('all_syarat_tahfidz') }} ">
                                <span class="sidebar-mini-icon">{{ __('ST') }}</span>
                                <span class="sidebar-normal">{{ __(' Syarat Pendaftaran Tahfidz ') }}</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            
            <li class="{{ $elementActive == 'user' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'user') }}">
                    <i class="nc-icon nc-badge"></i>
                    <p>{{ __('Admin Management') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>