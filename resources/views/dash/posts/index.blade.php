@extends("layouts.app")
@section("title")Posts
@endsection
@section("content")
    <x-nav-bar />
<div class="container">
    <a href="{{ route("posts.create") }}" class="btn btn-primary mt-2">Create New Post</a>
    @if(session("success"))
        <div class="alert alert-success">{{ session("success") }}</div>
    @endif
    <h2>POST LIST ( {{ count($posts) }}) </h2>

    @foreach($posts as $post)

        <div class="card w-50">
            <div class="card-body">
                <h2 class="card-title">{{ $post['subject'] }}</h2>
                @if(!empty($post['image']))
                    <img style="width:200px; height:160px;" src="{{ asset("assets/uploads/post_images/" . $post['image'] ) }}" >
                @endif

                <a href="{{route("posts.show",  $post)}}">Details</a>
            </div>
        </div>
    @endforeach
</div>
@endsection
