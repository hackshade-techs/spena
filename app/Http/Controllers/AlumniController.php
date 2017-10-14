<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;
use Image;
use App\Mail\AlumniRegistration;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.alumni-register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate(request(), [
            'firstname' => 'required|min:1|max:255',
            'lastname' => 'required|min:1|max:255',
            'gender' => 'required|min:1|max:255',
            'dob' => 'required',
            'email' => 'required|min:1|max:255',
            'contact' => 'required|min:1|max:255',
            'address' => 'required|min:1|max:255',
            'image' => 'required|mimes:jpeg,bmp,png,jpg|max:2048',
            'entry_date' => 'required|min:1|max:255',
            'exit_date' => 'required|min:1|max:255',
            'institution' => 'required|min:1|max:255',
            'occupation' => 'required|min:1|max:255',
        ]);

        $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads');
        $img = Image::make($image->getRealPath());
        $img->resize(400, 148, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);

        $alumni = Alumni::create([
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'gender' => request('gender'),
            'dob' => request('dob'),
            'email' => request('email'),
            'contact' => request('contact'),
            'address' => request('address'),
            'image' => 'uploads/'.$input['imagename'],
            'entry_date' => request('entry_date'),
            'exit_date' => request('exit_date'),
            'institution' => request('institution'),
            'occupation' => request('occupation'),
        ]);

        //$this->sendMail($alumni);

        return back()->withSuccess('Your Information has been submitted successfullly, Please wait for verification to appear in the Alumni Results');
    }

    public function sendMail($alumni)
    {
        $emailReceivers = ['maronwhite6@gmail.com'];
       \Mail::to($emailReceivers)->send(new AlumniRegistration($alumni));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumni = Alumni::find($id);
        return view('pages.alumni-single', compact('alumni'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
}
