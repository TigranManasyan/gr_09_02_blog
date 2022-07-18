@extends("layouts.app")
@section("title")Create New Post
@endsection
@section("content")
    <div class="container">
        <a href="{{ route("posts.index") }}" class="btn btn-primary mt-2">Back</a>


            <form action="{{ route("posts.store") }}" class="w-50" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="subject" class="form-label">Post Subject</label>
                    <input type="text" class="form-control" id="subject" placeholder="Title" name="subject">
                </div>

                <div class="mb-3">
                    <label for="post_image" class="form-label">Select Post Image</label>
                    <input type="file" class="form-control" id="post_image"  name="image">
                </div>

                <div class="mb-3">
                    <label for="context" class="form-label">Enter Post Content</label>
                    <textarea class="form-control" id="context" rows="3" name="content"></textarea>
                </div>

                <button  class="btn btn-primary">Save Post</button>
            </form>
    </div>
@endsection
