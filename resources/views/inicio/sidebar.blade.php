<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		@auth
		<div class="well well-small"><a id="myCart" href="product_summary.html"><img src="{{ asset('plantilla-ecommerce/themes/images/ico-cart.png') }}" alt="cart">
			3 productos en tu carrito<span class="badge badge-warning pull-right">$155.00</span></a>
		</div>
		@endauth

		<ul id="sideManu" class="nav nav-tabs nav-stacked">
		@foreach($categorias as $categoria)
			<li>
				<a href="{{ route('categoria.productos',$categoria->id) }}">{{ $categoria->name }}</a>
			</li>
		@endforeach
		</ul>
	</div>
<!-- Sidebar end=============================================== -->