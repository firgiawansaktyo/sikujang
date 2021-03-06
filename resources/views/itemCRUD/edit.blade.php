@extends('layouts.dashboard')
 
@section('section')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ubah produk</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('ItemCRUD.index') }}"> Kembali</a>
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

    {{ Form::model($item, ['method' => 'PATCH','route' => ['ItemCRUD.update', $item->id]]) }}
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama produk</strong>
                {{ Form::text('Nama', null, array('placeholder' => 'Nama','class' => 'form-control')) }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi produk</strong>
                {{ Form::textarea('Deskripsi', null, array('placeholder' => 'Deskripsi','class' => 'form-control','style'=>'height:100px')) }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>
    {{ Form::close() }}
@endsection