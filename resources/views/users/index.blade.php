@extends('layouts.app')

@section('content')

    <h3>Listagem de usuários</h3>
    <table>
        <thead>
            <tr>
                <th>IDs</th>
                <th>NOME</th>
                <th>EMAIL</th>
            </tr>
        </thead>
        <tbody>
             @foreach ($users as $user)
            <tr>
                <td>  {{$user -> id}} </td>
                <td>  {{$user -> name}} </td>
                <td>  {{$user -> email}} </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection