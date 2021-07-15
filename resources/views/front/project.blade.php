@extends('layouts.front')

@section('title') Personal Area @endsection

@section('content')


    <div class="main-page">

        <div class="page-top bottom">
            <div class="wrapper">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Active</a></li>
                        <li>EtherBear #215</li>
                    </ul>
                </div>
            </div>
        </div>

        <project-details :project="{{ json_encode($project) }}"></project-details>

    </div>

@endsection
