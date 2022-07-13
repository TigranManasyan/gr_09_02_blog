@extends("layouts.app")
@section("title")Product List
@endsection
@section("content")
    <x-nav-bar />

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <a href="{{ route("product-create") }}">Create New Product</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Product Name</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Created By</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product['Product'] }}</td>
                                <td>{{ $product['Category'] }}</td>
                                <td>{{ $product['CreatedBy'] }}</td>
                                <td>
                                    <a href="">More</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
@endsection
