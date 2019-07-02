@extends('inicio.template')
@section('title') {{ $categoria->name }} @endsection
@section('content')
<div class="well well-small">
	<h4>{{ $categoria->name }} <small class="pull-right">{{ $cont = $categoria->products->count() }} {{ ($cont>1)?'productos':'producto' }}</small></h4>
	<div class="row-fluid">
		<div id="featured" class="carousel slide">
			<div class="carousel-inner">
				<div class="item active">
				  <ul class="thumbnails">
				  	@foreach($categoria->products as $producto)
					<li class="span3">
					  <div class="thumbnail">
					  <i class="tag"></i>
						<a href="#"><img src="{{ ($producto->images->count()>0)?asset('img/productos').'/'.$producto->images->first()->name:'#' }}" alt=""></a>
						<div class="caption">
						  <h5>{{ $producto->name }}</h5>
						  <h4><a class="btn" href="{{ route('producto.ver',$producto->id) }}">Ver</a> <span class="pull-right">{{ $producto->pricing }}</span></h4>
						</div>
					  </div>
					</li>
					@endforeach
				  </ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection