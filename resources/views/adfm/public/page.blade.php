@extends('adfm::public.layout')
@section('meta-title', $page->title)
@section('content')
<main id="main">
<div class="container">
	<div id="main-list">
		<h1>{{$page->title}}</h1>
        <div>{!! $page->content !!}</div>
        @if(count($page->files) > 0)
            @foreach($page->files as $file)
            <figure class="wp-block-image"><img loading="lazy" src="{!! $file->url !!}" alt="{{$file->original_name}}" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
            @endforeach
        @endif
	</div>
</div>
</main>
@endsection
