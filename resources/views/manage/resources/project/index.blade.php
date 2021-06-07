@extends('layouts.manage')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table @dataTable('resources.projects.data', $columns) class="table table-bordered table-hover"></table>
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
            is_active: {
                title: 'Is active',
                render: (data, type, row) => row.is_active ? 'Yes' : 'No'
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
