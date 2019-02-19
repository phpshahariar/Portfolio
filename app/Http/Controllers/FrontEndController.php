<?php

namespace App\Http\Controllers;

use App\About;
use App\BackEnd;
use App\BgImage;
use App\Blog;
use App\Contact;
use App\Education;
use App\Experience;
use App\Logo;
use App\Portfolio;
use App\Service;
use App\Testimonial;
use App\Touch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontEndController extends Controller
{
    public function index(){
        $backends = BackEnd::where('publication_status', 1)->get();
        $logos = Logo::where('publication_status', 1)->get();
        $abouts = About::where('publication_status', 1)->get();
        $services = Service::where('publication_status', 1)->orderBy('id', 'desc')->get();
        $testimonials = Testimonial::where('publication_status', 1)->get();
        $educations = Education::where('publication_status', 1)->get();
        $experiences = Experience::where('publication_status', 1)->get();
        $category_name = Portfolio::select('category_name')->where('publication_status', 1)->groupBy('category_name')->orderBy('id', 'desc')->get();
        $portfolios = Portfolio::where('publication_status', 1)->orderBy('id', 'desc')->get();
        $blogs = Blog::where('publication_status', 1)->orderBy('id', 'desc')->get();
        $bgimages = BgImage::where('publication_status', 1)->first();
        $touchs = Touch::where('publication_status', 1)->get();
        return view('front.home-content', [
            'backends'=>$backends,
            'logos'=>$logos,
            'abouts'=>$abouts,
            'services'=>$services,
            'testimonials'=>$testimonials,
            'educations'=>$educations,
            'experiences'=>$experiences,
            'portfolios'=>$portfolios,
            'category_name'=>$category_name,
            'blogs'=>$blogs,
            'bgimages'=>$bgimages,
            'touchs'=>$touchs
        ]);
    }


    public function contactStore(Request $request){
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        if($contact->save()){
            $email = 'shahariar.ikbal86@gmail.com';
            Mail::send('emails.contact_form',  ['name' => $request->name, 'email' => $request->email, 'mage' => $request->message], function ($msg) use ($email, $request)
            {
                $msg->from('ronweb.bd@gmail.com', 'Portfolio');
                $msg->subject('Send Form My portfolio');
                $msg->to($email);
            });
        }
        return redirect()->back();


    }
}
