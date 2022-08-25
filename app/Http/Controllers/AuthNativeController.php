<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Auth;
 
class AuthNativeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function auth(Request $req){
        $email = $req->email;
        $pwd   = $req->password;
        if (Auth::attempt(['email' => $email, 'password' => $pwd])) {
            return view('home');
        }else{
            return "Maaf email atau password yang anda masukan tidak sesuai.";
        }
    }
}