@extends('backend.layouts.app')

@section('content')

<div class="container">
    @component('backend.components.breadcrumb')
        @slot('title') სიახლეების სია @endslot
        @slot('parent') მთავარი @endslot
        @slot('active') სიახლეები @endslot
    @endcomponent

    <hr>

    <a href="{{route('backend.article.create')}}" class="btn btn-primary float-right mb-3"><i class="fas fa-plus-circle fa-fw"></i> სიახლის დამატება</a>

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
                        @forelse ($articles as $article)
                        <tr>
                            <td style="vertical-align: inherit;">{{$article->title}}</td>
                            <td style="vertical-align: inherit;">@if ($article->published == 1) გამოქვეყნებული @else არარის გამოქვეყნებული @endif</td>
                            <td class="text-right">
                                <form action="{{route('backend.article.destroy', $article)}}" method="post">
                                    <input type="hidden" name="_method" value="DELETE">
                                    {{ csrf_field() }}

                                    <a class="btn btn-primary" href="{{route('backend.article.edit', $article)}}"><i class="fas fa-edit fa-fw"></i></a>

                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#destroyModal"><i class="fas fa-trash fa-fw"></i></button>

                                    <div class="modal" id="destroyModal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title">წაშლა</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="დახურვა">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                <p>ნამდვილად გსურთ წაშალოთ სიახლე "{{$article->title}}"</p>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">დახურვა</button>
                                                <button type="submit" class="btn btn-primary">დიახ წაშალე</button>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
                                        {{$articles->links()}}
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
