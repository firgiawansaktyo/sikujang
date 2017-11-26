@extends ('layouts.dashboard')
@section('page_heading','Produk')
@section('section')

<div class="col-sm-12">	
	<div class="row">
		<form method = "post" action="{{url('cruds')}}">
			 <div class="form-group row">
                <label>Tambah Jenis Produk</label>
                <input class="form-control"  name="_token" value="{{ csrf_token() }}">
            </div>
            <button type="submit" class="btn btn-default">Submit Button     </button>
		</form> 
	</div>
</div>
@stop