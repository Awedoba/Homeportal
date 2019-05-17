
@extends('base')
@section('contents')



<form class="register-form" action="{{route('signup')}}" method="POST">
    @csrf
      <input type="text" name = "username" placeholder="User Name"/>
      <input type="password" name = "password" placeholder="password"/>
      <input type="text" name= "email" placeholder="email address"/>
      <button type="submit">create</button>
<p class="message">Already registered? <a href="{{route('login')}}">Sign In</a></p>
    </form>
    @endsection
