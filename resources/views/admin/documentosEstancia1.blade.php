<!DOCTYPE html>
<html lang="es">
@include('plantilla/admin/head')
<link rel="stylesheet" type="text/css" href="/css/estilos.css">

<body>
    <!-- Content page-->
    <section class="full-box dashboard-contentPage">
        <!-- NavBar -->
        @include('plantilla/admin/navBar')

        <!-- Content page -->
        <div class="container p-3">
            <div class="page-header">
                <h2 class="text-titles">Documentos Registrados<small>({{ $proceso[1] }})</small></h2>
            </div>
        </div>
        <!---notificacion --->
        @include('notificaciones/notificaciones')
        <div class="container">
            <div class="row">
                <div class=" col-12 col-sm-12 col-md-6">
                    <form action="{{ route('Buscar_estancia1.index', [$proceso[0], $proceso[1]]) }}" method="GET">
                        @csrf
                        <!-- buscar-->
                        <div class="row">
                            <div class=" col-8 col-sm-8 col-md-10">
                                <input type="text" class="form-control" id="texto" name="texto"
                                    placeholder="Buscar" value="">
                            </div>
                            <div class="col-4 col-sm-4 col-md-2">
                                <button type="submit" class="btn btn-primary buscar"><i
                                        class="zmdi zmdi-search"></i></button>
                            </div>
                            <div class=" col-8 col-sm-8 col-md-6">
                                <select class="form-control" id="estatus" name="estatus" placeholder="estatus">
                                    <option value=""> </option>
                                    <option value="enero-abril">enero-abril</option>
                                    <option value="mayo-agosto">mayo-agosto</option>
                                    <option value="septiembre-octubre">septiembre-diciembre</option>
                                </select>
                            </div>
                            <div class=" col-8 col-sm-8 col-md-4">
                                <input type="number" class="form-control" id="año" name="año"
                                    placeholder="ejem 2022" value="" min="1999" max="2050">
                            </div>
                        </div>
                    </form>
                </div>
                <div class=" col-12 col-sm-12 col-md-6">
                    <form action="{{ route('Buscar_estancia1_c.index', [$proceso[0], $proceso[1]]) }}" method="GET">
                        @csrf
                        <!--Buscar datos cedula-->
                        <div class="row">
                            <div class=" col-8 col-sm-8 col-md-10">
                                <input type="text" class="form-control" id="texto" name="texto"
                                    placeholder="Buscar datos cedula" value="">

                            </div>
                            <div class="col-4 col-sm-4 col-md-2">
                                <button type="submit" class="btn btn-primary buscar"><i
                                        class="zmdi zmdi-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>

        @forelse($documentos['documentos'] as $respuestaD)
            <br>
            <div class="caja_p">

                <div class="leg">
                    <h3>Usuario</h3>
                </div>

                <div class="caja">
                    @if ($documentos['usuarios'])
                    <div class="datos1">
                        <h5>Correo</h5>
                        <div>
                            <div class="text-center">{{ $respuestaD->email }}</div>
                        </div>
                    </div>
                    <div class="datos2">
                        <h5>Matrícula</h5>
                        <div>
                            <div class="text-center">{{ $respuestaD->name }}</div>
                        </div>
                    </div>
                    @endif
                    @forelse ($documentos['usuarios'] as $respuestaU)
                        @if ($respuestaD->name == $respuestaU->name)
                            <div class="datos">

                                <h5>Nombres/Apellidos</h5>
                                <div>
                                    <div class="text-center">{{ $respuestaU->nombres }} {{ $respuestaU->ape_paterno }} {{ $respuestaU->ape_materno }}</div>
                                </div>
                            </div>
                            <div class="datos3">
                                <h5>Carrera</h5>
                                <div>
                                    <div class="text-center">{{ $respuestaU->nombre_carrera}}</div>
                                </div>
                            </div>
                        @endif
                    @empty
                    @endforelse
                </div>

                <div class="caja1">
                    <!--carga_horaria-->
                    @if ($respuestaD->id_c_horaria)
                        @forelse ($documentos3['carga_horaria'] as $respuestaH)
                            @if ($respuestaH->name == $respuestaD->name)
                                <div class="cargh">
                                    <div class="nom">
                                        <div class="col-12">
                                            Carga horaria
                                        </div>
                                    </div>

                                    <div class="row text-center">
                                        <div class="col-12 nombreDoc">
                                            {{ $respuestaH->nombre_c_h }}
                                        </div>
                                        @switch($respuestaH->estado_c_h)
                                            @case(0)
                                                <div class="col-12">
                                                    <div class="text-center p-1"><span class="badge bg-danger text-white">Con
                                                            Observaciones</span></div>
                                                </div>
                                            @break

                                            @case(1)
                                                <div class="col-12">
                                                    <div class="text-center p-1"><span class="badge bg-warning">Pendiente</span>
                                                    </div>
                                                </div>
                                            @break

                                            @case(2)
                                                <div class="col-12">
                                                    <div class="text-center p-1"><span class="badge bg-success">Aceptado</span>
                                                    </div>
                                                </div>
                                            @break

                                            @default
                                        @endswitch
                                        <div class="col-6 p-1">
                                            <form method="post"
                                                action="{{ route('ver_documento.index', [$respuestaH->nombre_c_h, $proceso[0]]) }}">
                                                @csrf
                                                <button type="submit" class="btn btnVer"> <i
                                                        class="zmdi zmdi-eye zmdi-hc-lg"></i> Ver</button>
                                            </form>
                                        </div>

                                        @switch($respuestaH->estado_c_h)
                                            @case(0)
                                                <!--con observaciones-->
                                                <div class="col-6 p-1">
                                                    <form method="post"
                                                        action="{{ route('aceptar_documento.index', [$respuestaH->id_usuario, $respuestaH->id_c_horaria, $proceso[0], 1]) }}">
                                                        @csrf
                                                        <button type="submit" class="btnAceptar"> <i
                                                                class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar</button>
                                                        <input type="hidden" class="form-control" name="texto1"
                                                            value="">
                                                    </form>
                                                </div>
                                                <div class="col-12 p-1">
                                                    <form method="post"
                                                        action="{{ route('pendiente_documento.index', [$respuestaH->id_usuario, $respuestaH->id_c_horaria, $proceso[0], 1]) }}">
                                                        @csrf
                                                        <button type="submit"
                                                            class="btn btn-warning btnPendiente">Pendiente</button>
                                                        <input type="hidden" class="form-control" name="texto1"
                                                            value="">
                                                    </form>
                                                </div>
                                                <div class="col-12 p-1">
                                                    <form method="post"
                                                        action="{{ route('conObservaciones_documento.index', [$proceso[0], 1]) }}">
                                                        @csrf
                                                        <input type="text" name="id_c" id="id_c"
                                                            value="{{ $respuestaH->id_c_horaria }}" class="id_d">

                                                        <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                class="zmdi zmdi-alert-circle zmdi-hc-lg"></i> Ver
                                                            Observaciones</button>
                                                    </form>
                                                </div>
                                            @break

                                            <!--pendiente-->
                                            @case(1)
                                                <div class="col-6 p-1">
                                                    <form method="post"
                                                        action="{{ route('aceptar_documento.index', [$respuestaH->id_usuario, $respuestaH->id_c_horaria, $proceso[0], 1]) }}">
                                                        @csrf
                                                        <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar</button>
                                                        <input type="hidden" class="form-control" name="texto1"
                                                            value="">
                                                    </form>
                                                </div>
                                                <div class="col-12 p-1">
                                                    <form method="post"
                                                        action="{{ route('observaciones_documento.index', [$respuestaH->id_usuario, $proceso[0], 1]) }}">
                                                        @csrf
                                                        <input type="text" name="id_c" id="id_c"
                                                            value="{{ $respuestaH->id_c_horaria }}" class="id_d">
                                                        <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                            Observaciones</button>
                                                    </form>
                                                </div>
                                            @break

                                            <!--aceptado-->
                                            @case(2)
                                                <div class="col-6 p-1">
                                                    <form method="post"
                                                        action="{{ route('pendiente_documento.index', [$respuestaH->id_usuario, $respuestaH->id_c_horaria, $proceso[0], 1]) }}">
                                                        @csrf
                                                        <button type="submit"
                                                            class="btn btn-warning btnAceptar">Pendiente</button>
                                                        <input type="hidden" class="form-control" name="texto1"
                                                            value="">
                                                    </form>
                                                </div>
                                                <div class="col-12 p-1">
                                                    <form method="post"
                                                        action="{{ route('observaciones_documento.index', [$respuestaH->id_usuario, $proceso[0], 1]) }}">
                                                        @csrf
                                                        <input type="text" name="id_c" id="id_c"
                                                            value="{{ $respuestaH->id_c_horaria }}" class="id_d">
                                                        <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                            Observaciones</button>
                                                    </form>
                                                </div>
                                            @break

                                            @default
                                        @endswitch

                                    </div>
                                </div>
                            @endif
                            @empty
                            @endforelse
                        @endif
                        <!--constancia derecho-->
                        @if ($respuestaD->id_c_derecho)
                            @forelse ($documentos4['constancia_derecho'] as $respuestaCD)
                                @if ($respuestaCD->name == $respuestaD->name)
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="imss">
                                        <div class="row text-center divNombreCard">
                                            <div class="col-12">
                                                Constancia de derecho IMSS
                                            </div>
                                        </div>

                                        <div class="row text-center">
                                            <div class="col-12 nombreDoc">
                                                {{ $respuestaCD->nombre_c_d }}
                                            </div>
                                            @switch($respuestaCD->estado_c_d)
                                                @case(0)
                                                    <div class="col-12">
                                                        <div class="text-center p-1"><span class="badge bg-danger text-white">Con
                                                                Observaciones</span></div>
                                                    </div>
                                                @break

                                                @case(1)
                                                    <div class="col-12">
                                                        <div class="text-center p-1"><span
                                                                class="badge bg-warning">Pendiente</span></div>
                                                    </div>
                                                @break

                                                @case(2)
                                                    <div class="col-12">
                                                        <div class="text-center p-1"><span
                                                                class="badge bg-success">Aceptado</span></div>
                                                    </div>
                                                @break

                                                @default
                                            @endswitch
                                            <div class="col-6 p-1">
                                                <form method="post"
                                                    action="{{ route('ver_documento.index', [$respuestaCD->nombre_c_d, $proceso[0]]) }}">
                                                    @csrf
                                                    <button type="submit" class="btn btnVer"> <i
                                                            class="zmdi zmdi-eye zmdi-hc-lg"></i> Ver</button>
                                                </form>
                                            </div>

                                            @switch($respuestaCD->estado_c_d)
                                                @case(0)
                                                    <!--con observaciones-->
                                                    <div class="col-6 p-1">
                                                        <form method="post"
                                                            action="{{ route('aceptar_documento.index', [$respuestaCD->id_usuario, $respuestaCD->id_c_derecho, $proceso[0], 2]) }}">
                                                            @csrf
                                                            <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                    class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar</button>
                                                            <input type="hidden" class="form-control" name="texto1"
                                                                value="">
                                                        </form>
                                                    </div>
                                                    <div class="col-12 p-1">
                                                        <form method="post"
                                                            action="{{ route('pendiente_documento.index', [$respuestaCD->id_usuario, $respuestaCD->id_c_derecho, $proceso[0], 2]) }}">
                                                            @csrf
                                                            <button type="submit"
                                                                class="btn btn-warning btnPendiente">Pendiente</button>
                                                            <input type="hidden" class="form-control" name="texto1"
                                                                value="">
                                                        </form>
                                                    </div>
                                                    <div class="col-12 p-1">
                                                        <form method="post"
                                                            action="{{ route('conObservaciones_documento.index', [$proceso[0], 2]) }}">
                                                            @csrf
                                                            <input type="text" name="id_c" id="id_c"
                                                                value="{{ $respuestaCD->id_c_derecho }}" class="id_d">

                                                            <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                    class="zmdi zmdi-alert-circle zmdi-hc-lg"></i> Ver
                                                                Observaciones</button>
                                                        </form>
                                                    </div>
                                                @break

                                                <!--pendiente-->
                                                @case(1)
                                                    <div class="col-6 p-1">
                                                        <form method="post"
                                                            action="{{ route('aceptar_documento.index', [$respuestaCD->id_usuario, $respuestaCD->id_c_derecho, $proceso[0], 2]) }}">
                                                            @csrf
                                                            <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                    class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar</button>
                                                            <input type="hidden" class="form-control" name="texto1"
                                                                value="">
                                                        </form>
                                                    </div>
                                                    <div class="col-12 p-1">
                                                        <form method="post"
                                                            action="{{ route('observaciones_documento.index', [$respuestaCD->id_usuario, $proceso[0], 2]) }}">
                                                            @csrf
                                                            <input type="text" name="id_c" id="id_c"
                                                                value="{{ $respuestaCD->id_c_derecho }}" class="id_d">
                                                            <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                    class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                Observaciones</button>
                                                        </form>
                                                    </div>
                                                @break

                                                <!--aceptado-->
                                                @case(2)
                                                    <div class="col-6 p-1">
                                                        <form method="post"
                                                            action="{{ route('pendiente_documento.index', [$respuestaCD->id_usuario, $respuestaCD->id_c_derecho, $proceso[0], 2]) }}">
                                                            @csrf
                                                            <button type="submit"
                                                                class="btn btn-warning btnAceptar">Pendiente</button>
                                                            <input type="hidden" class="form-control" name="texto1"
                                                                value="">
                                                        </form>
                                                    </div>
                                                    <div class="col-12 p-1">
                                                        <form method="post"
                                                            action="{{ route('observaciones_documento.index', [$respuestaCD->id_usuario, $proceso[0], 2]) }}">
                                                            @csrf
                                                            <input type="text" name="id_c" id="id_c"
                                                                value="{{ $respuestaCD->id_c_derecho }}" class="id_d">
                                                            <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                    class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                Observaciones</button>
                                                        </form>
                                                    </div>
                                                @break

                                                @default
                                            @endswitch

                                        </div>
                                    </div>
                                @endif
                                @empty
                                @endforelse
                            @endif
                            <!--carta responsiva-->
                            @if ($respuestaD->id_c_responsiva)
                                @forelse ($documentos4['carta_responsiva'] as $respuestaCR)
                                    @if ($respuestaCR->name == $respuestaD->name)
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <div class="cartr">
                                            <div class="row text-center divNombreCard">
                                                <div class="col-12">
                                                    Carta Responsiva
                                                </div>
                                            </div>

                                            <div class="row text-center">
                                                <div class="col-12 nombreDoc">
                                                    {{ $respuestaCR->nombre_c_r }}
                                                </div>
                                                @switch($respuestaCR->estado_c_r)
                                                    @case(0)
                                                        <div class="col-12">
                                                            <div class="text-center p-1"><span class="badge bg-danger text-white">Con
                                                                    Observaciones</span></div>
                                                        </div>
                                                    @break

                                                    @case(1)
                                                        <div class="col-12">
                                                            <div class="text-center p-1"><span
                                                                    class="badge bg-warning">Pendiente</span></div>
                                                        </div>
                                                    @break

                                                    @case(2)
                                                        <div class="col-12">
                                                            <div class="text-center p-1"><span
                                                                    class="badge bg-success">Aceptado</span></div>
                                                        </div>
                                                    @break

                                                    @default
                                                @endswitch
                                                <div class="col-6 p-1">
                                                    <form method="post"
                                                        action="{{ route('ver_documento.index', [$respuestaCR->nombre_c_r, $proceso[0]]) }}">
                                                        @csrf
                                                        <button type="submit" class="btn btnVer"> <i
                                                                class="zmdi zmdi-eye zmdi-hc-lg"></i> Ver</button>
                                                    </form>
                                                </div>

                                                @switch($respuestaCR->estado_c_r)
                                                    @case(0)
                                                        <!--con observaciones-->
                                                        <div class="col-6 p-1">
                                                            <form method="post"
                                                                action="{{ route('aceptar_documento.index', [$respuestaCR->id_usuario, $respuestaCR->id_c_responsiva, $proceso[0], 3]) }}">
                                                                @csrf
                                                                <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                        class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar</button>
                                                                <input type="hidden" class="form-control" name="texto1"
                                                                    value="">
                                                            </form>
                                                        </div>
                                                        <div class="col-12 p-1">
                                                            <form method="post"
                                                                action="{{ route('pendiente_documento.index', [$respuestaCR->id_usuario, $respuestaCR->id_c_responsiva, $proceso[0], 3]) }}">
                                                                @csrf
                                                                <button type="submit"
                                                                    class="btn btn-warning btnPendiente">Pendiente</button>
                                                                <input type="hidden" class="form-control" name="texto1"
                                                                    value="">
                                                            </form>
                                                        </div>
                                                        <div class="col-12 p-1">
                                                            <form method="post"
                                                                action="{{ route('conObservaciones_documento.index', [$proceso[0], 3]) }}">
                                                                @csrf
                                                                <input type="text" name="id_c" id="id_c"
                                                                    value="{{ $respuestaCR->id_c_responsiva }}" class="id_d">

                                                                <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                        class="zmdi zmdi-alert-circle zmdi-hc-lg"></i> Ver
                                                                    Observaciones</button>
                                                            </form>
                                                        </div>
                                                    @break

                                                    <!--pendiente-->
                                                    @case(1)
                                                        <div class="col-6 p-1">
                                                            <form method="post"
                                                                action="{{ route('aceptar_documento.index', [$respuestaCR->id_usuario, $respuestaCR->id_c_responsiva, $proceso[0], 3]) }}">
                                                                @csrf
                                                                <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                        class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar</button>
                                                                <input type="hidden" class="form-control" name="texto1"
                                                                    value="">
                                                            </form>
                                                        </div>
                                                        <div class="col-12 p-1">
                                                            <form method="post"
                                                                action="{{ route('observaciones_documento.index', [$respuestaCR->id_usuario, $proceso[0], 3]) }}">
                                                                @csrf
                                                                <input type="text" name="id_c" id="id_c"
                                                                    value="{{ $respuestaCR->id_c_responsiva }}" class="id_d">
                                                                <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                        class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                    Observaciones</button>
                                                            </form>
                                                        </div>
                                                    @break

                                                    <!--aceptado-->
                                                    @case(2)
                                                        <div class="col-6 p-1">
                                                            <form method="post"
                                                                action="{{ route('pendiente_documento.index', [$respuestaCR->id_usuario, $respuestaCR->id_c_responsiva, $proceso[0], 3]) }}">
                                                                @csrf
                                                                <button type="submit"
                                                                    class="btn btn-warning btnAceptar">Pendiente</button>
                                                                <input type="hidden" class="form-control" name="texto1"
                                                                    value="">
                                                            </form>
                                                        </div>
                                                        <div class="col-12 p-1">
                                                            <form method="post"
                                                                action="{{ route('observaciones_documento.index', [$respuestaCR->id_usuario, $proceso[0], 3]) }}">
                                                                @csrf
                                                                <input type="text" name="id_c" id="id_c"
                                                                    value="{{ $respuestaCR->id_c_responsiva }}" class="id_d">
                                                                <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                        class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                    Observaciones</button>
                                                            </form>
                                                        </div>
                                                    @break

                                                    @default
                                                @endswitch

                                            </div>
                                        </div>
                                    @endif
                                    @empty
                                    @endforelse
                                @endif
                                <!--f01-->
                                @if ($respuestaD->id_c_presentacion)
                                    @forelse ($documentos3['carta_presentacion'] as $respuestaCP)
                                        @if ($respuestaCP->name == $respuestaD->name)
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <div class="cartp">
                                                <div class="row text-center divNombreCard">
                                                    <div class="col-12">
                                                        F-01 Carta Presentación
                                                    </div>
                                                </div>

                                                <div class="row text-center">
                                                    <div class="col-12 nombreDoc">
                                                        {{ $respuestaCP->nombre_c_p }}
                                                    </div>
                                                    @switch($respuestaCP->estado_c_p)
                                                        @case(0)
                                                            <div class="col-12">
                                                                <div class="text-center p-1"><span class="badge bg-danger text-white">Con
                                                                        Observaciones</span></div>
                                                            </div>
                                                        @break

                                                        @case(1)
                                                            <div class="col-12">
                                                                <div class="text-center p-1"><span
                                                                        class="badge bg-warning">Pendiente</span></div>
                                                            </div>
                                                        @break

                                                        @case(2)
                                                            <div class="col-12">
                                                                <div class="text-center p-1"><span
                                                                        class="badge bg-success">Aceptado</span></div>
                                                            </div>
                                                        @break

                                                        @default
                                                    @endswitch
                                                    <div class="col-6 p-1">
                                                        <form method="post"
                                                            action="{{ route('ver_documento.index', [$respuestaCP->nombre_c_p, $proceso[0]]) }}">
                                                            @csrf
                                                            <button type="submit" class="btn btnVer"> <i
                                                                    class="zmdi zmdi-eye zmdi-hc-lg"></i> Ver</button>
                                                        </form>
                                                    </div>

                                                    @switch($respuestaCP->estado_c_p)
                                                        @case(0)
                                                            <!--con observaciones-->
                                                            <div class="col-6 p-1">
                                                                <form method="post"
                                                                    action="{{ route('aceptar_documento.index', [$respuestaCP->id_usuario, $respuestaCP->id_c_presentacion, $proceso[0], 4]) }}">
                                                                    @csrf
                                                                    <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                            class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar</button>
                                                                    <input type="hidden" class="form-control" name="texto1"
                                                                        value="">
                                                                </form>
                                                            </div>
                                                            <div class="col-12 p-1">
                                                                <form method="post"
                                                                    action="{{ route('pendiente_documento.index', [$respuestaCP->id_usuario, $respuestaCP->id_c_presentacion, $proceso[0], 4]) }}">
                                                                    @csrf
                                                                    <button type="submit"
                                                                        class="btn btn-warning btnPendiente">Pendiente</button>
                                                                    <input type="hidden" class="form-control" name="texto1"
                                                                        value="">
                                                                </form>
                                                            </div>
                                                            <div class="col-12 p-1">
                                                                <form method="post"
                                                                    action="{{ route('conObservaciones_documento.index', [$proceso[0], 4]) }}">
                                                                    @csrf
                                                                    <input type="text" name="id_c" id="id_c"
                                                                        value="{{ $respuestaCP->id_c_presentacion }}" class="id_d">

                                                                    <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                            class="zmdi zmdi-alert-circle zmdi-hc-lg"></i> Ver
                                                                        Observaciones</button>
                                                                </form>
                                                            </div>
                                                        @break

                                                        <!--pendiente-->
                                                        @case(1)
                                                            <div class="col-6 p-1">
                                                                <form method="post"
                                                                    action="{{ route('aceptar_documento.index', [$respuestaCP->id_usuario, $respuestaCP->id_c_presentacion, $proceso[0], 4]) }}">
                                                                    @csrf
                                                                    <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                            class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar</button>
                                                                    <input type="hidden" class="form-control" name="texto1"
                                                                        value="">
                                                                </form>
                                                            </div>
                                                            <div class="col-12 p-1">
                                                                <form method="post"
                                                                    action="{{ route('observaciones_documento.index', [$respuestaCP->id_usuario, $proceso[0], 4]) }}">
                                                                    @csrf
                                                                    <input type="text" name="id_c" id="id_c"
                                                                        value="{{ $respuestaCP->id_c_presentacion }}" class="id_d">
                                                                    <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                            class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                        Observaciones</button>
                                                                </form>
                                                            </div>
                                                        @break

                                                        <!--aceptado-->
                                                        @case(2)
                                                            <div class="col-6 p-1">
                                                                <form method="post"
                                                                    action="{{ route('pendiente_documento.index', [$respuestaCP->id_usuario, $respuestaCP->id_c_presentacion, $proceso[0], 4]) }}">
                                                                    @csrf
                                                                    <button type="submit"
                                                                        class="btn btn-warning btnAceptar">Pendiente</button>
                                                                    <input type="hidden" class="form-control" name="texto1"
                                                                        value="">
                                                                </form>
                                                            </div>
                                                            <div class="col-12 p-1">
                                                                <form method="post"
                                                                    action="{{ route('observaciones_documento.index', [$respuestaCP->id_usuario, $proceso[0], 4]) }}">
                                                                    @csrf
                                                                    <input type="text" name="id_c" id="id_c"
                                                                        value="{{ $respuestaCP->id_c_presentacion }}" class="id_d">
                                                                    <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                            class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                        Observaciones</button>
                                                                </form>
                                                            </div>
                                                        @break

                                                        @default
                                                    @endswitch

                                                </div>
                                            </div>
                                        @endif
                                        @empty
                                        @endforelse
                                    @endif
                                    <!--f02-->
                                    @if ($respuestaD->id_c_aceptacion)
                                        @forelse ($documentos1['carta_aceptacion'] as $respuestaC)
                                            @if ($respuestaC->name == $respuestaD->name)
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <div class="cartA">
                                                    <div class="row text-center divNombreCard">
                                                        <div class="col-12">
                                                            F-02 Carta Aceptación
                                                        </div>
                                                    </div>

                                                    <div class="row text-center">
                                                        <div class="col-12 nombreDoc">
                                                            {{ $respuestaC->nombre }}
                                                        </div>
                                                        @switch($respuestaC->estado)
                                                            @case(0)
                                                                <div class="col-12">
                                                                    <div class="text-center p-1"><span class="badge bg-danger text-white">Con
                                                                            Observaciones</span></div>
                                                                </div>
                                                            @break

                                                            @case(1)
                                                                <div class="col-12">
                                                                    <div class="text-center p-1"><span
                                                                            class="badge bg-warning">Pendiente</span></div>
                                                                </div>
                                                            @break

                                                            @case(2)
                                                                <div class="col-12">
                                                                    <div class="text-center p-1"><span
                                                                            class="badge bg-success">Aceptado</span></div>
                                                                </div>
                                                            @break

                                                            @default
                                                        @endswitch
                                                        <div class="col-6 p-1">
                                                            <form method="post"
                                                                action="{{ route('ver_documento.index', [$respuestaC->nombre, $proceso[0]]) }}">
                                                                @csrf
                                                                <button type="submit" class="btn btnVer"> <i
                                                                        class="zmdi zmdi-eye zmdi-hc-lg"></i> Ver</button>
                                                            </form>
                                                        </div>

                                                        @switch($respuestaC->estado)
                                                            @case(0)
                                                                <!--con observaciones-->
                                                                <div class="col-6 p-1">
                                                                    <form method="post"
                                                                        action="{{ route('aceptar_documento.index', [$respuestaC->id_usuario, $respuestaC->id_c_aceptacion, $proceso[0], 5]) }}">
                                                                        @csrf
                                                                        <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar</button>
                                                                        <input type="hidden" class="form-control" name="texto1"
                                                                            value="">
                                                                    </form>
                                                                </div>
                                                                <div class="col-12 p-1">
                                                                    <form method="post"
                                                                        action="{{ route('pendiente_documento.index', [$respuestaC->id_usuario, $respuestaC->id_c_aceptacion, $proceso[0], 5]) }}">
                                                                        @csrf
                                                                        <button type="submit"
                                                                            class="btn btn-warning btnPendiente">Pendiente</button>
                                                                        <input type="hidden" class="form-control" name="texto1"
                                                                            value="">
                                                                    </form>
                                                                </div>
                                                                <div class="col-12 p-1">
                                                                    <form method="post"
                                                                        action="{{ route('conObservaciones_documento.index', [$proceso[0], 5]) }}">
                                                                        @csrf
                                                                        <input type="text" name="id_c" id="id_c"
                                                                            value="{{ $respuestaC->id_c_aceptacion }}" class="id_d">

                                                                        <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                class="zmdi zmdi-alert-circle zmdi-hc-lg"></i> Ver
                                                                            Obsevaciones</button>
                                                                    </form>
                                                                </div>
                                                            @break

                                                            <!--pendiente-->
                                                            @case(1)
                                                                <div class="col-6 p-1">
                                                                    <form method="post"
                                                                        action="{{ route('aceptar_documento.index', [$respuestaC->id_usuario, $respuestaC->id_c_aceptacion, $proceso[0], 5]) }}">
                                                                        @csrf
                                                                        <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar</button>
                                                                        <input type="hidden" class="form-control" name="texto1"
                                                                            value="">
                                                                    </form>
                                                                </div>
                                                                <div class="col-12 p-1">
                                                                    <form method="post"
                                                                        action="{{ route('observaciones_documento.index', [$respuestaC->id_usuario, $proceso[0], 5]) }}">
                                                                        @csrf
                                                                        <input type="text" name="id_c" id="id_c"
                                                                            value="{{ $respuestaC->id_c_aceptacion }}" class="id_d">
                                                                        <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                            Obsevaciones</button>
                                                                    </form>
                                                                </div>
                                                            @break

                                                            <!--aceptado-->
                                                            @case(2)
                                                                <div class="col-6 p-1">
                                                                    <form method="post"
                                                                        action="{{ route('pendiente_documento.index', [$respuestaC->id_usuario, $respuestaC->id_c_aceptacion, $proceso[0], 5]) }}">
                                                                        @csrf
                                                                        <button type="submit"
                                                                            class="btn btn-warning btnAceptar">Pendiente</button>
                                                                        <input type="hidden" class="form-control" name="texto1"
                                                                            value="">
                                                                    </form>
                                                                </div>
                                                                <div class="col-12 p-1">
                                                                    <form method="post"
                                                                        action="{{ route('observaciones_documento.index', [$respuestaC->id_usuario, $proceso[0], 5]) }}">
                                                                        @csrf
                                                                        <input type="text" name="id_c" id="id_c"
                                                                            value="{{ $respuestaC->id_c_aceptacion }}" class="id_d">
                                                                        <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                            Obsevaciones</button>
                                                                    </form>
                                                                </div>
                                                            @break

                                                            @default
                                                        @endswitch

                                                    </div>
                                                </div>
                                            @endif
                                            @empty
                                            @endforelse
                                        @endif
                                        <!--f03-->
                                        @if ($respuestaD->id_c_registro)
                                            @forelse ($documentos2['cedula_registro'] as $respuestaCR)
                                                @if ($respuestaCR->name == $respuestaD->name)
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <div class="cedlr">

                                                        <div class="row text-center divNombreCard">
                                                            <div class="col-12">
                                                                F-03 Cedula registro
                                                            </div>
                                                        </div>

                                                        <div class="row text-center">
                                                            <div class="col-12 p-1 nombreDoc">
                                                                {{ $respuestaCR->nombre_c_r }}
                                                            </div>
                                                            @switch($respuestaCR->estado_c_r)
                                                                @case(0)
                                                                    <div class="col-12">
                                                                        <div class="text-center p-1"><span class="badge bg-danger text-white">Con
                                                                                Observaciones</span></div>
                                                                    </div>
                                                                @break

                                                                @case(1)
                                                                    <div class="col-12">
                                                                        <div class="text-center p-1"><span
                                                                                class="badge bg-warning">Pendiente</span></div>
                                                                    </div>
                                                                @break

                                                                @case(2)
                                                                    <div class="col-12">
                                                                        <div class="text-center p-1"><span
                                                                                class="badge bg-success">Aceptado</span></div>
                                                                    </div>
                                                                @break

                                                                @default
                                                            @endswitch
                                                            <div class="col-6 p-1">
                                                                <form method="post"
                                                                    action="{{ route('ver_documento.index', [$respuestaCR->nombre_c_r, $proceso[0]]) }}">
                                                                    @csrf
                                                                    <button type="submit" class="btn btnVer"> <i
                                                                            class="zmdi zmdi-eye zmdi-hc-lg"></i> Ver</button>
                                                                </form>
                                                            </div>


                                                            @switch($respuestaCR->estado_c_r)
                                                                @case(0)
                                                                    <!--con observaciones-->
                                                                    <div class="col-6 p-1">
                                                                        <form method="post"
                                                                            action="{{ route('aceptar_documento.index', [$respuestaCR->id_usuario, $respuestaCR->id_c_registro, $proceso[0], 6]) }}">
                                                                            @csrf
                                                                            <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                    class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar</button>
                                                                            <input type="hidden" class="form-control" name="texto1"
                                                                                value="">
                                                                        </form>
                                                                    </div>
                                                                    <div class="col-12 p-1">
                                                                        <form method="post"
                                                                            action="{{ route('pendiente_documento.index', [$respuestaCR->id_usuario, $respuestaCR->id_c_registro, $proceso[0], 6]) }}">
                                                                            @csrf
                                                                            <button type="submit"
                                                                                class="btn btn-warning btnPendiente">Pendiente</button>
                                                                            <input type="hidden" class="form-control" name="texto1"
                                                                                value="">
                                                                        </form>
                                                                    </div>
                                                                    <div class="col-12 p-1">
                                                                        <form method="post"
                                                                            action="{{ route('conObservaciones_documento.index', [$proceso[0], 6]) }}">
                                                                            @csrf
                                                                            <input type="text" name="id_c" id="id_c"
                                                                                value="{{ $respuestaCR->id_c_registro }}" class="id_d">

                                                                            <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                    class="zmdi zmdi-alert-circle zmdi-hc-lg"></i> Ver
                                                                                Obsevaciones</button>
                                                                        </form>
                                                                    </div>
                                                                @break

                                                                <!--pendiente-->
                                                                @case(1)
                                                                    <div class="col-6 p-1">
                                                                        <form method="post"
                                                                            action="{{ route('aceptar_documento.index', [$respuestaCR->id_usuario, $respuestaCR->id_c_registro, $proceso[0], 6]) }}">
                                                                            @csrf
                                                                            <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                    class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar</button>
                                                                            <input type="hidden" class="form-control" name="texto1"
                                                                                value="">
                                                                        </form>
                                                                    </div>
                                                                    <div class="col-12 p-1">
                                                                        <form method="post"
                                                                            action="{{ route('observaciones_documento.index', [$respuestaCR->id_usuario, $proceso[0], 6]) }}">
                                                                            @csrf
                                                                            <input type="text" name="id_c" id="id_c"
                                                                                value="{{ $respuestaCR->id_c_registro }}" class="id_d">
                                                                            <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                    class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                                Obsevaciones</button>
                                                                        </form>
                                                                    </div>
                                                                @break

                                                                <!--aceptado-->
                                                                @case(2)
                                                                    <div class="col-6 p-1">
                                                                        <form method="post"
                                                                            action="{{ route('pendiente_documento.index', [$respuestaCR->id_usuario, $respuestaCR->id_c_registro, $proceso[0], 6]) }}">
                                                                            @csrf
                                                                            <button type="submit"
                                                                                class="btn btn-warning btnAceptar">Pendiente</button>
                                                                            <input type="hidden" class="form-control" name="texto1"
                                                                                value="">
                                                                        </form>
                                                                    </div>
                                                                    <div class="col-12 p-1">
                                                                        <form method="post"
                                                                            action="{{ route('observaciones_documento.index', [$respuestaCR->id_usuario, $proceso[0], 6]) }}">
                                                                            @csrf
                                                                            <input type="text" name="id_c" id="id_c"
                                                                                value="{{ $respuestaCR->id_c_registro }}" class="id_d">
                                                                            <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                    class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                                Obsevaciones</button>
                                                                        </form>
                                                                    </div>
                                                                @break

                                                                @default
                                                            @endswitch

                                                        </div>
                                                    </div>
                                                @endif

                                                @empty
                                                @endforelse
                                            @endif
                                            <!--f04-->
                                            @if ($respuestaD->id_d_proyecto)
                                                @forelse ($documentos1['definicion_proyecto'] as $respuestaDP)
                                                    @if ($respuestaDP->name == $respuestaD->name)
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <div class="df">
                                                            <div class="row text-center divNombreCard">
                                                                <div class="col-12">
                                                                    F-04 Definicíon Proyecto
                                                                </div>
                                                            </div>

                                                            <div class="row text-center">
                                                                <div class="col-12 nombreDoc">
                                                                    {{ $respuestaDP->nombre_d_p }}
                                                                </div>
                                                                @switch($respuestaDP->estado_d_p)
                                                                    @case(0)
                                                                        <div class="col-12">
                                                                            <div class="text-center p-1"><span class="badge bg-danger text-white">Con
                                                                                    Observaciones</span></div>
                                                                        </div>
                                                                    @break

                                                                    @case(1)
                                                                        <div class="col-12">
                                                                            <div class="text-center p-1"><span
                                                                                    class="badge bg-warning">Pendiente</span></div>
                                                                        </div>
                                                                    @break

                                                                    @case(2)
                                                                        <div class="col-12">
                                                                            <div class="text-center p-1"><span
                                                                                    class="badge bg-success">Aceptado</span></div>
                                                                        </div>
                                                                    @break

                                                                    @default
                                                                @endswitch
                                                                <div class="col-6 p-1">
                                                                    <form method="post"
                                                                        action="{{ route('ver_documento.index', [$respuestaDP->nombre_d_p, $proceso[0]]) }}">
                                                                        @csrf
                                                                        <button type="submit" class="btn btnVer"> <i
                                                                                class="zmdi zmdi-eye zmdi-hc-lg"></i> Ver</button>
                                                                    </form>
                                                                </div>

                                                                @switch($respuestaDP->estado_d_p)
                                                                    @case(0)
                                                                        <!--con observaciones-->
                                                                        <div class="col-6 p-1">
                                                                            <form method="post"
                                                                                action="{{ route('aceptar_documento.index', [$respuestaDP->id_usuario, $respuestaDP->id_d_proyecto, $proceso[0], 7]) }}">
                                                                                @csrf
                                                                                <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                        class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar</button>
                                                                                <input type="hidden" class="form-control" name="texto1"
                                                                                    value="">
                                                                            </form>
                                                                        </div>
                                                                        <div class="col-12 p-1">
                                                                            <form method="post"
                                                                                action="{{ route('pendiente_documento.index', [$respuestaDP->id_usuario, $respuestaDP->id_d_proyecto, $proceso[0], 7]) }}">
                                                                                @csrf
                                                                                <button type="submit"
                                                                                    class="btn btn-warning btnPendiente">Pendiente</button>
                                                                                <input type="hidden" class="form-control" name="texto1"
                                                                                    value="">
                                                                            </form>
                                                                        </div>
                                                                        <div class="col-12 p-1">
                                                                            <form method="post"
                                                                                action="{{ route('conObservaciones_documento.index', [$proceso[0], 7]) }}">
                                                                                @csrf
                                                                                <input type="text" name="id_c" id="id_c"
                                                                                    value="{{ $respuestaDP->id_d_proyecto }}" class="id_d">

                                                                                <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                        class="zmdi zmdi-alert-circle zmdi-hc-lg"></i> Ver
                                                                                    Obsevaciones</button>
                                                                            </form>
                                                                        </div>
                                                                    @break

                                                                    <!--pendiente-->
                                                                    @case(1)
                                                                        <div class="col-6 p-1">
                                                                            <form method="post"
                                                                                action="{{ route('aceptar_documento.index', [$respuestaDP->id_usuario, $respuestaDP->id_d_proyecto, $proceso[0], 7]) }}">
                                                                                @csrf
                                                                                <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                        class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar</button>
                                                                                <input type="hidden" class="form-control" name="texto1"
                                                                                    value="">
                                                                            </form>
                                                                        </div>
                                                                        <div class="col-12 p-1">
                                                                            <form method="post"
                                                                                action="{{ route('observaciones_documento.index', [$respuestaDP->id_usuario, $proceso[0], 7]) }}">
                                                                                @csrf
                                                                                <input type="text" name="id_c" id="id_c"
                                                                                    value="{{ $respuestaDP->id_d_proyecto }}" class="id_d">
                                                                                <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                        class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                                    Obsevaciones</button>
                                                                            </form>
                                                                        </div>
                                                                    @break

                                                                    <!--aceptado-->
                                                                    @case(2)
                                                                        <div class="col-6 p-1">
                                                                            <form method="post"
                                                                                action="{{ route('pendiente_documento.index', [$respuestaDP->id_usuario, $respuestaDP->id_d_proyecto, $proceso[0], 7]) }}">
                                                                                @csrf
                                                                                <button type="submit"
                                                                                    class="btn btn-warning btnAceptar">Pendiente</button>
                                                                                <input type="hidden" class="form-control" name="texto1"
                                                                                    value="">
                                                                            </form>
                                                                        </div>
                                                                        <div class="col-12 p-1">
                                                                            <form method="post"
                                                                                action="{{ route('observaciones_documento.index', [$respuestaDP->id_usuario, $proceso[0], 7]) }}">
                                                                                @csrf
                                                                                <input type="text" name="id_c" id="id_c"
                                                                                    value="{{ $respuestaDP->id_d_proyecto }}" class="id_d">
                                                                                <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                        class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                                    Obsevaciones</button>
                                                                            </form>
                                                                        </div>
                                                                    @break

                                                                    @default
                                                                @endswitch

                                                            </div>
                                                        </div>
                                                    @endif
                                                    @empty
                                                    @endforelse
                                                @endif
                                                <!--f05-->
                                                @if ($respuestaD->id_c_liberacion)
                                                    @forelse ($documentos2['carta_liberacion'] as $respuestaCL)
                                                        @if ($respuestaCL->name == $respuestaD->name)
                                                            <br>
                                                            <br>
                                                            <br>
                                                            <br>
                                                            <br>
                                                            <br>
                                                            <br>
                                                            <br>
                                                            <div class="cartl">
                                                                <div class="row text-center divNombreCard">
                                                                    <div class="col-12">
                                                                        F-05 Carta Liberacíon
                                                                    </div>
                                                                </div>

                                                                <div class="row text-center">
                                                                    <div class="col-12 nombreDoc">
                                                                        {{ $respuestaCL->nombre_c_l }}
                                                                    </div>
                                                                    @switch($respuestaCL->estado_c_l)
                                                                        @case(0)
                                                                            <div class="col-12">
                                                                                <div class="text-center p-1"><span class="badge bg-danger text-white">Con
                                                                                        Observaciones</span></div>
                                                                            </div>
                                                                        @break

                                                                        @case(1)
                                                                            <div class="col-12">
                                                                                <div class="text-center p-1"><span
                                                                                        class="badge bg-warning">Pendiente</span></div>
                                                                            </div>
                                                                        @break

                                                                        @case(2)
                                                                            <div class="col-12">
                                                                                <div class="text-center p-1"><span
                                                                                        class="badge bg-success">Aceptado</span></div>
                                                                            </div>
                                                                        @break

                                                                        @default
                                                                    @endswitch
                                                                    <div class="col-6 p-1">
                                                                        <form method="post"
                                                                            action="{{ route('ver_documento.index', [$respuestaCL->nombre_c_l, $proceso[0]]) }}">
                                                                            @csrf
                                                                            <button type="submit" class="btn btnVer"> <i
                                                                                    class="zmdi zmdi-eye zmdi-hc-lg"></i> Ver</button>
                                                                        </form>
                                                                    </div>

                                                                    @switch($respuestaCL->estado_c_l)
                                                                        @case(0)
                                                                            <!--con observaciones-->
                                                                            <div class="col-6 p-1">
                                                                                <form method="post"
                                                                                    action="{{ route('aceptar_documento.index', [$respuestaCL->id_usuario, $respuestaCL->id_c_liberacion, $proceso[0], 8]) }}">
                                                                                    @csrf
                                                                                    <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                            class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar</button>
                                                                                    <input type="hidden" class="form-control" name="texto1"
                                                                                        value="">
                                                                                </form>
                                                                            </div>
                                                                            <div class="col-12 p-1">
                                                                                <form method="post"
                                                                                    action="{{ route('pendiente_documento.index', [$respuestaCL->id_usuario, $respuestaCL->id_c_liberacion, $proceso[0], 8]) }}">
                                                                                    @csrf
                                                                                    <button type="submit"
                                                                                        class="btn btn-warning btnPendiente">Pendiente</button>
                                                                                    <input type="hidden" class="form-control" name="texto1"
                                                                                        value="">
                                                                                </form>
                                                                            </div>
                                                                            <div class="col-12 p-1">
                                                                                <form method="post"
                                                                                    action="{{ route('conObservaciones_documento.index', [$proceso[0], 8]) }}">
                                                                                    @csrf
                                                                                    <input type="text" name="id_c" id="id_c"
                                                                                        value="{{ $respuestaCL->id_c_liberacion }}" class="id_d">

                                                                                    <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                            class="zmdi zmdi-alert-circle zmdi-hc-lg"></i> Ver
                                                                                        Obsevaciones</button>
                                                                                </form>
                                                                            </div>
                                                                        @break

                                                                        <!--pendiente-->
                                                                        @case(1)
                                                                            <div class="col-6 p-1">
                                                                                <form method="post"
                                                                                    action="{{ route('aceptar_documento.index', [$respuestaCL->id_usuario, $respuestaCL->id_c_liberacion, $proceso[0], 8]) }}">
                                                                                    @csrf
                                                                                    <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                            class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar</button>
                                                                                    <input type="hidden" class="form-control" name="texto1"
                                                                                        value="">
                                                                                </form>
                                                                            </div>
                                                                            <div class="col-12 p-1">
                                                                                <form method="post"
                                                                                    action="{{ route('observaciones_documento.index', [$respuestaCL->id_usuario, $proceso[0], 8]) }}">
                                                                                    @csrf
                                                                                    <input type="text" name="id_c" id="id_c"
                                                                                        value="{{ $respuestaCL->id_c_liberacion }}" class="id_d">
                                                                                    <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                            class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                                        Obsevaciones</button>
                                                                                </form>
                                                                            </div>
                                                                        @break

                                                                        <!--aceptado-->
                                                                        @case(2)
                                                                            <div class="col-6 p-1">
                                                                                <form method="post"
                                                                                    action="{{ route('pendiente_documento.index', [$respuestaCL->id_usuario, $respuestaCL->id_c_liberacion, $proceso[0], 8]) }}">
                                                                                    @csrf
                                                                                    <button type="submit"
                                                                                        class="btn btn-warning btnAceptar">Pendiente</button>
                                                                                    <input type="hidden" class="form-control" name="texto1"
                                                                                        value="">
                                                                                </form>
                                                                            </div>
                                                                            <div class="col-12 p-1">
                                                                                <form method="post"
                                                                                    action="{{ route('observaciones_documento.index', [$respuestaCL->id_usuario, $proceso[0], 8]) }}">
                                                                                    @csrf
                                                                                    <input type="text" name="id_c" id="id_c"
                                                                                        value="{{ $respuestaCL->id_c_liberacion }}" class="id_d">
                                                                                    <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                            class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                                        Obsevaciones</button>
                                                                                </form>
                                                                            </div>
                                                                        @break

                                                                        @default
                                                                    @endswitch

                                                                </div>
                                                            </div>
                                                        @endif
                                                        @empty
                                                        @endforelse
                                                    @endif
                                                    <!--carta compromiso-->
                                                    @if ($respuestaD->id_c_compromiso)
                                                        @forelse ($documentos5['carta_compromiso'] as $respuestaA)
                                                            @if ($respuestaA->name == $respuestaD->name)
                                                                <br>
                                                                <br>
                                                                <br>
                                                                <br>
                                                                <br>
                                                                <br>
                                                                <br>
                                                                <br>
                                                                <div class="cartc">
                                                                    <div class="row text-center divNombreCard">
                                                                        <div class="col-12">
                                                                            Carta Compromiso
                                                                        </div>
                                                                    </div>

                                                                    <div class="row text-center">
                                                                        <div class="col-12 nombreDoc">
                                                                            {{ $respuestaA->nombre_c_c }}
                                                                        </div>
                                                                        @switch($respuestaA->estado_c_c)
                                                                            @case(0)
                                                                                <div class="col-12">
                                                                                    <div class="text-center p-1"><span class="badge bg-danger text-white">Con
                                                                                            Observaciones</span></div>
                                                                                </div>
                                                                            @break

                                                                            @case(1)
                                                                                <div class="col-12">
                                                                                    <div class="text-center p-1"><span
                                                                                            class="badge bg-warning">Pendiente</span></div>
                                                                                </div>
                                                                            @break

                                                                            @case(2)
                                                                                <div class="col-12">
                                                                                    <div class="text-center p-1"><span
                                                                                            class="badge bg-success">Aceptado</span></div>
                                                                                </div>
                                                                            @break

                                                                            @default
                                                                        @endswitch
                                                                        <div class="col-6 p-1">
                                                                            <form method="post"
                                                                                action="{{ route('ver_documento.index', [$respuestaA->nombre_c_c, $proceso[0]]) }}">
                                                                                @csrf
                                                                                <button type="submit" class="btn btnVer"> <i
                                                                                        class="zmdi zmdi-eye zmdi-hc-lg"></i> Ver</button>
                                                                            </form>
                                                                        </div>

                                                                        @switch($respuestaA->estado_c_c)
                                                                            @case(0)
                                                                                <!--con observaciones-->
                                                                                <div class="col-6 p-1">
                                                                                    <form method="post"
                                                                                        action="{{ route('aceptar_documento.index', [$respuestaA->id_usuario, $respuestaA->id_c_compromiso, $proceso[0], 9]) }}">
                                                                                        @csrf
                                                                                        <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                                class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar</button>
                                                                                        <input type="hidden" class="form-control" name="texto1"
                                                                                            value="">
                                                                                    </form>
                                                                                </div>
                                                                                <div class="col-12 p-1">
                                                                                    <form method="post"
                                                                                        action="{{ route('pendiente_documento.index', [$respuestaA->id_usuario, $respuestaA->id_c_compromiso, $proceso[0], 9]) }}">
                                                                                        @csrf
                                                                                        <button type="submit"
                                                                                            class="btn btn-warning btnPendiente">Pendiente</button>
                                                                                        <input type="hidden" class="form-control" name="texto1"
                                                                                            value="">
                                                                                    </form>
                                                                                </div>
                                                                                <div class="col-12 p-1">
                                                                                    <form method="post"
                                                                                        action="{{ route('conObservaciones_documento.index', [$proceso[0], 9]) }}">
                                                                                        @csrf
                                                                                        <input type="text" name="id_c" id="id_c"
                                                                                            value="{{ $respuestaA->id_c_compromiso }}" class="id_d">

                                                                                        <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                class="zmdi zmdi-alert-circle zmdi-hc-lg"></i> Ver
                                                                                            Observaciones</button>
                                                                                    </form>
                                                                                </div>
                                                                            @break

                                                                            <!--pendiente-->
                                                                            @case(1)
                                                                                <div class="col-6 p-1">
                                                                                    <form method="post"
                                                                                        action="{{ route('aceptar_documento.index', [$respuestaA->id_usuario, $respuestaA->id_c_compromiso, $proceso[0], 9]) }}">
                                                                                        @csrf
                                                                                        <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                                class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar</button>
                                                                                        <input type="hidden" class="form-control" name="texto1"
                                                                                            value="">
                                                                                    </form>
                                                                                </div>
                                                                                <div class="col-12 p-1">
                                                                                    <form method="post"
                                                                                        action="{{ route('observaciones_documento.index', [$respuestaA->id_usuario, $proceso[0], 9]) }}">
                                                                                        @csrf
                                                                                        <input type="text" name="id_c" id="id_c"
                                                                                            value="{{ $respuestaA->id_c_compromiso }}" class="id_d">
                                                                                        <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                                            Observaciones</button>
                                                                                    </form>
                                                                                </div>
                                                                            @break

                                                                            <!--aceptado-->
                                                                            @case(2)
                                                                                <div class="col-6 p-1">
                                                                                    <form method="post"
                                                                                        action="{{ route('pendiente_documento.index', [$respuestaA->id_usuario, $respuestaA->id_c_compromiso, $proceso[0], 9]) }}">
                                                                                        @csrf
                                                                                        <button type="submit"
                                                                                            class="btn btn-warning btnAceptar">Pendiente</button>
                                                                                        <input type="hidden" class="form-control" name="texto1"
                                                                                            value="">
                                                                                    </form>
                                                                                </div>
                                                                                <div class="col-12 p-1">
                                                                                    <form method="post"
                                                                                        action="{{ route('observaciones_documento.index', [$respuestaA->id_usuario, $proceso[0], 9]) }}">
                                                                                        @csrf
                                                                                        <input type="text" name="id_c" id="id_c"
                                                                                            value="{{ $respuestaA->id_c_compromiso }}" class="id_d">
                                                                                        <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                                            Observaciones</button>
                                                                                    </form>
                                                                                </div>
                                                                            @break

                                                                            @default
                                                                        @endswitch

                                                                    </div>
                                                                </div>
                                                            @endif
                                                            @empty
                                                            @endforelse
                                                        @endif
                                                        <!--Reporte Mensual-->
                                                        @if ($respuestaD->id_r_mensual)
                                                            @forelse ($documentos5['reporte_mensual'] as $respuestarm)
                                                                @if ($respuestarm->name == $respuestaD->name)
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-3 doc">
                                                                        <div class="rm">
                                                                            <div class="col-12">
                                                                                Reporte Mensual
                                                                            </div>
                                                                        </div>

                                                                        <div class="row text-center">
                                                                            <div class="col-12 nombreDoc">
                                                                                {{ $respuestarm->nombre_r_m }}
                                                                            </div>
                                                                            @switch($respuestarm->estado_r_m)
                                                                                @case(0)
                                                                                    <div class="col-12">
                                                                                        <div class="text-center p-1"><span class="badge bg-danger text-white">Con
                                                                                                Observaciones</span></div>
                                                                                    </div>
                                                                                @break

                                                                                @case(1)
                                                                                    <div class="col-12">
                                                                                        <div class="text-center p-1"><span
                                                                                                class="badge bg-warning">Pendiente</span></div>
                                                                                    </div>
                                                                                @break

                                                                                @case(2)
                                                                                    <div class="col-12">
                                                                                        <div class="text-center p-1"><span
                                                                                                class="badge bg-success">Aceptado</span></div>
                                                                                    </div>
                                                                                @break

                                                                                @default
                                                                            @endswitch
                                                                            <div class="col-6 p-1">
                                                                                <form method="post"
                                                                                    action="{{ route('ver_documento.index', [$respuestarm->nombre_r_m, $proceso[0]]) }}">
                                                                                    @csrf
                                                                                    <button type="submit" class="btn btnVer"> <i
                                                                                            class="zmdi zmdi-eye zmdi-hc-lg"></i> Ver</button>
                                                                                </form>
                                                                            </div>

                                                                            @switch($respuestarm->estado_r_m)
                                                                                @case(0)
                                                                                    <!--con observaciones-->
                                                                                    <div class="col-6 p-1">
                                                                                        <form method="post"
                                                                                            action="{{ route('aceptar_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual, $proceso[0], 10]) }}">
                                                                                            @csrf
                                                                                            <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                                    class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar</button>
                                                                                            <input type="hidden" class="form-control" name="texto1"
                                                                                                value="">
                                                                                        </form>
                                                                                    </div>
                                                                                    <div class="col-12 p-1">
                                                                                        <form method="post"
                                                                                            action="{{ route('pendiente_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual, $proceso[0], 10]) }}">
                                                                                            @csrf
                                                                                            <button type="submit"
                                                                                                class="btn btn-warning btnPendiente">Pendiente</button>
                                                                                            <input type="hidden" class="form-control" name="texto1"
                                                                                                value="">
                                                                                        </form>
                                                                                    </div>
                                                                                    <div class="col-12 p-1">
                                                                                        <form method="post"
                                                                                            action="{{ route('conObservaciones_documento.index', [$proceso[0], 10]) }}">
                                                                                            @csrf
                                                                                            <input type="text" name="id_c" id="id_c"
                                                                                                value="{{ $respuestarm->id_r_mensual }}" class="id_d">

                                                                                            <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                    class="zmdi zmdi-alert-circle zmdi-hc-lg"></i> Ver
                                                                                                Observaciones</button>
                                                                                        </form>
                                                                                    </div>
                                                                                @break

                                                                                <!--pendiente-->
                                                                                @case(1)
                                                                                    <div class="col-6 p-1">
                                                                                        <form method="post"
                                                                                            action="{{ route('aceptar_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual, $proceso[0], 10]) }}">
                                                                                            @csrf
                                                                                            <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                                    class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar
                                                                                                {{ $respuestarm->id_r_mensual }}</button>
                                                                                            <input type="hidden" class="form-control" name="texto1"
                                                                                                value="">
                                                                                        </form>
                                                                                    </div>
                                                                                    <div class="col-12 p-1">
                                                                                        <form method="post"
                                                                                            action="{{ route('observaciones_documento.index', [$respuestarm->id_usuario, $proceso[0], 10]) }}">
                                                                                            @csrf
                                                                                            <input type="text" name="id_c" id="id_c"
                                                                                                value="{{ $respuestarm->id_r_mensual }}" class="id_d">
                                                                                            <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                    class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                                                Observaciones</button>
                                                                                        </form>
                                                                                    </div>
                                                                                @break

                                                                                <!--aceptado-->
                                                                                @case(2)
                                                                                    <div class="col-6 p-1">
                                                                                        <form method="post"
                                                                                            action="{{ route('pendiente_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual, $proceso[0], 10]) }}">
                                                                                            @csrf
                                                                                            <button type="submit"
                                                                                                class="btn btn-warning btnAceptar">Pendiente</button>
                                                                                            <input type="hidden" class="form-control" name="texto1"
                                                                                                value="">
                                                                                        </form>
                                                                                    </div>
                                                                                    <div class="col-12 p-1">
                                                                                        <form method="post"
                                                                                            action="{{ route('observaciones_documento.index', [$respuestarm->id_usuario, $proceso[0], 10]) }}">
                                                                                            @csrf
                                                                                            <input type="text" name="id_c" id="id_c"
                                                                                                value="{{ $respuestarm->id_r_mensual }}" class="id_d">
                                                                                            <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                    class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                                                Observaciones</button>
                                                                                        </form>
                                                                                    </div>
                                                                                @break

                                                                                @default
                                                                            @endswitch

                                                                        </div>
                                                                    </div>
                                                                @endif
                                                                @empty
                                                                @endforelse
                                                            @endif
                                                            <!--Reporte Mensual 2-->
                                                            @if ($respuestaD->id_r_mensual2)
                                                                @forelse ($reporte_mensual2['reporte_mensual2'] as $respuestarm)
                                                                    @if ($respuestarm->name == $respuestaD->name)
                                                                        <br>
                                                                        <br>
                                                                        <br>
                                                                        <br>
                                                                        <br>
                                                                        <br>
                                                                        <br>
                                                                        <br>
                                                                        <div class="rm2">
                                                                            <div class="row text-center divNombreCard">
                                                                                <div class="col-12">
                                                                                    Reporte Mensual 2
                                                                                </div>
                                                                            </div>

                                                                            <div class="row text-center">
                                                                                <div class="col-12 nombreDoc">
                                                                                    {{ $respuestarm->nombre_r_m }}
                                                                                </div>
                                                                                @switch($respuestarm->estado_r_m)
                                                                                    @case(0)
                                                                                        <div class="col-12">
                                                                                            <div class="text-center p-1"><span class="badge bg-danger text-white">Con
                                                                                                    Observaciones</span></div>
                                                                                        </div>
                                                                                    @break

                                                                                    @case(1)
                                                                                        <div class="col-12">
                                                                                            <div class="text-center p-1"><span
                                                                                                    class="badge bg-warning">Pendiente</span></div>
                                                                                        </div>
                                                                                    @break

                                                                                    @case(2)
                                                                                        <div class="col-12">
                                                                                            <div class="text-center p-1"><span
                                                                                                    class="badge bg-success">Aceptado</span></div>
                                                                                        </div>
                                                                                    @break

                                                                                    @default
                                                                                @endswitch
                                                                                <div class="col-6 p-1">
                                                                                    <form method="post"
                                                                                        action="{{ route('ver_documento.index', [$respuestarm->nombre_r_m, $proceso[0]]) }}">
                                                                                        @csrf
                                                                                        <button type="submit" class="btn btnVer"> <i
                                                                                                class="zmdi zmdi-eye zmdi-hc-lg"></i> Ver</button>
                                                                                    </form>
                                                                                </div>

                                                                                @switch($respuestarm->estado_r_m)
                                                                                    @case(0)
                                                                                        <!--con observaciones-->
                                                                                        <div class="col-6 p-1">
                                                                                            <form method="post"
                                                                                                action="{{ route('aceptar_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual2, $proceso[0], 11]) }}">
                                                                                                @csrf
                                                                                                <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                                        class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar</button>
                                                                                                <input type="hidden" class="form-control" name="texto1"
                                                                                                    value="">
                                                                                            </form>
                                                                                        </div>
                                                                                        <div class="col-12 p-1">
                                                                                            <form method="post"
                                                                                                action="{{ route('pendiente_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual2, $proceso[0], 11]) }}">
                                                                                                @csrf
                                                                                                <button type="submit"
                                                                                                    class="btn btn-warning btnPendiente">Pendiente</button>
                                                                                                <input type="hidden" class="form-control" name="texto1"
                                                                                                    value="">
                                                                                            </form>
                                                                                        </div>
                                                                                        <div class="col-12 p-1">
                                                                                            <form method="post"
                                                                                                action="{{ route('conObservaciones_documento.index', [$proceso[0], 11]) }}">
                                                                                                @csrf
                                                                                                <input type="text" name="id_c" id="id_c"
                                                                                                    value="{{ $respuestarm->id_r_mensual2 }}" class="id_d">

                                                                                                <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                        class="zmdi zmdi-alert-circle zmdi-hc-lg"></i> Ver
                                                                                                    Observaciones</button>
                                                                                            </form>
                                                                                        </div>
                                                                                    @break

                                                                                    <!--pendiente-->
                                                                                    @case(1)
                                                                                        <div class="col-6 p-1">
                                                                                            <form method="post"
                                                                                                action="{{ route('aceptar_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual2, $proceso[0], 11]) }}">
                                                                                                @csrf
                                                                                                <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                                        class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar
                                                                                                    {{ $respuestarm->id_r_mensual2 }} </button>
                                                                                                <input type="hidden" class="form-control" name="texto1"
                                                                                                    value="">
                                                                                            </form>
                                                                                        </div>
                                                                                        <div class="col-12 p-1">
                                                                                            <form method="post"
                                                                                                action="{{ route('observaciones_documento.index', [$respuestarm->id_usuario, $proceso[0], 11]) }}">
                                                                                                @csrf
                                                                                                <input type="text" name="id_c" id="id_c"
                                                                                                    value="{{ $respuestarm->id_r_mensual2 }}" class="id_d">
                                                                                                <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                        class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                                                    Observaciones</button>
                                                                                            </form>
                                                                                        </div>
                                                                                    @break

                                                                                    <!--aceptado-->
                                                                                    @case(2)
                                                                                        <div class="col-6 p-1">
                                                                                            <form method="post"
                                                                                                action="{{ route('pendiente_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual2, $proceso[0], 11]) }}">
                                                                                                @csrf
                                                                                                <button type="submit"
                                                                                                    class="btn btn-warning btnAceptar">Pendiente</button>
                                                                                                <input type="hidden" class="form-control" name="texto1"
                                                                                                    value="">
                                                                                            </form>
                                                                                        </div>
                                                                                        <div class="col-12 p-1">
                                                                                            <form method="post"
                                                                                                action="{{ route('observaciones_documento.index', [$respuestarm->id_usuario, $proceso[0], 11]) }}">
                                                                                                @csrf
                                                                                                <input type="text" name="id_c" id="id_c"
                                                                                                    value="{{ $respuestarm->id_r_mensual2 }}" class="id_d">
                                                                                                <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                        class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                                                    Observaciones</button>
                                                                                            </form>
                                                                                        </div>
                                                                                    @break

                                                                                    @default
                                                                                @endswitch

                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @empty
                                                                    @endforelse
                                                                @endif
                                                                <!--Reporte Mensual 3-->
                                                                @if ($respuestaD->id_r_mensual3)
                                                                    @forelse ($reporte_mensual3['reporte_mensual3'] as $respuestarm)
                                                                        @if ($respuestarm->name == $respuestaD->name)
                                                                            <br>
                                                                            <br>
                                                                            <br>
                                                                            <br>
                                                                            <br>
                                                                            <br>
                                                                            <br>
                                                                            <br>
                                                                            <div class="rm3">
                                                                                <div class="row text-center divNombreCard">
                                                                                    <div class="col-12">
                                                                                        Reporte Mensual 3
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row text-center">
                                                                                    <div class="col-12 nombreDoc">
                                                                                        {{ $respuestarm->nombre_r_m }}
                                                                                    </div>
                                                                                    @switch($respuestarm->estado_r_m)
                                                                                        @case(0)
                                                                                            <div class="col-12">
                                                                                                <div class="text-center p-1"><span
                                                                                                        class="badge bg-danger text-white">Con Observaciones</span></div>
                                                                                            </div>
                                                                                        @break

                                                                                        @case(1)
                                                                                            <div class="col-12">
                                                                                                <div class="text-center p-1"><span
                                                                                                        class="badge bg-warning">Pendiente</span></div>
                                                                                            </div>
                                                                                        @break

                                                                                        @case(2)
                                                                                            <div class="col-12">
                                                                                                <div class="text-center p-1"><span
                                                                                                        class="badge bg-success">Aceptado</span></div>
                                                                                            </div>
                                                                                        @break

                                                                                        @default
                                                                                    @endswitch
                                                                                    <div class="col-6 p-1">
                                                                                        <form method="post"
                                                                                            action="{{ route('ver_documento.index', [$respuestarm->nombre_r_m, $proceso[0]]) }}">
                                                                                            @csrf
                                                                                            <button type="submit" class="btn btnVer"> <i
                                                                                                    class="zmdi zmdi-eye zmdi-hc-lg"></i> Ver</button>
                                                                                        </form>
                                                                                    </div>

                                                                                    @switch($respuestarm->estado_r_m)
                                                                                        @case(0)
                                                                                            <!--con observaciones-->
                                                                                            <div class="col-6 p-1">
                                                                                                <form method="post"
                                                                                                    action="{{ route('aceptar_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual3, $proceso[0], 12]) }}">
                                                                                                    @csrf
                                                                                                    <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                                            class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar</button>
                                                                                                    <input type="hidden" class="form-control" name="texto1"
                                                                                                        value="">
                                                                                                </form>
                                                                                            </div>
                                                                                            <div class="col-12 p-1">
                                                                                                <form method="post"
                                                                                                    action="{{ route('pendiente_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual3, $proceso[0], 12]) }}">
                                                                                                    @csrf
                                                                                                    <button type="submit"
                                                                                                        class="btn btn-warning btnPendiente">Pendiente</button>
                                                                                                    <input type="hidden" class="form-control" name="texto1"
                                                                                                        value="">
                                                                                                </form>
                                                                                            </div>
                                                                                            <div class="col-12 p-1">
                                                                                                <form method="post"
                                                                                                    action="{{ route('conObservaciones_documento.index', [$proceso[0], 12]) }}">
                                                                                                    @csrf
                                                                                                    <input type="text" name="id_c" id="id_c"
                                                                                                        value="{{ $respuestarm->id_r_mensual3 }}" class="id_d">

                                                                                                    <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                            class="zmdi zmdi-alert-circle zmdi-hc-lg"></i> Ver
                                                                                                        Observaciones</button>
                                                                                                </form>
                                                                                            </div>
                                                                                        @break

                                                                                        <!--pendiente-->
                                                                                        @case(1)
                                                                                            <div class="col-6 p-1">
                                                                                                <form method="post"
                                                                                                    action="{{ route('aceptar_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual3, $proceso[0], 12]) }}">
                                                                                                    @csrf
                                                                                                    <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                                            class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar
                                                                                                        {{ $respuestarm->id_r_mensual3 }} </button>
                                                                                                    <input type="hidden" class="form-control" name="texto1"
                                                                                                        value="">
                                                                                                </form>
                                                                                            </div>
                                                                                            <div class="col-12 p-1">
                                                                                                <form method="post"
                                                                                                    action="{{ route('observaciones_documento.index', [$respuestarm->id_usuario, $proceso[0], 12]) }}">
                                                                                                    @csrf
                                                                                                    <input type="text" name="id_c" id="id_c"
                                                                                                        value="{{ $respuestarm->id_r_mensual3 }}" class="id_d">
                                                                                                    <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                            class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                                                        Observaciones</button>
                                                                                                </form>
                                                                                            </div>
                                                                                        @break

                                                                                        <!--aceptado-->
                                                                                        @case(2)
                                                                                            <div class="col-6 p-1">
                                                                                                <form method="post"
                                                                                                    action="{{ route('pendiente_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual3, $proceso[0], 12]) }}">
                                                                                                    @csrf
                                                                                                    <button type="submit"
                                                                                                        class="btn btn-warning btnAceptar">Pendiente</button>
                                                                                                    <input type="hidden" class="form-control" name="texto1"
                                                                                                        value="">
                                                                                                </form>
                                                                                            </div>
                                                                                            <div class="col-12 p-1">
                                                                                                <form method="post"
                                                                                                    action="{{ route('observaciones_documento.index', [$respuestarm->id_usuario, $proceso[0], 12]) }}">
                                                                                                    @csrf
                                                                                                    <input type="text" name="id_c" id="id_c"
                                                                                                        value="{{ $respuestarm->id_r_mensual3 }}" class="id_d">
                                                                                                    <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                            class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                                                        Observaciones</button>
                                                                                                </form>
                                                                                            </div>
                                                                                        @break

                                                                                        @default
                                                                                    @endswitch

                                                                                </div>
                                                                            </div>
                                                                        @endif
                                                                        @empty
                                                                        @endforelse
                                                                    @endif
                                                                    <!--Reporte Mensual 4-->
                                                                    @if ($respuestaD->id_r_mensual4)
                                                                        @forelse ($reporte_mensual4['reporte_mensual4'] as $respuestarm)
                                                                            @if ($respuestarm->name == $respuestaD->name)
                                                                                <br>
                                                                                <br>
                                                                                <br>
                                                                                <br>
                                                                                <br>
                                                                                <br>
                                                                                <br>
                                                                                <br>
                                                                                <div class="rm4">
                                                                                    <div class="row text-center divNombreCard">
                                                                                        <div class="col-12">
                                                                                            Reporte Mensual 4
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="row text-center">
                                                                                        <div class="col-12 nombreDoc">
                                                                                            {{ $respuestarm->nombre_r_m }}
                                                                                        </div>
                                                                                        @switch($respuestarm->estado_r_m)
                                                                                            @case(0)
                                                                                                <div class="col-12">
                                                                                                    <div class="text-center p-1"><span
                                                                                                            class="badge bg-danger text-white">Con Observaciones</span></div>
                                                                                                </div>
                                                                                            @break

                                                                                            @case(1)
                                                                                                <div class="col-12">
                                                                                                    <div class="text-center p-1"><span
                                                                                                            class="badge bg-warning">Pendiente</span></div>
                                                                                                </div>
                                                                                            @break

                                                                                            @case(2)
                                                                                                <div class="col-12">
                                                                                                    <div class="text-center p-1"><span
                                                                                                            class="badge bg-success">Aceptado</span></div>
                                                                                                </div>
                                                                                            @break

                                                                                            @default
                                                                                        @endswitch
                                                                                        <div class="col-6 p-1">
                                                                                            <form method="post"
                                                                                                action="{{ route('ver_documento.index', [$respuestarm->nombre_r_m, $proceso[0]]) }}">
                                                                                                @csrf
                                                                                                <button type="submit" class="btn btnVer"> <i
                                                                                                        class="zmdi zmdi-eye zmdi-hc-lg"></i> Ver</button>
                                                                                            </form>
                                                                                        </div>

                                                                                        @switch($respuestarm->estado_r_m)
                                                                                            @case(0)
                                                                                                <!--con observaciones-->
                                                                                                <div class="col-6 p-1">
                                                                                                    <form method="post"
                                                                                                        action="{{ route('aceptar_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual4, $proceso[0], 13]) }}">
                                                                                                        @csrf
                                                                                                        <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                                                class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar</button>
                                                                                                        <input type="hidden" class="form-control" name="texto1"
                                                                                                            value="">
                                                                                                    </form>
                                                                                                </div>
                                                                                                <div class="col-12 p-1">
                                                                                                    <form method="post"
                                                                                                        action="{{ route('pendiente_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual4, $proceso[0], 13]) }}">
                                                                                                        @csrf
                                                                                                        <button type="submit"
                                                                                                            class="btn btn-warning btnPendiente">Pendiente</button>
                                                                                                        <input type="hidden" class="form-control" name="texto1"
                                                                                                            value="">
                                                                                                    </form>
                                                                                                </div>
                                                                                                <div class="col-12 p-1">
                                                                                                    <form method="post"
                                                                                                        action="{{ route('conObservaciones_documento.index', [$proceso[0], 13]) }}">
                                                                                                        @csrf
                                                                                                        <input type="text" name="id_c" id="id_c"
                                                                                                            value="{{ $respuestarm->id_r_mensual4 }}" class="id_d">

                                                                                                        <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                                class="zmdi zmdi-alert-circle zmdi-hc-lg"></i> Ver
                                                                                                            Observaciones</button>
                                                                                                    </form>
                                                                                                </div>
                                                                                            @break

                                                                                            <!--pendiente-->
                                                                                            @case(1)
                                                                                                <div class="col-6 p-1">
                                                                                                    <form method="post"
                                                                                                        action="{{ route('aceptar_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual4, $proceso[0], 13]) }}">
                                                                                                        @csrf
                                                                                                        <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                                                class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar
                                                                                                            {{ $respuestarm->id_r_mensual4 }} </button>
                                                                                                        <input type="hidden" class="form-control" name="texto1"
                                                                                                            value="">
                                                                                                    </form>
                                                                                                </div>
                                                                                                <div class="col-12 p-1">
                                                                                                    <form method="post"
                                                                                                        action="{{ route('observaciones_documento.index', [$respuestarm->id_usuario, $proceso[0], 13]) }}">
                                                                                                        @csrf
                                                                                                        <input type="text" name="id_c" id="id_c"
                                                                                                            value="{{ $respuestarm->id_r_mensual4 }}" class="id_d">
                                                                                                        <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                                class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                                                            Observaciones</button>
                                                                                                    </form>
                                                                                                </div>
                                                                                            @break

                                                                                            <!--aceptado-->
                                                                                            @case(2)
                                                                                                <div class="col-6 p-1">
                                                                                                    <form method="post"
                                                                                                        action="{{ route('pendiente_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual4, $proceso[0], 13]) }}">
                                                                                                        @csrf
                                                                                                        <button type="submit"
                                                                                                            class="btn btn-warning btnAceptar">Pendiente</button>
                                                                                                        <input type="hidden" class="form-control" name="texto1"
                                                                                                            value="">
                                                                                                    </form>
                                                                                                </div>
                                                                                                <div class="col-12 p-1">
                                                                                                    <form method="post"
                                                                                                        action="{{ route('observaciones_documento.index', [$respuestarm->id_usuario, $proceso[0], 13]) }}">
                                                                                                        @csrf
                                                                                                        <input type="text" name="id_c" id="id_c"
                                                                                                            value="{{ $respuestarm->id_r_mensual4 }}" class="id_d">
                                                                                                        <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                                class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                                                            Observaciones</button>
                                                                                                    </form>
                                                                                                </div>
                                                                                            @break

                                                                                            @default
                                                                                        @endswitch

                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                                            @empty
                                                                            @endforelse
                                                                        @endif
                                                                        <!--Reporte Mensual 5-->
                                                                        @if ($respuestaD->id_r_mensual5)
                                                                            @forelse ($reporte_mensual5['reporte_mensual5'] as $respuestarm)
                                                                                @if ($respuestarm->name == $respuestaD->name)
                                                                                    <br>
                                                                                    <br>
                                                                                    <br>
                                                                                    <br>
                                                                                    <br>
                                                                                    <br>
                                                                                    <br>
                                                                                    <br>
                                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-3 doc">
                                                                                        <div class="rm5">
                                                                                            <div class="col-12">
                                                                                                Reporte Mensual 5
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="row text-center">
                                                                                            <div class="col-12 nombreDoc">
                                                                                                {{ $respuestarm->nombre_r_m }}
                                                                                            </div>
                                                                                            @switch($respuestarm->estado_r_m)
                                                                                                @case(0)
                                                                                                    <div class="col-12">
                                                                                                        <div class="text-center p-1"><span
                                                                                                                class="badge bg-danger text-white">Con Observaciones</span></div>
                                                                                                    </div>
                                                                                                @break

                                                                                                @case(1)
                                                                                                    <div class="col-12">
                                                                                                        <div class="text-center p-1"><span
                                                                                                                class="badge bg-warning">Pendiente</span></div>
                                                                                                    </div>
                                                                                                @break

                                                                                                @case(2)
                                                                                                    <div class="col-12">
                                                                                                        <div class="text-center p-1"><span
                                                                                                                class="badge bg-success">Aceptado</span></div>
                                                                                                    </div>
                                                                                                @break

                                                                                                @default
                                                                                            @endswitch
                                                                                            <div class="col-6 p-1">
                                                                                                <form method="post"
                                                                                                    action="{{ route('ver_documento.index', [$respuestarm->nombre_r_m, $proceso[0]]) }}">
                                                                                                    @csrf
                                                                                                    <button type="submit" class="btn btnVer"> <i
                                                                                                            class="zmdi zmdi-eye zmdi-hc-lg"></i> Ver</button>
                                                                                                </form>
                                                                                            </div>

                                                                                            @switch($respuestarm->estado_r_m)
                                                                                                @case(0)
                                                                                                    <!--con observaciones-->
                                                                                                    <div class="col-6 p-1">
                                                                                                        <form method="post"
                                                                                                            action="{{ route('aceptar_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual5, $proceso[0], 14]) }}">
                                                                                                            @csrf
                                                                                                            <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                                                    class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar</button>
                                                                                                            <input type="hidden" class="form-control" name="texto1"
                                                                                                                value="">
                                                                                                        </form>
                                                                                                    </div>
                                                                                                    <div class="col-12 p-1">
                                                                                                        <form method="post"
                                                                                                            action="{{ route('pendiente_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual5, $proceso[0], 14]) }}">
                                                                                                            @csrf
                                                                                                            <button type="submit"
                                                                                                                class="btn btn-warning btnPendiente">Pendiente</button>
                                                                                                            <input type="hidden" class="form-control" name="texto1"
                                                                                                                value="">
                                                                                                        </form>
                                                                                                    </div>
                                                                                                    <div class="col-12 p-1">
                                                                                                        <form method="post"
                                                                                                            action="{{ route('conObservaciones_documento.index', [$proceso[0], 14]) }}">
                                                                                                            @csrf
                                                                                                            <input type="text" name="id_c" id="id_c"
                                                                                                                value="{{ $respuestarm->id_r_mensual5 }}" class="id_d">

                                                                                                            <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                                    class="zmdi zmdi-alert-circle zmdi-hc-lg"></i> Ver
                                                                                                                Observaciones</button>
                                                                                                        </form>
                                                                                                    </div>
                                                                                                @break

                                                                                                <!--pendiente-->
                                                                                                @case(1)
                                                                                                    <div class="col-6 p-1">
                                                                                                        <form method="post"
                                                                                                            action="{{ route('aceptar_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual5, $proceso[0], 14]) }}">
                                                                                                            @csrf
                                                                                                            <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                                                    class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar
                                                                                                                {{ $respuestarm->id_r_mensual5 }} </button>
                                                                                                            <input type="hidden" class="form-control" name="texto1"
                                                                                                                value="">
                                                                                                        </form>
                                                                                                    </div>
                                                                                                    <div class="col-12 p-1">
                                                                                                        <form method="post"
                                                                                                            action="{{ route('observaciones_documento.index', [$respuestarm->id_usuario, $proceso[0], 14]) }}">
                                                                                                            @csrf
                                                                                                            <input type="text" name="id_c" id="id_c"
                                                                                                                value="{{ $respuestarm->id_r_mensual5 }}" class="id_d">
                                                                                                            <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                                    class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                                                                Observaciones</button>
                                                                                                        </form>
                                                                                                    </div>
                                                                                                @break

                                                                                                <!--aceptado-->
                                                                                                @case(2)
                                                                                                    <div class="col-6 p-1">
                                                                                                        <form method="post"
                                                                                                            action="{{ route('pendiente_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual5, $proceso[0], 14]) }}">
                                                                                                            @csrf
                                                                                                            <button type="submit"
                                                                                                                class="btn btn-warning btnAceptar">Pendiente</button>
                                                                                                            <input type="hidden" class="form-control" name="texto1"
                                                                                                                value="">
                                                                                                        </form>
                                                                                                    </div>
                                                                                                    <div class="col-12 p-1">
                                                                                                        <form method="post"
                                                                                                            action="{{ route('observaciones_documento.index', [$respuestarm->id_usuario, $proceso[0], 14]) }}">
                                                                                                            @csrf
                                                                                                            <input type="text" name="id_c" id="id_c"
                                                                                                                value="{{ $respuestarm->id_r_mensual5 }}" class="id_d">
                                                                                                            <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                                    class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                                                                Observaciones</button>
                                                                                                        </form>
                                                                                                    </div>
                                                                                                @break

                                                                                                @default
                                                                                            @endswitch

                                                                                        </div>
                                                                                    </div>
                                                                                @endif
                                                                                @empty
                                                                                @endforelse
                                                                            @endif
                                                                            <!--Reporte Mensual 6-->
                                                                            @if ($respuestaD->id_r_mensual6)
                                                                                @forelse ($reporte_mensual6['reporte_mensual6'] as $respuestarm)
                                                                                    @if ($respuestarm->name == $respuestaD->name)
                                                                                        <br>
                                                                                        <br>
                                                                                        <br>
                                                                                        <br>
                                                                                        <br>
                                                                                        <br>
                                                                                        <br>
                                                                                        <br>
                                                                                        <div class="rm6">
                                                                                            <div class="row text-center divNombreCard">
                                                                                                <div class="col-12">
                                                                                                    Reporte Mensual 6
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="row text-center">
                                                                                                <div class="col-12 nombreDoc">
                                                                                                    {{ $respuestarm->nombre_r_m }}
                                                                                                </div>
                                                                                                @switch($respuestarm->estado_r_m)
                                                                                                    @case(0)
                                                                                                        <div class="col-12">
                                                                                                            <div class="text-center p-1"><span
                                                                                                                    class="badge bg-danger text-white">Con Observaciones</span></div>
                                                                                                        </div>
                                                                                                    @break

                                                                                                    @case(1)
                                                                                                        <div class="col-12">
                                                                                                            <div class="text-center p-1"><span
                                                                                                                    class="badge bg-warning">Pendiente</span></div>
                                                                                                        </div>
                                                                                                    @break

                                                                                                    @case(2)
                                                                                                        <div class="col-12">
                                                                                                            <div class="text-center p-1"><span
                                                                                                                    class="badge bg-success">Aceptado</span></div>
                                                                                                        </div>
                                                                                                    @break

                                                                                                    @default
                                                                                                @endswitch
                                                                                                <div class="col-6 p-1">
                                                                                                    <form method="post"
                                                                                                        action="{{ route('ver_documento.index', [$respuestarm->nombre_r_m, $proceso[0]]) }}">
                                                                                                        @csrf
                                                                                                        <button type="submit" class="btn btnVer"> <i
                                                                                                                class="zmdi zmdi-eye zmdi-hc-lg"></i> Ver</button>
                                                                                                    </form>
                                                                                                </div>

                                                                                                @switch($respuestarm->estado_r_m)
                                                                                                    @case(0)
                                                                                                        <!--con observaciones-->
                                                                                                        <div class="col-6 p-1">
                                                                                                            <form method="post"
                                                                                                                action="{{ route('aceptar_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual6, $proceso[0], 15]) }}">
                                                                                                                @csrf
                                                                                                                <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                                                        class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar</button>
                                                                                                                <input type="hidden" class="form-control" name="texto1"
                                                                                                                    value="">
                                                                                                            </form>
                                                                                                        </div>
                                                                                                        <div class="col-12 p-1">
                                                                                                            <form method="post"
                                                                                                                action="{{ route('pendiente_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual6, $proceso[0], 15]) }}">
                                                                                                                @csrf
                                                                                                                <button type="submit"
                                                                                                                    class="btn btn-warning btnPendiente">Pendiente</button>
                                                                                                                <input type="hidden" class="form-control" name="texto1"
                                                                                                                    value="">
                                                                                                            </form>
                                                                                                        </div>
                                                                                                        <div class="col-12 p-1">
                                                                                                            <form method="post"
                                                                                                                action="{{ route('conObservaciones_documento.index', [$proceso[0], 15]) }}">
                                                                                                                @csrf
                                                                                                                <input type="text" name="id_c" id="id_c"
                                                                                                                    value="{{ $respuestarm->id_r_mensual6 }}" class="id_d">

                                                                                                                <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                                        class="zmdi zmdi-alert-circle zmdi-hc-lg"></i> Ver
                                                                                                                    Observaciones</button>
                                                                                                            </form>
                                                                                                        </div>
                                                                                                    @break

                                                                                                    <!--pendiente-->
                                                                                                    @case(1)
                                                                                                        <div class="col-6 p-1">
                                                                                                            <form method="post"
                                                                                                                action="{{ route('aceptar_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual6, $proceso[0], 15]) }}">
                                                                                                                @csrf
                                                                                                                <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                                                        class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar
                                                                                                                    {{ $respuestarm->id_r_mensual6 }} </button>
                                                                                                                <input type="hidden" class="form-control" name="texto1"
                                                                                                                    value="">
                                                                                                            </form>
                                                                                                        </div>
                                                                                                        <div class="col-12 p-1">
                                                                                                            <form method="post"
                                                                                                                action="{{ route('observaciones_documento.index', [$respuestarm->id_usuario, $proceso[0], 15]) }}">
                                                                                                                @csrf
                                                                                                                <input type="text" name="id_c" id="id_c"
                                                                                                                    value="{{ $respuestarm->id_r_mensual6 }}" class="id_d">
                                                                                                                <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                                        class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                                                                    Observaciones</button>
                                                                                                            </form>
                                                                                                        </div>
                                                                                                    @break

                                                                                                    <!--aceptado-->
                                                                                                    @case(2)
                                                                                                        <div class="col-6 p-1">
                                                                                                            <form method="post"
                                                                                                                action="{{ route('pendiente_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual6, $proceso[0], 15]) }}">
                                                                                                                @csrf
                                                                                                                <button type="submit"
                                                                                                                    class="btn btn-warning btnAceptar">Pendiente</button>
                                                                                                                <input type="hidden" class="form-control" name="texto1"
                                                                                                                    value="">
                                                                                                            </form>
                                                                                                        </div>
                                                                                                        <div class="col-12 p-1">
                                                                                                            <form method="post"
                                                                                                                action="{{ route('observaciones_documento.index', [$respuestarm->id_usuario, $proceso[0], 15]) }}">
                                                                                                                @csrf
                                                                                                                <input type="text" name="id_c" id="id_c"
                                                                                                                    value="{{ $respuestarm->id_r_mensual6 }}" class="id_d">
                                                                                                                <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                                        class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                                                                    Observaciones</button>
                                                                                                            </form>
                                                                                                        </div>
                                                                                                    @break

                                                                                                    @default
                                                                                                @endswitch

                                                                                            </div>
                                                                                        </div>
                                                                                    @endif
                                                                                    @empty
                                                                                    @endforelse
                                                                                @endif
                                                                                <!--Reporte Mensual 7-->
                                                                                @if ($respuestaD->id_r_mensual7)
                                                                                    @forelse ($reporte_mensual7['reporte_mensual7'] as $respuestarm)
                                                                                        @if ($respuestarm->name == $respuestaD->name)
                                                                                            <br>
                                                                                            <br>
                                                                                            <br>
                                                                                            <br>
                                                                                            <br>
                                                                                            <br>
                                                                                            <br>
                                                                                            <br>
                                                                                            <div class="rm7">
                                                                                                <div class="row text-center divNombreCard">
                                                                                                    <div class="col-12">
                                                                                                        Reporte Mensual 7
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="row text-center">
                                                                                                    <div class="col-12 nombreDoc">
                                                                                                        {{ $respuestarm->nombre_r_m }}
                                                                                                    </div>
                                                                                                    @switch($respuestarm->estado_r_m)
                                                                                                        @case(0)
                                                                                                            <div class="col-12">
                                                                                                                <div class="text-center p-1"><span
                                                                                                                        class="badge bg-danger text-white">Con Observaciones</span></div>
                                                                                                            </div>
                                                                                                        @break

                                                                                                        @case(1)
                                                                                                            <div class="col-12">
                                                                                                                <div class="text-center p-1"><span
                                                                                                                        class="badge bg-warning">Pendiente</span></div>
                                                                                                            </div>
                                                                                                        @break

                                                                                                        @case(2)
                                                                                                            <div class="col-12">
                                                                                                                <div class="text-center p-1"><span
                                                                                                                        class="badge bg-success">Aceptado</span></div>
                                                                                                            </div>
                                                                                                        @break

                                                                                                        @default
                                                                                                    @endswitch
                                                                                                    <div class="col-6 p-1">
                                                                                                        <form method="post"
                                                                                                            action="{{ route('ver_documento.index', [$respuestarm->nombre_r_m, $proceso[0]]) }}">
                                                                                                            @csrf
                                                                                                            <button type="submit" class="btn btnVer"> <i
                                                                                                                    class="zmdi zmdi-eye zmdi-hc-lg"></i> Ver</button>
                                                                                                        </form>
                                                                                                    </div>

                                                                                                    @switch($respuestarm->estado_r_m)
                                                                                                        @case(0)
                                                                                                            <!--con observaciones-->
                                                                                                            <div class="col-6 p-1">
                                                                                                                <form method="post"
                                                                                                                    action="{{ route('aceptar_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual7, $proceso[0], 16]) }}">
                                                                                                                    @csrf
                                                                                                                    <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                                                            class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar</button>
                                                                                                                    <input type="hidden" class="form-control" name="texto1"
                                                                                                                        value="">
                                                                                                                </form>
                                                                                                            </div>
                                                                                                            <div class="col-12 p-1">
                                                                                                                <form method="post"
                                                                                                                    action="{{ route('pendiente_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual7, $proceso[0], 16]) }}">
                                                                                                                    @csrf
                                                                                                                    <button type="submit"
                                                                                                                        class="btn btn-warning btnPendiente">Pendiente</button>
                                                                                                                    <input type="hidden" class="form-control" name="texto1"
                                                                                                                        value="">
                                                                                                                </form>
                                                                                                            </div>
                                                                                                            <div class="col-12 p-1">
                                                                                                                <form method="post"
                                                                                                                    action="{{ route('conObservaciones_documento.index', [$proceso[0], 16]) }}">
                                                                                                                    @csrf
                                                                                                                    <input type="text" name="id_c" id="id_c"
                                                                                                                        value="{{ $respuestarm->id_r_mensual7 }}" class="id_d">

                                                                                                                    <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                                            class="zmdi zmdi-alert-circle zmdi-hc-lg"></i> Ver
                                                                                                                        Observaciones</button>
                                                                                                                </form>
                                                                                                            </div>
                                                                                                        @break

                                                                                                        <!--pendiente-->
                                                                                                        @case(1)
                                                                                                            <div class="col-6 p-1">
                                                                                                                <form method="post"
                                                                                                                    action="{{ route('aceptar_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual7, $proceso[0], 16]) }}">
                                                                                                                    @csrf
                                                                                                                    <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                                                            class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar
                                                                                                                        {{ $respuestarm->id_r_mensual7 }} </button>
                                                                                                                    <input type="hidden" class="form-control" name="texto1"
                                                                                                                        value="">
                                                                                                                </form>
                                                                                                            </div>
                                                                                                            <div class="col-12 p-1">
                                                                                                                <form method="post"
                                                                                                                    action="{{ route('observaciones_documento.index', [$respuestarm->id_usuario, $proceso[0], 16]) }}">
                                                                                                                    @csrf
                                                                                                                    <input type="text" name="id_c" id="id_c"
                                                                                                                        value="{{ $respuestarm->id_r_mensual7 }}" class="id_d">
                                                                                                                    <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                                            class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                                                                        Observaciones</button>
                                                                                                                </form>
                                                                                                            </div>
                                                                                                        @break

                                                                                                        <!--aceptado-->
                                                                                                        @case(2)
                                                                                                            <div class="col-6 p-1">
                                                                                                                <form method="post"
                                                                                                                    action="{{ route('pendiente_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual7, $proceso[0], 16]) }}">
                                                                                                                    @csrf
                                                                                                                    <button type="submit"
                                                                                                                        class="btn btn-warning btnAceptar">Pendiente</button>
                                                                                                                    <input type="hidden" class="form-control" name="texto1"
                                                                                                                        value="">
                                                                                                                </form>
                                                                                                            </div>
                                                                                                            <div class="col-12 p-1">
                                                                                                                <form method="post"
                                                                                                                    action="{{ route('observaciones_documento.index', [$respuestarm->id_usuario, $proceso[0], 16]) }}">
                                                                                                                    @csrf
                                                                                                                    <input type="text" name="id_c" id="id_c"
                                                                                                                        value="{{ $respuestarm->id_r_mensual7 }}" class="id_d">
                                                                                                                    <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                                            class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                                                                        Observaciones</button>
                                                                                                                </form>
                                                                                                            </div>
                                                                                                        @break

                                                                                                        @default
                                                                                                    @endswitch

                                                                                                </div>
                                                                                            </div>
                                                                                        @endif
                                                                                        @empty
                                                                                        @endforelse
                                                                                    @endif
                                                                                    <!--Reporte Mensual 8-->
                                                                                    @if ($respuestaD->id_r_mensual8)
                                                                                        @forelse ($reporte_mensual8['reporte_mensual8'] as $respuestarm)
                                                                                            @if ($respuestarm->name == $respuestaD->name)
                                                                                                <br>
                                                                                                <br>
                                                                                                <br>
                                                                                                <br>
                                                                                                <br>
                                                                                                <br>
                                                                                                <br>
                                                                                                <br>
                                                                                                <div class="rm8">
                                                                                                    <div class="row text-center divNombreCard">
                                                                                                        <div class="col-12">
                                                                                                            Reporte Mensual 8
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row text-center">
                                                                                                        <div class="col-12 nombreDoc">
                                                                                                            {{ $respuestarm->nombre_r_m }}
                                                                                                        </div>
                                                                                                        @switch($respuestarm->estado_r_m)
                                                                                                            @case(0)
                                                                                                                <div class="col-12">
                                                                                                                    <div class="text-center p-1"><span
                                                                                                                            class="badge bg-danger text-white">Con Observaciones</span></div>
                                                                                                                </div>
                                                                                                            @break

                                                                                                            @case(1)
                                                                                                                <div class="col-12">
                                                                                                                    <div class="text-center p-1"><span
                                                                                                                            class="badge bg-warning">Pendiente</span></div>
                                                                                                                </div>
                                                                                                            @break

                                                                                                            @case(2)
                                                                                                                <div class="col-12">
                                                                                                                    <div class="text-center p-1"><span
                                                                                                                            class="badge bg-success">Aceptado</span></div>
                                                                                                                </div>
                                                                                                            @break

                                                                                                            @default
                                                                                                        @endswitch
                                                                                                        <div class="col-6 p-1">
                                                                                                            <form method="post"
                                                                                                                action="{{ route('ver_documento.index', [$respuestarm->nombre_r_m, $proceso[0]]) }}">
                                                                                                                @csrf
                                                                                                                <button type="submit" class="btn btnVer"> <i
                                                                                                                        class="zmdi zmdi-eye zmdi-hc-lg"></i> Ver</button>
                                                                                                            </form>
                                                                                                        </div>

                                                                                                        @switch($respuestarm->estado_r_m)
                                                                                                            @case(0)
                                                                                                                <!--con observaciones-->
                                                                                                                <div class="col-6 p-1">
                                                                                                                    <form method="post"
                                                                                                                        action="{{ route('aceptar_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual8, $proceso[0], 17]) }}">
                                                                                                                        @csrf
                                                                                                                        <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                                                                class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar</button>
                                                                                                                        <input type="hidden" class="form-control" name="texto1"
                                                                                                                            value="">
                                                                                                                    </form>
                                                                                                                </div>
                                                                                                                <div class="col-12 p-1">
                                                                                                                    <form method="post"
                                                                                                                        action="{{ route('pendiente_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual8, $proceso[0], 17]) }}">
                                                                                                                        @csrf
                                                                                                                        <button type="submit"
                                                                                                                            class="btn btn-warning btnPendiente">Pendiente</button>
                                                                                                                        <input type="hidden" class="form-control" name="texto1"
                                                                                                                            value="">
                                                                                                                    </form>
                                                                                                                </div>
                                                                                                                <div class="col-12 p-1">
                                                                                                                    <form method="post"
                                                                                                                        action="{{ route('conObservaciones_documento.index', [$proceso[0], 17]) }}">
                                                                                                                        @csrf
                                                                                                                        <input type="text" name="id_c" id="id_c"
                                                                                                                            value="{{ $respuestarm->id_r_mensual8 }}" class="id_d">

                                                                                                                        <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                                                class="zmdi zmdi-alert-circle zmdi-hc-lg"></i> Ver
                                                                                                                            Observaciones</button>
                                                                                                                    </form>
                                                                                                                </div>
                                                                                                            @break

                                                                                                            <!--pendiente-->
                                                                                                            @case(1)
                                                                                                                <div class="col-6 p-1">
                                                                                                                    <form method="post"
                                                                                                                        action="{{ route('aceptar_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual8, $proceso[0], 17]) }}">
                                                                                                                        @csrf
                                                                                                                        <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                                                                class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar
                                                                                                                            {{ $respuestarm->id_r_mensual8 }} </button>
                                                                                                                        <input type="hidden" class="form-control" name="texto1"
                                                                                                                            value="">
                                                                                                                    </form>
                                                                                                                </div>
                                                                                                                <div class="col-12 p-1">
                                                                                                                    <form method="post"
                                                                                                                        action="{{ route('observaciones_documento.index', [$respuestarm->id_usuario, $proceso[0], 17]) }}">
                                                                                                                        @csrf
                                                                                                                        <input type="text" name="id_c" id="id_c"
                                                                                                                            value="{{ $respuestarm->id_r_mensual8 }}" class="id_d">
                                                                                                                        <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                                                class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                                                                            Observaciones</button>
                                                                                                                    </form>
                                                                                                                </div>
                                                                                                            @break

                                                                                                            <!--aceptado-->
                                                                                                            @case(2)
                                                                                                                <div class="col-6 p-1">
                                                                                                                    <form method="post"
                                                                                                                        action="{{ route('pendiente_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual8, $proceso[0], 17]) }}">
                                                                                                                        @csrf
                                                                                                                        <button type="submit"
                                                                                                                            class="btn btn-warning btnAceptar">Pendiente</button>
                                                                                                                        <input type="hidden" class="form-control" name="texto1"
                                                                                                                            value="">
                                                                                                                    </form>
                                                                                                                </div>
                                                                                                                <div class="col-12 p-1">
                                                                                                                    <form method="post"
                                                                                                                        action="{{ route('observaciones_documento.index', [$respuestarm->id_usuario, $proceso[0], 17]) }}">
                                                                                                                        @csrf
                                                                                                                        <input type="text" name="id_c" id="id_c"
                                                                                                                            value="{{ $respuestarm->id_r_mensual8 }}" class="id_d">
                                                                                                                        <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                                                class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                                                                            Observaciones</button>
                                                                                                                    </form>
                                                                                                                </div>
                                                                                                            @break

                                                                                                            @default
                                                                                                        @endswitch

                                                                                                    </div>
                                                                                                </div>
                                                                                            @endif
                                                                                            @empty
                                                                                            @endforelse
                                                                                        @endif
                                                                                        <!--Reporte Mensual 9-->
                                                                                        @if ($respuestaD->id_r_mensual9)
                                                                                            @forelse ($reporte_mensual9['reporte_mensual9'] as $respuestarm)
                                                                                                @if ($respuestarm->name == $respuestaD->name)
                                                                                                    <br>
                                                                                                    <br>
                                                                                                    <br>
                                                                                                    <br>
                                                                                                    <br>
                                                                                                    <br>
                                                                                                    <br>
                                                                                                    <br>
                                                                                                    <div class="rm9">
                                                                                                        <div class="row text-center divNombreCard">
                                                                                                            <div class="col-12">
                                                                                                                Reporte Mensual 9
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="row text-center">
                                                                                                            <div class="col-12 nombreDoc">
                                                                                                                {{ $respuestarm->nombre_r_m }}
                                                                                                            </div>
                                                                                                            @switch($respuestarm->estado_r_m)
                                                                                                                @case(0)
                                                                                                                    <div class="col-12">
                                                                                                                        <div class="text-center p-1"><span
                                                                                                                                class="badge bg-danger text-white">Con Observaciones</span></div>
                                                                                                                    </div>
                                                                                                                @break

                                                                                                                @case(1)
                                                                                                                    <div class="col-12">
                                                                                                                        <div class="text-center p-1"><span
                                                                                                                                class="badge bg-warning">Pendiente</span></div>
                                                                                                                    </div>
                                                                                                                @break

                                                                                                                @case(2)
                                                                                                                    <div class="col-12">
                                                                                                                        <div class="text-center p-1"><span
                                                                                                                                class="badge bg-success">Aceptado</span></div>
                                                                                                                    </div>
                                                                                                                @break

                                                                                                                @default
                                                                                                            @endswitch
                                                                                                            <div class="col-6 p-1">
                                                                                                                <form method="post"
                                                                                                                    action="{{ route('ver_documento.index', [$respuestarm->nombre_r_m, $proceso[0]]) }}">
                                                                                                                    @csrf
                                                                                                                    <button type="submit" class="btn btnVer"> <i
                                                                                                                            class="zmdi zmdi-eye zmdi-hc-lg"></i> Ver</button>
                                                                                                                </form>
                                                                                                            </div>

                                                                                                            @switch($respuestarm->estado_r_m)
                                                                                                                @case(0)
                                                                                                                    <!--con observaciones-->
                                                                                                                    <div class="col-6 p-1">
                                                                                                                        <form method="post"
                                                                                                                            action="{{ route('aceptar_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual9, $proceso[0], 18]) }}">
                                                                                                                            @csrf
                                                                                                                            <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                                                                    class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar</button>
                                                                                                                            <input type="hidden" class="form-control" name="texto1"
                                                                                                                                value="">
                                                                                                                        </form>
                                                                                                                    </div>
                                                                                                                    <div class="col-12 p-1">
                                                                                                                        <form method="post"
                                                                                                                            action="{{ route('pendiente_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual9, $proceso[0], 18]) }}">
                                                                                                                            @csrf
                                                                                                                            <button type="submit"
                                                                                                                                class="btn btn-warning btnPendiente">Pendiente</button>
                                                                                                                            <input type="hidden" class="form-control" name="texto1"
                                                                                                                                value="">
                                                                                                                        </form>
                                                                                                                    </div>
                                                                                                                    <div class="col-12 p-1">
                                                                                                                        <form method="post"
                                                                                                                            action="{{ route('conObservaciones_documento.index', [$proceso[0], 18]) }}">
                                                                                                                            @csrf
                                                                                                                            <input type="text" name="id_c" id="id_c"
                                                                                                                                value="{{ $respuestarm->id_r_mensual9 }}" class="id_d">

                                                                                                                            <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                                                    class="zmdi zmdi-alert-circle zmdi-hc-lg"></i> Ver
                                                                                                                                Observaciones</button>
                                                                                                                        </form>
                                                                                                                    </div>
                                                                                                                @break

                                                                                                                <!--pendiente-->
                                                                                                                @case(1)
                                                                                                                    <div class="col-6 p-1">
                                                                                                                        <form method="post"
                                                                                                                            action="{{ route('aceptar_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual9, $proceso[0], 18]) }}">
                                                                                                                            @csrf
                                                                                                                            <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                                                                    class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar
                                                                                                                                {{ $respuestarm->id_r_mensual9 }} </button>
                                                                                                                            <input type="hidden" class="form-control" name="texto1"
                                                                                                                                value="">
                                                                                                                        </form>
                                                                                                                    </div>
                                                                                                                    <div class="col-12 p-1">
                                                                                                                        <form method="post"
                                                                                                                            action="{{ route('observaciones_documento.index', [$respuestarm->id_usuario, $proceso[0], 18]) }}">
                                                                                                                            @csrf
                                                                                                                            <input type="text" name="id_c" id="id_c"
                                                                                                                                value="{{ $respuestarm->id_r_mensual9 }}" class="id_d">
                                                                                                                            <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                                                    class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                                                                                Observaciones</button>
                                                                                                                        </form>
                                                                                                                    </div>
                                                                                                                @break

                                                                                                                <!--aceptado-->
                                                                                                                @case(2)
                                                                                                                    <div class="col-6 p-1">
                                                                                                                        <form method="post"
                                                                                                                            action="{{ route('pendiente_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual9, $proceso[0], 18]) }}">
                                                                                                                            @csrf
                                                                                                                            <button type="submit"
                                                                                                                                class="btn btn-warning btnAceptar">Pendiente</button>
                                                                                                                            <input type="hidden" class="form-control" name="texto1"
                                                                                                                                value="">
                                                                                                                        </form>
                                                                                                                    </div>
                                                                                                                    <div class="col-12 p-1">
                                                                                                                        <form method="post"
                                                                                                                            action="{{ route('observaciones_documento.index', [$respuestarm->id_usuario, $proceso[0], 18]) }}">
                                                                                                                            @csrf
                                                                                                                            <input type="text" name="id_c" id="id_c"
                                                                                                                                value="{{ $respuestarm->id_r_mensual9 }}" class="id_d">
                                                                                                                            <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                                                    class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                                                                                Observaciones</button>
                                                                                                                        </form>
                                                                                                                    </div>
                                                                                                                @break

                                                                                                                @default
                                                                                                            @endswitch

                                                                                                        </div>
                                                                                                    </div>
                                                                                                @endif
                                                                                                @empty
                                                                                                @endforelse
                                                                                            @endif
                                                                                            <!--Reporte Mensual 10-->
                                                                                            @if ($respuestaD->id_r_mensual10)
                                                                                                @forelse ($reporte_mensual10['reporte_mensual10'] as $respuestarm)
                                                                                                    @if ($respuestarm->name == $respuestaD->name)
                                                                                                        <br>
                                                                                                        <br>
                                                                                                        <br>
                                                                                                        <br>
                                                                                                        <br>
                                                                                                        <br>
                                                                                                        <br>
                                                                                                        <br>
                                                                                                        <div class="rm10">
                                                                                                            <div class="row text-center divNombreCard">
                                                                                                                <div class="col-12">
                                                                                                                    Reporte Mensual 10
                                                                                                                </div>
                                                                                                            </div>

                                                                                                            <div class="row text-center">
                                                                                                                <div class="col-12 nombreDoc">
                                                                                                                    {{ $respuestarm->nombre_r_m }}
                                                                                                                </div>
                                                                                                                @switch($respuestarm->estado_r_m)
                                                                                                                    @case(0)
                                                                                                                        <div class="col-12">
                                                                                                                            <div class="text-center p-1"><span
                                                                                                                                    class="badge bg-danger text-white">Con Observaciones</span></div>
                                                                                                                        </div>
                                                                                                                    @break

                                                                                                                    @case(1)
                                                                                                                        <div class="col-12">
                                                                                                                            <div class="text-center p-1"><span
                                                                                                                                    class="badge bg-warning">Pendiente</span></div>
                                                                                                                        </div>
                                                                                                                    @break

                                                                                                                    @case(2)
                                                                                                                        <div class="col-12">
                                                                                                                            <div class="text-center p-1"><span
                                                                                                                                    class="badge bg-success">Aceptado</span></div>
                                                                                                                        </div>
                                                                                                                    @break

                                                                                                                    @default
                                                                                                                @endswitch
                                                                                                                <div class="col-6 p-1">
                                                                                                                    <form method="post"
                                                                                                                        action="{{ route('ver_documento.index', [$respuestarm->nombre_r_m, $proceso[0]]) }}">
                                                                                                                        @csrf
                                                                                                                        <button type="submit" class="btn btnVer"> <i
                                                                                                                                class="zmdi zmdi-eye zmdi-hc-lg"></i> Ver</button>
                                                                                                                    </form>
                                                                                                                </div>

                                                                                                                @switch($respuestarm->estado_r_m)
                                                                                                                    @case(0)
                                                                                                                        <!--con observaciones-->
                                                                                                                        <div class="col-6 p-1">
                                                                                                                            <form method="post"
                                                                                                                                action="{{ route('aceptar_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual10, $proceso[0], 19]) }}">
                                                                                                                                @csrf
                                                                                                                                <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                                                                        class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar</button>
                                                                                                                                <input type="hidden" class="form-control" name="texto1"
                                                                                                                                    value="">
                                                                                                                            </form>
                                                                                                                        </div>
                                                                                                                        <div class="col-12 p-1">
                                                                                                                            <form method="post"
                                                                                                                                action="{{ route('pendiente_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual10, $proceso[0], 19]) }}">
                                                                                                                                @csrf
                                                                                                                                <button type="submit"
                                                                                                                                    class="btn btn-warning btnPendiente">Pendiente</button>
                                                                                                                                <input type="hidden" class="form-control" name="texto1"
                                                                                                                                    value="">
                                                                                                                            </form>
                                                                                                                        </div>
                                                                                                                        <div class="col-12 p-1">
                                                                                                                            <form method="post"
                                                                                                                                action="{{ route('conObservaciones_documento.index', [$proceso[0], 19]) }}">
                                                                                                                                @csrf
                                                                                                                                <input type="text" name="id_c" id="id_c"
                                                                                                                                    value="{{ $respuestarm->id_r_mensual10 }}" class="id_d">

                                                                                                                                <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                                                        class="zmdi zmdi-alert-circle zmdi-hc-lg"></i> Ver
                                                                                                                                    Observaciones</button>
                                                                                                                            </form>
                                                                                                                        </div>
                                                                                                                    @break

                                                                                                                    <!--pendiente-->
                                                                                                                    @case(1)
                                                                                                                        <div class="col-6 p-1">
                                                                                                                            <form method="post"
                                                                                                                                action="{{ route('aceptar_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual10, $proceso[0], 19]) }}">
                                                                                                                                @csrf
                                                                                                                                <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                                                                        class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar
                                                                                                                                    {{ $respuestarm->id_r_mensual10 }} </button>
                                                                                                                                <input type="hidden" class="form-control" name="texto1"
                                                                                                                                    value="">
                                                                                                                            </form>
                                                                                                                        </div>
                                                                                                                        <div class="col-12 p-1">
                                                                                                                            <form method="post"
                                                                                                                                action="{{ route('observaciones_documento.index', [$respuestarm->id_usuario, $proceso[0], 19]) }}">
                                                                                                                                @csrf
                                                                                                                                <input type="text" name="id_c" id="id_c"
                                                                                                                                    value="{{ $respuestarm->id_r_mensual10 }}" class="id_d">
                                                                                                                                <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                                                        class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                                                                                    Observaciones</button>
                                                                                                                            </form>
                                                                                                                        </div>
                                                                                                                    @break

                                                                                                                    <!--aceptado-->
                                                                                                                    @case(2)
                                                                                                                        <div class="col-6 p-1">
                                                                                                                            <form method="post"
                                                                                                                                action="{{ route('pendiente_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual10, $proceso[0], 19]) }}">
                                                                                                                                @csrf
                                                                                                                                <button type="submit"
                                                                                                                                    class="btn btn-warning btnAceptar">Pendiente</button>
                                                                                                                                <input type="hidden" class="form-control" name="texto1"
                                                                                                                                    value="">
                                                                                                                            </form>
                                                                                                                        </div>
                                                                                                                        <div class="col-12 p-1">
                                                                                                                            <form method="post"
                                                                                                                                action="{{ route('observaciones_documento.index', [$respuestarm->id_usuario, $proceso[0], 19]) }}">
                                                                                                                                @csrf
                                                                                                                                <input type="text" name="id_c" id="id_c"
                                                                                                                                    value="{{ $respuestarm->id_r_mensual10 }}" class="id_d">
                                                                                                                                <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                                                        class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                                                                                    Observaciones</button>
                                                                                                                            </form>
                                                                                                                        </div>
                                                                                                                    @break

                                                                                                                    @default
                                                                                                                @endswitch

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                    @empty
                                                                                                    @endforelse
                                                                                                @endif
                                                                                                <!--Reporte Mensual 11-->
                                                                                                @if ($respuestaD->id_r_mensual11)
                                                                                                    @forelse ($reporte_mensual11['reporte_mensual11'] as $respuestarm)
                                                                                                        @if ($respuestarm->name == $respuestaD->name)
                                                                                                            <br>
                                                                                                            <br>
                                                                                                            <br>
                                                                                                            <br>
                                                                                                            <br>
                                                                                                            <br>
                                                                                                            <br>
                                                                                                            <br>
                                                                                                            <div class="rm11">
                                                                                                                <div class="row text-center divNombreCard">
                                                                                                                    <div class="col-12">
                                                                                                                        Reporte Mensual 11
                                                                                                                    </div>
                                                                                                                </div>

                                                                                                                <div class="row text-center">
                                                                                                                    <div class="col-12 nombreDoc">
                                                                                                                        {{ $respuestarm->nombre_r_m }}
                                                                                                                    </div>
                                                                                                                    @switch($respuestarm->estado_r_m)
                                                                                                                        @case(0)
                                                                                                                            <div class="col-12">
                                                                                                                                <div class="text-center p-1"><span
                                                                                                                                        class="badge bg-danger text-white">Con Observaciones</span></div>
                                                                                                                            </div>
                                                                                                                        @break

                                                                                                                        @case(1)
                                                                                                                            <div class="col-12">
                                                                                                                                <div class="text-center p-1"><span
                                                                                                                                        class="badge bg-warning">Pendiente</span></div>
                                                                                                                            </div>
                                                                                                                        @break

                                                                                                                        @case(2)
                                                                                                                            <div class="col-12">
                                                                                                                                <div class="text-center p-1"><span
                                                                                                                                        class="badge bg-success">Aceptado</span></div>
                                                                                                                            </div>
                                                                                                                        @break

                                                                                                                        @default
                                                                                                                    @endswitch
                                                                                                                    <div class="col-6 p-1">
                                                                                                                        <form method="post"
                                                                                                                            action="{{ route('ver_documento.index', [$respuestarm->nombre_r_m, $proceso[0]]) }}">
                                                                                                                            @csrf
                                                                                                                            <button type="submit" class="btn btnVer"> <i
                                                                                                                                    class="zmdi zmdi-eye zmdi-hc-lg"></i> Ver</button>
                                                                                                                        </form>
                                                                                                                    </div>

                                                                                                                    @switch($respuestarm->estado_r_m)
                                                                                                                        @case(0)
                                                                                                                            <!--con observaciones-->
                                                                                                                            <div class="col-6 p-1">
                                                                                                                                <form method="post"
                                                                                                                                    action="{{ route('aceptar_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual11, $proceso[0], 20]) }}">
                                                                                                                                    @csrf
                                                                                                                                    <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                                                                            class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar</button>
                                                                                                                                    <input type="hidden" class="form-control" name="texto1"
                                                                                                                                        value="">
                                                                                                                                </form>
                                                                                                                            </div>
                                                                                                                            <div class="col-12 p-1">
                                                                                                                                <form method="post"
                                                                                                                                    action="{{ route('pendiente_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual11, $proceso[0], 20]) }}">
                                                                                                                                    @csrf
                                                                                                                                    <button type="submit"
                                                                                                                                        class="btn btn-warning btnPendiente">Pendiente</button>
                                                                                                                                    <input type="hidden" class="form-control" name="texto1"
                                                                                                                                        value="">
                                                                                                                                </form>
                                                                                                                            </div>
                                                                                                                            <div class="col-12 p-1">
                                                                                                                                <form method="post"
                                                                                                                                    action="{{ route('conObservaciones_documento.index', [$proceso[0], 20]) }}">
                                                                                                                                    @csrf
                                                                                                                                    <input type="text" name="id_c" id="id_c"
                                                                                                                                        value="{{ $respuestarm->id_r_mensual11 }}" class="id_d">

                                                                                                                                    <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                                                            class="zmdi zmdi-alert-circle zmdi-hc-lg"></i> Ver
                                                                                                                                        Observaciones</button>
                                                                                                                                </form>
                                                                                                                            </div>
                                                                                                                        @break

                                                                                                                        <!--pendiente-->
                                                                                                                        @case(1)
                                                                                                                            <div class="col-6 p-1">
                                                                                                                                <form method="post"
                                                                                                                                    action="{{ route('aceptar_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual11, $proceso[0], 20]) }}">
                                                                                                                                    @csrf
                                                                                                                                    <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                                                                            class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar
                                                                                                                                        {{ $respuestarm->id_r_mensual11 }} </button>
                                                                                                                                    <input type="hidden" class="form-control" name="texto1"
                                                                                                                                        value="">
                                                                                                                                </form>
                                                                                                                            </div>
                                                                                                                            <div class="col-12 p-1">
                                                                                                                                <form method="post"
                                                                                                                                    action="{{ route('observaciones_documento.index', [$respuestarm->id_usuario, $proceso[0], 20]) }}">
                                                                                                                                    @csrf
                                                                                                                                    <input type="text" name="id_c" id="id_c"
                                                                                                                                        value="{{ $respuestarm->id_r_mensual11 }}" class="id_d">
                                                                                                                                    <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                                                            class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                                                                                        Observaciones</button>
                                                                                                                                </form>
                                                                                                                            </div>
                                                                                                                        @break

                                                                                                                        <!--aceptado-->
                                                                                                                        @case(2)
                                                                                                                            <div class="col-6 p-1">
                                                                                                                                <form method="post"
                                                                                                                                    action="{{ route('pendiente_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual11, $proceso[0], 20]) }}">
                                                                                                                                    @csrf
                                                                                                                                    <button type="submit"
                                                                                                                                        class="btn btn-warning btnAceptar">Pendiente</button>
                                                                                                                                    <input type="hidden" class="form-control" name="texto1"
                                                                                                                                        value="">
                                                                                                                                </form>
                                                                                                                            </div>
                                                                                                                            <div class="col-12 p-1">
                                                                                                                                <form method="post"
                                                                                                                                    action="{{ route('observaciones_documento.index', [$respuestarm->id_usuario, $proceso[0], 20]) }}">
                                                                                                                                    @csrf
                                                                                                                                    <input type="text" name="id_c" id="id_c"
                                                                                                                                        value="{{ $respuestarm->id_r_mensual11 }}" class="id_d">
                                                                                                                                    <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                                                            class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                                                                                        Observaciones</button>
                                                                                                                                </form>
                                                                                                                            </div>
                                                                                                                        @break

                                                                                                                        @default
                                                                                                                    @endswitch

                                                                                                                </div>
                                                                                                            </div>
                                                                                                        @endif
                                                                                                        @empty
                                                                                                        @endforelse
                                                                                                    @endif
                                                                                                    <!--Reporte Mensual 12-->
                                                                                                    @if ($respuestaD->id_r_mensual12)
                                                                                                        @forelse ($reporte_mensual12['reporte_mensual12'] as $respuestarm)
                                                                                                            @if ($respuestarm->name == $respuestaD->name)
                                                                                                                <br>
                                                                                                                <br>
                                                                                                                <br>
                                                                                                                <br>
                                                                                                                <br>
                                                                                                                <br>
                                                                                                                <br>
                                                                                                                <br>
                                                                                                                <div class="rm12">
                                                                                                                    <div class="row text-center divNombreCard">
                                                                                                                        <div class="col-12">
                                                                                                                            Reporte Mensual 12
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <div class="row text-center">
                                                                                                                        <div class="col-12 nombreDoc">
                                                                                                                            {{ $respuestarm->nombre_r_m }}
                                                                                                                        </div>
                                                                                                                        @switch($respuestarm->estado_r_m)
                                                                                                                            @case(0)
                                                                                                                                <div class="col-12">
                                                                                                                                    <div class="text-center p-1"><span
                                                                                                                                            class="badge bg-danger text-white">Con Observaciones</span></div>
                                                                                                                                </div>
                                                                                                                            @break

                                                                                                                            @case(1)
                                                                                                                                <div class="col-12">
                                                                                                                                    <div class="text-center p-1"><span
                                                                                                                                            class="badge bg-warning">Pendiente</span></div>
                                                                                                                                </div>
                                                                                                                            @break

                                                                                                                            @case(2)
                                                                                                                                <div class="col-12">
                                                                                                                                    <div class="text-center p-1"><span
                                                                                                                                            class="badge bg-success">Aceptado</span></div>
                                                                                                                                </div>
                                                                                                                            @break

                                                                                                                            @default
                                                                                                                        @endswitch
                                                                                                                        <div class="col-6 p-1">
                                                                                                                            <form method="post"
                                                                                                                                action="{{ route('ver_documento.index', [$respuestarm->nombre_r_m, $proceso[0]]) }}">
                                                                                                                                @csrf
                                                                                                                                <button type="submit" class="btn btnVer"> <i
                                                                                                                                        class="zmdi zmdi-eye zmdi-hc-lg"></i> Ver</button>
                                                                                                                            </form>
                                                                                                                        </div>

                                                                                                                        @switch($respuestarm->estado_r_m)
                                                                                                                            @case(0)
                                                                                                                                <!--con observaciones-->
                                                                                                                                <div class="col-6 p-1">
                                                                                                                                    <form method="post"
                                                                                                                                        action="{{ route('aceptar_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual12, $proceso[0], 21]) }}">
                                                                                                                                        @csrf
                                                                                                                                        <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                                                                                class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar</button>
                                                                                                                                        <input type="hidden" class="form-control" name="texto1"
                                                                                                                                            value="">
                                                                                                                                    </form>
                                                                                                                                </div>
                                                                                                                                <div class="col-12 p-1">
                                                                                                                                    <form method="post"
                                                                                                                                        action="{{ route('pendiente_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual12, $proceso[0], 21]) }}">
                                                                                                                                        @csrf
                                                                                                                                        <button type="submit"
                                                                                                                                            class="btn btn-warning btnPendiente">Pendiente</button>
                                                                                                                                        <input type="hidden" class="form-control" name="texto1"
                                                                                                                                            value="">
                                                                                                                                    </form>
                                                                                                                                </div>
                                                                                                                                <div class="col-12 p-1">
                                                                                                                                    <form method="post"
                                                                                                                                        action="{{ route('conObservaciones_documento.index', [$proceso[0], 21]) }}">
                                                                                                                                        @csrf
                                                                                                                                        <input type="text" name="id_c" id="id_c"
                                                                                                                                            value="{{ $respuestarm->id_r_mensual12 }}" class="id_d">

                                                                                                                                        <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                                                                class="zmdi zmdi-alert-circle zmdi-hc-lg"></i> Ver
                                                                                                                                            Observaciones</button>
                                                                                                                                    </form>
                                                                                                                                </div>
                                                                                                                            @break

                                                                                                                            <!--pendiente-->
                                                                                                                            @case(1)
                                                                                                                                <div class="col-6 p-1">
                                                                                                                                    <form method="post"
                                                                                                                                        action="{{ route('aceptar_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual12, $proceso[0], 21]) }}">
                                                                                                                                        @csrf
                                                                                                                                        <button type="submit" class="btn btn-success btnAceptar"> <i
                                                                                                                                                class="zmdi zmdi-check zmdi-hc-lg"></i> Aceptar
                                                                                                                                            {{ $respuestarm->id_r_mensual12 }} </button>
                                                                                                                                        <input type="hidden" class="form-control" name="texto1"
                                                                                                                                            value="">
                                                                                                                                    </form>
                                                                                                                                </div>
                                                                                                                                <div class="col-12 p-1">
                                                                                                                                    <form method="post"
                                                                                                                                        action="{{ route('observaciones_documento.index', [$respuestarm->id_usuario, $proceso[0], 21]) }}">
                                                                                                                                        @csrf
                                                                                                                                        <input type="text" name="id_c" id="id_c"
                                                                                                                                            value="{{ $respuestarm->id_r_mensual12 }}" class="id_d">
                                                                                                                                        <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                                                                class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                                                                                            Observaciones</button>
                                                                                                                                    </form>
                                                                                                                                </div>
                                                                                                                            @break

                                                                                                                            <!--aceptado-->
                                                                                                                            @case(2)
                                                                                                                                <div class="col-6 p-1">
                                                                                                                                    <form method="post"
                                                                                                                                        action="{{ route('pendiente_documento.index', [$respuestarm->id_usuario, $respuestarm->id_r_mensual12, $proceso[0], 21]) }}">
                                                                                                                                        @csrf
                                                                                                                                        <button type="submit"
                                                                                                                                            class="btn btn-warning btnAceptar">Pendiente</button>
                                                                                                                                        <input type="hidden" class="form-control" name="texto1"
                                                                                                                                            value="">
                                                                                                                                    </form>
                                                                                                                                </div>
                                                                                                                                <div class="col-12 p-1">
                                                                                                                                    <form method="post"
                                                                                                                                        action="{{ route('observaciones_documento.index', [$respuestarm->id_usuario, $proceso[0], 21]) }}">
                                                                                                                                        @csrf
                                                                                                                                        <input type="text" name="id_c" id="id_c"
                                                                                                                                            value="{{ $respuestarm->id_r_mensual12 }}" class="id_d">
                                                                                                                                        <button type="submit" class="btn btn-danger btnObservaciones"> <i
                                                                                                                                                class="zmdi zmdi-alert-circle zmdi-hc-lg"></i>
                                                                                                                                            Observaciones</button>
                                                                                                                                    </form>
                                                                                                                                </div>
                                                                                                                            @break

                                                                                                                            @default
                                                                                                                        @endswitch

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            @endif
                                                                                                            @empty
                                                                                                            @endforelse
                                                                                                        @endif
                                                                                                    </div>
                                                                                                </div>
                                                                                                </div>
                                                                                                @empty
                                                                                                    <div class="row">
                                                                                                        <div class="col-12 text-center">
                                                                                                            Sin documentos subidos
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    </div>

                                                                                                    </div>


                                                                                                @endforelse
                                                                                            </section>
                                                                                            <!--====== Scripts -->
                                                                                            <script src="../js/jquery-3.1.1.min.js"></script>
                                                                                            <script src="../js/sweetalert2.min.js"></script>
                                                                                            <script src="../js/bootstrap.min.js"></script>
                                                                                            <script src="../js/material.min.js"></script>
                                                                                            <script src="../js/ripples.min.js"></script>
                                                                                            <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
                                                                                            <script src="../js/main.js"></script>
                                                                                            <script>
                                                                                                $.material.init();
                                                                                            </script>
                                                                                            <script>
                                                                                                $(document).ready(function() {
                                                                                                    $("input[name=texto]").keyup(function() {
                                                                                                        $("input[name=texto1]").val(this.value);
                                                                                                    });
                                                                                                });
                                                                                            </script>
                                                                                        </body>

                                                                                        </html>

                                                                                        </html>
                                                                                        <style>
                                                                                            .doc {
                                                                                                box-shadow: 0 1px 7px rgb(0 0 0 / 20%);
                                                                                            }
                                                                                        </style>
