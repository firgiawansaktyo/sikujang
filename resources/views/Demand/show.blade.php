@extends('layouts.dashboard')

@section('section')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Deskripsi barang</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('demand.index') }}"> Kembali</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama pembeli : </strong>
                {{ $demand->client_name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama produk : </strong>
                {{ \App\product::find($demand->product_id)->product_name }}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal pemesanan : </strong>
                {{ $demand->created_at }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kuantitas produk (dalam kilogram): </strong>
                {{ $demand->demand_quantity }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga total produk : </strong>
                {{ $demand->demand_price }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan : </strong>
                {{ $demand->demand_note }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <a class="btn btn-primary" href="{{ route('demand.edit',$demand->demand_id) }}">Ubah</a>
            {{Form::open(['method' => 'DELETE','route' => ['demand.destroy', $demand->demand_id],'style'=>'display:inline']) }}
            {{Form::submit('Hapus', ['class' => 'btn btn-danger']) }}
            {{Form::close() }}
        </div>
    </div>

@endsection
