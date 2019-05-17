@extends('base')
@section('contents')
<form class="login-form" action="{{route('login')}}" method="POST">
    @csrf
      <input type="text" name="login" placeholder="Username or Email"/>
      <input type="password" name="password" placeholder="password"/>
      <button type="submit">login</button>
<p class="message">Not registered? <a href="{{route('signup')}}">Create an account</a></p>
    </form>
    @endsection
