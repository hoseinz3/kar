@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Basic Table</h2>
        <table class="table">
            <thead>
            <tr>
                <th>website</th>
                <th>phone</th>
                <th>company_name</th>
                <th>address</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$emp->website}}</td>
                <td>{{$emp->phone}}</td>
                <td>{{$emp->company_name}}</td>
                <td>{{$emp->address}}</td>
            </tr>
            </tbody>
        </table>
        @if(\Illuminate\Support\Facades\Auth::check())
            @if(\Illuminate\Support\Facades\Auth::user()->id === $emp->id)
                <a class="btn btn-primary" href={{'/employee/'.$emp->id.'/edit' }} role="button">Edit</a>
            @endif
        @endif
    </div>
@stop