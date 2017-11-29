@extends('layouts.dashboard')

@section('section')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Produksi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('stock.create') }}"> Tambah data produksi baru</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Id produk</th>
            <th>Tahapan</th>
            <th>Penambahan</th>
            <th>Pengurangan</th>
            <th>Pilihan</th>
        </tr>
    @foreach ($stocks as $key => $stock)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $stock->product_id }}</td>
        <td>{{ $stock->stage }}</td>
        <td>{{ $stock->stock_increase }}</td>
        <td>{{ $stock->stock_decrease }}</td>
        <td>
            <a class="btn btn-primary" href="{{ route('stock.edit',$stock->stock_id) }}">Ubah</a>
            {{Form::open(['method' => 'DELETE','route' => ['stock.destroy', $stock->stock_id],'style'=>'display:inline']) }}
            {{Form::submit('Hapus', ['class' => 'btn btn-danger']) }}
            {{Form::close() }}
        </td>
    </tr>
    @endforeach
    </table>

    {{ $stocks->render() }}

@endsection
