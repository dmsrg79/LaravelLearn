@extends('layouts.app')

@section('title-block') {{ $data->subject }} @endsection


@section('content')
    <h1>{{ $data->subject }}</h1>
     <div class="alert alert-info">
            <p>{{ $data -> message }}</p>
            <p>{{ $data -> name }} - {{ $data->email }}</p>
            <p><small>{{ $data -> created_at }}</small></p>
            <a href="{{ route('one-message-info-edit-page', $data->id) }}"> <button class="btn btn-warning">Edit</button> </a>
            <a href="{{ route('message-delete-submit', $data->id) }}"> <button class="btn btn-danger">Delete </button> </a>

     </div>

{{--    @foreach($data as $element)
        <div class="alert alert-info">
            <h3>{{ $element->subject }}</h3>
            <p>{{ $element->email }}</p>
            <p><small>{{ $element->created_at }}</small></p>
            <a href="#"><button class="btn btn-warning">Info</button></a>
        </div>
    @endforeach--}}


@endsection
