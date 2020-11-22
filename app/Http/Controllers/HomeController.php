<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function showHome(){
//        $data=[];
//        $data['page_title']='Home';
//        $allTweets = Tweet::select('id', 'post_body', 'created_at');

        $tweets = Tweet::all();
            // $tweets = Tweet::select('id', 'post_body', 'created_at');
            //dd($tweets);
        return view('home', ['allTweets'=>$tweets] );


    }

    public function postTweet(Request $request){
        $post = $request->input('post_body');

       Tweet::create([
           'post_body'=>$post,
        ]);
        return redirect('/');
    }
    public function showProfile()
    {
        $tweets = Tweet::all();
        // $tweets = Tweet::select('id', 'post_body', 'created_at');
        //dd($tweets);
        return view('profile', ['allTweets'=>$tweets] );
    }

    public function showTweetByID($id){

        $tweet = Tweet::find($id);
        return view('tweetedit', compact('tweet'));
    }

    public function updateTweet(Request $request, int $id)
    {
        $post = $request->input('post_body');
        $tweet = Tweet::find($id);
        $tweet->update([
            'post_body'=>$post,
        ]);
        return redirect('/');
    }

    public function deleteTweet($id)
    {
        $tweet = Tweet::find($id);
        $tweet->delete();
        return redirect('/');
    }
}
