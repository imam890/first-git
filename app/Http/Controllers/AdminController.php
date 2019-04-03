<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class AdminController extends Controller
{
	 public function deshboard(){
    	return view('welcome');
    }

    public function addcontact(){
    	return view('addcontact');
    }
    public function save_contact(Request $request){
    	$data = array();
    	$data['contact_name']=$request->contact_name;
    	$data['contact_number']=$request->contact_number;

    	DB::table('tbl_contact')->insert($data);
    	Session::put('message','Contact Add Successfully...');
    	return Redirect::to('/addcontact');
    }

    public function allcontact(){
    	$allcontact_info = DB::table('tbl_contact')->get();

    	$manage_contact = view('allcontact')->with('all_contact_info',$allcontact_info);

    	return view('layout')->with('allcontact',$manage_contact);
    }

    public function delete_contact($contact_id){
    	//return "delete";
    	DB::table('tbl_contact')
    			->where('contact_id',$contact_id)
    			->delete();
    	Session::put('message','Contact delete Successfully...');
    	return Redirect::to('/allcontact');
    }

    
    
}
