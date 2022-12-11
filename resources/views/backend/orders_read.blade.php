<!-- load file layout.blade.php vao day -->
@extends("backend.layout")
<!-- do du lieu ben duoi vao file layout.blade.php, do vao tag do-du-lieu -->
@section("do-du-lieu")
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">List orders</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Họ và tên</th>
                    <th>Địa chỉ</th>
                    <th>Điện thoại</th>
                    <th>Ngày mua</th>
                    <th>Giá</th>
                    <th style="width:150px;">Trạng thái</th>
                    <th style="width:150px;"></th>
                </tr>
                @foreach($data as $rows)
                <?php 
                    //co the dung cau lenh sql de truy van
                    $customer = DB::table("customer")->where("customer_id","=",$rows->customer_id)->first();
                 ?>
                <tr>
                    <td><?php echo isset($customer->name) ? $customer->name : ""; ?></td>
                    <td><?php echo isset($customer->address) ? $customer->address : ""; ?></td>
                    <td><?php echo isset($customer->phone_number) ? $customer->phone_number : ""; ?></td>
                    <td>{{ $rows->date }}</td>
                    <td>{{ $rows->price }}</td>
                    <td>
                    <div class="">{{ $rows->status }}</div>   
                    </td>
                    <td style="text-align:center;">
                        <?php if($rows->status == "Đang chờ xử lý"){ ?>
                        <a href="{{ url('admin/orders/delivery/'.$rows->order_id) }}" class="label label-info">Giao hàng</a>
                        &nbsp;&nbsp;
                    <?php } ?>
                        
                        <a href="{{ url('admin/orders/detail/'.$rows->order_id) }}" class="label label-success">Chi tiết</a>
                    </td>
                </tr>
                @endforeach
            </table>
            
            
        </div>
    </div>
</div>
@endsection