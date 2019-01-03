@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="card bg-primary shadow-sm mb-2">
                    <div class="card-body">
                        <div class="text-white text-center">კატეგორიები <span class="badge badge-light">0</span></div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="card bg-primary shadow-sm mb-2">
                    <div class="card-body">
                        <div class="text-white text-center">რესურსები <span class="badge badge-light">0</span></div>
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
                <a class="btn btn-block btn-primary rounded-bottom-0" href="#">კატეგორიის დამატება</a>
                <div class="list-group mb-2">
                    <a class="list-group-item list-group-item-action rounded-top-0" href="#">
                        <h4 class="h4">პირველი კატეგორია</h4>
                        <p>რესურსების რაოდენობა</p>
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <a class="btn btn-block btn-primary rounded-bottom-0" href="#">რესურსის დამატება</a>
                <div class="list-group mb-2">
                    <a class="list-group-item list-group-item-action rounded-top-0" href="#">
                        <h4 class="h44">პირველი რესურსი</h4>
                        <p>კატეგორია</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection