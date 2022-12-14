<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//trong controller muon su dung doi tuong nao thi phai khai bao o day
//doi tuong thao tac csdl
use DB;
//doi tuong ma hoa password
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

use Hash;

//thuc hien Query Builder: su dung doi tuong DB

class CustomersController extends Controller
{
    public function create(){
        //tao mot action de dua vao thuoc tinh action cua the form
        $action = url("register");
        return view("frontend.register",["action"=>$action]);
    }
    //create - POST
    public function createPost(){
        $email = request("email");
        $name = request("name");
        $password = request("password");
        $address = request("address");
        $phone_number = request("phone_number");

        //ma hoa password
        $password = Hash::make($password);
        //kiem tra xem email da ton tai chua, nua chua ton tai thi moi cho insert
        //Count() -> tra ve so luong ban ghi truy van
        $countEmail = DB::Table("customer")->where("email","=",$email)->Count();
        if($countEmail == 0){
            //update name
            $customer_id = DB::table('customer')->insertGetId(['name'=>$name, 'email'=>$email, 'password'=>$password, 'phone_number'=>$phone_number,'address'=>$address]);
            //di chuyen den mot url khac
             return Redirect::to('login');
        }else
            return redirect(url("register?notify=emailExists"));       
    }

    public function login_customer(Request $req){
        $email = $req->userEmail;
        $pass = $req->userPass;

        $res = DB::table('customer')->where('email', $email)->where('password',$pass)->first();

        if($res){
            Session::put('customer_id', $res->customer_id);
            Session::put('email', $req->userEmail);
            return Redirect::to('/');
        }else{
            return Redirect('/login');
        }
    }
    public function return_login(){
        return view('frontend.login');
    }
    public function logout_checkout(){
        Session::flush();
        return Redirect('/login');
    }
}
