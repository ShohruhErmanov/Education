<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topbar;
use App\Models\Topbaricon;
use App\Models\About;
use App\Models\Aboutimg;
use App\Models\Feature;
use App\Models\Featureimg;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Contact;

class MainController extends Controller
{
    public function index()
    {
        $aboutimgs = Aboutimg::all();
        $abouts = About::all();
        $topbaricons = Topbaricon::all();
        $topbars = Topbar::all();
        $features = Feature::all();
        $featureimgs = Featureimg::all();
        $courses = Course::all();
        $teachers = Teacher::all();
        $students = Student::all();
        $contacts = Contact::all();
        return view('index', compact('topbars', 'topbaricons', 'abouts', 'aboutimgs','features', 'featureimgs', 'courses', 'teachers', 'students', 'contacts'));
    }

    public function about()
    {
        $contacts = Contact::all();
        $featureimgs = Featureimg::all();
        $features = Feature::all();
        $abouts = About::all();
        $aboutimgs = Aboutimg::all();
        $topbaricons = Topbaricon::all();
        $topbars = Topbar::all();
        return view('about' ,compact('topbars', 'topbaricons', 'aboutimgs', 'abouts', 'features', 'featureimgs', 'contacts'));
    }

    public function courses()
    {
        $courses = Course::all();
        $contacts = Contact::all();
        $topbaricons = Topbaricon::all();
        $topbars = Topbar::all();
        return view('courses' ,compact('topbars', 'topbaricons', 'contacts', 'courses'));
    }

    public function contact()
    {
        $contacts = Contact::all();
        $topbaricons = Topbaricon::all();
        $topbars = Topbar::all();
        return view('contact', compact('topbars', 'topbaricons', 'contacts'));
    }
}
