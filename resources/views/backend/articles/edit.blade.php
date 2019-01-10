@extends('backend.layouts.app')

@section('content')

<div class="container">
    @component('backend.components.breadcrumb')
        @slot('title') სიახლის რედაქტირება @endslot
        @slot('parent') მთავარი @endslot
        @slot('active') სიახლე @endslot
    @endcomponent

    <hr>

    <form class="form-horizontal" action="{{route('backend.article.update', $article)}}" method="POST">
        <input type="hidden" name="_method" value="put">
        {{ csrf_field() }}

        {{-- From include --}}
        @include('backend.articles.partials.form')

        <input type="hidden" name="modified_by" value="{{Auth::id()}}">
    </form>

</div>

@endsection
