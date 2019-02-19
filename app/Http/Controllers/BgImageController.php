<?php

namespace App\Http\Controllers;

use App\BgImage;
use Illuminate\Http\Request;
use Image;
class BgImageController extends Controller
{
    public function addBgImage(){
        return view('admin.bgimage.add-bg-image');
    }

    public function saveBgImage(Request $request){
        $bg_image = $request->file('background_image');
        $bgImageName = $bg_image->getClientOriginalName();
        $directory = 'service-images/';
        $imgBgUrl = $directory.$bgImageName;
        Image::make($bg_image)->save($imgBgUrl);


        $bgimages = new BgImage();
        $bgimages->background_image = $imgBgUrl;
        $bgimages->publication_status = $request->publication_status;
        $bgimages->save();

        return redirect('/add-bg-image')->with('message', 'Background image save Successfully');
    }

    public function manageBgImage(){
        $bgimages = BgImage::all();
        return view('admin.bgimage.manage-bg-image', ['bgimages'=>$bgimages]);
    }

    public function unpublishedBgImage($id){
        $bgimages = BgImage::find($id);
        $bgimages->publication_status = 0;
        $bgimages->save();
        return redirect('/manage-bg-image')->with('message', 'Background image Unpublished Successfully');
    }

    public function publishedBgImage($id){
        $bgimages = BgImage::find($id);
        $bgimages->publication_status = 1;
        $bgimages->save();
        return redirect('/manage-bg-image')->with('message', 'Background image Published Successfully');
    }

    public function editBgImage($id){
        $bgimages = BgImage::find($id);
        return view('admin.bgimage.edit-bgimage', ['bgimages'=>$bgimages]);
    }

    public function updateBgImage(Request $request){
        $bgImage = $request->file('background_image');

        if($bgImage){
            $bgimages = BgImage::find($request->background_id);
            unlink($bgimages->background_image);

            $bg_image = $request->file('background_image');
            $bgImageName = $bg_image->getClientOriginalName();
            $directory = 'service-images/';
            $imgBgUrl = $directory.$bgImageName;
            Image::make($bg_image)->save($imgBgUrl);

            $bgimages->background_image = $imgBgUrl;
            $bgimages->publication_status = $request->publication_status;
            $bgimages->save();


        }else{
            $bgimages = BgImage::find($request->background_id);
            $bgimages->publication_status = $request->publication_status;
            $bgimages->save();

            return redirect('/manage-bg-image')->with('message', 'Background Image Update Successfully');
        }
    }

    public function deleteBgImage($id){
        $bgimages = BgImage::find($id);
        $bgimages->delete();
        return redirect('/manage-bg-image')->with('message', 'Background Image Delete Successfully');
    }
}
