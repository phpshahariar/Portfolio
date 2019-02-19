<?php

namespace App\Http\Controllers;

use App\Logo;
use Illuminate\Http\Request;
use Image;
class LogoController extends Controller
{
    public function addLogoNameInfo(){
        return view('admin.logo_name.add-logo-name');
    }

    public function saveLogoNameInfo(Request $request){
        $logoImage = $request->file('image');
        $imageName = $logoImage->getClientOriginalName();
        $directory = 'service-images/';
        $imgUrl = $directory.$imageName;
        Image::make($logoImage)->save($imgUrl);

        $logos = new Logo();
        $logos->name = $request->name;
        $logos->title = $request->title;
        $logos->image = $imgUrl;
        $logos->publication_status = $request->publication_status;
        $logos->save();

        return redirect('/add-logo-name')->with('message', 'Logo and Name Save Successfully');
    }

    public function manageLogoNameInfo(){
        $logos = Logo::all();
        return view('admin.logo_name.manage-logo-name', ['logos'=>$logos]);
    }

    public function unpublishedLogoNameInfo($id){
        $logos = Logo::find($id);
        $logos->publication_status=0;
        $logos->save();
        return redirect('/manage-logo-name')->with('message', 'Logo & Name unpublished Successfully');
    }

    public function publishedLogoNameInfo($id){
        $logos = Logo::find($id);
        $logos->publication_status=1;
        $logos->save();
        return redirect('/manage-logo-name')->with('message', 'Logo & Name published Successfully');
    }

    public function editLogoNameInfo($id){
        $logos = Logo::find($id);
        return view('admin.logo_name.edit-logo-name', ['logos'=>$logos]);
    }

    public function updateLogoNameInfo(Request $request){
        $profile_image = $request->file('image');

        if($profile_image){
            $logos = Logo::find($request->name_id);
            unlink($logos->image);

            $logoImage = $request->file('image');
            $imageName = $logoImage->getClientOriginalName();
            $directory = 'service-images/';
            $imgUrl = $directory.$imageName;
            Image::make($logoImage)->resize(200, 200)->save($imgUrl);

            $logos->name = $request->name;
            $logos->title = $request->title;
            $logos->image = $imgUrl;
            $logos->publication_status = $request->publication_status;
            $logos->save();


        }else{
            $logos = Logo::find($request->name_id);
            $logos->name = $request->name;
            $logos->title = $request->title;
            $logos->publication_status = $request->publication_status;
            $logos->save();

            return redirect('/manage-logo-name')->with('message', 'Profile Update Successfully');
        }
    }

    public function deleteLogoNameInfo($id){
        $logos = Logo::find($id);
        $logos->delete();
        return redirect('/manage-logo-name')->with('message', 'Profile Delete Successfully');
    }
}
