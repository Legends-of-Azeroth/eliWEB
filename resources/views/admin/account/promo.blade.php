@extends('layouts.admin')

@section('content')
@section('bodyclass')
<body>
@endsection
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Códigos promocionales</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('personal') }}">Inicio</a>
                </li> 
                <li class="active">
                    <strong>Códigos promocionales</strong>
                </li> 
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
	  @if ( session('status'))
			<div class="row">
				<div class="col-lg-12">
					<div class="alert alert-{{ session('type') }} alert-dismissable">
						<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
						<span class="alert-link">{{ session('status') }}</span>
					</div>
				</div>
			</div>
		@endif
        <div class="row">
            <div class="col-lg-12">

                <div class="ibox">
					<div class="ibox-title">
						<h5>Formulario de activación del código de promoción</h5>
					</div>
                    <div class="ibox-content">

                        <div class="project-list"> 
                            <div class="col-lg-12">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                        <i class="fa fa-info-circle"></i> Información útil
                                        </div>
                                        <div class="panel-body">
                                            <p>Nuestro proyecto intenta con la mayor frecuencia posible complacer a sus jugadores con obsequios y valiosos premios, que pueden obtenerse automáticamente en su personaje mediante códigos promocionales especiales.
                                            <p><b>Nota:</b> Sigue las noticias del proyecto, allí puedes encontrar muchos códigos promocionales que jugaremos o regalaremos gratis.
                                        </div>
                                    </div>
                                </div>
                            <form method="POST" action="/personal/promocodes"
                                  class="form-horizontal" enctype="multipart/form-data">

                                <input type="hidden" name="_token" id="token" value="<?php echo csrf_token(); ?>">

                                <div class="form-group">
                                    <label class="col-sm-3">Tu código promocional:</label>
                                    <div class="col-sm-9">
                                        <div class="input-group col-sm-12">
                                            <input type="text" class="form-control" name="promocode" id="promocode" value="" placeholder="Select a promo code...">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3">Personaje:</label>
                                    <div class="col-sm-9">
                                        <div class="input-group col-sm-12">
                                            <div>
                                                <select name="guid" data-placeholder="Selecciona un personaje ..." class="chosen-select"  tabindex="2">
													@if($userinfo != null)
														@foreach($userinfo as $userinf)
															<option value="{{ $userinf->guid }}">{{ $userinf->name }} ({{ $userinf->realm_name }})</option>
														@endforeach
													@endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-block btn-outline btn-primary">Activar</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection