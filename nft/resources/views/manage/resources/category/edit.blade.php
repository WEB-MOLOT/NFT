@extends('layouts.manage')

@section('buttons')
    <a href="#" class="btn btn-primary" data-action="update">Update</a>
    <a href="{{ route('manage.resources.categories.destroy', $category) }}" class="btn btn-danger" data-action="destroy">Delete</a>
    <a href="{{ route('manage.resources.categories.index') }}" class="btn btn-default">Back to list</a>
@endsection

@section('content')
    <form action="{{ route('manage.resources.categories.update', $category) }}" method="post" data-action-form="update">
        @method('put')

        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Main</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                </div>

                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" class="form-control" name="slug" value="{{ $category->slug }}">
                </div>
            </div>
            <!-- /.card-body -->
        </div>

        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Appearance</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <div class="form-group">
                    <label>Color</label>
                    <input type="color" class="form-control form-control-color" name="color_code" value="{{ $category->color_code }}">
                </div>

                <div class="form-group">
                    <label for="image" class="form-label">Image</label>
                    <input class="form-control" type="file" id="image" name="image">
                    <small class="text-muted">Current image - <a href="{{ Storage::url($category->image) }}" target="_blank">{{ $category->image }}</a></small>
                </div>
            </div>
            <!-- /.card-body -->
        </div>

        <div class="card card-default mt-3">
            <div class="card-header">
                <h3 class="card-title">SEO</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="meta[title]" value="{{ $category->meta->title }}">
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="meta[description]" rows="2">{{ $category->meta->description }}</textarea>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </form>
@endsection
