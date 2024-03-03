@extends('admin.layouts.app')
@section('content')



<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Danh sách nhóm</h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Trang chủ</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Danh sách nhóm</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <form action='{{route('search_team')}}' method = "POST" enctype="multipart/form-data" autocomplete="off">
            <div class="search_box pull-right">
                <input type="text" name = 'keyword' placeholder="Search"/>
                {{-- <input type="submit" class="btn btn-primary btn-sm" name='update' value='Tìm kiếm' style='margin-top:0; color:#666'/> --}}
                <a><button type = 'submit' class='btn btn-warning btn-sm'>Search</button></a>

            </div>
            @csrf
            
            </form>
            
        </div>
    </div>
    
</div>
<div class = 'container-fluid'>
<div class = 'row'>
<div class="col-12">
    <div class="card">
        
        <div class="table-responsive">
            <table class="table" id = "example">
                <thead class="thead-light">
                    @if(session('success'))
                            <div class='alert alert-success alert-dismissible'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden="true">x</button>
                                <h4><i class = 'icon fa fa-check'></i>Thông báo</h4>
                                {{session('success')}}
                            </div>
                        @endif
                    
                        @if ($errors->any())
                        <div class = "alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach 
                            </ul>
                        </div>
                        @endif
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên Team </th>
                        <th scope="col">Tên bộ phận </th>
                        <th scope='col'>Hành động</th>

                    </tr>
                </thead>
                <tbody>
                     @if (!empty($team))
                        @foreach ($team as $value )
                    <tr>
                        
                        <td>{{$value->team_id}}</td>
                        <td>{{$value->team_name}}</td>
                        <td>{{$value->department_id}}</td>
                        <td>
                            <a href = "{{route('edit_team', ['id'=>$value->team_id])}}" class="" id=''><button class = 'btn btn-success'><i class="fa fa-pencil"> Sửa</i></button></a>
                            <a onclick="return confirm('Bạn có chắc chắn muốn nhóm không ?')" href = "{{route('delete_team', ['id'=>$value->team_id])}}" class="btn btn-danger" id=''><i class = 'fa fa-trash' style="font-size: 16px;color: white"> Xoá</i></a>

                        
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan='6'>Hiện tại chưa có danh sách</td>
                    </tr>
                    @endif
                    <table>
                    
                        
                    
                    </table>
                    
                </tbody>
                <tfoot>
                    
                    
                </tfoot>
                <tr>
                    
                    
                    
                    
                </tr>
            </table>
            <div class = 'pagination justify-content-center'>
                        
                    
            
            </div>
        </div>
    </div>
    <td>
    </td>
</div>
</div>
</div>

<form class="form-horizontal form-material" method = 'post' enctype="multipart/form-data">
    


    <div class="form-group">
        <label class="col-md-12">Mã Team</label>
        <div class="col-md-12">
            <input type="text" name='team_id' class="form-control form-control-line" value = "" >
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-12">Tên Team</label>
        <div class="col-md-12">
            <input type="text" name='team_name' class="form-control form-control-line" value = "" >
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-12">Mã bộ phận</label>
        <div class="col-md-12">
            <select class="" value="" name = "department_id">

                @foreach($department as $key => $value)

                <option value = '{{$value['department_id']}}'>

                {{$value->department_id}}</option>

                @endforeach

            </select>
        </div>
    </div>
    
    
    <div class="form-group">
        <div class="col-sm-12">
            
            
            <a href=""><button class = 'btn btn-success' name = 'insert' type = 'submit'>Thêm</button></a>
            <a href = "{{route('cancel')}}" class="btn btn-danger" id=''><i class = '' style="font-size: 15px; color: white">Huỷ</i></a>

            
        </div>
    </div>
        
    @csrf
</form>

    <footer class="footer text-center">
       
    </footer>


    
    

@endsection