@extends('layouts.manage')

@section('buttons')
    <a href="#" class="btn btn-primary" data-action="update">Update</a>
    <a href="{{ route('manage.pages.destroy', $page) }}" class="btn btn-danger" data-action="destroy">Delete</a>
    <a href="{{ route('manage.pages.index') }}" class="btn btn-default">Back to list</a>
@endsection

@section('content')
    <form action="{{ route('manage.pages.update', $page) }}" method="post" data-action-form="update">
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
                    <input type="text" class="form-control" name="name" value="{{ $page->name }}">
                </div>

                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" class="form-control" name="slug" value="{{ $page->slug }}">
                </div>

                <div class="form-group">
                    <label>Template</label>
                    <select class="form-control" name="template">
                        @foreach($templates as $i)
                            <option value="{{ $i->getId() }}" {{ $i->getId() === $page->template ? 'selected' : '' }}>{{ $i->getName() }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="is_active" name="is_active" {{ $page->is_active ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_active">Page is active</label>
                </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="is_index" name="is_index" {{ $page->is_index ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_index">Is index page</label>
                </div>
            </div>
            <!-- /.card-body -->
        </div>

        @if($template->hasManageView())
            {!! $template->manageView() !!}
        @endif

        <div class="card card-default mt-3">
            <div class="card-header">
                <h3 class="card-title">SEO</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="meta[title]" value="{{ $page->meta->title }}">
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="meta[description]" rows="2">{{ $page->meta->description }}</textarea>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </form>
@endsection
