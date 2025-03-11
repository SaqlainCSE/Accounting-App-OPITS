@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mb-4">অ্যাডমিন আপডেট করুন</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.updateAdmin', $admin->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">নাম:</label>
                <input type="text" name="name" class="form-control" value="{{ $admin->name }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">ইমেইল:</label>
                <input type="email" class="form-control" value="{{ $admin->email }}" disabled>
            </div>

            <div class="mb-3">
                <label class="form-label">মোবাইল:</label>
                <input type="text" name="mobile" class="form-control" value="{{ $admin->mobile }}">
            </div>

            <div class="mb-3">
                <label class="form-label">ভূমিকা:</label>
                <select name="role" class="form-control">
                    <option value="user" {{ $admin->role == 'user' ? 'selected' : '' }}>User</option>
                    <option value="superuser" {{ $admin->role == 'superuser' ? 'selected' : '' }}>Superuser</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
