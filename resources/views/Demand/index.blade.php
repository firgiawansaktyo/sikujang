@extends('layouts.dashboard')

@section('section')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Daftar permintaan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('demand.create') }}"> Tambah permintaan baru</a>
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
            <th>Nama pembeli</th>
            <th>Nama produk</th>
            <th>Tanggal permintaan</th>
            <th>Catatan</th>
            <th>Opsi</th>
        </tr>
    @foreach ($demands as $demand)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $demand->client_name }}</td>
        <td>{{ \App\product::find($demand->product_id)->product_name }}</td>
        <td>{{ $demand->created_at}}</td>
        <td>{{ $demand->demand_note }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('demand.show',$demand->demand_id) }}">Lebih lengkap</a>
        </td>
    </tr>
    @endforeach
    </table>

    {{ $demands->render() }}

@endsection
