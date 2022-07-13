@extends("layouts.app")
@section("title") New Product
@endsection
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route("product-store") }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Product" name="name">
                    </div>

                    <div class="mb-3">
                        <label for="qt" class="form-label">Product Quantity</label>
                        <input type="number" class="form-control" id="qt" min="1" placeholder="10" name="qt">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Product Price</label>
                        <input type="text" class="form-control" id="price" min="1" placeholder="10" name="price">
                    </div>


                    <div class="mb-3">
                        <label for="category" class="form-label">Product Price</label>
                        <select name="category_id" class="form-select" id="category">
                            <option selected disabled> -- Select Category -- </option>
                            @foreach($categories as $category)
                                <option value="{{$category['id']}}">{{ $category['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
