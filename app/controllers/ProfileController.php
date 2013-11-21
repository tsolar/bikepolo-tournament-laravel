<?php

class ProfileController extends BaseController {

    public function getIndex() 
    {
        $user = Auth::user();
        return View::make('Profile.index')->with('user', $user);
    }

}
