@extends('adfm::public.layout')
@section('meta-title', $page->title)

@section('content')
    <main id="main">
        <div class="container">
            <div id="main-list">
                <h1 style="text-align: center;"><span style="color: #339966;"><strong>{{$page->title}}</strong></span></h1>
                <hr />
                <div>{!! $page->content !!}</div>
            </div>
        </div>
    </main>
@endsection
