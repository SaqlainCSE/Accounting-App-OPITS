@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">মজুদ মালামাল খতিয়ান তৈরি করুন</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('mojudMalamalkhatian.store') }}" method="POST">
        @csrf

        <div class="row">
            <!-- Date -->
            <div class="col-md-6 mb-3">
                <label class="form-label">তারিখ:</label>
                <input type="date" name="date" class="form-control" required>
            </div>

            <!-- Product Name -->
            <div class="col-md-6 mb-3">
                <label class="form-label">পণ্যের নাম:</label>
                <input type="text" name="product_name" class="form-control" required>
            </div>

            <!-- Category -->
            <div class="col-md-6 mb-3">
                <label class="form-label">ক্যাটাগরি:</label>
                <select name="category" class="form-control" required>
                    <option value="">-- ক্যাটাগরি নির্বাচন করুন --</option>
                    <option value="10">ক্রয়</option>
                    <option value="11">বিক্রয়</option>
                </select>
            </div>

            <!-- Present Stock -->
            <div class="col-md-6 mb-3">
                <label class="form-label">বর্তমান স্টক:</label>
                <input type="text" name="present_stock" class="form-control" required>
            </div>

            <!-- Product Count -->
            <div class="col-md-6 mb-3">
                <label class="form-label">পণ্যের সংখ্যা:</label>
                <input type="text" name="product_count" class="form-control" required>
            </div>

            <!-- Product Price -->
            <div class="col-md-6 mb-3">
                <label class="form-label">পণ্যের মূল্য:</label>
                <input type="text" name="product_price" class="form-control" required>
            </div>

            <!-- Total Amount -->
            <div class="col-md-6 mb-3">
                <label class="form-label">মোট মূল্য:</label>
                <input type="text" name="total_amount" class="form-control" required>
            </div>

            <!-- User Name -->
            <div class="col-md-6 mb-3">
                <label class="form-label">ইউজার:</label>
                <input type="text" name="user_name" class="form-control" required>
            </div>

            <!-- Comments -->
            <div class="col-md-6 mb-3">
                <label class="form-label">মন্তব্য:</label>
                <textarea name="comments" class="form-control"></textarea>
            </div>

        </div>

        <button type="submit" class="btn btn-primary">মজুদ মালামাল খতিয়ান তৈরি করুন</button>
    </form>


</div>
@endsection
