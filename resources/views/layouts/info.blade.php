@if(session('info'))
	<section class="content-header">
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-success alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{ session('info') }}
                </div>
			</div>
		</div>
	</section>
@endif

@if(session('warn'))
	<section class="content-header">
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-info alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{ session('warn') }}
                </div>
			</div>
		</div>
	</section>
@endif

@foreach($errors->all() as $error)
	<section class="content-header">
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-danger alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{ $error }}
                </div>
			</div>
		</div>
	</section>
@endforeach



    

