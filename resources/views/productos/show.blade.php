@extends('layouts.template')
@section('content')
<div class="row">
	<div class="col-md-12">
		<button type="button" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#imagen">Agregar imagen</button>
	</div>
   <div class="col-md-4">
   	<div class="form-group">
        <label>Nombre</label>
        <input type="text" class="form-control" disabled value="{{ $producto->name }}">
    </div>
    <div class="form-group">
        <label>Precio</label>
        <input type="text" class="form-control" disabled value="{{ $producto->pricing }}">
    </div>
    <div class="form-group">
        <label>Categoria</label>
        <input type="text" class="form-control" disabled value="{{ $producto->category->name }}">
    </div>
	<div class="form-group">
        <label>Descripcion</label>
        <textarea class="form-control form-control" disabled rows="7">{{ $producto->description }}</textarea>
    </div>

   	
   </div>
   <div class="col-md-8">
   	<!-- Simple Gallery -->
    @if($producto->images->count() > 0)
    <div class="row items-push js-gallery img-fluid-100">
		@foreach($producto->images as $imagen)
        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
            <a class="img-link img-link-zoom-in img-thumb img-lightbox" target="_blank" href="{{ asset('img/productos').'/'.$imagen->name }}">
                <img class="img-fluid" src="{{ asset('img/productos').'/'.$imagen->name }}" alt="">
            </a>
        </div>
		@endforeach
    </div>
    @else
        <p class="h3 text-center mt-3">No hay imagenes relacionadas!</p>
    @endif
    <!-- END Simple Gallery -->
   </div>
</div>



<!-- Small Block Modal -->
<div class="modal" id="imagen" tabindex="-1" role="dialog" aria-labelledby="modal-block-small" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
    	<form action="{{ route('productos.imagen') }}" method="POST" enctype="multipart/form-data">
    		{{ csrf_field() }}
    		<input type="hidden" name="product_id" value="{{ $producto->id }}">
	        <div class="modal-content">
	            <div class="block block-themed block-transparent mb-0">
	                <div class="block-header bg-primary-dark">
	                    <h3 class="block-title">Nueva imagen</h3>
	                    <div class="block-options">
	                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
	                            <i class="fa fa-fw fa-times"></i>
	                        </button>
	                    </div>
	                </div>
	                <div class="block-content font-size-sm">
	                    <div class="custom-file">
	                        <input type="file" class="custom-file-input js-custom-file-input-enabled" data-toggle="custom-file-input" id="file" name="imagen">
	                        <label class="custom-file-label" for="file">Imagen</label>
	                    </div>
	                </div>
	                <div class="block-content block-content-full text-right border-top">
	                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Cerrar</button>
	                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-check mr-1"></i>Guardar</button>
	                </div>
	            </div>
	        </div>
    	</form>
    </div>
</div>
<!-- END Small Block Modal -->

@endsection