@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Vehiculos <a href="vehiculo/create"></h3>
	</div>
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<a href="vehiculo/create"><button class="btn btn-info">Crear Nuevo</button></a>
		<a href="{{URL::action('VehiculoController@descargarExcel',0)}}"><button class="btn btn-success">Descargar Excel</button></a>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Placa</th>
					<th>Telefono</th>
					<th>Color</th>
					<th>Estado</th>
					<th>Opciones</th>
				</thead>
               @foreach ($vehiculo as $veh)
				<tr>
					<td>{{ $veh->placa}}</td>
					<td>{{ $veh->telefono}}</td>
					<td>{{ $veh->color}}</td>
					<td>{{ $veh->estado}}</td>
					<td>
						<a href="{{URL::action('VehiculoController@edit',$veh->id_vehiculo)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$veh->id_vehiculo}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include('parqueadero.vehiculo.modal')
				@endforeach
			</table>
		</div>
		{{$vehiculo->render()}}
	</div>
</div>

@endsection