@extends('layout.base')

@section('titulo','Administrador')

@section('conteudo')
<div class="col-md-12 col-md-offset-0">
    <div class="panel panel-default">
        <div class="panel-heading">Atalhos</div>
        <div class="panel-body">
            
            <div class="col-md-10 col-md-offset-1">
                <a href="{{route('curso.create')}}" style="text-decoration: none; font-weight: bold;" >
                    <div class="col-md-3">
                        <div class="panel panel-default" align="center">
                            <div class="panel-heading">ADD CURSO</div>
                            <div class="panel-body" style="text-align: center; color: #666">
                                <i class="glyphicon glyphicon-folder-open" style = "font-size: 50px; opacity: 0.5"></i>
                                <i class="glyphicon glyphicon-plus-sign add-icon"></i>
                            </div>
                        </div>
                    </div>
                </a>
             
                <a href="{{route('curso.show')}}" class="" style="text-decoration: none; font-weight: bold;">
                    <div class="col-md-3">
                        <div class="panel panel-default" align="center">
                            <div class="panel-heading">VER CURSOS</div>
                            <div class="panel-body" style="text-align: center;">
                                <i class="glyphicon glyphicon-folder-open" style = "font-size: 50px; color: #666"></i>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="{{route('disciplina.create')}}" style="text-decoration: none; font-weight: bold;" >
                    <div class="col-md-3">
                        <div class="panel panel-default" align="center">
                            <div class="panel-heading">ADD DISCIPLINA</div>
                            <div class="panel-body" style="text-align: center;">
                                <i class="glyphicon glyphicon-book" style = "font-size: 50px; opacity: 0.5"></i>
                                <i class="glyphicon glyphicon-plus-sign add-icon"></i>
                            </div>
                        </div>
                    </div>
                </a>
             
                <a href="{{route('disciplina.show')}}" class="" style="text-decoration: none; font-weight: bold;">
                    <div class="col-md-3">
                        <div class="panel panel-default" align="center">
                            <div class="panel-heading">VER DISCIPLINAS</div>
                            <div class="panel-body" style="text-align: center;">
                                <i class="glyphicon glyphicon-book" style = "font-size: 50px"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="row"></div>
            
            <div class="col-md-10 col-md-offset-1">
                <a href="{{route('feriado.create')}}" style="text-decoration: none; font-weight: bold;" >
                    <div class="col-md-3">
                        <div class="panel panel-default" align="center">
                            <div class="panel-heading">ADD FERIADO</div>
                            <div class="panel-body" style="text-align: center; color: #27b376">
                                <i class="glyphicon glyphicon-sunglasses" style = "font-size: 50px; opacity: 0.5"></i>
                                <i class="glyphicon glyphicon-plus-sign add-icon"></i>
                            </div>
                        </div>
                    </div>
                </a>
             
                <a href="{{route('feriado.show')}}" class="" style="text-decoration: none; font-weight: bold;">
                    <div class="col-md-3">
                        <div class="panel panel-default" align="center">
                            <div class="panel-heading">VER FERIADOS</div>
                            <div class="panel-body" style="text-align: center; color: #27b376">
                                <i class="glyphicon glyphicon-sunglasses" style = "font-size: 50px"></i>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="{{route('sabado.create')}}" style="text-decoration: none; font-weight: bold;" >
                    <div class="col-md-3">
                        <div class="panel panel-default" align="center">
                            <div class="panel-heading">ADD SÁBADO</div>
                            <div class="panel-body" style="text-align: center; color: #f9a73e">
                                <i class="glyphicon glyphicon-time" style = "font-size: 50px; opacity: 0.5"></i>
                                <i class="glyphicon glyphicon-plus-sign add-icon"></i>
                            </div>
                        </div>
                    </div>
                </a>
             
                <a href="{{route('sabado.show')}}" class="" style="text-decoration: none; font-weight: bold;">
                    <div class="col-md-3">
                        <div class="panel panel-default" align="center">
                            <div class="panel-heading">VER SÁBADOS</div>
                            <div class="panel-body" style="text-align: center;">
                                <i class="glyphicon glyphicon-time" style = "font-size: 50px; color: #f9a73e"></i>
                            </div>
                        </div>
                    </div>
                </a>

            </div> 

            <div class="row"></div>

            <div class="col-md-10 col-md-offset-1">
                <a href="{{route('semestre.create')}}" style="text-decoration: none; font-weight: bold;" >
                    <div class="col-md-3">
                        <div class="panel panel-default" align="center">
                            <div class="panel-heading">ADD SEMESTRE</div>
                            <div class="panel-body" style="text-align: center; color: #ed3237">
                                <i class="glyphicon glyphicon-calendar" style = "font-size: 50px; opacity: 0.5;"></i>
                                <i class="glyphicon glyphicon-plus-sign add-icon"></i>
                            </div>
                        </div>
                    </div>
                </a>
             
                <a href="{{route('semestre.show')}}" class="" style="text-decoration: none; font-weight: bold;">
                    <div class="col-md-3">
                        <div class="panel panel-default" align="center">
                            <div class="panel-heading">VER SEMESTRES</div>
                            <div class="panel-body" style="text-align: center;">
                                <i class="glyphicon glyphicon-calendar" style = "font-size: 50px; color: #ed3237"></i>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="{{route('usuario.create')}}" style="text-decoration: none; font-weight: bold;" >
                    <div class="col-md-3">
                        <div class="panel panel-default" align="center">
                            <div class="panel-heading">ADD USUÁRIO</div>
                            <div class="panel-body" style="text-align: center; color: #264b96">
                                <i class="glyphicon glyphicon-user" style = "font-size: 50px; opacity: 0.5;"></i>
                                <i class="glyphicon glyphicon-plus-sign add-icon"></i>
                            </div>
                        </div>
                    </div>
                </a>
             
                <a href="{{route('usuario.show')}}" class="" style="text-decoration: none; font-weight: bold;">
                    <div class="col-md-3">
                        <div class="panel panel-default" align="center">
                            <div class="panel-heading">VER USUÁRIOS</div>
                            <div class="panel-body" style="text-align: center;">
                                <i class="glyphicon glyphicon-user" style = "font-size: 50px; color: #264b96"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
  
        </div>
    </div>
</div>
    
@endsection