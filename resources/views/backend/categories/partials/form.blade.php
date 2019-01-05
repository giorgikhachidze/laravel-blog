<div class="form-group">
    <label for="">სტატუსი</label>
    <select class="form-control" name="published">
        @if (isset($category->id))
            <option value="0" @if ($category->published == 0) selected="" @endif>არარის გამოქვეყნებული</option>
            <option value="1" @if ($category->published == 1) selected="" @endif>გამოქვეყნებული</option>
        @else
            <option value="0">არარის გამოქვეყნებული</option>
            <option value="1">გამოქვეყნებული</option>
        @endif
    </select>
</div>

<div class="form-group">
    <label for="">სათაური</label>
    <input type="text" class="form-control" name="title" placeholder="კატეგორიის სათაური" value="{{$category->title ?? ""}}" required>
</div>

<div class="form-group">
    <label for="">მისამართი (URL)</label>
    <input type="text" class="form-control" name="slug" placeholder="ავტომატური გენერირება" value="{{$category->slug ?? ""}}" readonly="">
</div>

<div class="form-group">
    <label for="">მშობელი კატეგორია</label>
    <select name="parent_id" class="form-control">
        <option value="0">-- მშობელი კატეგორიის გარეშე --</option>
        @include('backend.categories.partials.categories', ['categories' => $categories])
    </select>
</div>

<hr>

<input class="btn btn-primary" type="submit" value="შენახვა">
