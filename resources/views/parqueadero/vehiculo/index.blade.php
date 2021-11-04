@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Vehiculos <a href="vehiculo/create"><button class="btn btn-success">Crear Nuevo</button></a></h3>
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
               @foreach ($vehiculo as $cat)
				<tr>
					<td>{{ $cat->placa}}</td>
					<td>{{ $cat->telefono}}</td>
					<td>{{ $cat->color}}</td>
					<td>{{ $cat->estado}}</td>
					<td>
						<a href="{{URL::action('VehiculoController@edit',$cat->id_vehiculo)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$cat->id_vehiculo}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
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