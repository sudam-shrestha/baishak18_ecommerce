<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\VendorRequestNotification;
use App\Models\Admin;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class PageController extends BaseController
{
    public function home()
    {
        $vendors = Vendor::where("status", "approved")->where('expire_date', ">", now())->get();
        return view('frontend.home', compact("vendors"));
    }

    public function vendor_request(Request $request)
    {
        $request->validate([
            "name" => "required|max:50",
            "email" => "required|unique:vendors|max:50|email",
            "address" => "required|max:50",
            "contact_no" => "required",
        ]);

        $vendor = new Vendor();
        $vendor->name = $request->name;
        $vendor->email = $request->email;
        $vendor->contact_no = $request->contact_no;
        $vendor->address = $request->address;
        $vendor->password =  Hash::make("!@#!@#$%");
        $vendor->save();
        $admins = Admin::all();
        Mail::to($admins)->send(new VendorRequestNotification($vendor));
        toast("Your request has been successfull submitted!", "success");
        return redirect()->back();
    }
}
