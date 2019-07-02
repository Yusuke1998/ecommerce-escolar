@extends('inicio.template')
@section('title') {{ $producto->name }} @endsection
@section('content')
<div class="container">
	<div class="row">
		<div id="gallery" class="span3">
		    <a href="{{ asset('img/productos').'/'.$producto->images->first()->name }}" title="Fujifilm FinePix S2950 Digital Camera') }}">

				<img src="{{ asset('img/productos').'/'.$producto->images->first()->name }}" style="width:90%" alt="{{ $producto->name }}"/>
		    </a>
			<div id="differentview" class="moreOptopm carousel slide">
		        <div class="carousel-inner">
		          <div class="item active">
		          	@foreach($producto->images->take(4) as $imagen)
		           <a href="{{ asset('img/productos').'/'.$imagen->name }}"> <img style="width:18%" src="{{ asset('img/productos').'/'.$imagen->name }}" alt=""/></a>
		           @endforeach
		        </div>
		    </div>
		</div>

		<div class="span4">
			<h3>{{ $producto->name }}</h3>
				<hr class="soft"/>
				<form class="form-horizontal qtyFrm">
				  <div class="control-group">
					<label class="control-label"><span>Bs.S {{ $producto->pricing }}</span></label>
					<div class="controls">
					@auth
					  <button type="submit" class="btn btn-large btn-primary pull-right">
					  	Añadir al carrito <i class=" icon-shopping-cart"></i>
					  </button>
					@endauth
					</div>
				  </div>
				</form>
				<hr class="soft clr"/>
				<p>{{ $producto->description }}</p>
				<br class="clr"/>
			<a href="#" name="detail"></a>
			<hr class="soft"/>
		</div>
	</div>
</div>
@endsection