@extends('backend.layouts.app')

@section('content')

<div class="container">
    @component('backend.components.breadcrumb')
        @slot('title') სიახლის დამატება @endslot
        @slot('parent') მთავარი @endslot
        @slot('active') <a href="{{route('backend.article.index')}}">სიახლეების სია</a> / სიახლის დამატება @endslot
    @endcomponent

    <hr>

    <form class="form-horizontal" action="{{route('backend.article.store')}}" method="POST">
        {{ csrf_field() }}

        {{-- From include --}}
        @include('backend.articles.partials.form')

        <input type="hidden" name="created_by" value="{{Auth::id()}}">
    </form>

</div>

@endsection
