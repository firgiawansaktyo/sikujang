@extends('layouts.dashboard')
 
@section('section')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Daftar produk</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('ItemCRUD.create') }}"> Tambah produk baru</a>
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
            <th>Nama produk</th>
            <th>Pilihan</th>
        </tr>
    @foreach ($items as $key => $item)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $item->Nama }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('ItemCRUD.show',$item->id) }}">Tampilkan</a>
            <a class="btn btn-primary" href="{{ route('ItemCRUD.edit',$item->id) }}">Ubah</a>
            {{Form::open(['method' => 'DELETE','route' => ['ItemCRUD.destroy', $item->id],'style'=>'display:inline']) }}
            {{Form::submit('Hapus', ['class' => 'btn btn-danger']) }}
            {{Form::close() }}
        </td>
    </tr>
    @endforeach
    </table>

    {{ $items->render() }}

@endsection