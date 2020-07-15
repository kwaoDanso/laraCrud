<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use Session;

class RestoController extends Controller
{
  public function index(){
      return view('myhome');
  }
  public function list(){
    $data = Restaurant::all();
    return view('list', ['data'=>$data]);
}
public function add(Request $request){
 // return $request->input();
 $resto = new Restaurant;
 $resto->name = $request->input('name');
 $resto->email = $request->input('email');
 $resto->address = $request->input('address');
 $resto->save();

 $request->session()->flash('status','Resto Added Sucessfully');
 return redirect('list');
}
public function delete($id){

  Restaurant::find($id)->delete();
  Session::flash('status','Resto Deleted Sucessfully');
  return redirect('list');
}

public function edit($id){

$data = Restaurant::find($id);
return view('edit', ['data'=>$data]);
}

public function update(Request $request){
  // return $request->input();
  $resto = Restaurant::find($request->id);
  $resto->name = $request->input('name');
  $resto->email = $request->input('email');
  $resto->address = $request->input('address');
  $resto->save();
 
  $request->session()->flash('status','Resto Updated Sucessfully');
  return redirect('list');
 }

 public function register(Request $request){
  // return $request->input();
  $resto = new Restaurant;
  $resto->name = $request->input('name');
  $resto->email = $request->input('email');
  $resto->address = $request->input('contact');
  $resto->address = $request->input('password');
  $resto->save();
 
  $request->session()->flash('status','User Registered Sucessfully');
  return redirect('list');
 }
}
