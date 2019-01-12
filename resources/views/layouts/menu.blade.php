@foreach ($categories as $category)
    @if ($category->children->where('published', 1)->count())
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{$category->title}} <span class="caret"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach ($category->children as $categoryChildren)
              <a  class="dropdown-item" href="{{url("/blog/category/$categoryChildren->slug")}}">{{$categoryChildren->title}}</a>
            @endforeach
            </div>
    @else
        <li class="nav-item">
            <a  class="nav-link" href="{{url("/blog/category/$category->slug")}}">{{$category->title}}</a>
    @endif
        </li>
@endforeach
