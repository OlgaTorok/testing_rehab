<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
// use Validator;
use App\Http\Controllers\Controller;
// use App\Activity;

use \Input as Input;

class UploadController extends Controller
{
    public function upload(){

        if(Input::hasImage('image')) {

            echo 'Uploaded<br />';
            $image = Input::image('image');
            $image->move('uploads', $image->getClientOriginalName());

            echo '<img src="uploads/' . $image->getClientOriginalName() . '" />';

        }
    }
}
