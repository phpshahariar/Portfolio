<?php

namespace App\Http\Controllers;

use App\Service;
use App\Touch;
use Illuminate\Http\Request;
use Image;
class ServiceController extends Controller
{
    public function addService(){
        return view('admin.service.add-service');
    }

    public function saveServiceInfo(Request $request){

        $services = new Service();
        if($request->hasFile('service_image')) {
            $image = $request->file('service_image');
            $imageName = $image->getClientOriginalName();
            $fileName = time()."_service_" . $imageName;
            $directory = public_path('/service-images/');
            $imageUrl = $directory.$fileName;
            Image::make($image)->resize(400, 300)->save($imageUrl);
            $services->service_image = $fileName;
        }

        $services->service_name = $request->service_name;
        $services->service_description = $request->service_description;
        $services->publication_status = $request->publication_status;
        $services->save();

        return redirect('/add-service')->with('message', 'Services Info Save Successfully');
    }

    public function manageService(){
        $services = Service::all();
        return view('admin.service.manage-service', ['services'=>$services]);
    }

    public function unpublishedService($id){
        $services = Service::find($id);
        $services->publication_status = 0;
        $services->save();
        return redirect('/manage-service')->with('message', 'Service Unpublished Successfully');
    }

    public function publishedService($id){
        $services = Service::find($id);
        $services->publication_status = 1;
        $services->save();
        return redirect('/manage-service')->with('message', 'Service published Successfully');
    }

    public function editService($id){
        $services = Service::find($id);
        return view('admin.service.edit-service', ['services'=>$services]);
    }

    public function updateService(Request $request){

        $services = Service::find($request->service_id);

        if($request->hasFile('service_image')) {
            if ($services->service_image){
                unlink(public_path('/service-images/').$services->service_image);
            }
            $image = $request->file('service_image');
            $imageName = $image->getClientOriginalName();
            $fileName = time()."_service_" . $imageName;
            $directory = public_path('/service-images/');
            $imageUrl = $directory.$fileName;
            Image::make($image)->resize(400, 300)->save($imageUrl);
            $services->service_image = $fileName;
        }

            $services->service_name = $request->service_name;
            $services->service_description = $request->service_description;
            $services->publication_status = $request->publication_status;
            $services->save();

            return redirect('/manage-service')->with('message', 'Service Update Successfully');


    }

    public function deleteService($id)
    {
        $services = Service::find($id);
        if ($services->service_image) {
            unlink(public_path('/service-images/') . $services->service_image);
        }
        $services->delete();
        return redirect('/manage-service')->with('message', 'Service Delete Successfully');
    }

    public function addTouch(){
        return view('admin.touch.add-touch');
    }

    public function saveTouchInfo(Request $request){
        $touchs = new Touch();
        $touchs->description = $request->description;
        $touchs->location = $request->location;
        $touchs->email = $request->email;
        $touchs->number = $request->number;
        $touchs->font = $request->font;
        $touchs->publication_status = $request->publication_status;
        $touchs->save();
        return redirect('/add-touch')->with('message', 'Touch Info Save Successfully');
    }

    public function manageTouch(){
        $touchs = Touch::all();
        return view('admin.touch.manage-touch', ['touchs'=>$touchs]);
    }

    public function unpublishedTouch($id){
        $touchs = Touch::find($id);
        $touchs->publication_status = 0;
        $touchs->save();
        return redirect('/manage-touch')->with('message', 'Touch Unpublished Successfully');
    }

    public function publishedTouch($id){
        $touchs = Touch::find($id);
        $touchs->publication_status = 1;
        $touchs->save();
        return redirect('/manage-touch')->with('message', 'Touch published Successfully');
    }

    public function editTouch($id){
        $touchs = Touch::find($id);
        return view('admin.touch.edit-touch', ['touchs'=>$touchs]);
    }

    public function updateTouch(Request $request){
        $touchs = Touch::find($request->location_id);
        $touchs->description = $request->description;
        $touchs->location = $request->location;
        $touchs->email = $request->email;
        $touchs->number = $request->number;
        $touchs->font = $request->font;
        $touchs->publication_status = $request->publication_status;
        $touchs->save();
        return redirect('/manage-touch')->with('message', 'Touch Info Update Successfully');
    }

    public function deleteTouch($id){
        $touchs = Touch::find($id);
        $touchs->delete();
        return redirect('/manage-touch')->with('message', 'Touch Info Delete');
    }

}
