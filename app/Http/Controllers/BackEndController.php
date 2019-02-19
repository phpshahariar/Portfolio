<?php

namespace App\Http\Controllers;

use App\BackEnd;
use Illuminate\Http\Request;

class BackEndController extends Controller
{
    public function addHome(){
        return view('admin.home.add-home');
    }

    public function saveHomeInfo(Request $request){

        $this->validate($request, [
            'email'=> 'required',
            'own_address' => 'required',
            'heading_name' => 'required',
            'title' => 'required',
            'sub_title' => 'required',
            'phone' => 'required',
            'publication_status' => 'required',
        ]);

        $backend = new BackEnd();
        $backend->heading_name = $request->heading_name;
        $backend->title = $request->title;
        $backend->sub_title = $request->sub_title;
        $backend->email = $request->email;
        $backend->phone = $request->phone;
        $backend->own_address = $request->own_address;
        $backend->publication_status = $request->publication_status;
        $backend->save();
        return redirect('/add-home')->with('message', 'Home Info Save Successfully');
    }

    public function manageHomeInfo(){
        $backends = BackEnd::all();
        return view('admin.home.manage-home', ['backends'=>$backends]);
    }

    public function unpublishedInfo($id){
        $backend = BackEnd::find($id);
        $backend->publication_status =0;
        $backend->save();
        return redirect('/manage-home')->with('message', 'Info Unpublished Successfully');
    }

    public function publishedInfo($id){
        $backend = BackEnd::find($id);
        $backend->publication_status =1;
        $backend->save();
        return redirect('/manage-home')->with('message', 'Info published Successfully');
    }

    public function editInfo($id){
        $backend = BackEnd::find($id);
        return view('admin.home.edit-info',['backend'=>$backend]);
    }

    public function updateInfo(Request $request){
        $backend = BackEnd::find($request->heading_id);
        $backend->heading_name = $request->heading_name;
        $backend->title = $request->title;
        $backend->sub_title = $request->sub_title;
        $backend->email = $request->email;
        $backend->phone = $request->phone;
        $backend->own_address = $request->own_address;
        $backend->publication_status = $request->publication_status;
        $backend->save();
        return redirect('/manage-home')->with('message', 'Information Update Successfully');
    }

    public function deleteInfo($id){
        $backend = BackEnd::find($id);
        $backend->delete();
        return redirect('/manage-home')->with('message', 'Information Delete Successfully');
    }


}
