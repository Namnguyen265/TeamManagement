@extends('admin.layouts.app')
@section('content')





<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Chỉnh sửa thông tin nhóm</h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Trang chủ</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Sửa tên loại cây</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

</div>


<div class="container-fluid">
<div class = 'row'>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"></h4>
            <h6 class="card-subtitle"></h6>
        </div>
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <div class="card-body">
                    
                    <form class="form-horizontal form-material" method = 'post' enctype="multipart/form-data">
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
                        <div class="form-group">
                            <label class="col-md-12"></label>
                            <div class="form-group">
                                @foreach($team as $teams)
                                <label>ID nhóm <span class="help"></span></label>
                                <input type="text" name='team_id' class="form-control form-control-line" value = "{{$teams->team_id}}" disabled>
                                
                            </div>
                            <div class="form-group">
                                <label>Tên nhóm <span class="help"></span></label>
                                <input type="text" name='team_name' class="form-control form-control-line" value = "{{$teams->team_name}}" >
                                
                            </div>


                            @endforeach

                            <div class="form-group">
                                <label>Tên bộ phận <span class="help"></span></label>
     
                                <select class="form-control form-control-line" value = '{{old('department_id')}}' name = 'department_id'>
                                    
                                 
                                    @foreach($department as $key =>$value)


                                    <option value = {{$value->department_id}}
                                    <?=
                                        $value->department_id == $teams->department_id ? "selected" : ""
                                    ?>
                                    
                                    >{{$value['department_name']}}</option>
                                    
                                    @endforeach
                                    
                                </select>
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <div class="col-sm-12">
                                
                                
                                <a href=""><button class = 'btn btn-success' name = 'insert' type = 'submit'>Xác nhận</button></a>
                                <a href = "{{route('cancel')}}" class="btn btn-danger" id=''><i class = '' style="font-size: 15px; color: white">Huỷ</i></a>

                            </div>
                        </div>
                            
                        @csrf
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

    <footer class="footer text-center">
        
    </footer>


    </div>
    

@endsection