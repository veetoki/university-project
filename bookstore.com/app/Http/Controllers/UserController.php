<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
  /**
   * undocumented function
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
  }
  
  /**
   * undocumented function
   *
   * @return void
   */
  public function index($param)
  {
    $data['users'] = User::all();
    return view('admin/user/index');
  }
      
      /**
       *      * Show the profile for the given user.
       *           *
       *                * @param  int  $id
       *                     * @return Response
       *                          */
  public function show($id)
  {

  }
}
