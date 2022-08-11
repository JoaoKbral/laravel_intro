@extends('layout-html')

@section('content')
    
    <form action="sum" method="POST">
        @csrf
        <label for="a">A</label>
        <input type="text" name="a" id="">

        <label for="b">B</label>
        <input type="text" name="b" id="">

        <button type="submit">Somar</button>
    </form>

@endsection