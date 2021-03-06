@extends('layouts.app')

@section('content')

@section('start_css')
  @parent
    <link href="{{ asset('plugins/DataTablesv2/datatables.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style-after.css') }}" rel="stylesheet" />

@endsection

@section('content')


        <!-- begin #content -->
        <div id="content" class="content" width="10%">
            <!-- begin row -->
            @include('flash::message')
            <div class="row">
                <!-- begin col-8 -->
                <div class="col-md-12">
                    <a href="{{ url('admin/actores/porasignar') }}" class="btn btn-warning pull-right">Propuestas <strong>POR ASIGNAR</strong></a>
                    &nbsp;&nbsp;&nbsp;
                    <a href="{{ url('admin/actores/asignados') }}" class="btn btn-primary pull-right">Propuestas <strong>ASIGNADOS</strong></a>
                    &nbsp;&nbsp;
                    
                </div>
                \
                
                <div class="col-md-12">
                    <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a> -->
                            </div>
                            <h3 align="left" class="panel-title">Propuestas de Solución - ASIGNADAS</h3>
                        </div>

                        <div class="panel-body">

                            <div class="table-responsive">
                                <table id="data-table" class="table table-striped table-bordered" width="100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            
                                            <th>Soluci&oacute;n</th>
                                            <th>Actor</th>
                                            <th>Responsabilidad</th>
                                            <th>Estado</th>
                                            <th>Acci&oacute;n</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($actoresSoluciones as $actorSolucion)
                                        <tr>
                                            <td class="text-justify">
                                                {{$actorSolucion->id}}
                                            </td>
                                            
                                            <td class="text-justify">
                                                {{ $actorSolucion->propuesta_solucion}}
                                            </td>
                                            <td class="text-justify">
                                                {{ $actorSolucion->nombre_institucion }}
                                            </td>
                                            <td class="text-justify">
                                                @if($actorSolucion->tipo_actor == 1)
                                                    {{ "Responsable" }}
                                                @endif
                                                @if($actorSolucion->tipo_actor == 2)
                                                    {{ "Corresponsable" }}
                                                @endif
                                            </td>
                                            <td class="text-justify">
                                                {{ $actorSolucion->nombre_estado }}
                                            </td>
                                            <td class="text-justify">
                                                <a href= "/admin/actividad/create/{{$actorSolucion->id}}"  >
                                                        <i class="fa fa-2x fa-plus-circle"></i>
                                                </a>

                                                <a href= "/admin/actor/editar-actor-solucion/{{$actorSolucion->id}}"  >

                                                       <i class="fa fa-2x fa-long-arrow-right"></i>
                                                </a>
                                            </td>
                                            

                                        </tr>
                                        @endforeach                 
        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-10 -->

                
            </div>
            <!-- end row -->
        </div>
        <!-- end #content -->

   @stop
