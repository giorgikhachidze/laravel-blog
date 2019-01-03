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
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">დასახელება</th>
                <th scope="col">სტატუსი</th>
                <th scope="col" class="text-right">მოქმედება</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @forelse ($categories as $category)
                <td>{{$category->title}}</td>
                <td>{{$category->published}}</td>
                <td>
                <a href="{{route('backend.category.edit', ['id' => $category->id])}}"><i class="fas fa-edit"></i></a>
                </td>
                @empty
                <td colspan="3" class="text-center"><h3>მონაცემები არარის</h3></td>
                @endforelse
            </tr>
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

@endsection