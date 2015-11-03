<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth as Auth;
use App\User as User;
use Illuminate\Contracts\Database;
use App\FriendsList as Friend;

class usersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function userInfo($id,Request $request){
        $user = $request->user();
        $userUrl = User::find($id);

        $firendsList = Friend::where('user_id','=',$user->id)->get();
        $friends = array();
        foreach($firendsList as $friend){
            $x = User::find($friend->friend_id);
            array_push($friends,$x);
        }

        if(isset($userUrl)){
            return view('pages.userinfo',['userUrl'=>$userUrl,'user'=>$user,'friends'=>($friends)]);
        }else{
            return redirect('../home');
        }
    }

    public function userEdit($id,Request $request){
        $user = $request->user();
        $firendsList = Friend::where('user_id','=',$user->id)->get();
        $friends = array();
        foreach($firendsList as $friend){
            $x = User::find($friend->friend_id);
            array_push($friends,$x);
        }

        if($user->id == $id){
            return view('pages.useredit',['user'=> $user,'friends'=>($friends)]);
        }else{
            return redirect('../home');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function update(Request $request)
    {
        $user = $request->user();
        $user->imgSorce = $request->input('imgSorce');
        $user->nickname = $request->input('nickname');
        $user->youtube = $request->input('youtube');
        $user->twitch = $request->input('twitch');
        $user->save();
        return redirect('../userinfo/{{$user->ID}}');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
