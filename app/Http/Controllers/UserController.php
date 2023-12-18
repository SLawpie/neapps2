<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (UserController::decryptRequest($id)) {
            $id = UserController::decryptRequest($id)[0];
        } else {
            return view('dashboard'); 
        }

        return view('user.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (UserController::decryptRequest($id)) {
            $id = UserController::decryptRequest($id)[0];
        } else {
            return view('dashboard'); 
        }

        return view('user.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'new-username' => 'required|alpha_num|max:128',
            'new-firstname' => 'required|max:128',
            'new-lastname' => 'required|max:128',
        ]);

        $user = Auth::user();
        $user->username = $request->get('new-username');
        $user->firstname = $request->get('new-firstname');
        $user->lastname = $request->get('new-lastname');
        $user->save();

        // return view('user.edit', ['id' => $id])->with(['success' => "Dane zostały zmienione."]);
        return redirect()->route('user.show', ['id' => $id])->with(['success' => "Dane zostały zmienione."]);
    }

    public function changePasswordForm($id)
    {

        return view('user.change-password');
    }

    public function changePassword(Request $request, $id)
    {
        if (!(Hash::check($request->get('password'), Auth::user()->password))) {
            // The passwords no matches
            return view('user.change-password')->with(['errorMessage' => "Niepoprawne obecne hasło."]);
        }

        if(strcmp($request->get('password'), $request->get('newpassword')) == 0) {
            //Current password and new password are same
            return view('user.change-password')->with(['errorMessage' => "Nowe hasło nie może być takie samo jak aktualne." ]);
        }

        $validatedData = $request->validate([
            'password' => 'required',
            'newpassword' => 'required|min:6|max:30',
            'confirm-newpassword' => 'same:newpassword'
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('newpassword'));
        $user->save();

        return redirect()->route('user.show',['id' => $id])->with(['success' => "Hasło zostało zmienione."]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //
    // Decrypt request
    //
    public function decryptRequest($request)
    {

        try {
            $decrypted = Crypt::decryptString($request);
        } catch (DecryptException $e) {
            return false;
        }
        
        return explode(";", $decrypted);
    }
}
