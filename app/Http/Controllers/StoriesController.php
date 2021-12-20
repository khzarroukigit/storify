<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;

class StoriesController extends Controller
{
    public function index(){
        $stories = Story::where('user_id', auth()->user()->id)
            ->orderby('id','desc')
            ->get();
        return view('stories.index',[
            'stories' => $stories
        ]);
    }
}
