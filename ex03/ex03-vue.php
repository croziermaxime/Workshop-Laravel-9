<?php

@extends('layouts.app')

@section('content')
<h1>Articles</h1>

    <ul>
@foreach($posts as $post)
            <li><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></li>
@endforeach
    </ul>
@endsection