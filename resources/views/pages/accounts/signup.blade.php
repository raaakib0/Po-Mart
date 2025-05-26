@extends('layouts.app')

@section('title' . 'signup')

@section('content')

    <form>
        <div class="mb-3">
            <label class="form-label" for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp">
            <div class="form-text" id="emailHelp">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" type="password">
        </div>
        <div class="mb-3 form-check">
            <input class="form-check-input" id="exampleCheck1" type="checkbox">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>


@endsection
