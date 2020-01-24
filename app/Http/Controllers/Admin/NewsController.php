<?php

nnamespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    pubric function add()
    {
        retrun view('admin.news.create');
    }
}
