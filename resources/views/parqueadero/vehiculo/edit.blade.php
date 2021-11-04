@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Vehiculo: {{ $vehiculo->placa}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::model($vehiculo,['method'=>'PATCH','route'=>['parqueadero.vehiculo.update',$vehiculo->id_vehiculo]])!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="nombre">Placa</label>
            	<input type="text" name="placa" class="form-control" placeholder="Placa...">
            </div>
            <div class="form-group">
            	<label for="nombre">Telefono</label>
            	<input type="number" name="telefono" class="form-control" placeholder="Telefono...">
            </div>

            <div class="form-group">
            	<label for="nombre">Color</label>
            	<input type="text" name="color" class="form-control" placeholder="Color...">
            </div>
            <div class="form-group">
            	<label for="nombre">Estado</label>
            	<input type="number" name="estado" class="form-control" placeholder="Estado...">
            </div>
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection