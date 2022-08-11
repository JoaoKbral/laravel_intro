@extends('layouts.app')

@section('content')
    <form action="/users" method="POST">
        @csrf
        <label for="name">Nome</label>
        <input type="text" name="name" id="name">

        <label for="email">Email</label>
        <input type="email" name="email" id="email">

        <button type="submit">Cadastrar</button>
    </form>

    @endsection