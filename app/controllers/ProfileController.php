<?php

class ProfileController extends BaseController {

    public function getIndex() 
    {
        //return View::make('hello');
        var_dump(Auth::user()->email);
    }

}
