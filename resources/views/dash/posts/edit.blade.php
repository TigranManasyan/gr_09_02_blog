@extends("layouts.app")
@section("title")Update Post
@endsection
@section("content")
    <div class="container">
        <a href="{{ route("posts.index") }}" class="btn btn-primary mt-2">Back</a>


        <form action="{{ route("posts.update", $post['id']) }}" class="w-50" method="post">
            @csrf
            @method("patch")
            <div class="mb-3">
                <label for="subject" class="form-label">Post Subject</label>
                <input value="{{ $post['subject'] }}" type="text" class="form-control" id="subject" placeholder="Title" name="subject">
            </div>



            <div class="mb-3">
                <label for="context" class="form-label">Enter Post Content</label>
                <textarea class="form-control" id="context" rows="3" name="content">{{ $post['content'] }}</textarea>
            </div>

            <button  class="btn btn-primary">Save Changes</button>
        </form>
    </div>
@endsection
