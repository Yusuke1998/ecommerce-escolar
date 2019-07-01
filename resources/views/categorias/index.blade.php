@extends('layouts.template')
@section('content')
<div class="row">
<!-- Dynamic Table Full -->
    <div class="block-header">
		<button type="button" class="btn btn-sm btn-primary mx-2" data-toggle="modal" data-target="#crear">Nueva</button>
        <h3 class="block-title">Categoria</h3>
    </div>
    <div class="block-content block-content-full">
        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
            <thead>
                <tr>
                    <th class="text-center" style="width: 80px;">N°</th>
                    <th>Nombre</th>
                    <th class="d-none d-sm-table-cell" style="width: 30%;">Descripción</th>
                    <th class="d-none d-sm-table-cell" style="width: 15%;">Registro</th>
                    <th style="width: 15%;">Acciones</th>
                </tr>
            </thead>
            <tbody>
            	@foreach($categorias as $key => $categoria)
                <tr>
                    <td class="text-center font-size-sm">{{ $key+1 }}</td>
                    <td class="font-w600 font-size-sm">
                    	{{ $categoria->name }}
                    </td>
                    <td class="d-none d-sm-table-cell font-size-sm">
                    	{{ ($categoria->description)?$categoria->description:'Sin datos!' }}
                    </td>
                    <td class="d-none d-sm-table-cell">
                    	{{ ($categoria->created_at)?$categoria->created_at->diffForHumans():'Sin datos!' }}
                    </td>
                    <td class="text-center">
	                    <div class="btn-group">
	                    	<button type="button" class="btn btn-sm btn-light" title="Edita esta Categoria" onclick="editar({{ $categoria->id }})">
	                            <i class="fa fa-fw fa-pencil-alt"></i>
	                        </button>

	                        <button type="button" 
	                        class="btn btn-sm btn-light" 
	                        title="Elimina esta Categoria"
	                        onclick="event.preventDefault();
                            document.getElementById('eliminar-form').submit();">
                            <form id="eliminar-form" action="{{ route('categorias.destroy',$categoria->id) }}" method="POST" style="display: none;">
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
	<form method="POST" action="{{ route('categorias.store') }}" id="form-crear">
		{{ csrf_field() }}
	    <div class="modal-dialog modal-dialog-slideleft" role="document">
	        <div class="modal-content">
	            <div class="block block-themed block-transparent mb-0">
	                <div class="block-header bg-primary-dark">
	                    <h3 class="block-title">Crear Categoria</h3>
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
                                    <label for="name">Nombre</label>
                                    <input type="text" class="form-control form-control-alt" id="name" name="name" placeholder="Nombre">
                                </div>
                                <div class="form-group">
                                    <label for="description">Descripción</label>
                                    <textarea class="form-control form-control-alt" id="description" name="description" rows="7" placeholder="Describe esta categoria..."></textarea>
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
	<form method="POST" action="{{ route('categorias.actualizar') }}" id="form-editar">
		{{ csrf_field() }}
		<input type="hidden" name="id" id="idU" value="">
	    <div class="modal-dialog modal-dialog-slideleft" role="document">
	        <div class="modal-content">
	            <div class="block block-themed block-transparent mb-0">
	                <div class="block-header bg-primary-dark">
	                    <h3 class="block-title">Editar Categoria</h3>
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
                                    <label for="name">Nombre</label>
                                    <input type="text" class="form-control form-control-alt" id="nameU" name="name" placeholder="Nombre">
                                </div>
                                <div class="form-group">
                                    <label for="description">Descripción</label>
                                    <textarea class="form-control form-control-alt" id="descriptionU" name="description" rows="7" placeholder="Describe esta categoria..."></textarea>
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
		let url = "categorias/"+id+"/edit";
		axios.get(url).then(response=>{
			$('#idU').val(response.data.id);
			$('#nameU').val(response.data.name);
			$('#descriptionU').val(response.data.description);
		});

		$('#editar').modal('show');
	}
</script>

@stop