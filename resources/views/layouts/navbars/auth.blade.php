<div class="sidebar" data-color="white" data-active-color="success">
    <div class="logo">
        <a  class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('paper') }}/img/logo-small.png">
            </div>
        </a>
        <a href="#" class="simple-text logo-normal">
            {{ __('Admin Name') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ $elementActive == 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'dashboard') }}">
                    <i class="nc-icon nc-istanbul"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <!-- <li class="{{ $elementActive == 'user' || $elementActive == 'profile' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="true" href="#laravelExamples">
                    <i class="nc-icon"><img src="{{ asset('paper/img/laravel.svg') }}"></i>
                    <p>
                            {{ __('Laravel examples') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExamples">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'profile' ? 'active' : '' }}">
                            <a href="{{ route('profile.edit') }}">
                                <span class="sidebar-mini-icon">{{ __('UP') }}</span>
                                <span class="sidebar-normal">{{ __(' User Profile ') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'user' ? 'active' : '' }}">
                            <a href="{{ route('page.index', 'user') }}">
                                <span class="sidebar-mini-icon">{{ __('U') }}</span>
                                <span class="sidebar-normal">{{ __(' User Management ') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> -->
            <li class="{{ $elementActive == 'tables' || $elementActive == 'tables' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="true" href="#laravelExamples1">
                    <i class="nc-icon nc-single-02"></i>
                    <p>
                            {{ __('Daftar Calon Siswa') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExamples1">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'tables' ? 'active' : '' }}">
                            <a href="{{ route('page.index', 'tables') }}">
                                <span class="sidebar-mini-icon">{{ __('R') }}</span>
                                <span class="sidebar-normal">{{ __(' Calon Siswa Reguler ') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'tables1' ? 'active' : '' }}">
                            <a href="{{ route('page.index', 'tables1') }}">
                                <span class="sidebar-mini-icon">{{ __('T') }}</span>
                                <span class="sidebar-normal">{{ __(' Calon Siswa Tahfiz ') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="{{ $elementActive == 'post' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'post') }}">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>{{__('Post Management')}}</p>
                </a>
            </li>
            <!-- <li class="{{ $elementActive == 'tables1' || $elementActive == 'tables1' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="true" href="#laravelExamples2">
                    <i class="nc-icon nc-tag-content"></i>
                    <p>
                            {{ __(' Sudah Diseleksi') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExamples2">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'tables1' ? 'active' : '' }}">
                            <a href="{{ route('page.index', 'tables1') }}">
                                <span class="sidebar-mini-icon">{{ __('R') }}</span>
                                <span class="sidebar-normal">{{ __(' Calon Siswa Reguler ') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'tables' ? 'active' : '' }}">
                            <a href="{{ route('page.index', 'tables1') }}">
                                <span class="sidebar-mini-icon">{{ __('T') }}</span>
                                <span class="sidebar-normal">{{ __(' Calon Siswa Tahfiz ') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="{{ $elementActive == 'tables2' || $elementActive == 'tables2' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="true" href="#laravelExamples3">
                    <i class="nc-icon nc-ruler-pencil"></i>
                    <p>
                            {{ __(' Belum Diseleksi') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExamples3">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'tables2' ? 'active' : '' }}">
                            <a href="{{ route('page.index', 'tables2') }}">
                                <span class="sidebar-mini-icon">{{ __('R') }}</span>
                                <span class="sidebar-normal">{{ __(' Calon Siswa Reguler ') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'tables' ? 'active' : '' }}">
                            <a href="{{ route('page.index', 'tables2') }}">
                                <span class="sidebar-mini-icon">{{__('T')}}</span>
                                <span class="sidebar-normal">{{ __(' Calon Siswa Tahfiz ') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> -->
            <li class="{{ $elementActive == 'user' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'user') }}">
                    <i class="nc-icon nc-badge"></i>
                    <p>{{ __('Admin Management') }}</p>
                </a>
            </li>
            <!-- <li class="{{ $elementActive == 'notifications' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'notifications') }}">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li> -->
            <!-- <li class="{{ $elementActive == 'tables' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'tables') }}">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li> -->
            <!-- <li class="{{ $elementActive == 'typography' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'typography') }}">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>{{ __('Typography') }}</p>
                </a>
            </li> -->
        </ul>
    </div>
</div>