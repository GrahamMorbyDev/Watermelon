<?php
namespace App\Http\Controllers;
//require_once base_path('vendor/verotel/flexpay-php-client/src/Verotel/FlexPay/Client.php');
//require_once base_path('vendor/verotel/flexpay-php-client/src/Verotel/FlexPay/Brand.php');

use App\User;
use App\Video;
use App\Images;
use App\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;



class AdminController extends Controller
{
    // Admin home page
    public function AdminHome()
    {
        $users = User::get()->count();
        $videos = Video::get()->count();
        $images = Images::get()->count();
        $blogs = Blogs::get()->count();
        return view('admin/index' , compact('users' , 'videos', 'images', 'blogs'));
    }

    // show users page
    public function ShowUsers()
    {
        $users = User::paginate(15);
        return view('admin/users', compact('users'));
    }

    //Headers Change
    public function headers()
    {
        return view('admin.headers');
    }

    //Get Contacts
    public function contact() {
        $contacts = DB::table('contactus')->get();
        return view('admin.contact', compact('contacts'));
    }

    //Add Product
    public function AddProduct() {

    }

}
