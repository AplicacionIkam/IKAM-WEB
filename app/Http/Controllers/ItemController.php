<?php

namespace App\Http\Controllers;

class ItemController extends Controller
{

   public function __construct()
    {
        $this->middleware('auth');
    }
	 public function index($id='')
    {
   		return view("items.index")->with('id',$id);   		
    }

      public function edit($id)
    {
    	return view('items.edit')->with('id',$id);
    }

    public function create($id='')
    {
      return view('items.create')->with('id',$id);
    }
}
