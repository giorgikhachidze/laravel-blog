@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    <label for="">სახელი</label>
    <input type="text" class="form-control" name="name" placeholder="სახელი" value="@if(old('name')){{old('name')}}@else{{$user->name ?? ""}}@endif" required>
</div>

<div class="form-group">
    <label for="">ელ-ფოსტა</label>
    <input type="email" class="form-control" name="email" placeholder="ელ-ფოსტა" value="@if(old('email')){{old('email')}}@else{{$user->email ?? ""}}@endif" required>
</div>

<div class="form-group">
    <label for="">პაროლი</label>
    <input type="password" class="form-control" name="password">
</div>

<div class="form-group">
    <label for="">გაიმაორეთ პაროლი</label>
    <input type="password" class="form-control" name="password_confirmation">
</div>

<hr>

<input class="btn btn-primary" type="submit" value="შენახვა">
