@extends ('layouts.app')
@section ('content')
	
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

	<h3>Listado de Unidades <a href="unidad/reate"><button>Nuevo</button></a></h3>
	@include('actividad.unidad.search')
		
	</div>
</div>

<div class="row">
	
	<div class="col-lg-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>
						Id
					</th>
					<th>Nombre</th>
					<th>Descripción</th>
					<th>Opciones</th>

				</thead>

				@foreach ($unidades as $uni)

				<tr>
					<td>{{ $uni->id_unidad }}</td>
					<td>{{  $uni->nombre }}</td>
					<td>{{ $uni->descripcion }}</td>
					<td>
						<a href=""><button class="btn btn-info">Editar</button></a>

						<a href=""><button class="btn btn-danger">Desactivar</button></a>
					</td>


				</tr>
				@endforeach

			</table>

		</div>

		//paginacion
		{{ $unidades->render }}

	</div>
</div>


@endsection