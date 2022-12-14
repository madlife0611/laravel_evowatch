<!-- load file layout.blade.php vao day -->
@extends("backend.layout")
<!-- do du lieu ben duoi vao file layout.blade.php, do vao tag do-du-lieu -->
@section("do-du-lieu")

<div class="col-md-12">
    <div class="panel panel-default" style="margin-bottom:5px;">
        <div class="panel-heading">Thông tin đơn hàng</div>
        <div class="panel-body">
            <table class="table table-bordered">
                <tr>
                    <th style="width:150px;">Họ tên</th>
                    <th>Phạm Minh</th>
                </tr>
                <tr>
                    <th style="width:150px;">Email</th>
                    <th>test@gmail.com</th>
                </tr>
                <tr>
                    <th style="width:150px;">Địa chỉ</th>
                    <th>Hà Nội</th>
                </tr>
                <tr>
                    <th style="width:150px;">Điện thoại</th>
                    <th>012345678</th>
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
                    <th style="width:120px;">Photo</th>
                    <th>Name</th>
                    <th style="width:120px;">Price</th>
                    <th style="width:120px;">Discount</th>
                    <th style="width:120px;">Số lượng</th>
                </tr>
                <tr>
                    <td>
                        
                        <img src="{{ asset('EvoWatch/assets/img/sp.jpg') }}" style="width:100px;">
                        
                    </td>
                    <td>ABSUAL</td>
                    <td>4,985,000 đ</td>
                    <td style="text-align:center;">10 %</td>
                    <td style="text-align:center;">2</td>
                </tr>
                
            </table>
        </div>
    </div>
</div>
@endsection