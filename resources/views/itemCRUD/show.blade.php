@extends('layouts.dashboard')

@section('section')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Deskripsi barang</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('ItemCRUD.index') }}"> Kembali</a>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama produk : </strong>
                {{ $product->product_name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi produk : </strong>
                {{ $product->product_desc }}
            </div>
        </div>

    </div>

@endsection
