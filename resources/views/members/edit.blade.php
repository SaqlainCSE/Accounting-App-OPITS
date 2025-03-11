@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-lg mt-4">
        <div class="card-header bg-warning text-white">
            <h3 class="mb-0">সভ্য আপডেট করুন</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('members.update', $member->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <!-- Member Name -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">সভ্যের নাম:</label>
                            <input type="text" name="member_name" class="form-control" value="{{ $member->member_name }}" required>
                        </div>
                    </div>

                    <!-- Member No -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">সভ্য নং:</label>
                            <input type="text" name="member_no" class="form-control" value="{{ $member->member_no }}" required>
                        </div>
                    </div>

                    <!-- Father's Name -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">পিতার নাম:</label>
                            <input type="text" name="member_father_name" class="form-control" value="{{ $member->member_father_name }}">
                        </div>
                    </div>

                    <!-- Mother's Name -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">মাতার নাম:</label>
                            <input type="text" name="member_mother_name" class="form-control" value="{{ $member->member_mother_name }}">
                        </div>
                    </div>

                    <!-- NID -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">জাতীয় পরিচয় পত্র (NID):</label>
                            <input type="text" name="member_nid" class="form-control" value="{{ $member->member_nid }}">
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">ঠিকানা:</label>
                            <input type="text" name="member_address" class="form-control" value="{{ $member->member_address }}">
                        </div>
                    </div>

                    <!-- Profession -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">পেশা:</label>
                            <input type="text" name="member_profession" class="form-control" value="{{ $member->member_profession }}">
                        </div>
                    </div>

                    <!-- Nominee Name -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">নমিনীর নাম:</label>
                            <input type="text" name="member_nominee_name" class="form-control" value="{{ $member->member_nominee_name }}">
                        </div>
                    </div>

                    <!-- Nominee NID -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">নমিনীর জাতীয় পরিচয় পত্র (NID):</label>
                            <input type="text" name="nominee_nid" class="form-control" value="{{ $member->nominee_nid }}">
                        </div>
                    </div>

                    <!-- Nominee Relation -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">নমিনীর সম্পর্ক:</label>
                            <input type="text" name="nominee_relation" class="form-control" value="{{ $member->nominee_relation }}">
                        </div>
                    </div>

                    <!-- Membership Date -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">সভ্য হইবার তারিখ:</label>
                            <input type="date" name="membership_date" class="form-control" value="{{ $member->membership_date }}">
                        </div>
                    </div>

                    <!-- Profile Image -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">ছবি:</label>
                            <input type="file" name="image" class="form-control">
                            @if ($member->image)
                                <img src="{{ asset('storage/' . $member->image) }}" class="mt-2 img-thumbnail" width="100">
                            @endif
                        </div>
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">সভ্য আপডেট করুন</button>
                    <a href="{{ url('membersList') }}" class="btn btn-secondary">বাতিল করুন</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
