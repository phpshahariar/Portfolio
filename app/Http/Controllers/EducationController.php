<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Contact;
use App\Education;
use App\Experience;
use App\Portfolio;
use Illuminate\Http\Request;
use Image;

class EducationController extends Controller
{
    public function addEducation(){
        return view('admin.education.add-education');
    }

    public function saveEducationInfo(Request $request){
        $educations = new Education();

        $educations->university_name = $request->university_name;
        $educations->university_description = $request->university_description;

        $educations->college_name = $request->college_name;
        $educations->college_description = $request->college_description;

        $educations->school_name = $request->school_name;
        $educations->school_description = $request->school_description;
        $educations->publication_status = $request->publication_status;
        $educations->save();


        return redirect('/add-education')->with('message', 'Education Info Save Successfully');
    }

    public function manageEducation(){
        $educations = Education::all();
        return view('admin.education.manage-education', ['educations'=>$educations]);
    }

    public function unpublishedEducation($id){
        $educations = Education::find($id);
        $educations->publication_status = 0;
        $educations->save();
        return redirect('/manage-education')->with('message', 'Education Info Unpublished Save Successfully');
    }

    public function publishedEducation($id){
        $educations = Education::find($id);
        $educations->publication_status = 1;
        $educations->save();
        return redirect('/manage-education')->with('message', 'Education Info Published Save Successfully');
    }

    public function editEducationInfo($id){
        $educations = Education::find($id);
        return view('admin.education.edit-education', ['educations'=>$educations]);
    }

    public function updateEducationInfo(Request $request){
        $educations = Education::find($request->university_id);
        $educations->university_name = $request->university_name;
        $educations->university_description = $request->university_description;

        $educations->college_name = $request->college_name;
        $educations->college_description = $request->college_description;

        $educations->school_name = $request->school_name;
        $educations->school_description = $request->school_description;
        $educations->publication_status = $request->publication_status;
        $educations->save();
        return redirect('/manage-education')->with('message', 'Education Info Update Successfully');
    }

    public function deleteEducationInfo($id){
        $educations = Education::find($id);
        $educations->delete();
        return redirect('/manage-education')->with('message', 'Education Info Delete Successfully');
    }




    public function addExperience(){
        return view('admin.experience.add-experience');
    }

    public function saveExperienceInfo(Request $request){
        $experiences = new Experience();
        $experiences->first_office  = $request->first_office;
        $experiences->first_project  = $request->first_project;
        $experiences->second_office  = $request->second_office;
        $experiences->second_project  = $request->second_project;
        $experiences->third_office  = $request->third_office;
        $experiences->third_project  = $request->third_project;
        $experiences->publication_status  = $request->publication_status;
        $experiences->save();
        return redirect('/add-experience')->with('message', 'Experience info Save Successfully');
    }

    public function manageExperience(){
        $experiences = Experience::all();
        return view('admin.experience.manage-experience', ['experiences'=>$experiences]);
    }

    public function unpublishedExperience($id){
        $experiences = Experience::find($id);
        $experiences->publication_status = 0;
        $experiences->save();
        return redirect('/manage-experience')->with('message', 'Experience Info Unpublished Successfully');
    }

    public function publishedExperience($id){
        $experiences = Experience::find($id);
        $experiences->publication_status = 1;
        $experiences->save();
        return redirect('/manage-experience')->with('message', 'Experience Info Published Successfully');
    }

    public function editExperience($id){
        $experiences = Experience::find($id);
        return view('admin.experience.edit-experience', ['experiences'=>$experiences]);
    }

    public function updateExperience(Request $request){
        $experiences = Experience::find($request->first_id);
        $experiences->first_office = $request->first_office;
        $experiences->first_project = $request->first_project;
        $experiences->second_office = $request->second_office;
        $experiences->second_project = $request->second_project;
        $experiences->third_office = $request->third_office;
        $experiences->third_project = $request->third_project;
        $experiences->publication_status = $request->publication_status;
        $experiences->save();
        return redirect('/manage-experience')->with('message', 'Experience Update Save Successfully');
    }

    public function deleteExperience($id){
        $experiences = Experience::find($id);
        $experiences->delete();
        return redirect('/manage-experience')->with('message', 'Experience Delete Successfully');
    }


    public function addPortfolio(){
        return view('admin.portfolio.add-portfolio');
    }

    public function savePortfolioInfo(Request $request){
        $portfolios = new Portfolio();
        if($request->hasFile('project_file')){
            $image = $request->file('project_file');
            $imageName = $image->getClientOriginalName();
            $fileName = time()."_portfolio_".$imageName;
            $directory = public_path('/files/');
            $fileUrl = $directory.$fileName;
            Image::make($image)->resize(500, 400)->save($fileUrl);
            $portfolios->project_file = $fileName;

        }

        $portfolios->category_name = $request->category_name;
        $portfolios->project_name = $request->project_name;
        $portfolios->project_title = $request->project_title;
        $portfolios->project_category = $request->project_category;
        $portfolios->publication_status = $request->publication_status;
        $portfolios->save();
        return redirect('/add-portfolio')->with('message', 'Portfolio Information Save Successfully');
    }

    public function managePortfolioInfo(){
        $portfolios = Portfolio::all();
        return view('admin.portfolio.manage-portfolio', ['portfolios'=>$portfolios]);
    }

    public function unpublishedPortfolio($id){
        $portfolios = Portfolio::find($id);
        $portfolios->publication_status = 0;
        $portfolios->save();
        return redirect('/manage-portfolio')->with('message', 'Portfolio Unpublished Successfully');
    }

    public function publishedPortfolio($id){
        $portfolios = Portfolio::find($id);
        $portfolios->publication_status = 1;
        $portfolios->save();
        return redirect('/manage-portfolio')->with('message', 'Portfolio Unpublished Successfully');
    }

    public function editPortfolio($id){
        $portfolios = Portfolio::find($id);
        return view('admin.portfolio.edit-portfolio', ['portfolios'=>$portfolios]);
    }

    public function updatePortfolio(Request $request){
        $portfolios = Portfolio::find($request->category_id);
        if($request->hasFile('project_file')){
            if($request->project_file){
                unlink(public_path('/files/').$portfolios->project_file);
            }

            $image = $request->file('project_file');
            $imageName = $image->getClientOriginalName();
            $fileName = time()."_portfolio_".$imageName;
            $directory = public_path('/files/');
            $fileUrl = $directory.$fileName;
            Image::make($image)->resize(500, 400)->save($fileUrl);
            $portfolios->project_file = $fileName;
        }

        $portfolios->category_name = $request->category_name;
        $portfolios->project_name = $request->project_name;
        $portfolios->project_title = $request->project_title;
        $portfolios->project_category = $request->project_category;
        $portfolios->publication_status = $request->publication_status;
        $portfolios->save();
        return redirect('/manage-portfolio')->with('message', 'Portfolio Information Update Successfully');
    }

    public function deletePortfolio($id){
        $portfolios = Portfolio::find($id);
        $portfolios->delete();
        return redirect('/manage-portfolio')->with('message', 'Portfolio Information Delete Successfully');
    }





    public function addBlog(){
        return view('admin.blog.add-blog');
    }

    public function saveBlogInfo(Request $request){
        $blogs = new Blog();
        if($request->hasFile('blog_image')){
            $image = $request->file('blog_image');
            $blogImage = $image->getClientOriginalName();
            $fileName = time()."_blog_".$blogImage;
            $directory = public_path('/blog-images/');
            $fileUrl = $directory.$fileName;
            Image::make($image)->resize(600, 300)->save($fileUrl);
            $blogs->blog_image = $fileName;

        }

        $blogs->blog_title = $request->blog_title;
        $blogs->blog_name = $request->blog_name;
        $blogs->date_month = $request->date_month;
        $blogs->publication_status = $request->publication_status;
        $blogs->save();
        return redirect('/add-blog')->with('message', 'Blog Information Save Successfully');
    }

    public function manageBlogInfo(){
        $blogs = Blog::all();
        return view('admin.blog.manage-blog', ['blogs'=>$blogs]);
    }

    public function unpublishedBlog($id){
        $blogs = Blog::find($id);
        $blogs->publication_status = 0;
        $blogs->save();
        return redirect('/manage-blog')->with('message', 'Blog Unpublished Successfully');
    }

    public function publishedBlog($id){
        $blogs = Blog::find($id);
        $blogs->publication_status = 1;
        $blogs->save();
        return redirect('/manage-blog')->with('message', 'Blog Unpublished Successfully');
    }

    public function editBlog($id){
        $blogs = Blog::find($id);
        return view('admin.blog.edit-blog', ['blogs'=>$blogs]);
    }

    public function updateBlog(Request $request){
        $blogs = Blog::find($request->blog_id);
        if($request->hasFile('blog_image')){
            if($request->blog_image){
                unlink(public_path('/blog-images/').$blogs->blog_image);
            }

            $image = $request->file('blog_image');
            $blogImage = $image->getClientOriginalName();
            $fileName = time()."_blog_".$blogImage;
            $directory = public_path('/blog-images/');
            $fileUrl = $directory.$fileName;
            Image::make($image)->resize(600, 300)->save($fileUrl);
            $blogs->blog_image = $fileName;
        }

        $blogs->blog_title = $request->blog_title;
        $blogs->blog_name = $request->blog_name;
        $blogs->date_month = $request->date_month;
        $blogs->publication_status = $request->publication_status;
        $blogs->save();
        return redirect('/manage-blog')->with('message', 'Blog Information Update Successfully');
    }

    public function deleteBlog($id){
        $blogs = Blog::find($id);
        if($blogs->blog_image){
        unlink(public_path('/blog-images/').$blogs->blog_image);
        }
        $blogs->delete();
        return redirect('/manage-blog')->with('message', 'Blog Information Delete Successfully');
    }



}
