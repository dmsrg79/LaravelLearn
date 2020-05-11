@extends('layouts.app')

@section('title-block') All messages @endsection


@section('content')
    <h1>All messages</h1>
    @foreach($data as $element)
        <div class="alert alert-info">
            <h3>{{ $element -> subject }}</h3>
            <p>{{ $element -> email }}</p>
            <p><small>{{ $element -> created_at }}</small></p>
            <a href="{{ route('one-message-info-page', $element->id) }}"> <button class="btn btn-warning">Info</button> </a>
        </div>
    @endforeach


{{--    @foreach($data as $element)
        <div class="alert alert-info">
            <h3>{{ $element->subject }}</h3>
            <p>{{ $element->email }}</p>
            <p><small>{{ $element->created_at }}</small></p>
            <a href="#"><button class="btn btn-warning">Info</button></a>
        </div>
    @endforeach--}}


@endsection
