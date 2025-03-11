<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function membersList()
    {
        $members = Member::all();
        return view('members.list', compact('members'));
    }

    public function show($id)
    {
        $member = Member::findOrFail($id);
        return view('members.profile', compact('member'));
    }

    public function membersCreate()
    {
        return view('members.create');
    }

    public function membersStore(Request $request)
    {
        $request->validate([
            'member_no' => 'required|string|max:255',
            'member_name' => 'required|string|max:255',
            'member_father_name' => 'required|string|max:255',
            'member_mother_name' => 'required|string|max:255',
            'member_nid' => 'required|string|max:255',
            'member_address' => 'required|string|max:500',
            'member_profession' => 'nullable|string|max:255',
            'member_nominee_name' => 'required|string|max:255',
            'nominee_nid' => 'required|string|max:255',
            'nominee_relation' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'membership_date' => 'required|date',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('members', 'public');
        }

        Member::create([
            'member_no' => $request->member_no,
            'member_name' => $request->member_name,
            'member_father_name' => $request->member_father_name,
            'member_mother_name' => $request->member_mother_name,
            'member_nid' => $request->member_nid,
            'member_address' => $request->member_address,
            'member_profession' => $request->member_profession,
            'member_nominee_name' => $request->member_nominee_name,
            'nominee_nid' => $request->nominee_nid,
            'nominee_relation' => $request->nominee_relation,
            'image' => $imagePath,
            'membership_date' => $request->membership_date,
        ]);

        return redirect()->back()->with('success', 'Member created successfully!');
    }

    public function membersEdit($id)
    {
        $member = Member::findOrFail($id);
        return view('members.edit', compact('member'));
    }

    public function membersUpdate(Request $request, $id)
    {
        $member = Member::findOrFail($id);

        $request->validate([
            'member_name' => 'required|string|max:255',
            'member_no' => 'required|string|max:50',
            'member_nid' => 'nullable|string|max:50',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($member->image && file_exists(storage_path('app/public/' . $member->image))) {
                unlink(storage_path('app/public/' . $member->image));
            }

            // Store new image
            $imagePath = $request->file('image')->store('members', 'public');
            $data['image'] = $imagePath;
        }

        $member->update($data);

        return redirect()->route('membersList')->with('success', 'Member updated successfully!');
        }
}
