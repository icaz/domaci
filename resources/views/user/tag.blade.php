@extends('user/app')

@section('bg-img', asset('user/img/home-bg.jpg'))

@section('title', 'Niški Blog')

@section('sub-heading', 'Naučimo nešto o Nišu...')

@section('main-content')

    <!-- Post Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
@foreach ($posts as $post)
            <a href="{{route('post', $post->slug)}}">
                    <h2 class="post-title">
                        {{$post->title}}
 
                    </h2>
                    <h3 class="post-subtitle">
                            {{$post->subtitle}}
                        </h3>
            </a>
            <small class="pull-right">Created {{ $post->created_at ? $post->created_at->diffForHumans(): '-' }}</small>

@endforeach
    
                <hr>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        {{ $posts->links() }}
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>
@endsection