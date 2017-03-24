<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;

class IndexController extends AdminController
{
    function index(){
    	return 'admin page';
    }
}
