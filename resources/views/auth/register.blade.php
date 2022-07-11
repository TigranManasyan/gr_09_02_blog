@extends("layouts.app")
@section("title")Register
@endsection
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <h2>Create Account</h2>
                <form action="{{ route("register") }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control {{ ($errors->has("name")) ? 'is-invalid' : '' }}" id="name" placeholder="John Smith" name="name">
                        <span class="invalid-feedback">
                            {{ $errors->first("name") }}
                        </span>
                    </div>

                    <div class="mb-3">
                        <label for="avatar" class="form-label">User Avatar</label>
                        <input type="file" class="form-control {{ ($errors->has("avatar")) ? 'is-invalid' : '' }}" id="avatar" name="avatar">
                        <span class="invalid-feedback">
                            {{ $errors->first("avatar") }}
                        </span>
                    </div>

                    <div class="mb-3">
                        <label for="birth_date" class="form-label">Birth Date</label>
                        <input type="date" class="form-control {{ ($errors->has("birth_date")) ? 'is-invalid' : '' }}" id="birth_date" name="birth_date">
                        <span class="invalid-feedback">
                            {{ $errors->first("birth_date") }}
                        </span>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control {{ ($errors->has("email")) ? 'is-invalid' : '' }}" id="email" placeholder="example@mail.ru" name="email">
                        <span class="invalid-feedback">
                            {{ $errors->first("email") }}
                        </span>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control {{ ($errors->has("password")) ? 'is-invalid' : '' }}" id="password" placeholder="****" name="password">
                        <span class="invalid-feedback">
                            {{ $errors->first("password") }}
                        </span>
                    </div>
                    <button class="btn btn-success">Create Account</button>
                </form>
                <p class="mt-2"><a href="">Sign In</a></p>
            </div>
        </div>
    </div>
@endsection
