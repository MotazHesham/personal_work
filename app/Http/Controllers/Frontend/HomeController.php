<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contactu;
use App\Models\MyProject;
use App\Models\Quote;
use App\Models\Thread;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $projects = MyProject::take(4)->get();
        $threads = Thread::take(6)->get();
        $quotes = Quote::take(3)->get();
        return view('frontend.index',compact('projects','quotes','threads'));
    }

    public function work($id){
        $project = MyProject::findOrFail($id);
        return view('frontend.single_work',compact('project'));
    }
    public function thread($id){
        $thread = Thread::findOrFail($id);
        return view('frontend.single_thread',compact('thread'));
    }
    
    public function works(){
        $projects = MyProject::get();
        return view('frontend.works',compact('projects'));
    }
    
    public function threads(){
        $threads = Thread::get();
        return view('frontend.threads',compact('threads'));
    }
    public function services(){
        return view('frontend.services');
    }
    public function about(){
        return view('frontend.about');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function contact_store(Request $request){
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required',
        ]);

        Contactu::create($request->only('name','email','message'));
        return view('frontend.contact');
    }
}
