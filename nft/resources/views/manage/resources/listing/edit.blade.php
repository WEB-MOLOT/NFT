@extends('layouts.manage')

@section('buttons')
    <a href="#" class="btn btn-primary" data-action="update">Update</a>
    <a href="{{ route('manage.resources.listings.destroy', $listing) }}" class="btn btn-danger" data-action="destroy">Delete</a>
    <a href="{{ route('manage.resources.listings.index') }}" class="btn btn-default">Back to list</a>
@endsection

@section('content')
    <form action="{{ route('manage.resources.listings.update', $listing) }}" method="post" data-action-form="update">
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
                    <input type="text" class="form-control" name="name" value="{{ $listing->name }}">
                </div>

                <div class="form-group">
                    <label>Amount</label>
                    <input type="number" class="form-control" name="amount" value="{{ $listing->amount }}">
                </div>

                <div class="form-group">
                    <label>Sort</label>
                    <input type="number" class="form-control" name="sort" value="{{ $listing->sort }}">
                </div>
            </div>
            <!-- /.card-body -->
        </div>

        <div class="card card-default mt-3">
            <div class="card-header">
                <h3 class="card-title">Content</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <textarea class="form-control" name="content" data-editor>{{ $listing->content }}</textarea>
            </div>
            <!-- /.card-body -->
        </div>
    </form>
@endsection
