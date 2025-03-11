@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mt-3 mb-4">সভ্য তালিকা</h2>

    <div>
        <a href="{{ route('members.create') }}" class="btn btn-success">নতুন সভ্য তৈরি করুন</a>
    </div><br>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>সভ্য নং</th>
                <th>সভ্যের নাম</th>
                <th>পিতার নাম</th>
                <th>মাতার নাম</th>
                <th>জাতীয় পরিচয় পত্র</th>
                <th>ঠিকানা</th>
                <th>পেশা</th>
                <th>নমিনীর নাম</th>
                <th>নমিনীর জাতীয় পরিচয় পত্র</th>
                <th>সম্পর্ক</th>
                <th>ছবি</th>
                <th>সভ্য হইবার তারিখ</th>
                <th>অ্যাকশন</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
                <tr>
                    <td>{{ $member->member_no }}</td>
                    <td>{{ $member->member_name }}</td>
                    <td>{{ $member->member_father_name }}</td>
                    <td>{{ $member->member_mother_name }}</td>
                    <td>{{ $member->member_nid }}</td>
                    <td>{{ $member->member_address }}</td>
                    <td>{{ $member->member_profession }}</td>
                    <td>{{ $member->member_nominee_name }}</td>
                    <td>{{ $member->nominee_nid }}</td>
                    <td>{{ $member->nominee_relation }}</td>
                    <td>
                        @if ($member->image)
                            <img src="{{ asset('storage/'.$member->image) }}" alt="Member Image" width="50">
                        @else
                            কোনও ছবি নেই
                        @endif
                    </td>
                    <td>{{ $member->membership_date }}</td>
                    <td>
                        <a href="{{ route('members.edit', $member->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <div class="mt-2">
                            <a href="{{ route('member.profile', $member->id) }}" class="btn btn-sm btn-warning">View</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
