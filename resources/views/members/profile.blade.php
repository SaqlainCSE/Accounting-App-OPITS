@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-lg mt-4">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">সভ্য প্রোফাইল</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- Profile Image -->
                <div class="col-md-4 text-center">
                    @if ($member->image)
                        <img src="{{ asset('storage/'.$member->image) }}" class="img-fluid rounded-circle" width="150" alt="Profile Image">
                    @else
                        <img src="{{ asset('images/default-user.png') }}" class="img-fluid rounded-circle" width="150" alt="Default Image">
                    @endif
                    <h4 class="mt-3">{{ $member->member_name }}</h4>
                    <span class="badge bg-success">{{ $member->member_no }}</span>
                </div>

                <!-- Member Details -->
                <div class="col-md-8">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>পিতার নাম:</th>
                                <td>{{ $member->member_father_name }}</td>
                            </tr>
                            <tr>
                                <th>মাতার নাম:</th>
                                <td>{{ $member->member_mother_name }}</td>
                            </tr>
                            <tr>
                                <th>জাতীয় পরিচয় পত্র:</th>
                                <td>{{ $member->member_nid }}</td>
                            </tr>
                            <tr>
                                <th>ঠিকানা:</th>
                                <td>{{ $member->member_address }}</td>
                            </tr>
                            <tr>
                                <th>পেশা:</th>
                                <td>{{ $member->member_profession }}</td>
                            </tr>
                            <tr>
                                <th>নমিনীর নাম:</th>
                                <td>{{ $member->member_nominee_name }}</td>
                            </tr>
                            <tr>
                                <th>নমিনীর জাতীয় পরিচয় পত্র:</th>
                                <td>{{ $member->nominee_nid }}</td>
                            </tr>
                            <tr>
                                <th>সম্পর্ক:</th>
                                <td>{{ $member->nominee_relation }}</td>
                            </tr>
                            <tr>
                                <th>সভ্য হইবার তারিখ:</th>
                                <td>{{ $member->membership_date }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Action Buttons -->
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('members.edit', $member->id) }}" class="btn btn-warning me-2">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
