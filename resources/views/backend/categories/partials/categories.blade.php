@foreach ($categories as $categoryParent)

<option value="{{$categoryParent->id ?? ""}}"
    @isset($category->id)

        @if ($category->parent_id == $categoryParent->id)
            selected=""
        @endif

        @if ($category->id == $categoryParent->id)
            hidden=""
        @endif

    @endisset
    >
    {!! $delimiter ?? "" !!}{{$categoryParent->title ?? ""}}
</option>

@if (count($categoryParent->children) > 0)

    @include('backend.categories.partials.categories', [
        'categories' => $categoryParent->children,
        'delimiter'  => ' - ' . $delimiter
    ])

@endif
    
@endforeach