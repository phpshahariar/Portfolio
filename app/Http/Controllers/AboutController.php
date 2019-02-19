<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function addAbout(){
        return view('admin.about.add-about');
    }

    public function saveAboutInfo(Request $request){

        $this->validate($request,[

            'designation_title'=> 'required',
            'description'=> 'required',
            'publication_status'=> 'required'
        ]);


        $abouts = new About();
        $abouts->designation_title = $request->designation_title;
        $abouts->description = $request->description;
        $abouts->publication_status = $request->publication_status;
        $abouts->save();
        return redirect('add-about')->with('message', 'About Info Save Successfully');
    }

    public function manageAboutInfo(){
        $abouts = About::all();
        return view('admin.about.manage-about', ['abouts'=>$abouts]);
    }

    public function unpublishedAbout($id){
        $abouts = About::find($id);
        $abouts->publication_status = 0;
        $abouts->save();
        return redirect('manage-about')->with('message', 'About Info Unpublished Successfully');
    }

    public function publishedAbout($id){
        $abouts = About::find($id);
        $abouts->publication_status = 1;
        $abouts->save();
        return redirect('manage-about')->with('message', 'About Info Published Successfully');
    }

    public function editAbout($id){
        $abouts = About::find($id);
        return view('admin.about.edit-about', ['abouts'=>$abouts]);
    }

    public function updateAbout(Request $request){
        $abouts = About::find($request->designation_id);
        $abouts->designation_title = $request->designation_title;
        $abouts->description = $request->description;
        $abouts->publication_status = $request->publication_status;
        $abouts->save();
        return redirect('manage-about')->with('message', 'About Info Save Successfully');
    }

    public function deleteAbout($id){
        $abouts = About::find($id);
        $abouts->delete();
        return redirect('manage-about')->with('message', 'About Info Delete Successfully');
    }
}
