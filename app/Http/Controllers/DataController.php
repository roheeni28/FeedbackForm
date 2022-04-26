<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class DataController extends Controller
{
    //
    function addData(Request $req)
    {
        $Data= new Data;
        $Data->fname=$req->fname;
        $Data->lname=$req->lname;
        $Data->email=$req->email;
        $Data->phone=$req->phone;
        $Data->message=$req->message;
        $Data->save();
        //return redirect('/');
        session_start();
        $_SESSION['success_message'] = "Data saved successfully.";
        header("Location: index.php");
        exit(); 
    }

    function show()
    {
        $list= Data::all();
        return view('list',['facts'=>$list]);
    }
}
