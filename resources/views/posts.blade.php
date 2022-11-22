@extends('layouts.main')

@section('container')

<div class="row justify-content-center my-5">
  <div class="col-md-6">
    <form action="/posts">
      @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}">
      @endif
      @if (request('author'))
          <input type="hidden" name="author" value="{{ request('author') }}">
      @endif
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
        <button class="btn btn-danger" type="submit">Search</button>
      </div>
    </form>
  </div>
</div>

@if ($posts->count()) 
<div class="card mb-3">
      <div style="max-height: 768px; background-size: cover; overflow: hidden;" class="mb-3">
        <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="card-img-top">
      </div>
    <div class="card-body text-center">
      <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none">{{ $posts[0]->title }}</a></h3>
        <p>
        <small class="text-muted">
          By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
        </small>
        </p>
    <p class="card-text">{{ $posts[0]->excerpt }}</p>

    <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn-primary">Read more</a>
    </div>
  </div>


<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute px-2 py-2" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>

                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                
                <div class="card-body">
                  <a href="/posts/{{ $post->slug }}">
                  <h4 class="card-title">{{ $post->title }}</h4></a>
                  <p>
                    <small class="text-muted">By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                    </small>
                    </p>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <a href="/posts/{{ $post->slug }}" class="btn btn-danger">Read more</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>

@else
  <p class="text-center fs-4">No posts found.</p>
@endif
<div class="d-flex justify-content-center">
{{ $posts->links() }}
</div>
@endsection