@extends('layouts.app')

@php
use App\Category;
@endphp

@section('content')
<div class="container">
    <br/>
    <div class="row">
        <div class="col-md-6">
            Jezik:
            @foreach($langs as $lang)
            <a href="/?lang={{$lang->locale}}">{{$lang->locale}}</a> |
            @endforeach
        </div>
        <div class="col-md-6 text-right">
            Kategorija:
            @foreach($cats as $c)
                <a href="/?['lang' => request('lang'), 'with' => '{{$c->title}}']">
                    {{$c->title}}
                </a>
            @endforeach
        </div>
    </div>
    <br/><br/>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Naziv</th>
                <th scope="col">Opis</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $meals as $meal )
            <tr>
                <td>{{ $meal->title }}</td>
                <td>{{ $meal->description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $meals->links() }}
</div>
@endsection