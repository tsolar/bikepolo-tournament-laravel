<?php

class ProfileController extends BaseController {

    public function getIndex() 
    {
        $user = Auth::user();
        if($user) {
            return View::make('Profile.index')->with('user', $user);
        } else {
            return Redirect::to('user/login')->with('message', 'not authorized');
        }
    }

}
