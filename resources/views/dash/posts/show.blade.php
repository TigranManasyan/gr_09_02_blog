@extends("layouts.app")
@section("title")
@endsection
@section("content")
    <div class="container">
        <a href="{{ route("posts.index") }}" class="btn btn-primary mt-2">Back</a>
            <div class="card w-50 mt-2">

                <div class="card-body">
                    <h2 class="card-title">{{ $one_post['subject'] }}</h2>
                    <h2 class="card-title">{{ $one_post['image'] }}</h2>
                    <h2 class="card-title">{{ $one_post['content'] }}</h2>
                    <h2 class="card-title">{{ $one_post['author'] }}</h2>
                    <p class="card-text">Created At` {{ $one_post['created_at'] }}</p>
                    <a href="{{route("posts.edit", $one_post['id'])}}" class="btn btn-success">Edit</a>
                    <form action="{{ route("posts.destroy", $one_post['id']) }}" method="post">
                        @csrf
                        @method("delete")
                        <button type="submit" class="btn  btn-danger">Delete</button>
                    </form>
                </div>
            </div>
    </div>
@endsection
