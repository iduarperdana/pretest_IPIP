@extends('layouts.app')

@section('title','Edit Book')

@section('page-title',' Edit  Book')

@section('dashboard-content')
    <form action="{{url('book/'.$book->id)}}" method="post">
        <input type="hidden" name="_method" value="PUT">
        {{csrf_field()}}
    <label>Nama</label>
    <input type="text" name="name" value="{{$book->name}}" class="form-control">
    <label>Tahun</label>
    <input type="text" name="year" value="{{$book->year}}" class="form-control">
    <label>Pengarang</label>
    <input type="text" name="author" value="{{$book->author}}" class="form-control">
    <label>Penerbit</label>
    <input type="text" name="publisher" value="{{$book->publisher}}" class="form-control">
    <p></p>
    <input type="submit" class="btn btn-success" value="Simpan">
        
    </form>
        


@endsection
