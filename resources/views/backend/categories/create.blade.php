@extends('backend.layouts.app')

@section('content')
    
<div class="container">
    @component('backend.components.breadcrumb')
        @slot('title') კატეგორიის დამატება @endslot
        @slot('parent') მთავარი @endslot
        @slot('active') კატეგორია @endslot
    @endcomponent

    <hr>

    <form class="form-horizontal" action="{{route('backend.category.store')}}" method="POST">
        {{ csrf_field() }}

        {{-- From include --}}
        @include('backend.categories.partials.form')
    </form>

</div>

@endsection