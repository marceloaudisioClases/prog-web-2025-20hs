@extends("layouts.app")

@section("title","MI APLICACION")

@section("content")
    <form action="{{ route('users.store') }}" method="POST" class="p-4">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Surname</label>
            <input type="text" name="surname" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Create User</button>
    </form>
@endsection