@extends('backend.layouts.app')

@section('content')

<div class="container">
    @component('backend.components.breadcrumb')
        @slot('title') მომხმარებლის დამატება @endslot
        @slot('parent') მთავარი @endslot
        @slot('active') <a href="{{route('backend.managment.user.index')}}">მომხმარებლების სია</a> / {{$user->name}} @endslot
    @endcomponent

    <hr>

    <form class="form-horizontal" action="{{route('backend.managment.user.update', $user)}}" method="POST">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        {{-- From include --}}
        @include('backend.managment.users.partials.form')

    </form>

</div>

@endsection
