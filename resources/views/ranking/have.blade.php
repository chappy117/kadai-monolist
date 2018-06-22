@extends('layouts.app')

@section('content')
        <h1>HAVE ranking</h1>
        @include('items.items',['items'=>$items])
@endsection