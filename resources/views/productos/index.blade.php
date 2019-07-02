@extends('layouts.template')
@section('content')
<div class="row">
<!-- Dynamic Table Full -->
    <div class="block-header">
		<button type="button" class="btn btn-sm btn-primary mx-2" data-toggle="modal" data-target="#crear">Nuevo</button>
        <h3 class="block-title">Producto</h3>
    </div>
    <div class="block-content block-content-full">
        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
            <thead>
                <tr>
                    <th class="text-center" style="width: 80px;">N°</th>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Categoria</th>
                    <th>Precio</th>
                    <th style="width: 15%;">Acciones</th>
                </tr>
            </thead>
            <tbody>
            	@foreach($productos as $key => $producto)
                <tr>
                    <td class="text-center font-size-sm">{{ $key+1 }}</td>
                    <td class="font-w600 font-size-sm">
                    	{{ $producto->code }}
                    </td>
                    <td class="d-none d-sm-table-cell font-size-sm">
                    	{{ $producto->name }}
                    </td>
                    <td class="d-none d-sm-table-cell">
                    	{{ $producto->category->name }}
                    </td>
                    <td class="d-none d-sm-table-cell">
                    	{{ $producto->pricing }}
                    </td>
                    <td class="text-center">
	                    <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip" title="Detalles de este Producto" onclick="ver({{ $producto->id }})">
                                <i class="fa fa-fw fa-eye"></i>
                            </button>

	                    	<button type="button" class="btn btn-sm btn-light" data-toggle="tooltip" title="Edita este Producto" onclick="editar({{ $producto->id }})">
	                            <i class="fa fa-fw fa-pencil-alt"></i>
	                        </button>

	                        <button type="button" data-toggle="tooltip" 
	                        class="btn btn-sm btn-light" 
	                        title="Elimina esta Producto"
	                        onclick="let conf = confirm('Seguro de eliminar?'); event.preventDefault();
                            (conf)?document.getElementById('eliminar-form').submit():''">
                            <form id="eliminar-form" action="{{ route('productos.destroy',$producto->id) }}" method="POST" style="display: none;">
                                <input type="hidden" name="_method" value="DELETE">
                                @csrf
                            </form>
                            <i class="fa fa-fw fa-times"></i>
	                        </button>
	                    </div>
	                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
<!-- END Dynamic Table Full -->

<!-- Slide Left Block Modal -->
<div class="modal fade" id="crear" tabindex="-1" role="dialog" aria-labelledby="modal-block-slideleft" aria-hidden="true">
	<form method="POST" action="{{ route('productos.store') }}" id="form-crear">
		{{ csrf_field() }}
		<input type="hidden" name="user_id" value="{{ Auth::User()->id }}">
	    <div class="modal-dialog modal-dialog-slideleft" role="document">
	        <div class="modal-content">
	            <div class="block block-themed block-transparent mb-0">
	                <div class="block-header bg-primary-dark">
	                    <h3 class="block-title">Crear Producto</h3>
	                    <div class="block-options">
	                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
	                            <i class="fa fa-fw fa-times"></i>
	                        </button>
	                    </div>
	                </div>
	                <div class="block-content font-size-sm">
                        <div class="row">
                            <div class="col-lg-12 col-xl-5">
                            	<div class="form-group">
                                    <label for="code">Codigo</label>
                                    <input type="text" class="form-control form-control-alt" id="code" name="code" placeholder="Codigo">
                                </div>
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    <input type="text" class="form-control form-control-alt" id="name" name="name" placeholder="Nombre">
                                </div>
                                <div class="form-group">
                                	<label for="category_id">Categoria</label>
                                	<select class="form-control form-control-alt" name="category_id">
                                		<option disabled selected>Categorias</option>
                                		@foreach($categorias as $categoria)
                                		    <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
                                		@endforeach
                                	</select>
                                </div>
                                <div class="form-group">
                                    <label for="pricing">Precio</label>
                                    <input type="text" class="form-control form-control-alt" id="pricing" name="pricing" placeholder="Precio">
                                </div>
                                <div class="form-group">
                                    <label for="description">Descripción</label>
                                    <textarea class="form-control form-control-alt" id="description" name="description" rows="7" placeholder="Describe este producto..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-full text-right border-top">
		                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Cerrar</button>
		                    <input type="submit" class="btn btn-sm btn-primary" name="btn-submit" value="Guardar">
            			</div>
	                </div>
	            </div>
	        </div>
	    </div>
    </form>
</div>
<!-- END Slide Left Block Modal -->

<!-- Slide Left Block Modal -->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="modal-block-slideleft" aria-hidden="true">
	<form method="POST" action="{{ route('productos.actualizar') }}" id="form-editar">
		{{ csrf_field() }}
		<input type="hidden" name="user_id" value="{{ Auth::User()->id }}">
		<input type="hidden" name="id" id="idU" value="">
	    <div class="modal-dialog modal-dialog-slideleft" role="document">
	        <div class="modal-content">
	            <div class="block block-themed block-transparent mb-0">
	                <div class="block-header bg-primary-dark">
	                    <h3 class="block-title">Editar Producto</h3>
	                    <div class="block-options">
	                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
	                            <i class="fa fa-fw fa-times"></i>
	                        </button>
	                    </div>
	                </div>
	                <div class="block-content font-size-sm">
                        <div class="row">
                            <div class="col-lg-12 col-xl-12 col-md-12">
                            	<div class="form-group">
                                    <label for="codeU">Codigo</label>
                                    <input type="text" class="form-control form-control-alt" id="codeU" name="code" placeholder="Codigo">
                                </div>
                                <div class="form-group">
                                    <label for="nameU">Nombre</label>
                                    <input type="text" class="form-control form-control-alt" id="nameU" name="name" placeholder="Nombre">
                                </div>
                                <div class="form-group">
                                	<label for="category_idU">Categoria</label>
                                	<select class="form-control form-control-alt" name="category_id" id="category_idU">
                                		<option disabled selected>Categorias</option>
                                		@foreach($categorias as $categoria)
                                		    <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
                                		@endforeach
                                	</select>
                                </div>
                                <div class="form-group">
                                    <label for="pricingU">Precio</label>
                                    <input type="text" class="form-control form-control-alt" id="pricingU" name="pricing" placeholder="Precio">
                                </div>
                                <div class="form-group">
                                    <label for="descriptionU">Descripción</label>
                                    <textarea class="form-control form-control-alt" id="descriptionU" name="description" rows="7" placeholder="Describe este producto..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-full text-right border-top">
		                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Cerrar</button>
		                    <input type="submit" class="btn btn-sm btn-primary" name="btn-submit" value="Guardar">
            			</div>
	                </div>
	            </div>
	        </div>
	    </div>
    </form>
</div>
<!-- END Slide Left Block Modal -->

<!-- Slide Left Block Modal -->
<div class="modal fade" id="ver" tabindex="-1" role="dialog" aria-labelledby="modal-block-slideleft" aria-hidden="true">
    <form method="POST" action="{{ route('productos.actualizar') }}" id="form-ver">
        {{ csrf_field() }}
        <input type="hidden" name="user_id" value="{{ Auth::User()->id }}">
        <input type="hidden" name="id" id="idU" value="">
        <div class="modal-dialog modal-dialog-slideleft modal-xl" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Ver Producto</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content font-size-sm">
                        <div class="row">
                            <div class="col-md-12 col-lg-4 col-xl-4">
                                <div class="form-group">
                                    <label for="codeS">Codigo</label>
                                    <input type="text" disabled class="form-control form-control-alt" id="codeS" name="code" placeholder="Codigo">
                                </div>
                                <div class="form-group">
                                    <label for="nameS">Nombre</label>
                                    <input type="text" disabled class="form-control form-control-alt" id="nameS" name="name" placeholder="Nombre">
                                </div>
                                <div class="form-group">
                                    <label for="category_idS">Categoria</label>
                                    <select class="form-control form-control-alt" name="category_id" id="category_idS">
                                        @foreach($categorias as $categoria)
                                            <option disabled selected value="{{ $categoria->id }}">{{ $categoria->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pricingS">Precio</label>
                                    <input type="text" disabled class="form-control form-control-alt" id="pricingS" name="pricing" placeholder="Precio">
                                </div>
                                <div class="form-group">
                                    <label for="descriptionS">Descripción</label>
                                    <textarea disabled class="form-control form-control-alt" id="descriptionS" name="description" rows="7" placeholder="Describe este producto..."></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-8 col-xl-8">
                                <!-- Simple Gallery -->
                                <h2 class="content-heading text-center">Todas las imagenes del producto!</h2>
                                <div class="row items-push js-gallery img-fluid-100">
                                    <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                                        <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{ asset('assets/media/photos/photo3@2x.jpg') }}">
                                            <img class="img-fluid" src="{{ asset('assets/media/photos/photo3@2x.jpg') }}" alt="Foto del producto">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-full text-right border-top">
                            <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Cerrar</button>
                            <input type="submit" class="btn btn-sm btn-primary" name="btn-submit" value="Guardar">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- END Slide Left Block Modal -->

@stop

@section('my-scripts')
<script>

	function editar(id)
	{
		let url = "productos/"+id+"/edit";
		axios.get(url).then(response=>{
			$('#idU').val(response.data.id);
			$('#nameU').val(response.data.name);
			$('#codeU').val(response.data.code);
			$('#category_idU').val(response.data.category_id);
			$('#pricingU').val(response.data.pricing);
			$('#descriptionU').val(response.data.description);
		});

		$('#editar').modal('show');
	}

    function ver(id)
    {
        let url = "productos/"+id;
        axios.get(url).then(response=>{
            $('#idS').val(response.data[0].id);
            $('#nameS').val(response.data[0].name);
            $('#codeS').val(response.data[0].code);
            $('#category_idS').val(response.data[0].category_id);
            $('#pricingS').val(response.data[0].pricing);
            $('#descriptionS').val(response.data[0].description);
            console.log(response.data[1]);
        });

        $('#ver').modal('show');
    }
</script>
@stop