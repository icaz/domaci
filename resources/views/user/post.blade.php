@extends('user/app')

@section('bg-img',Storage::disk('local')->url($post->image))

@section('title',$post->title ? $post->title: 'Not found')
@section('sub-heading',$post->subtitle ? $post->subtitle: 'Not found')

@section('main-content')

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                <small>Created {{ $post->created_at ? $post->created_at->diffForHumans(): '-' }}</small>
                    @foreach ($post->categories as $category)
                <small class="pull-right">
                    <a href="{{route('category', $category->slug)}}">{{$category->name}}</a>
                </small><br>
                    @endforeach
                    <br>
                    {!! htmlspecialchars_decode($post->body ? $post->body: 'No text here :)') !!}
{{--
Tags
    --}}
    <h3>Tags</h3>
    @foreach ($post->tags as $tag)
    <a href="{{route('tag', $tag->slug)}}"><small class="pull-left" style="margin-right: 20px;border-radius: 5px;border: 1px solid gray;padding: 5px;">  
                    {{ $tag->name }} 
    </small></a>
    @endforeach

                </div>
            </div>
        </div>
    </article>

    <hr>

@endsection