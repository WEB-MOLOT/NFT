@extends('layouts.manage')

@section('buttons')
    <a href="{{ route('manage.resources.categories.create') }}" class="btn btn-default">Create category</a>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table @dataTable('resources.categories.data', $columns) class="table table-bordered table-hover"></table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
@endsection

@push('footer')
    <script type="text/javascript">
        window.dataTableRenders = {
            name: {
                title: 'Name'
            },
            created_at: {
                title: 'Created at',
                render: (data, type, row) => row.formatted_created_at
            },
            updated_at: {
                title: 'Updated at',
                render: (data, type, row) => row.formatted_updated_at
            }
        };
    </script>
@endpush
