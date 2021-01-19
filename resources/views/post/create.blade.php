@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        @if ($errors->any())

            @foreach ($errors->all() as $error)
                <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-danger">Error</span> {{$error}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endforeach

        @endif

    </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">

                            </button>
                        </div>
                        <div class="card-body">
                            <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="title" class=" form-control-label">Title</label></div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="title" name="title" placeholder="Title" class="form-control">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image (Can be null)</label></div>
                                    <div class="col-12 col-md-9"><input type="file" id="file-input" name="image" class="form-control-file"></div>
                                </div>

                                <div class="form-group">
                                    <label for="textarea-input" class=" form-control-label">Content</label>
                                    <textarea name="body" id="summernote" rows="9" placeholder="Content..." class="form-control"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- .content -->
            @endsection

