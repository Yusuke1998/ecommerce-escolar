<table class="table table-bordered table-striped table-vcenter" id="tb">
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
	                        <button type="button" class="btn btn-sm btn-light" title="Edita esta Categoria" data-toggle="modal" data-target="#editar">
	                            <i class="fa fa-fw fa-pencil-alt"></i>
	                        </button>
	                        <button type="button" class="btn btn-sm btn-light" title="Elimina esta Categoria"  title="Elimina esta Categoria" data-toggle="modal" data-target="#eliminar">
	                            <i class="fa fa-fw fa-times"></i>
	                        </button>
	                    </div>
	                </td>
                </tr>
                @endforeach
            </tbody>
        </table>