<?php

namespace App\Http\Controllers\Frontend\Auth;
use App\Category;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        View::share('categories', Category::getCategories());
        // View::share('categories',$this->createCategories(Category::orderBy('name', 'desc')->get()));
        $this->middleware('guest')->except('logout');
    }
    public function showLoginForm()
    {
        return view('frontend.default.login');
    }
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/');
    }
    // public function createCategories($categories) 
    // {
    //     $newArr = [];
    //     if (count($categories) > 0) {
    //         foreach ($categories as $category) {
    //             $newArr[$category->parent][] = $category;
    //         }
    //     }
    //     return $newArr;
    // }
}
