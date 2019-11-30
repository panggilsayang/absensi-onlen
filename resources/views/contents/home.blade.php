@extends('template.layout')
@section('content')
    <form method="POST" action="{{route('login')}}">
    @csrf
        <input type="text" name="nisn" placeholder="NISN">
        <input type="password" name="password" placeholder="PASSWORD">
        <input type="text" name="nis" placeholder="NIS">
        <button type="submit">LOGIN</button>
    </form>
@endsection