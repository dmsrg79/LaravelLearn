@extends('layouts.app')

@section('title-block')Edit message @endsection

@section('content')
    <h1>Edit message</h1>


    <form action="{{ Route('message-edit-submit', $data->id) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{$data->name}}" placeholder="Enter name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="{{$data->email}}" placeholder="Enter email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="name">Subject</label>
            <input type="text" name="subject" value="{{$data->subject}}" placeholder="Enter subject" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control">{{$data->message}}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Сохранить </button>

    </form>
@endsection

