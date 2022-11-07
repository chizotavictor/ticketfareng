@extends('layouts.app')
@section('title', 'Error 404 | Page not found')
@section('contents')
    <!--Page Title-->
    <section class="page-title" style="background-image: url({{ asset('images/background/11.jpg') }});">
        <div class="anim-icons full-width">
            <span class="icon icon-bull-eye"></span>
            <span class="icon icon-dotted-circle"></span>
        </div>
        <div class="auto-container">
            <div class="title-outer">
                <h1>Error Page</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('welcome')}}">Home</a></li>
                    <li>Error 404</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Error Section-->
    <section class="error-section">
        <div class="anim-icons">
            <span class="icon icon-object-2"></span>
            <span class="icon icon-object-3"></span>
            <span class="icon icon-object-4"></span>
            <span class="icon icon-object-5"></span>
        </div>

        <div class="auto-container">
            <div class="error-title">404</div>
            <h4>Page not Found</h4>
            <div class="text">Sorry, we couldn't find the page you're looking for</div>
            <a href="{{ route('welcome') }}" class="theme-btn btn-style-one"><span class="btn-title">Home Page</span></a>
        </div>
    </section>
    <!--Error Section-->
@endsection
