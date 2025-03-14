@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">শেয়ার খতিয়ান তৈরি করুন</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('sharekhatian.store') }}" method="POST">
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

            <!-- Share Number -->
            <div class="col-md-6 mb-3">
                <label class="form-label">শেয়ার নং:</label>
                <input type="text" name="share_number" class="form-control" required>
            </div>

            <!-- Share Total Price -->
            <div class="col-md-6 mb-3">
                <label class="form-label">শেয়ার মোট মূল্য:</label>
                <input type="text" name="share_total_price" class="form-control" required>
            </div>

            <!-- Share Kisti Aday Amount -->
            <div class="col-md-6 mb-3">
                <label class="form-label">শেয়ার কিস্তি আদায় পরিমাণ:</label>
                <input type="text" name="share_kisti_aday_amount" class="form-control" required>
            </div>

            <!-- Share Kisti Aday Date -->
            <div class="col-md-6 mb-3">
                <label class="form-label">শেয়ার কিস্তি আদায় তারিখ:</label>
                <input type="date" name="share_kisti_aday_date" class="form-control" required>
            </div>

            <!-- Share Return Amount -->
            <div class="col-md-6 mb-3">
                <label class="form-label">শেয়ার ফেরত পরিমাণ:</label>
                <input type="text" name="share_return_amount" class="form-control" required>
            </div>

            <!-- Share Return Date -->
            <div class="col-md-6 mb-3">
                <label class="form-label">শেয়ার ফেরত তারিখ:</label>
                <input type="date" name="share_return_date" class="form-control" required>
            </div>

            <!-- Baki (Remaining Amount) -->
            <div class="col-md-6 mb-3">
                <label class="form-label">বাকি:</label>
                <input type="text" name="baki" class="form-control" required>
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

        <button type="submit" class="btn btn-primary">শেয়ার খতিয়ান তৈরি করুন</button>
    </form>

</div>
@endsection
