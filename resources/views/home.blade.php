@extends('base')
@section('contents')
<div>
<h1>welocome {{auth()->user()->name}}</h1>
</div>
@endsection
