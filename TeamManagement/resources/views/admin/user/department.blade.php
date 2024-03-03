@extends('admin.layouts.app')
@section('content')



<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Danh sách bộ phận</h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Trang chủ</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Danh sách bộ phận</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class = 'container-fluid'>
<div class = 'row'>
<div class="col-12">
    <div class="card">
        
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-light">
                    @if(session('success'))
                            <div class='alert alert-success alert-dismissible'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden="true">x</button>
                                <h4><i class = 'icon fa fa-check'></i>Thông báo</h4>
                                {{session('success')}}
                            </div>
                        @endif
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên bộ phận</th>
                        <th scope="col">Mô tả</th>
                        <th scope='col'></th>

                    </tr>
                </thead>
                <tbody>
                     @if (!empty($department))
                        @foreach ($department as $value )
                    <tr>
                        
                        <td>{{$value->department_id}}</td>
                        <td>{{$value->department_name}}</td>
                        <td>{{$value->descriptions}}</td>
                        <td>
                            
                        
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan='6'>Khong co nguoi dung</td>
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


    <footer class="footer text-center">
        
    </footer>


    
    

@endsection