<header>
    <nav class="navbar navbar-expand-xxl fixed-top" data-bs-theme="dark">
        <div class="custom-container">

            <a class="navbar-brand d-xxl-none" href="#">
                <img src="{{ asset('assets/images/logos/header-logo.svg') }}" class="img-fluid" alt="" srcset="">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">

                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasLabel">
                        <img src="{{ asset('assets/images/logos/header-logo.svg') }}" alt="" srcset="">
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body justify-content-between">

                    <a class="navbar-brand col-2" href="#">
                        <img src="{{ asset('assets/images/logos/header-logo.svg') }}" class="img-fluid" alt="" srcset="">
                    </a>

                    <ul class="navbar-nav justify-content-end align-items-center align-self-center col-10 pe-3 gap-xl-3 gap-0">

                        <li class="nav-item">
                            <a class="nav-link" href="#">ÜRÜNLER</a>
                        </li>

                        <li class="nav-item nav-border"></li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">KURUMSAL</a>
                        </li>

                        <li class="nav-item nav-border"></li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">SOSYAL SORUMLULUK</a>
                        </li>

                        <li class="nav-item nav-border"></li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">MEDYA</a>
                        </li>

                        <li class="nav-item nav-border"></li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">İLETİŞİM</a>
                        </li>

                        <li class="nav-item last"></li>

                        <li class="nav-item lang">
                            <ul>
                                <li class="active">
                                    <a class="nav-link" href="javascript:void(0)">{{ $activeLanguage }}</a>
                                </li>
                                @foreach ($languages as $language)
                                    @continue($language === $activeLanguage)
                                    <li>
                                        <a class="nav-link" href="{{ url($language) }}">{{ $language }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
