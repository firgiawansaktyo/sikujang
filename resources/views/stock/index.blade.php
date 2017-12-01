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

    <!-- Form Pencarian -->
    <div class="col-md-10">
    {{ Form::open(['method'=>'GET','route'=>'stock.index','role'=>'search']) }}
            <!-- input type="text" class="form-control" name="search" placeholder="Search..." -->
            <div class="col-sm-2">
            <select name="search" class="form-control">
                <option value="Inisiasi">Inisiasi</option>
                <option value="Aklimatisasi">Aklimatisasi</option>
                <option value="Transplanting">Transplanting</option>
            </select>
          </div>
          <button class="btn btn-default" type="submit">Cari</button>
       </span>
             </span>
         </div>
    {{ Form::close() }}
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <br>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama produk</th>
            <th>Tahapan</th>
            <th>Penambahan</th>
            <th>Pengurangan</th>
            <th>Pilihan</th>
        </tr>
    @foreach ($stocks as $stock)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $stock->created_at }}</td>
        <td>{{ \App\product::find($stock->product_id)->product_name }}</td>
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
