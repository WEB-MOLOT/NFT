@extends('layouts.front')

@section('title') Submit new NFT @endsection

@section('content')
    <div class="main-page">

        <div class="page-top">
            <div class="wrapper">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Submit New ICO</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="submit">
            <div class="wrapper wrapper_big">
                <div class="submit__body flex">
                    <div class="submit__left">
                        <div class="submit__title title bottom">Submit<br> New ICO</div>
                        <div class="submit__subtitle bottom">Before submitting a project for moderation, please first check that it isn't already listed in our ICO database. We don't guarantee that your ICO will be listed on the ICOmarks, but if your project
                            interests us, then we will publish it as soon as possible.</div>
                    </div>
                    <div class="submit__right">
                        <add-project></add-project>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
