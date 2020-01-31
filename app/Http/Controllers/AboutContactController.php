<?php

namespace App\Http\Controllers;
use App\AboutContact;
use Illuminate\Http\Request;

class AboutContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = AboutContact::orderBy('id', 'DESC')->take(1)->get();
        return view('admin.about-contact.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about-contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'about_content'=>'required',
            'address'=>'required',
            'email'=>'required',
            'facebook'=>'required',
            'instagram'=>'required',
            'youtube'=>'required',
            'discord'=>'required',
        ];
        $this->validate($request,$rules);
        AboutContact::create($request->all());
        return redirect()->back()->with('success','Successfully about & contact added !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = AboutContact::find($id);
        return view('admin.about-contact.edit',compact('data'));
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
        $rules = [
            'about_content'=>'required',
            'address'=>'required',
            'email'=>'required',
            'facebook'=>'required',
            'instagram'=>'required',
            'youtube'=>'required',
            'discord'=>'required',
        ];
        $this->validate($request,$rules);
        $record = AboutContact::find($id);
        $record->update($request->all());
        return redirect()->back()->with('success', 'Update successfully');
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