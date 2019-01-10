<div class="form-group">
    <label for="">სტატუსი</label>
    <select class="form-control" name="published">
        @if (isset($article->id))
            <option value="0" @if ($article->published == 0) selected="" @endif>არარის გამოქვეყნებული</option>
            <option value="1" @if ($article->published == 1) selected="" @endif>გამოქვეყნებული</option>
        @else
            <option value="0">არარის გამოქვეყნებული</option>
            <option value="1">გამოქვეყნებული</option>
        @endif
    </select>
</div>

<div class="form-group">
    <label for="">სათაური</label>
    <input type="text" class="form-control" name="title" placeholder="სიახლის სათაური" value="{{$article->title ?? ""}}" required>
</div>

<div class="form-group">
    <label for="">მისამართი (URL)</label>
    <input type="text" class="form-control" name="slug" placeholder="ავტომატური გენერირება" value="{{$article->slug ?? ""}}" readonly="">
</div>

<div class="form-group">
    <label for="">კატეგორიები</label>
    <select name="categories[]" class="form-control" multiple="">
        @include('backend.articles.partials.categories', ['categories' => $categories])
    </select>
</div>

<div class="form-group">
    <label for="">მოკლე აღწერა</label>
    <textarea class="form-control" id="description_short" name="description_short">{{$article->description_short ?? ""}}</textarea>
</div>

<div class="form-group">
    <label for="">სრული აღწერა</label>
    <textarea class="form-control" id="description" name="description">{{$article->description ?? ""}}</textarea>
</div>

<hr>

<div class="form-group">
    <label for="">მეტა სათაური (SEO)</label>
    <input type="text" class="form-control" name="meta_title" placeholder="მეტა სათაური" value="{{$article->meta_title ?? ""}}" required>
</div>

<div class="form-group">
    <label for="">მეტა აღწერა (SEO)</label>
    <input type="text" class="form-control" name="meta_description" placeholder="მეტა სათაური" value="{{$article->meta_description ?? ""}}" required>
</div>

<div class="form-group">
    <label for="">საკვანძო სიტყვები (SEO)</label>
    <input type="text" class="form-control" name="meta_keyword" placeholder="მეტა სათაური" value="{{$article->meta_keyword ?? ""}}" required>
</div>

<hr>

<input class="btn btn-primary" type="submit" value="შენახვა">
