@extends('backend.layouts.app')

@section('content')
    
<div class="container">
    @component('backend.components.breadcrumb')
        @slot('title') კატეგორიების სია @endslot
        @slot('parent') მთავარი @endslot
        @slot('active') კატეგორია @endslot
    @endcomponent

    <hr>

    <a href="{{route('backend.category.create')}}" class="btn btn-primary float-right mb-3"><i class="fas fa-plus-circle fa-fw"></i> კატეგორიის დამატება</a>
    
    <div class="clearfix"></div>

    <div class="card border-top-0">
        <div class="card-body p-0">
                <table class="table table-striped mb-0">
                    <thead>
                        <tr>
                            <th scope="col">დასახელება</th>
                            <th scope="col">სტატუსი</th>
                            <th scope="col" class="text-right">მოქმედება</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                        <tr>
                            <td>{{$category->title}}</td>
                            <td>@if ($category->published == 1) გამოქვეყნებული @else არარის გამოქვეყნებული @endif</td>
                            <td class="text-right">
                                <a href="{{route('backend.category.edit', ['id' => $category->id])}}"><i class="fas fa-edit"></i></a>
                            </td>
                            @empty
                            <td colspan="3" class="text-center"><h3>მონაცემები არარის</h3></td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3">
                                <nav aria-label="category navigation">
                                    <ul class="pagination">
                                        {{$categories->links()}}
                                    </ul>
                                </nav>
                            </td>
                        </tr>
                    </tfoot>
                </table>
        </div>
    </div>
</div>

@endsection