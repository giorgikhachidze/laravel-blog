@foreach ($categories as $category)

<option value="{{$category->id ?? ""}}"
    @isset($article->id)
        @foreach ($article->categories as $categoryArticle)
            @if ($category->id == $categoryArticle->id)
                selected="selected"
            @endif
        @endforeach
    @endisset
    >
    {!! $delimiter ?? "" !!}{{$category->title ?? ""}}
</option>

@if (count($category->children) > 0)

    @include('backend.articles.partials.categories', [
        'categories' => $category->children,
        'delimiter'  => ' - ' . $delimiter
    ])

@endif

@endforeach
