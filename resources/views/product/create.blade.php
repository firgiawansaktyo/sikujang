@extends('layouts.dashboard')

@section('section')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tambah produk</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('product.index') }}"> Kembali</a>
            </div>
        </div>
    </div>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{ Form::open(array('route' => 'product.store','method'=>'POST')) }}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama produk:</strong>
                {{ Form::textarea('product_name', null, array('placeholder' => 'Nama produk','class' => 'form-control','style'=>'height:40px')) }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga produk:</strong>
                {{ Form::textarea('product_price', null, array('placeholder' => 'Harga produk','class' => 'form-control','style'=>'height:40px')) }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi produk:</strong>
                {{ Form::textarea('product_desc', null, array('placeholder' => 'Deskripsi Produk','class' => 'form-control','style'=>'height:100px')) }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>
    {{ Form::close() }}
@endsection
