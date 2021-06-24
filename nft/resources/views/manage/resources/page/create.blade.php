@extends('layouts.manage')

@section('buttons')
    <a href="#" class="btn btn-primary" data-action="store">Create</a>
    <a href="{{ route('manage.resources.pages.index') }}" class="btn btn-default">Back to list</a>
@endsection

@section('content')
    <form action="{{ route('manage.resources.pages.store') }}" method="post" data-action-form="store">
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Main</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name">
                </div>

                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" class="form-control" name="slug">
                </div>

                <div class="form-group">
                    <label>Template</label>
                    <select class="form-control" name="template">
                        @foreach($templates as $i)
                            <option value="{{ $i->getId() }}">{{ $i->getName() }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="is_active" name="is_active" checked>
                    <label class="form-check-label" for="is_active">Page is active</label>
                </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="is_index" name="is_index">
                    <label class="form-check-label" for="is_index">Is index page</label>
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
                    <input type="text" class="form-control" name="meta[title]">
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="meta[description]" rows="2"></textarea>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </form>
@endsection
