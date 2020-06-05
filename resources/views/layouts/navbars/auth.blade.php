<div class="sidebar" data-color="white" data-active-color="success">
    <div class="logo">
        <a  class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('paper') }}/img/logo-small.png">
            </div>
        </a>
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
                <a data-toggle="collapse" aria-expanded="true" href="#laravelExamples1">
                    <i class="nc-icon nc-single-02"></i>
                    <p>
                            {{ __('Daftar Calon Siswa') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExamples1">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'SMP' ? 'active' : '' }}">
                            <a href="/tables/SMP">
                                <span class="sidebar-mini-icon">{{ __('R') }}</span>
                                <span class="sidebar-normal">{{ __(' Calon Siswa Reguler ') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'Tahfidz' ? 'active' : '' }}">
                            <a href="/tables/Tahfidz">
                                <span class="sidebar-mini-icon">{{ __('T') }}</span>
                                <span class="sidebar-normal">{{ __(' Calon Siswa Tahfidz ') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="{{ $elementActive == 'post' ? 'active' : '' }}">
                <a href="{{ route('all_post') }}">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>{{__('Post Management')}}</p>
                </a>
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