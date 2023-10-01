@extends('layouts.master')
@section('title') @lang('translation.Dashboard') @endsection

@section('content')
    @component('components.breadcrumb')
    @slot('li_1') ADMINISTRADOR @endslot
    @slot('title') Bienvenido ! @endslot
    @endcomponent

{{-- PRIMERA FILA --}}
    <div class="row">
        <div class="col-xl-4">
            <div class="card bg-primary">
                <div class="card-body">
                    <div class="text-center py-3">
                        <ul class="bg-bubbles ps-0">
                            <li><i class="bx bx-grid-alt font-size-24"></i></li>
                            <li><i class="bx bx-tachometer font-size-24"></i></li>
                            <li><i class="bx bx-store font-size-24"></i></li>
                            <li><i class="bx bx-cube font-size-24"></i></li>
                            <li><i class="bx bx-cylinder font-size-24"></i></li>
                            <li><i class="bx bx-command font-size-24"></i></li>
                            <li><i class="bx bx-hourglass font-size-24"></i></li>
                            <li><i class="bx bx-pie-chart-alt font-size-24"></i></li>
                            <li><i class="bx bx-coffee font-size-24"></i></li>
                            <li><i class="bx bx-polygon font-size-24"></i></li>
                        </ul>
                        <div class="main-wid position-relative">
                            <h3 class="text-white">Plural Descuentos</h3>

                            <h3 class="text-white mb-0"> Bienvenido, Administrador!</h3>

                            <p class="text-white-50 px-4 mt-4">Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien libero tincidunt.</p>

                            <div class="mt-4 pt-2 mb-2">
                                <a href="" class="btn btn-success">Ver Perfil <i class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="avatar">
                                <span class="avatar-title bg-soft-primary rounded">
                                    <i class="mdi mdi-shopping-outline text-primary font-size-24"></i>
                                </span>
                            </div>
                            <p class="text-muted mt-4 mb-0">Comercios Adheridos</p>
                            <h4 class="mt-1 mb-0">89
                                <sup class="text-success fw-medium font-size-14"><i class="mdi mdi-arrow-down"></i> 10%</sup>
                            </h4>
                            <div>
                                <div class="py-3 my-1">
                                    <div id="mini-1" data-colors='["#3980c0"]'></div>
                                </div>
                                <ul class="list-inline d-flex justify-content-between justify-content-center mb-0">
                                    <li class="list-inline-item"><a href="" class="text-muted">Día</a></li>
                                    <li class="list-inline-item"><a href="" class="text-muted">Semana</a></li>
                                    <li class="list-inline-item"><a href="" class="text-muted">Mes</a></li>
                                    <li class="list-inline-item"><a href="" class="text-muted">Año</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="avatar">
                                <span class="avatar-title bg-soft-success rounded">
                                    <i class="mdi mdi-eye-outline text-success font-size-24"></i>
                                </span>
                            </div>
                            <p class="text-muted mt-4 mb-0">Visitas Hoy</p>
                            <h4 class="mt-1 mb-0">896 <sup class="text-danger fw-medium font-size-14"><i class="mdi mdi-arrow-down"></i> 19%</sup></h4>
                            <div>
                                <div class="py-3 my-1">
                                    <div id="mini-2" data-colors='["#33a186"]'></div>
                                </div>
                                <ul class="list-inline d-flex justify-content-between justify-content-center mb-0">
                                    <li class="list-inline-item"><a href="" class="text-muted">Día</a></li>
                                    <li class="list-inline-item"><a href="" class="text-muted">Semana</a></li>
                                    <li class="list-inline-item"><a href="" class="text-muted">Mes</a></li>
                                    <li class="list-inline-item"><a href="" class="text-muted">Año</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="avatar">
                                <span class="avatar-title bg-soft-primary rounded">
                                    <i class="mdi mdi-rocket-outline text-primary font-size-24"></i>
                                </span>
                            </div>
                            <p class="text-muted mt-4 mb-0">Nuevos Usuarios</p>
                            <h4 class="mt-1 mb-0">64
                                <sup class="text-success fw-medium font-size-14"><i class="mdi mdi-arrow-down"></i> 22%</sup>
                            </h4>
                            <div>
                                <div class="py-3 my-1">
                                    <div id="mini-3" data-colors='["#3980c0"]'></div>
                                </div>
                                <ul class="list-inline d-flex justify-content-between justify-content-center mb-0">
                                    <li class="list-inline-item"><a href="" class="text-muted">Día</a></li>
                                    <li class="list-inline-item"><a href="" class="text-muted">Semana</a></li>
                                    <li class="list-inline-item"><a href="" class="text-muted">Mes</a></li>
                                    <li class="list-inline-item"><a href="" class="text-muted">Año</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="avatar">
                                <span class="avatar-title bg-soft-success rounded">
                                    <i class="mdi mdi-account-multiple-outline text-success font-size-24"></i>
                                </span>
                            </div>
                            <p class="text-muted mt-4 mb-0">Nuevas Sucursales</p>
                            <h4 class="mt-1 mb-0">$5
                                <sup class="text-danger fw-medium font-size-14"><i class="mdi mdi-arrow-down"></i> 18%</sup>
                            </h4>
                            <div>
                                <div class="py-3 my-1">
                                    <div id="mini-4" data-colors='["#33a186"]'></div>
                                </div>
                                <ul class="list-inline d-flex justify-content-between justify-content-center mb-0">
                                    <li class="list-inline-item"><a href="" class="text-muted">Día</a></li>
                                    <li class="list-inline-item"><a href="" class="text-muted">Semana</a></li>
                                    <li class="list-inline-item"><a href="" class="text-muted">Mes</a></li>
                                    <li class="list-inline-item"><a href="" class="text-muted">Año</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
{{-- FIN PRIMERA FILA --}}

{{-- SEGUNDA FILA --}}
    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap align-items-center mb-3">
                        <h5 class="card-title mb-0">Estadísticas Ventas</h5>
                        <div class="ms-auto">
                            <div class="dropdown">
                                <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted font-size-12">Ordenado por:</span> <span class="fw-medium">Semana<i class="mdi mdi-chevron-down ms-1"></i></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                    <a class="dropdown-item" href="#">Mes</a>
                                    <a class="dropdown-item" href="#">Año</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center">
                    <div class="col-xl-8">
                        <div>
                                <div id="sales-statistics" data-colors='["#eff1f3","#eff1f3","#eff1f3","#eff1f3","#33a186","#3980c0","#eff1f3","#eff1f3","#eff1f3", "#eff1f3"]' class="apex-chart"></div>
                        </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="">
                                <div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex">
                                            <i class="mdi mdi-circle font-size-10 mt-1 text-primary"></i>
                                            <div class="flex-1 ms-2">
                                                <p class="mb-0">Adhesiones Comercios</p>
                                                <h5 class="mt-1 mb-0 font-size-16">43</h5>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="badge badge-soft-primary">25.4%<i class="mdi mdi-arrow-down ms-2"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3 border-top pt-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex">
                                            <i class="mdi mdi-circle font-size-10 mt-1 text-primary"></i>
                                            <div class="flex-1 ms-2">
                                                <p class="mb-0">Comercios visitados</p>
                                                <h5 class="mt-1 mb-0 font-size-16">17</h5>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="badge badge-soft-primary">17.4%<i class="mdi mdi-arrow-down ms-2"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3 border-top pt-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex">
                                            <i class="mdi mdi-circle font-size-10 mt-1 text-success"></i>
                                            <div class="flex-1 ms-2">
                                                <p class="mb-0">Comercios suspendidos</p>
                                                <h5 class="mt-1 mb-0 font-size-16">3</h5>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="badge badge-soft-success">16.3%<i class="mdi mdi-arrow-up ms-1"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3 border-top pt-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex">
                                            <i class="mdi mdi-circle font-size-10 mt-1 text-primary"></i>
                                            <div class="flex-1 ms-2">
                                                <p class="mb-0">Comercios desafiliados</p>
                                                <h5 class="mt-1 mb-0 font-size-16">6</h5>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="badge badge-soft-primary">65.7%<i class="mdi mdi-arrow-up ms-1"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap align-items-center">
                        <h5 class="card-title mb-0">Comercios aheridos por Sucursal</h5>
                        <div class="ms-auto">
                            <div class="dropdown">
                                <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted font-size-12">Ordenado por:</span> <span class="fw-medium">Semana<i class="mdi mdi-chevron-down ms-1"></i></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                    <a class="dropdown-item" href="#">Mes</a>
                                    <a class="dropdown-item" href="#">Año</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <canvas class="mx-auto" id="sales-category" height="281" data-colors='["#3980c0","#51af98", "#4bafe1", "#B4B4B5", "#f1f3f4"]'></canvas>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <div class="px-2">
                                <div class="d-flex align-items-center mt-sm-0 mt-2">
                                    <i class="mdi mdi-circle font-size-10 mt-1 text-primary"></i>
                                    <div class="flex-grow-1 ms-2">
                                        <p class="mb-0 text-truncate">Mar del Plata</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <span class="fw-bold">35.0%</span>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center mt-2">
                                    <i class="mdi mdi-circle font-size-10 mt-1 text-success"></i>
                                        <div class="flex-grow-1 ms-2">
                                            <p class="mb-0 text-truncate">Batán</p>
                                        </div>
                                    <div class="flex-shrink-0">
                                        <span class="fw-bold">15.0%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="px-2">
                                <div class="d-flex align-items-center mt-sm-0 mt-2">
                                        <i class="mdi mdi-circle font-size-10 mt-1 text-info"></i>
                                        <div class="flex-grow-1 ms-2">
                                            <p class="mb-0 text-truncate">Villa Gesell</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <span class="fw-bold">8.0%</span>
                                        </div>
                                </div>

                                <div class="d-flex align-items-center mt-2">
                                        <i class="mdi mdi-circle font-size-10 mt-1 text-secondary"></i>
                                        <div class="flex-grow-1 ms-2">
                                            <p class="mb-0 text-truncate">Miramar</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <span class="fw-bold">7.0%</span>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- FIN SEGUNDA FILA --}}

{{-- TERCERA FILA --}}
    <div class="row">
        <div class="col-xl-8">
                <div class="row">
                    <div class="col-lg-5">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <h5 class="card-title mb-0">Tareas y actividades</h5>
                                        <div class="ms-auto">
                                            <div class="dropdown">
                                                <a class="font-size-16 text-muted dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Agregar</a>
                                                    <a class="dropdown-item" href="#">Editar</a>
                                                    <a class="dropdown-item" href="#">Eliminar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0">
                                    <ol class="activity-feed mb-0 px-4" data-simplebar style="max-height: 377px;">
                                        <li class="feed-item">
                                            <div class="d-flex justify-content-between feed-item-list">
                                                <div>
                                                    <h5 class="font-size-15 mb-1">Propuesta a Comercio enviada</h5>
                                                    <p class="text-muted mt-0 mb-0">Carlos Rodriguez</p>
                                                </div>
                                                <div>
                                                    <p class="text-muted mb-0">hace 1 hora</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="feed-item">
                                            <div class="d-flex justify-content-between feed-item-list">
                                                <div>
                                                    <h5 class="font-size-15 mb-1">Hay 5 comercios pendientes.</h5>
                                                    <p class="text-muted mt-0 mb-0">Enviados</p>
                                                </div>
                                                <div>
                                                    <p class="text-muted mb-0">hace 6 horas</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="feed-item">
                                            <div class="d-flex justify-content-between feed-item-list">
                                                <div>
                                                    <h5 class="font-size-15 mb-1">Contacto recibido por formulario</h5>
                                                    <p class="text-muted mt-0 mb-0">Contestar</p>
                                                </div>
                                                <div>
                                                    <p class="text-muted mb-0">hace 1 día</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="feed-item">
                                            <div class="d-flex justify-content-between feed-item-list">
                                                <div>
                                                    <h5 class="font-size-15 mb-1">Nuevo Usuario Agregado</h5>
                                                    <p class="text-muted mt-0 mb-0">Falta Confirmación por correo</p>
                                                </div>
                                                <div>
                                                    <p class="text-muted mb-0">Ayer</p>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="feed-item">
                                            <div class="d-flex justify-content-between feed-item-list">
                                                <div>
                                                    <h5 class="font-size-15 mb-1">Contacto recibido por Formulario.</h5>
                                                    <p class="text-muted mt-0 mb-0">Falta confirmación por correo</p>
                                                </div>
                                                <div>
                                                    <p class="text-muted mb-0">hace 2 horas</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="feed-item pb-1">
                                            <div class="d-flex justify-content-between feed-item-list">
                                                <div>
                                                    <h5 class="font-size-15 mb-1">Nuevo Usuario agregado por APP</h5>
                                                    <p class="text-muted mt-0 mb-0">Confirmación recibida</p>
                                                </div>
                                                <div>
                                                    <p class="text-muted mb-0">Hoy</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="card">
                            <div class="card-header">
                                <div class="align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Comisiones Promotores</h4>
                                    <div class="flex-shrink-0">
                                        <div class="dropdown">
                                            <a class=" dropdown-toggle" href="#" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted">Todos los Usuarios<i class="mdi mdi-chevron-down ms-1"></i></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                                                <a class="dropdown-item" href="#">Promotores Hoy</a>
                                                <a class="dropdown-item" href="#">Promotores Semana</a>
                                                <a class="dropdown-item" href="#">Promotores Mes</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body px-0 pt-2">
                                <div class="table-responsive px-3" data-simplebar style="max-height: 393px;">
                                    <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                        <tbody>
                                            <tr>
                                                <td style="width: 20px;"><img src="{{ URL::asset('assets/images/users/avatar-4.jpg') }}" class="avatar-sm rounded-circle " alt="..."></td>
                                                <td>
                                                    <h6 class="font-size-15 mb-1">Mariela Ortega</h6>
                                                    <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Mar del Plata</p>
                                                </td>
                                                <td class="text-muted"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i> $250.00</td>
                                                <td><span class="badge badge-soft-danger font-size-12">Alcanzó</span></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="mdi mdi-dots-vertical"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Agregar</a>
                                                            <a class="dropdown-item" href="#">Editar</a>
                                                            <a class="dropdown-item" href="#">Eliminar</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Más opciones</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img src="{{ URL::asset('assets/images/users/avatar-5.jpg') }}" class="avatar-sm rounded-circle " alt="..."></td>
                                                <td>
                                                    <h6 class="font-size-15 mb-1">Jorge Martínez</h6>
                                                    <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Mar del Plata</p>
                                                </td>
                                                <td class="text-muted"><i class="icon-xs icon me-2 text-danger" data-feather="trending-up"></i>$110.00</td>
                                                <td><span class="badge badge-soft-success font-size-12">Alcanzó</span></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="mdi mdi-dots-vertical"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Agregar</a>
                                                            <a class="dropdown-item" href="#">Editar</a>
                                                            <a class="dropdown-item" href="#">Eliminar</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Más opciones</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img src="{{ URL::asset('assets/images/users/avatar-6.jpg') }}" class="avatar-sm rounded-circle " alt="..."></td>
                                                <td>
                                                    <h6 class="font-size-15 mb-1">Roberto Treviño</h6>
                                                    <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Otamendi</p>
                                                </td>
                                                <td class="text-muted"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$420.00</td>
                                                <td><span class="badge badge-soft-info font-size-12">Estable</span></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="mdi mdi-dots-vertical"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Agregar</a>
                                                            <a class="dropdown-item" href="#">Editar</a>
                                                            <a class="dropdown-item" href="#">Eliminar</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Más opciones</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img src="{{ URL::asset('assets/images/users/avatar-7.jpg') }}" class="avatar-sm rounded-circle " alt="..."></td>
                                                <td>
                                                    <h6 class="font-size-15 mb-1">Mario Rodríguez</h6>
                                                    <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Mar Chiquita</p>
                                                </td>
                                                <td class="text-muted"><i class="icon-xs icon me-2 text-danger" data-feather="trending-up"></i>$120.00</td>
                                                <td><span class="badge badge-soft-warning font-size-12">Superó</span></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="mdi mdi-dots-vertical"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Agregar</a>
                                                            <a class="dropdown-item" href="#">Editar</a>
                                                            <a class="dropdown-item" href="#">Eliminar</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Más opciones</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img src="{{ URL::asset('assets/images/users/avatar-8.jpg') }}" class="avatar-sm rounded-circle " alt="..."></td>
                                                <td>
                                                    <h6 class="font-size-15 mb-1">Sonia Mouzo</h6>
                                                    <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Batán</p>
                                                </td>
                                                <td class="text-muted"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$112.00</td>
                                                <td><span class="badge badge-soft-info font-size-12">No alcanzó</span></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="mdi mdi-dots-vertical"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Agregar</a>
                                                            <a class="dropdown-item" href="#">Editar</a>
                                                            <a class="dropdown-item" href="#">Eliminar</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Más opciones</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img src="{{ URL::asset('assets/images/users/avatar-2.jpg') }}" class="avatar-sm rounded-circle " alt="..."></td>
                                                <td>
                                                    <h6 class="font-size-15 mb-1">Maria Hernández</h6>
                                                    <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Santa Clara del Mar</p>
                                                </td>
                                                <td class="text-muted"><i class="icon-xs icon me-2 text-danger" data-feather="trending-down"></i>$120.00</td>
                                                <td><span class="badge badge-soft-success font-size-12">No alcanzó</span></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="mdi mdi-dots-vertical"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Agregar</a>
                                                            <a class="dropdown-item" href="#">Editar</a>
                                                            <a class="dropdown-item" href="#">Eliminar</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Más opciones</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img src="{{ URL::asset('assets/images/users/avatar-1.jpg') }}" class="avatar-sm rounded-circle " alt="..."></td>
                                                <td>
                                                    <h6 class="font-size-15 mb-1">Carla Bove</h6>
                                                    <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Balcarce</p>
                                                </td>
                                                <td class="text-muted"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$112.00</td>
                                                <td><span class="badge badge-soft-danger font-size-12">Alcanzó</span></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="mdi mdi-dots-vertical"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Agregar</a>
                                                            <a class="dropdown-item" href="#">Editar</a>
                                                            <a class="dropdown-item" href="#">Eliminar</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Más opciones</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <div class="align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Ventas por Sucursal</h4>
                        <div class="flex-shrink-0">
                            <div class="dropdown">
                                <a class=" dropdown-toggle" href="#" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted">Ver todas<i class="mdi mdi-chevron-down ms-1"></i></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                                    <a class="dropdown-item" href="#">Agregar</a>
                                    <a class="dropdown-item" href="#">Editar</a>
                                    <a class="dropdown-item" href="#">Eliminar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-1">

                    <div class="table-responsive">
                        <table class="table table-centered align-middle table-nowrap mb-0">

                            <tbody>
                                <tr>
                                    <td>Mar del Plata</td>
                                    <td>
                                        261.500
                                    </td>
                                    <td>
                                        <i class="bx bx-trending-up text-success"></i>
                                    </td>
                                    <td>
                                        40%
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Agregar</a>
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Eliminar</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Más opciones</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Balcarce</td>
                                    <td>
                                        36.500
                                    </td>
                                    <td>
                                        <i class="bx bx-trending-up text-success"></i>
                                    </td>
                                    <td>
                                        50%
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Agregar</a>
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Eliminar</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Más opciones</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Mechongué</td>
                                    <td>
                                        17.500
                                    </td>
                                    <td>
                                        <i class="bx bx-trending-down text-danger"></i>
                                    </td>
                                    <td>
                                        20%
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Agregar</a>
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Eliminar</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Más opciones</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Santa Clara del Mar</td>
                                    <td>
                                        75,521.28
                                    </td>
                                    <td>
                                        <i class="bx bx-trending-up text-success"></i>
                                    </td>
                                    <td>
                                        70%
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Agregar</a>
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Eliminar</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Más opciones</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Miramar</td>
                                    <td>
                                        21.500
                                    </td>
                                    <td>
                                        <i class="bx bx-trending-up text-success"></i>
                                    </td>
                                    <td>
                                        40%
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Agregar</a>
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Eliminar</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Más opciones</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Otamendi</td>
                                    <td>
                                        14.500
                                    </td>
                                    <td>
                                        <i class="bx bx-trending-up text-success"></i>
                                    </td>
                                    <td>
                                        40%
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Agregar</a>
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Eliminar</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Más opciones</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Villa Gesell</td>
                                    <td>
                                        1.500
                                    </td>
                                    <td>
                                        <i class="bx bx-trending-up text-success"></i>
                                    </td>
                                    <td>
                                        40%
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Agregar</a>
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Eliminar</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Más opciones</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>



                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            {{-- <div class="card best-product">
                <div class="card-body">
                    <div class="row align-items-center justify-content-start">
                        <div class="col-lg-8">
                            <h5 class="card-title best-product-title">Com</h5>
                            <div class="row align-items-end mt-4">
                                <div class="col-4">
                                    <div class="mt-1">
                                        <h4 class="font-size-20 best-product-title">2,562</h4>
                                        <p class="text-muted mb-0">Sold</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mt-1">
                                        <h4 class="font-size-20 best-product-title">4,652</h4>
                                        <p class="text-muted mb-0">Stock</p>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="mt-1">
                                        <a href="" class="btn btn-primary btn-sm">Buy
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div> --}}
        </div>
    </div>

    <div class="row">
        <div class="col-xl-4">

            <div class="card">
                <div class="card-header">
                    <div class="d-flex flex-wrap align-items-center">
                        <h5 class="card-title mb-0">Comisiones por Sucursal</h5>
                        <div class="ms-auto">
                            <div class="dropdown">
                                <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted font-size-12">Ordenado por:</span> <span class="fw-medium">Semana<i class="mdi mdi-chevron-down ms-1"></i></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                    <a class="dropdown-item" href="#">Mes</a>
                                    <a class="dropdown-item" href="#">Año</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body py-xl-0">
                    <div id="earning-item" data-colors='["#33a186","#3980c0"]' class="apex-charts" dir="ltr"></div>
                </div>
            </div>

        </div>
        <div class="col-xl-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex flex-wrap align-items-center">
                        <h5 class="card-title mb-0">Administrar Órdenes Inscripción</h5>
                        <div class="ms-auto">
                            <div class="dropdown">
                                <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted font-size-12">Ordenado por: </span> <span class="fw-medium"> Semana<i class="mdi mdi-chevron-down ms-1"></i></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                    <a class="dropdown-item" href="#">Mes</a>
                                    <a class="dropdown-item" href="#">Año</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-xl-1">
                    <div class="table-responsive">
                        <table class="table table-striped table-centered align-middle table-nowrap mb-0">
                            <thead >
                                <tr>
                                    <th>Nro</th>
                                    <th>Nombre Comercio</th>
                                    <th>Variante</th>
                                    <th>Rubro</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    <th>Ventas</th>
                                    <th>Estados</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td><a href="javascript: void(0);" class="text-body">Zapateria del Pueblo</a> </td>
                                    <td>
                                        <i class="mdi mdi-circle font-size-10 me-1 align-middle text-secondary"></i> Pendiente
                                    </td>
                                    <td>
                                        Calzados
                                    </td>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        $4500
                                    </td>
                                    <td>
                                        9
                                    </td>

                                    <td style="width: 130px;">
                                        <div class="progress" style="height: 6px;">
                                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Agregar</a>
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Eliminar</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Más opciones</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td><a href="javascript: void(0);" class="text-body">Taller Fausto </a> </td>
                                    <td>
                                        <i class="mdi mdi-circle font-size-10 me-1 align-middle text-danger"></i> Pendiente
                                    </td>
                                    <td>
                                        Mecánica Automotor
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        $4500
                                    </td>
                                    <td>
                                        6
                                    </td>

                                    <td style="width: 130px;">
                                        <div class="progress" style="height: 6px;">
                                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="75">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Agregar</a>
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Eliminar</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Más opciones</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td><a href="javascript: void(0);" class="text-body">Panadería del Puerto</a> </td>
                                    <td>
                                        <i class="mdi mdi-circle font-size-10 me-1 align-middle text-primary"></i> Activo                                    </td>
                                    <td>
                                        Panadería
                                    </td>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        $4500
                                    </td>
                                    <td>
                                        3
                                    </td>

                                    <td style="width: 130px;">
                                        <div class="progress" style="height: 6px;">
                                            <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Agregar</a>
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Eliminar</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Más opciones</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td><a href="javascript: void(0);" class="text-body">Restaurante El 100</a> </td>
                                    <td>
                                        <i class="mdi mdi-circle font-size-10 me-1 align-middle text-success"></i> Activo
                                    </td>
                                    <td>
                                        Restaurante
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        $4500
                                    </td>
                                    <td>
                                        1
                                    </td>

                                    <td style="width: 130px;">
                                        <div class="progress" style="height: 6px;">
                                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="75">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Agregar</a>
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Eliminar</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Más opciones</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td><a href="javascript: void(0);" class="text-body">Ferreteria El Molino</a> </td>
                                    <td>
                                        <i class="mdi mdi-circle font-size-10 me-1 align-middle text-primary"></i> Pendiente
                                    </td>
                                    <td>
                                        Ferretería
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        $4500
                                    </td>
                                    <td>
                                        1
                                    </td>

                                    <td style="width: 130px;">
                                        <div class="progress" style="height: 6px;">
                                            <div class="progress-bar progress-bar-striped bg-pricing" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="75">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Agregar</a>
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Eliminar</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Más opciones</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/chartjs.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/dashboard.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
