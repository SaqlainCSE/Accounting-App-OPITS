@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">নতুন সভ্য তৈরি করুন</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('members.store') }}" method="POST" enctype="multipart/form-data">
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

            <!-- Father Name -->
            <div class="col-md-6 mb-3">
                <label class="form-label">পিতার নাম:</label>
                <input type="text" name="member_father_name" class="form-control" required>
            </div>

            <!-- Mother Name -->
            <div class="col-md-6 mb-3">
                <label class="form-label">মাতার নাম:</label>
                <input type="text" name="member_mother_name" class="form-control" required>
            </div>

            <!-- NID -->
            <div class="col-md-6 mb-3">
                <label class="form-label">জাতীয় পরিচয় পত্র (NID):</label>
                <input type="text" name="member_nid" class="form-control" required>
            </div>

            <!-- Address -->
            <div class="col-md-6 mb-3">
                <label class="form-label">ঠিকানা:</label>
                <input type="text" name="member_address" class="form-control" required>
            </div>

            <!-- Profession -->
            <div class="col-md-6 mb-3">
                <label class="form-label">পেশা:</label>
                <input type="text" name="member_profession" class="form-control">
            </div>

            <!-- Nominee Name -->
            <div class="col-md-6 mb-3">
                <label class="form-label">নমিনীর নাম:</label>
                <input type="text" name="member_nominee_name" class="form-control" required>
            </div>

            <!-- Nominee NID -->
            <div class="col-md-6 mb-3">
                <label class="form-label">নমিনীর জাতীয় পরিচয় পত্র (NID):</label>
                <input type="text" name="nominee_nid" class="form-control" required>
            </div>

            <!-- Nominee Relation -->
            <div class="col-md-6 mb-3">
                <label class="form-label">নমিনীর সম্পর্ক:</label>
                <input type="text" name="nominee_relation" class="form-control" required>
            </div>

            <!-- Image Upload -->
            <div class="col-md-6 mb-3">
                <label class="form-label">ছবি:</label>
                <input type="file" name="image" class="form-control">
            </div>

            <!-- Membership Date -->
            <div class="col-md-6 mb-3">
                <label class="form-label">সভ্য হইবার তারিখ:</label>
                <input type="date" name="membership_date" class="form-control" required>
            </div>

        </div>

        <button type="submit" class="btn btn-primary">সভ্য তৈরি করুন</button>
    </form>
</div>
@endsection
