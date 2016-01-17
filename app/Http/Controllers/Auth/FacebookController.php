<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use AdamWathan\EloquentOAuthL5;



class FacebookController extends Controller
{
    //Showing the auth
    public function facebookAuthorize(){
        return SociaAuth::authorize('facebook');
    }

    /* Redirect URI
     *
     * @return request
     *
     * */
    public function facebookLoginCallbackUri(){

    }

}
