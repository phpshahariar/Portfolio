<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use Image;
class TestimonialController extends Controller
{
    public function addTestimonial(){
        return view('admin.testimonial.add-testimonial');
    }

    public function saveTestimonialInfo(Request $request){
        $testimonials = new Testimonial();

        if($request->hasFile('client_picture')){
            $image = $request->file('client_picture');
            $imageName = $image->getClientOriginalName();
            $fileName = time()."_testimonial_".$imageName;
            $directory = public_path('/service-images/');
            $imageUrl = $directory.$fileName;
            Image::make($image)->resize(100, 100)->save($imageUrl);
            $testimonials->client_picture = $fileName;

            $testimonials->author_name = $request->author_name;
            $testimonials->company_name = $request->company_name;
            $testimonials->client_comment = $request->client_comment;
            $testimonials->publication_status = $request->publication_status;
            $testimonials->save();
            return redirect('/add-testimonial')->with('message', 'Client Info Save Successfully');
        }
    }

    public function manageTestimonialInfo(){
        $testimonials = Testimonial::all();
        return view('admin.testimonial.manage-testimonial', ['testimonials'=>$testimonials]);
    }

    public function unpublishedTestimonialInfo($id){
        $testimonials = Testimonial::find($id);
        $testimonials->publication_status = 0;
        $testimonials->save();
        return redirect('/manage-testimonial')->with('message', 'Client Info Unpublished Successfully');
    }

    public function publishedTestimonialInfo($id){
        $testimonials = Testimonial::find($id);
        $testimonials->publication_status = 1;
        $testimonials->save();
        return redirect('/manage-testimonial')->with('message', 'Client Info Published Successfully');
    }

    public function editTestimonialInfo($id){
        $testimonials = Testimonial::find($id);
        return view('admin.testimonial.edit-testimonial', ['testimonials'=>$testimonials]);
    }

    public function updateTestimonialInfo(Request $request){
        $testimonials  = Testimonial::find($request->author_id);
        if($request->hasFile('client_picture')){
            if($testimonials->client_picture){
                unlink(public_path('service-images/').$testimonials->client_picture);
            }

            $image = $request->file('client_picture');
            $imageName = $image->getClientOriginalName();
            $fileName = time()."_testimonial_".$imageName;
            $directory = public_path('/service-images/');
            $imageUrl = $directory.$fileName;
            Image::make($image)->resize(100, 100)->save($imageUrl);
            $testimonials->client_picture = $fileName;
        }
        $testimonials->author_name = $request->author_name;
        $testimonials->company_name = $request->company_name;
        $testimonials->client_comment = $request->client_comment;
        $testimonials->publication_status = $request->publication_status;
        $testimonials->save();
        return redirect('/manage-testimonial')->with('message', 'Client Info Update Successfully');
    }
}
