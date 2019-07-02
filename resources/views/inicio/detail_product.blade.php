@extends('inicio.template')
@section('title') {{ $producto->name }} @endsection
@section('content')

<div id="gallery" class="span3">
    <a href="{{ asset('plantilla-ecommerce/themes/images/products/large/f1.jpg') }}" title="Fujifilm FinePix S2950 Digital Camera') }}">

		<img src="{{ asset('plantilla-ecommerce/themes/images/products/large/3.jpg') }}" style="width:100%" alt="Fujifilm FinePix S2950 Digital Camera') }}"/>
    </a>
	<div id="differentview" class="moreOptopm carousel slide">
        <div class="carousel-inner">
          <div class="item active">
           <a href="{{ asset('plantilla-ecommerce/themes/images/products/large/f1.jpg') }}"> <img style="width:29%" src="{{ asset('plantilla-ecommerce/themes/images/products/large/f1.jpg') }}" alt=""/></a>
           <a href="{{ asset('plantilla-ecommerce/themes/images/products/large/f2.jpg') }}"> <img style="width:29%" src="{{ asset('plantilla-ecommerce/themes/images/products/large/f2.jpg') }}" alt=""/></a>
           <a href="{{ asset('plantilla-ecommerce/themes/images/products/large/f3.jpg') }}" > <img style="width:29%" src="{{ asset('plantilla-ecommerce/themes/images/products/large/f3.jpg') }}" alt=""/></a>
          </div>
          <div class="item">
           <a href="{{ asset('plantilla-ecommerce/themes/images/products/large/f3.jpg') }}" > <img style="width:29%" src="{{ asset('plantilla-ecommerce/themes/images/products/large/f3.jpg') }}" alt=""/></a>
           <a href="{{ asset('plantilla-ecommerce/themes/images/products/large/f1.jpg') }}"> <img style="width:29%" src="{{ asset('plantilla-ecommerce/themes/images/products/large/f1.jpg') }}" alt=""/></a>
           <a href="{{ asset('plantilla-ecommerce/themes/images/products/large/f2.jpg') }}"> <img style="width:29%" src="{{ asset('plantilla-ecommerce/themes/images/products/large/f2.jpg') }}" alt=""/></a>
          </div>
        </div>
    </div>
</div>

<div class="span5">
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
@endsection