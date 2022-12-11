<!-- load file layout.blade.php vao day -->
@extends("backend.layout")
<!-- do du lieu ben duoi vao file layout.blade.php, do vao tag do-du-lieu -->
@section("do-du-lieu")
<?php 
    $customer = DB::table("customer")->where("customer_id","=", $customer_id)->first();
 ?>
<div class="col-md-12">
    <div class="panel panel-default" style="margin-bottom:5px;">
        <div class="panel-heading">Thông tin đơn hàng</div>
        <div class="panel-body">
            <table class="table table-bordered">
                <tr>
                    <th style="width:150px;">Họ tên</th>
                    <th><?php echo isset($customer->name) ? $customer->name : ""; ?></th>
                </tr>
                <tr>
                    <th style="width:150px;">Email</th>
                    <th><?php echo isset($customer->email) ? $customer->email : ""; ?></th>
                </tr>
                <tr>
                    <th style="width:150px;">Địa chỉ</th>
                    <th><?php echo isset($customer->address) ? $customer->address : ""; ?></th>
                </tr>
                <tr>
                    <th style="width:150px;">Điện thoại</th>
                    <th><?php echo isset($customer->phone_number) ? $customer->phone_number : ""; ?></th>
                </tr>
            </table>            
        </div>
        <div class="panel-footer"><a href="#" onclick="history.go(-1);" class="btn btn-primary">Quay lại</a></div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">List products</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width:100px;">Photo</th>
                    <th>Name</th>
                    <th style="width:80px;">Price</th>
                    <th style="width:80px;">Discount</th>
                </tr>
                @foreach($data as $rows)
                <?php 
                    //co the dung cau lenh sql de truy van
                    $product = DB::table("product")->where("id","=",$rows->product_id)->first();
                 ?>
                <tr>
                    <td>
                        
                    @if(file_exists('upload/product/'.$product->image))
                    <img src="{{ asset('upload/product/'.$product->image) }}" style="width:100px;">
                    @endif
                    </td>
                    <td><?php echo isset($product->name) ? $product->name : ""; ?></td>
                    <td><?php echo isset($product->price) ? $product->price : ""; ?></td>
                    <td style="text-align:center;"><?php echo isset($product->discount) ? $product->discount : ""; ?></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection