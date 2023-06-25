<?php

namespace App\Http\Controllers;

use App\Models\CatModel;
use App\Models\ReportModel;
use App\Models\TestimonialModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index(){
        return view('main.index');
    }

    public function about(){
        return view('about.about_us');
    }

    public function find(Request $request){
        if($request['search']){
            $search = $request['search'];
            $cats = CatModel::searchCat($search);

            return view('main.find_cat', [
                'cats' => $cats
            ]);
        }

        $cats = CatModel::getAllUnadoptedCat();

        return view('main.find_cat', [
            'cats' => $cats
        ]);
    }

    public function testimonial(){
        return view('testimonial.testimonial');
    }

    public function submitTestimonial(Request $request){
        $validatedData = $request->validate([
            'testimoni' => 'required|max:256',
        ]);
        $validatedData['user_id'] = Auth::user()->id;

        $validatedData['created_at'] = now();
        $validatedData['updated_at'] = now();

        TestimonialModel::insertTestimonial($validatedData);

        return redirect()->intended('/')->with('success', 'Testimonial has been recorded!');
    }

    public function report(){
        return view('report.report');
    }

    public function submitReport(Request $request){
        $validatedData = $request->validate([
            'report' => 'required|max:256',
        ]);
        $validatedData['user_id'] = Auth::user()->id;

        $validatedData['created_at'] = now();
        $validatedData['updated_at'] = now();

        ReportModel::insertReport($validatedData);

        return redirect()->intended('/')->with('success', 'Report has been recorded!');
    }
}