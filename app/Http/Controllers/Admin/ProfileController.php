<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profile;

class ProfileController extends Controller
{
    //
    public function add()
    {
        return view('admin.profile.create');
    }
    
    public function create(Request $request)
    {
        // Varidationを行なう
        $this -> validate($request, Profile::$rules);
        $profile = new Profile;
        $form = $request -> all();
        
        
        unset($form['_token']);
        
        // データベースに格納する
        $profile -> fill($form);
        $profile -> save();
        
        return redirect('admin/profile/create');
    }
    
    public function edit(Request $request)
    {
        // Profile Modelからデータを取得する
        $profile = Profile::find($request -> id);
        if (empty($profile)){
            abort(404);
        }
        return view('admin.profile.edit', ['profile_form' => $profile]);
    }
    
    public function update(Request $request)
    {
        $this -> validate($request, Profile::$rules);
        $profile = Profile::find($request -> id);
        
        $profile_form = $request -> all();
        
        
        unset($profile_form['_token']);
        
        // 該当するデータを上書きして保存する
        $profile -> fill($profile_form) -> save();
        return redirect('admin/profile/');
    }
}
