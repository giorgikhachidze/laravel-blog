@extends('layouts.app')

@section('title', $article->meta_title)
@section('meta_title', $article->meta_title)
@section('meta_keyword', $article->meta_keyword)
@section('meta_description', $article->meta_description)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>{{$article->title}}</h2>
                <p>{!!$article->description!!}</p>
            </div>
        </div>
    </div>
@endsection
