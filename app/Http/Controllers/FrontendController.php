<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Branch;
use App\Models\ContactInquiry;
use App\Models\Country;
use App\Models\Course;
use App\Models\Page;
use App\Models\Service;
use App\Models\Settings;
use App\Models\Slider;
use App\Models\Success;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\University;
use App\Models\WhyChooseUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{
    //

    public function home()
    {
        $sliders= Slider::where('status',1)->oldest("order")->first();
        $about_us = Page::where('status', 1)->where('slug', 'about-us')->first();
        $why_choose_us = WhyChooseUs::where('status', 1)->first();
        $teams = Team::where('status',1)->oldest("order")->get();

        $home_country = Settings::where('key', 'home_countries')->first();
        $countryIds = explode(',', $home_country->value);
        $countries = Country::whereIn('id', $countryIds)->where('status', 1)->get();

        $home_service = Settings::where('key', 'home_services')->first();
        $serviceIds = explode(',', $home_service->value);
        $services = Service::whereIn('id', $serviceIds)->where('status', 1)->get();

        $home_course = Settings::where('key', 'home_courses')->first();
        $courseIds = explode(',', $home_course->value);
        $courses = Course::whereIn('id', $courseIds)->where('status', 1)->get();

        $home_testimonial = Settings::where('key', 'home_testioninals')->first();
        $testimonialIds = explode(',', $home_testimonial->value);
        $testimonials = Testimonial::whereIn('id', $testimonialIds)->where('status', 1)->get();

        $home_blog = Settings::where('key', 'home_blogs')->first();
        $blogIds = explode(',', $home_blog->value);
        $blogs = Blog::whereIn('id', $blogIds)->where('status', 1)->get();
        $universities = University::where('status',1)->oldest("order")->get();

        return view('frontend.home.index',compact('sliders','universities','courses','countries','blogs','services','about_us','why_choose_us','teams','testimonials'));
    }

    public function about()
    {
        $about_us = Page::where('status', 1)->where('slug', 'about-us')->first();
        $teams = Team::where('status',1)->oldest("order")->get();

        return view('frontend.about.index',compact('about_us','teams'));
    }
    public function service()
    {
        $service_page = Page::where('status', 1)->where('slug','service')->first();
        $services = Service::where('status',1)->oldest("order")->get();

        return view('frontend.service.index',compact('service_page','services'));
    }
    function abroadstudies()
    {
        $abroad_page = Page::where('status', 1)->where('slug','abroad-studies')->first();
        $abroadstudies = Country::where('status',1)->oldest("order")->get();
        return view('frontend.abroad.index',compact('abroadstudies','abroad_page'));
    }
    function abroadstudiesingle($slug)
    {
        $abroad_page = Page::where('status', 1)->where('slug','abroad-studies')->first();
        $abroadstudiesingle = Country::where('slug',$slug)->where('status',1)->first();
        $universities = University::where('country_id', $abroadstudiesingle->id)->where('status', 1)->oldest("order")->get();
        return view('frontend.abroad.show',compact('abroadstudiesingle','abroad_page','universities'));
    }
    function course()
    {
        $course_page = Page::where('status', 1)->where('slug','course')->first();
        $course = Course::get();
        return view('frontend.course.index',compact('course','course_page'));
    }
    function coursesingle($slug)
    {
        $course_page = Page::where('status', 1)->where('slug','course')->first();
        $coursesingle = Course::where('slug',$slug)->where('status',1)->first();
        if ($coursesingle) {
            $coursesingle->save();
            $courses = Course::where('id', '!=', $coursesingle->id)->where('status', 1)->oldest("order")->limit(5)->get();
            return view("frontend.course.show", compact('courses', 'coursesingle','course_page'));
        }
    }
    function blog()
    {
        $blog_page = Page::where('status', 1)->where('slug','blog')->first();
        $blog = Blog::where('status',1)->limit(3)->oldest("order")->get();
        return view('frontend.blog.index',compact('blog','blog_page'));
    }
    function blogsingle($slug)
    {
        $blog_page = Page::where('status', 1)->where('slug','blog')->first();
        $abroadstudies = Country::where('status',1)->limit(3)->oldest("order")->get();
        $blogsingle = Blog::where('slug',$slug)->where('status',1)->first();

        if ($blogsingle) {
            $blogsingle->views += 1;
            $blogsingle->save();
            $blogs = Blog::where('id', '!=', $blogsingle->id)->where('status', 1)->oldest("order")->limit(5)->get();
            return view("frontend.blog.show", compact('blogs', 'blogsingle','blog_page','abroadstudies'));
        }
    }
    public function page($slug)
    {
        $page = Page::where('slug', $slug)->first();
        return view('frontend.pages.index', compact('page'));
    }
    function team()
    {
        $team_page = Page::where('status', 1)->where('slug', 'our-team')->first();
        $teams = Team::where('status', 1)->latest('order')->limit(3)->get() ?? [];
        return view('frontend.team', compact('teams', 'team_page'));
    }
    function visagrantes()
    {
        $visagrantes_page = Page::where('status', 1)->where('slug', 'visa-granted')->first();
        $visagranted = Success::get() ?? [];
        return view('frontend.visagrant', compact('visagranted', 'visagrantes_page'));
    }
    function messagefromfounder()
    {
        $message_page = Page::where('status', 1)->where('slug', 'message-from-ceo')->first();
        $message_from_founder_1 = Page::where('status', 1)->where('slug', 'message-from-founder-1')->first();
        $message_from_founder_2 = Page::where('status', 1)->where('slug', 'message-from-founder-2')->first();
        return view('frontend.messagefromceo', compact( 'message_page','message_from_founder_1','message_from_founder_2'));
    }
    public function contact()
    {
        $contact_page = Page::where('status', 1)->where('slug','contact-us')->first();
        $branches = Branch::where('status',1)->orderBy('order')->get();
        return view('frontend.contact.index',compact('branches','contact_page'));
    }

    public function contact_submite(Request $request)
    {
        //
        $input = $request->all();
        // dd($input);
        $rules = [
            'name' => 'required|min:3',
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        // Create a new Inquiry instance with the validated data
        ContactInquiry::create($input);
        return redirect()->back()->with('success', 'Your message has been submitted successfully.');
    }
    public function contact_submite_home(Request $request)
    {
        //
        $input = $request->all();
        // dd($input);
        $rules = [
            'name' => 'required|min:3',
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        // Create a new Inquiry instance with the validated data
        ContactInquiry::create($input);
        return redirect()->back()->with('success', 'Your message has been submitted successfully.');
    }
}
