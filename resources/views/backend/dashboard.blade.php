@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="card bg-primary shadow-sm mb-2">
                    <div class="card-body">
                        <div class="text-white text-center">კატეგორიები <span class="badge badge-light">{{$count_categories}}</span></div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="card bg-primary shadow-sm mb-2">
                    <div class="card-body">
                        <div class="text-white text-center">სიახლეები <span class="badge badge-light">{{$count_articles}}</span></div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="card bg-primary shadow-sm mb-2">
                    <div class="card-body">
                        <div class="text-white text-center">მომხმარებლები <span class="badge badge-light">0</span></div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="card bg-primary shadow-sm mb-2">
                    <div class="card-body">
                        <div class="text-white text-center">მომხმარებლები დღეს <span class="badge badge-light">0</span></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6 col-sm-6">
            <a class="btn btn-block btn-primary rounded-bottom-0" href="{{route('backend.category.create')}}">კატეგორიის დამატება</a>
                <div class="list-group mb-2">
                    @if (count($categories) !== 0)
                        @foreach ($categories as $category)
                            <a class="list-group-item list-group-item-action rounded-top-0" href="{{route('backend.category.edit', $category)}}">
                                <h4 class="h4">{{$category->title}}</h4>
                                <p>სიახლეები: {{$category->articles()->count()}}</p>
                            </a>
                        @endforeach
                    @else
                        <div class="card rounded-top-0">
                            <div class="card-body">
                                <h4 class="h4 text-center">კატეგორიები დამატებული არარის</h4>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <a class="btn btn-block btn-primary rounded-bottom-0" href="#">სიახლეების დამატება</a>
                <div class="list-group mb-2">
                    @if (count($articles) !== 0)
                        @foreach ($articles as $article)
                            <a class="list-group-item list-group-item-action rounded-top-0" href="{{route('backend.article.edit', $article)}}">
                                <h4 class="h4">{{$article->title}}</h4>
                                <p>კატეგორიები: {{$article->categories()->pluck('title')->implode(', ')}}</p>
                            </a>
                        @endforeach
                    @else
                        <div class="card rounded-top-0">
                            <div class="card-body">
                                <h4 class="h4 text-center">სიახლეები დამატებული არარის</h4>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
