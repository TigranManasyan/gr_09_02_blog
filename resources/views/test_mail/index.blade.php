@extends("layouts.app")
@section("title")Test Mail
@endsection
@section("content")
    <div class="container">
        <h2>New Mail Massage</h2>
        <form action="{{ route("post-mail-store") }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">User Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="John SMith">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">User Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="example@mail.ru">
            </div>
            <div class="mb-3">
                <label for="msg" class="form-label">Enter Massage</label>
                <textarea class="form-control" id="msg" name="msg" rows="3" placeholder="Your msg..."></textarea>
            </div>
            <button class="btn btn-primary">Send</button>
        </form>
    </div>
@endsection
