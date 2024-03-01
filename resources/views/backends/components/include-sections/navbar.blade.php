<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="{{ route('admin.home') }}" id="topnav-dashboard" role="button">
                            <i class="fas fa-home me-2"></i>
                            <span key="t-dashboards">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="{{ route('admin.sliders') }}" id="topnav-dashboard" role="button">
                            <i class="fas fa-images me-2"></i>
                            <span key="t-dashboards">Slider</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="jasvscript:void(0)" id="topnav-uielement" role="button">
                            <i class="fas fa-file-code me-2"></i>
                            <span key="t-ui-elements"> Sayfalar</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button">
                            <i class="fas fa-cogs me-2"></i>
                            <span key="t-layouts">Ayarlar</span>
                            <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-layout">

                            <a class="dropdown-item" href="jasvscript:void(0)">
                                <i class="fas fa-book font-size-16 align-middle me-2"></i>
                                <span key="t-profile">Sabit Metinler</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="jasvscript:void(0)">
                                <i class="fas fa-flag font-size-16 align-middle me-2"></i>
                                <span key="t-profile">Logolar</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="jasvscript:void(0)">
                                <i class="fas fa-users font-size-16 align-middle me-2"></i>
                                <span key="t-profile">Yöneticiler</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
