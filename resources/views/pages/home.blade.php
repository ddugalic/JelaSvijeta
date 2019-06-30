@extends('layouts.app')

@php
use App\Category;
@endphp

@section('content')
<div class="container">
    <br/>
    <div class="row">
        <div class="col-md-6">
            Language:
            @foreach($langs as $lang)
            <a href="/?lang={{$lang->locale}}">{{$lang->locale}}</a> |
            @endforeach
        </div>
    </div>
    <div class="row">
            <div class="col-md-6 text-right">
                Ctegory:
                @foreach($cats as $cat)
                <a href="{{ route('pages.home', ['lang' => request('lang'), 'with' => $cat->title]) }}">{{$cat->title}}</a>
                @endforeach
            </div>
        </div>
    <br/><br/>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $meals as $meal )
                @if(isset($_GET['lang']))
                    <tr>
                        <td>{{ $meal->title }}</td>
                        <td>{{ $meal->description }}</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
    {{ $meals->links() }}
</div>
@endsection