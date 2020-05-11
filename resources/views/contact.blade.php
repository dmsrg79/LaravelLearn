@extends('layouts.app')

@section('title-block') Contact Page @endsection

@section('content')
    <h1>Contact page</h1>


    <form action="{{ Route('contact-form') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter name" id="name" class="form-control">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Enter email" id="email" class="form-control">
    </div>

    <div class="form-group">
        <label for="name">Subject</label>
        <input type="text" name="subject" placeholder="Enter subject" id="subject" class="form-control">
    </div>

    <div class="form-group">
        <label for="message">Message</label>
        <textarea name="message" id="message" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Отправить</button>

    </form>
@endsection
