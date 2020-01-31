<?php

namespace App\Http\Controllers;
use App\Strimming;
use Illuminate\Http\Request;

class StrimingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Strimming::orderBy('id', 'DESC')->paginate(10);
        return view('admin.streaming.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.streaming.create');
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
            'title'=>'required',
            'start_time'=>'required',
            'image'=>'required',
            'video_link'=>'required',
        ];
        $this->validate($request,$rules);
        $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('stream-files', $filename);
        
            $form_data = array(
                'title'=> $request->title,
                'start_time'=> $request->start_time,
                'image'=> $filename,
                'video_link'=> $request->video_link,
            );

            Strimming::create($form_data);
        return redirect()->back()->with('success', 'Successfully added .');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Strimming::find($id);
        return view('admin.streaming.show',compact('data'));
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
        Strimming::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Delete successfully');
    }
}