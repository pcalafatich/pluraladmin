<!-- ========== SIDEBAR DERECHA ========== -->
<div class="vertical-menu">
    <body data-layout="horizontal" data-sidebar="dark">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{ url('/') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/plural.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/plural.png') }}" alt="" height="22"> <span class="logo-txt">@lang('translation.Symox')</span>
            </span>
        </a>

        <a href="{{ url('/') }}" class="logo logo-light">
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/plural.png') }}" alt="" height="22"> <span class="logo-txt">@lang('translation.Symox')</span>
            </span>
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/plural.png') }}" alt="" height="22">
            </span>
        </a>
    </div>

    <!-- BOTON CONTRAER -->
    <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- MENU LATERAL DERECHO -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                <li>
                    <a href="{{ url('/') }}">
                        <i class="bx bx-tachometer icon nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboards">@lang('translation.Dashboard')</span>
                    </a>
                </li>

                {{-- DIVISOR APLICACIONES --}}
                <li class="menu-title" data-key="t-applications">@lang('translation.Applications')</li>

                <li>
                    <a href="{{ url('/comercios') }}">
                        <i class="bx bx-store icon nav-icon"></i>
                        <span class="menu-item" data-key="t-comercios">@lang('translation.Comercios')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/sucursales') }}">
                        <i class="bx bx-home-circle icon nav-icon"></i>
                        <span class="menu-item" data-key="t-sucursales">@lang('translation.Sucursales')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/promotores') }}">
                        <i class="bx bx-briefcase icon nav-icon"></i>
                        <span class="menu-item" data-key="t-promotores">@lang('translation.Promotores')</span>
                    </a>
                </li>

                {{-- DIVISOR COBRANZA --}}
                <li class="menu-title" data-key="t-cobranza">@lang('translation.Cobranza')</li>

                <li>
                    <a href="{{ url('/cobros') }}">
                        <i class="bx bx-briefcase icon nav-icon"></i>
                        <span class="menu-item" data-key="t-cobros">@lang('translation.CobrosComercios')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/cobrosSucursales') }}">
                        <i class="bx bx-briefcase icon nav-icon"></i>
                        <span class="menu-item" data-key="t-cobrosSucursales">@lang('translation.CobrosSucursales')</span>
                    </a>
                </li>

                {{-- DIVISOR CONFIGURACION --}}
                <li class="menu-title" data-key="t-configuracion">@lang('translation.Configuración')</li>

                {{-- CONFIGURACION --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-file icon nav-icon"></i>
                        <span class="menu-item" data-key="t-utility">@lang('translation.Configuración')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="configuracion" data-key="t-configuracion">@lang('translation.General')</a></li>
                        <li><a href="provincias" data-key="t-provincias">@lang('translation.Provincias')</a></li>
                        <li><a href="localidades" data-key="t-provincias">@lang('translation.Localidades')</a></li>
                        <li><a href="imagenes" data-key="t-provincias">@lang('translation.Imágenes')</a></li>
                        <li><a href="pages-pricing" data-key="t-pricing">@lang('translation.Pricing')</a></li>
                        <li><a href="pages-maintenance" data-key="t-maintenance">@lang('translation.Maintenance')</a></li>
                        <li><a href="pages-comingsoon" data-key="t-coming-soon">@lang('translation.Coming_Soon')</a></li>
                        <li><a href="pages-timeline" data-key="t-timeline">@lang('translation.Timeline')</a></li>
                        <li><a href="pages-faqs" data-key="t-faqs">@lang('translation.FAQs')</a></li>
                        <li><a href="pages-404" data-key="t-error-404">@lang('translation.Error_404')</a></li>
                        <li><a href="pages-500" data-key="t-error-500">@lang('translation.Error_500')</a></li>
                    </ul>
                </li>


                {{-- DIVISOR PAGINAS --}}
                <li class="menu-title" data-key="t-pages">@lang('translation.Pages')</li>


                {{-- UTILIDADES --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-file icon nav-icon"></i>
                        <span class="menu-item" data-key="t-utility">@lang('translation.Utility')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter" data-key="t-starter-page">@lang('translation.Starter_Page')</a></li>
                        <li><a href="pages-maintenance" data-key="t-maintenance">@lang('translation.Maintenance')</a></li>
                        <li><a href="pages-comingsoon" data-key="t-coming-soon">@lang('translation.Coming_Soon')</a></li>
                        <li><a href="pages-timeline" data-key="t-timeline">@lang('translation.Timeline')</a></li>
                        <li><a href="pages-faqs" data-key="t-faqs">@lang('translation.FAQs')</a></li>
                        <li><a href="pages-pricing" data-key="t-pricing">@lang('translation.Pricing')</a></li>
                        <li><a href="pages-404" data-key="t-error-404">@lang('translation.Error_404')</a></li>
                        <li><a href="pages-500" data-key="t-error-500">@lang('translation.Error_500')</a></li>
                    </ul>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
