@extends('inicio.template')
@section('title')
Compra tu Utiles Escolares
@stop
@section('content')
<div class="well well-small">
	<h4>Productos recientes <small class="pull-right">{{ $count }}</small></h4>
	<div class="row-fluid">

	<div id="featured" class="carousel slide">

	<div class="carousel-inner">
	
		<div class="item active">
			  <ul class="thumbnails">
			  	@foreach($productos1 as $producto)
				<li class="span3">
				<div class="thumbnail">
				  <i class="tag"></i>
					<a href="#"><img src="{{ asset('plantilla-ecommerce/themes/images/products/b1.jp') }}g" alt=""></a>
					<div class="caption">
					  <h5>{{ $producto->name }}</h5>
					  <h4><a class="btn" href="{{ route('producto.ver',$producto->id) }}">Ver</a> <span class="pull-right">{{ $producto->pricing }}</span></h4>
					</div>
				</div>
				</li>
				@endforeach
			  </ul>
		</div>

		<div class="item">
			  <ul class="thumbnails">
			  	@foreach($productos2 as $producto)
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="#"><img src="{{ asset('plantilla-ecommerce/themes/images/products/5.jpg') }}" alt=""></a>
					<div class="caption">
					  <h5>{{ $producto->name }}</h5>
					  <h4><a class="btn" href="{{ route('producto.ver',$producto->id) }}">Ver</a> <span class="pull-right">{{ $producto->pricing }}</span></h4>
					</div>
				  </div>
				</li>
				@endforeach
			  </ul>
		</div>

		<div class="item">
		  <ul class="thumbnails">
			@foreach($productos2 as $producto)
			<li class="span3">
			  <div class="thumbnail">
				<a href="#"><img src="{{ asset('plantilla-ecommerce/themes/images/products/9.jpg') }}" alt=""></a>
				<div class="caption">
				  <h5>{{ $producto->name }}</h5>
				  <h4><a class="btn" href="{{ route('producto.ver',$producto->id) }}">Ver</a> <span class="pull-right">{{ $producto->pricing }}</span></h4>
				</div>
			  </div>
			</li>
			@endforeach
		  </ul>
	  	</div>

	  	<div class="item">
		  <ul class="thumbnails">
			@foreach($productos4 as $producto)
			<li class="span3">
			  <div class="thumbnail">
				<a href="#"><img src="{{ asset('plantilla-ecommerce/themes/images/products/3.jpg') }}" alt=""></a>
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
	  <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
	  <a class="right carousel-control" href="#featured" data-slide="next">›</a>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
</div>
@endsection