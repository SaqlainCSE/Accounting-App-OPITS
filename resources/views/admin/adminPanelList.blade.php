@extends('layouts.app')

@section('content')

    <div class="container mt-4">
        <h2 class="mb-4">অ্যাডমিন তালিকা</h2>

        @if(auth()->check() && auth()->user()->role === 'superuser')
        <div class="container text-end">
            <a href="/register">
                <button class="btn btn-success btn-sm">নতুন অ্যাডমিন তৈরি করুন</button>
            </a>
        </div><br>
        @endif

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>নাম</th>
                    <th>ইমেইল</th>
                    <th>মোবাইল</th>
                    <th>ভূমিকা</th>
                    <th>তৈরি করা হয়েছে</th>
                    <th>অ্যাকশন</th>
                </tr>
            </thead>
            <tbody>
                @foreach($adminPanelList as $admin)
                    <tr>
                        <td>{{ $admin->name }}</td>
                        <td>{{ $admin->email }}</td>
                        <td>{{ $admin->mobile }}</td>
                        <td>{{ ucfirst($admin->role) }}</td>
                        <td>{{ $admin->created_at->format('d-m-Y') }}</td>
                        @if(auth()->check() && auth()->user()->role === 'superuser')
                            <td>
                                <a href="{{ route('admin.editAdmin', $admin->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
