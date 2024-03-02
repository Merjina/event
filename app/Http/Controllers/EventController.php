<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userdetails;
use Illuminate\Support\Facades\Session; 

class EventController extends Controller
{
    public function index(){

       return view('fejvoks');
    } 
    public function schedule()
    {
        return view('schedule');
    }

    public function speaker()
    {
        return view('speaker');
    }

    public function venue()
    {
        return view('venue');
    }

    public function register()
    {
        return view('register');
    }
    public function submitdata(Request $request)
    {
        $uniqueId = $request->input('unique_id');
        if (!$uniqueId) {
            return redirect()->back()->with('error', 'Error: Unique ID is missing.');
        }
    
        $checkBox1 = implode(',', $request->input('qualif', []));
        $checkBox2 = implode(',', $request->input('langs', []));
    
        $data = array(
            'unique_id' => $uniqueId,
            'name' => $request->input('name1'),
            'email' => $request->input('email'),
            'gender' => $request->input('gender'),
            'd_o_b' => $request->input('dob'),
            'Religion' => $request->input('religion'),
            'Caste' => $request->input('caste'),
            'fname' => $request->input('fname'),
            'foccup' => $request->input('foccup'),
            'mname' => $request->input('mname'),
            'moccup' => $request->input('moccup'),
            'qualif' => $checkBox1,
            'address' => $request->input('address'),
            'cnumber' => $request->input('number'),
            'degree' => $request->input('degree'),
            'langs' => $checkBox2
        );
    
        if (Userdetails::insertUserDetails($data)) {
            $uniqueId = $request->input('unique_id');
            return redirect()->back()->with('uniqueId', $uniqueId);
        } else {
            return redirect()->back()->with('error', 'Error: Unable to insert user details.');
        }
    }
    public function loginpage()
    {
        return view('loginpage');
    }
    public function checkLogin(Request $request)
    {
        $uniqueId = $request->input('uniqueid');
        $dob = $request->input('dob');

        $isUniqueIdValid = Userdetails::checkUniqueId($uniqueId);

        if ($isUniqueIdValid) {
            Session::put('uniqueid', $uniqueId);
            return redirect()->route('profile', ['unique_id' => $uniqueId]);
        } else {
            return redirect()->route('home')->with('error', 'Incorrect Unique ID');
        }
    }

    public function profile($unique_id)
    {
        $userdetails = Userdetails::getUserdetails($unique_id);
        $qualif = explode(',', $userdetails->qualif);
        $langs = explode(',', $userdetails->langs);

        return view('profile', compact('userdetails', 'qualif', 'langs'));
    }

    public function updateUserdetails(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = [
                'name' => $request->input('name1'),
                'email' => $request->input('email'),
                'gender' => $request->input('gender'),
                'd_o_b' => $request->input('dob'),
                'Religion' => $request->input('religion'),
                'Caste' => $request->input('caste'),
                'fname' => $request->input('fname'),
                'foccup' => $request->input('foccup'),
                'mname' => $request->input('mname'),
                'moccup' => $request->input('moccup'),
                'qualif' => implode(',', $request->input('qualif')),
                'address' => $request->input('address'),
                'cnumber' => $request->input('number'),
                'degree' => $request->input('degree'),
                'langs' => implode(',', $request->input('langs')),
            ];

            if (Userdetails::updateUserdetails($data, $request->input('unique_id'))) {
                return redirect()->route('profile', ['unique_id' => $request->input('unique_id')]);
            } else {
                return "Error: Unable to update user profile.";
            }
        }
    }
}