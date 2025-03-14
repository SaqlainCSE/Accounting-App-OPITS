@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">সঞ্চয় খতিয়ান তৈরি করুন</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('sanchayakhatian.store') }}" method="POST">
        @csrf

        <div class="row">
            <!-- Member No -->
            <div class="col-md-6 mb-3">
                <label class="form-label">সভ্য নং:</label>
                <input type="text" name="member_no" class="form-control" required>
            </div>

            <!-- Member Name -->
            <div class="col-md-6 mb-3">
                <label class="form-label">সভ্যের নাম:</label>
                <input type="text" name="member_name" class="form-control" required>
            </div>

            <!-- Category -->
            <div class="col-md-6 mb-3">
                <label class="form-label">ক্যাটাগরি:</label>
                <select name="category" class="form-control" required>
                    <option value="">-- ক্যাটাগরি নির্বাচন করুন --</option>
                    <option value="1">সাধারণ</option>
                    <option value="2">পণ্য</option>
                    <option value="3">মাসিক</option>
                    <option value="4">অস্থায়ী</option>
                    <option value="5">পলিসি</option>
                    <option value="6">এককালীন</option>
                </select>
            </div>

            {{-- <div class="col-md-6 mb-3">
                <label class="form-label">ক্যাটাগরি:</label>
                @php
                    $categories = \App\Enums\CategoryEnum::getAll();
                @endphp

                <select name="category" class="form-control" required>
                    <option value="">-- ক্যাটাগরি নির্বাচন করুন --</option>
                    @foreach($categories as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div> --}}

            <!-- Sanchaya Aday -->
            <div class="col-md-6 mb-3">
                <label class="form-label">সঞ্চয় আদায়:</label>
                <input type="text" step="0.00001" name="sanchaya_aday" class="form-control" required>
            </div>

            <!-- Asol Aday -->
            <div class="col-md-6 mb-3">
                <label class="form-label">আসল আদায়:</label>
                <input type="text" step="0.00001" name="asol_aday" class="form-control" required>
            </div>

            <!-- Munafa Aday -->
            <div class="col-md-6 mb-3">
                <label class="form-label">মুনাফা আদায়:</label>
                <input type="text" step="0.00001" name="munafa_aday" class="form-control" required>
            </div>

            <!-- Service Charge -->
            <div class="col-md-6 mb-3">
                <label class="form-label">সার্ভিস চার্জ আদায়:</label>
                <input type="text" step="0.00001" name="service_charge" class="form-control" required>
            </div>

            <!-- Total -->
            <div class="col-md-6 mb-3">
                <label class="form-label">মোট আদায়:</label>
                <input type="text" step="0.00001" name="total" class="form-control" required>
            </div>

            <!-- Comments -->
            <div class="col-md-6 mb-3">
                <label class="form-label">মন্তব্য:</label>
                <textarea name="comments" class="form-control"></textarea>
            </div>

            <!-- User Name -->
            <div class="col-md-6 mb-3">
                <label class="form-label">ইউজার:</label>
                <input type="text" name="user_name" class="form-control" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">সঞ্চয় খতিয়ান তৈরি করুন</button>
    </form>

</div>
@endsection
