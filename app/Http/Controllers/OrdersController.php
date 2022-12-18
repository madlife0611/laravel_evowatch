<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use DB;

use App\Models\Orders;
//doi tuong kiem tra du lieu
use Validator;


class OrdersController extends Controller
{
    //tao bien $model (la mot bien ben trong class ProductsController)
    public $model;
    //ham tao
    public function __construct(){
        //gan bien $model tro thanh bien object cua class Products
        $this->model = new Orders();
    }
    //lay danh sach cac ban ghi
    public function read(){
        $data = $this->model->modelRead();
        //goi view, truyen du lieu ra view
        return view("backend.orders_read",["data"=>$data]);
    }
    public function detail($order_id){
        // $data = $this->model->modelOrderDetails($order_id);
        $customer = DB::select("select * from customer where customer_id = (select customer_id from orders where order_id = $order_id)");
        //goi view, truyen du lieu ra view
        return view("backend.ordersdetail_read",["data"=>$data, "order_id"=>$order_id]);
    }
    
    public function delivery($order_id){
        $data = $this->model->modelDelivery($order_id);
        //goi view, truyen du lieu ra view
        return redirect(url('admin/orders'));
    }
    
}
