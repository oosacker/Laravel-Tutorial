@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="title m-b-md">
            <h1>Here are my links...</h1>
        </div>

        <div>
            <ul>
            @foreach ($links as $link)
                <li>
                    <a href="{{ $link->url }}">{{ $link->title }}</a>
                </li>
            @endforeach
            </ul>
        </div>
    </div>
@endsection
