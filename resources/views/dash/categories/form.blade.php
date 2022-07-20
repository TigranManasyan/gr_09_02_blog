@extends("layouts.app")
@section("title") {{ (isset($category)) ? 'Edit Category' : 'New Category' }}
@endsection
@section("content")
    <x-nav-bar />
    <div class="container">
        <h1>{{ (isset($category)) ? 'Edit Category' : 'New Category' }}</h1>
        <form action="{{ route((isset($category) ? 'update-category' : 'store-category')) }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Category Name</label>
                <input
                    @if(isset($category))
                        value="{{ $category['name'] }}"
                    @endif
                    type="text"
                    class="form-control"
                    id="name"
                    placeholder="Category"
                    name="name"
                >
            </div>

            @if(isset($category))
                <button class="btn btn-success">Save Changes</button>
            @else
                <button class="btn btn-primary">Save</button>
            @endif
        </form>
    </div>
@endsection
