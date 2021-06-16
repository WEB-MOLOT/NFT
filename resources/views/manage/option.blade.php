@extends('layouts.manage')

@section('buttons')
    <a href="#" class="btn btn-primary" data-action="update">Update</a>
@endsection

@section('content')
    <form action="{{ route('manage.options.update') }}" method="post" data-action-form="update">
        @method('put')

        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Application</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <div class="form-group">
                    <label>Site name</label>
                    <input type="text" class="form-control" name="site_name" value="{{ config('bimsha.site_name') }}">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="{{ config('bimsha.email') }}">
                </div>
            </div>
            <!-- /.card-body -->
        </div>

        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Connections</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>Google Client ID</label>
                        <input type="text" class="form-control" name="connections[google][client_id]" value="{{ config('bimsha.connections.google.client_id') }}">
                    </div>

                    <div class="col-md-6 form-group">
                        <label>Google Client Secret</label>
                        <input type="text" class="form-control" name="connections[google][client_secret]" value="{{ config('bimsha.connections.google.client_secret') }}">
                    </div>

                    <div class="col-md-6 form-group">
                        <label>Twitter Client ID</label>
                        <input type="text" class="form-control" name="connections[twitter][client_id]" value="{{ config('bimsha.connections.twitter.client_id') }}">
                    </div>

                    <div class="col-md-6 form-group">
                        <label>Twitter Client Secret</label>
                        <input type="text" class="form-control" name="connections[twitter][client_secret]" value="{{ config('bimsha.connections.twitter.client_secret') }}">
                    </div>

                    <div class="col-md-6 form-group">
                        <label>Telegram Bot Name</label>
                        <input type="text" class="form-control" name="connections[telegram][bot]" value="{{ config('bimsha.connections.telegram.bot') }}">
                    </div>

                    <div class="col-md-6 form-group">
                        <label>Twitter Bot Secret</label>
                        <input type="text" class="form-control" name="connections[telegram][client_secret]" value="{{ config('bimsha.connections.telegram.client_secret') }}">
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </form>
@endsection
