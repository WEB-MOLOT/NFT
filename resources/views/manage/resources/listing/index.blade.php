@extends('layouts.manage')

@section('buttons')
    <a href="{{ route('manage.resources.listings.create') }}" class="btn btn-default">Create listing</a>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table @dataTable('resources.listings.data', $columns, orderBy:'sort') class="table table-bordered table-hover"></table>
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
            amount: {
                title: 'Amount',
                render: (data, type, row) => row.amount === null ? '-' : row.amount + 'USD'
            },
            sort: {
                title: 'Sort'
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
