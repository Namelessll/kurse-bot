<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Меню
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link @if(\Request::route()->getName() == "index") active @endif" href="{{route('index')}}" ><i class="fas fa-dollar-sign"></i>Курсы обмена</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link @if(\Request::route()->getName() == "getMails") active @endif" href="{{route('getMails')}}" ><i class="fas fa-address-book"></i>Заявки пользователей</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link @if(\Request::route()->getName() == "getSettings") active @endif" href="{{route('getSettings')}}" ><i class="fas fa-cogs"></i>Настройки</a>
                    </li>
                    <li class="nav-divider">
                        Прочее
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i class="fas fa-sign-out-alt"></i>Выход</a>
                    </li>
                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </ul>
            </div>
        </nav>
    </div>
</div>
