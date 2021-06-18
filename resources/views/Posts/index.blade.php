@extends('layouts.app')
{{--@extends('posts.layout')--}}

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="row col-sm-12">
            @if (!Auth::guest())
                    <a class="btn btn-success" href="{{ route('posts.create') }}"> Create New Post</a>
            @endif
    </div>
    <br>
    <div class="row col-sm-12">
    @foreach ($posts as $post)

            <div class="col-sm-4">
                <div class="card3">
                    <h3>{{ $post->name }}</h3>
                    <p class="small">{{ strip_tags(Str::limit($post->detail, 32)) }}</p>
                    <div class="dimmer"></div>
                    <div class="go-corner" href="{{ route('posts.show',$post->id) }}">
                        <div class="go-arrow">
                            <a style="color: white;text-decoration: none" href="{{ route('posts.show',$post->id) }}">→</a>
                        </div>
                    </div>
                    <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                        @if (!Auth::guest())
                            @if (Auth::user()->id == $post->user_id)
                                <div class="row">
                                    <div class="col-sm-4">
                                        <a class="small" href="{{ route('posts.edit',$post->id) }}"><i class="far fa-edit"></i></a>
                                    </div>
                                    <div class="col-sm-4">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="small deleteLink"><i class="far fa-trash-alt"></i></button>
                                    </div>
                                </div>
                            @endif
                        @endif
                    </form>
                </div>
            </div>
    @endforeach
    </div>

    {!! $posts->links() !!}

@endsection
