@extends('layouts.admin');
@section('content')
<div class="row">
                    <div class="col-lg-12">
                    <form action="{{url('admin/user/submit')}}" enctype="multipart/form-data" method="post">
                        <div class="card card-outline-info">
                        @csrf
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6 card_header_title">
                                      <i class="fa fa-gg-circle" aria-hidden="true"></i> Add Registration information

                                    </div>
                                    <div class="col-md-6 card_header_button">
                                        <a class="btn btn-light btn-sm" href=""> <i class="fa fa-th" aria-hidden="true"></i> All user</a>
                                    </div>
                                    <div class="clr"></div>
                                </div>
                            </div>
                            <div class="card-body">
                            @if(Session::has('success'))
                               <script>
                                    swal({
                                    title: "Success",
                                    text: "Successfully Add Banner",
                                    icon: "success",
                                    timer:"6000"
                                    });
                                </script>
                               @endif
                               @if(Session::has('error'))
                               <script>
                                    swal({
                                    title: "error",
                                    text: "Ops!  Add user Faild ",
                                    icon: "error",
                                    timer:"6000"
                                    });
                                </script>
                               @endif

                               <div class="form-group row custom-form-group" >
                                    <label class="col-sm-3 form-control-label">name</label>
                                    <div class="col-sm-7">
                                        <input type="text" value="" name="name" class="form-control col-sm-12" id="">
                                      
                                    </div>
                                </div>
                                <div class="form-group row custom-form-group" >
                                    <label class="col-sm-3 form-control-label">email</label>
                                    <div class="col-sm-7">
                                        <input type="email" value="" name="email" class="form-control col-sm-12" id="">
                                      
                                    </div>
                                </div>
                                <div class="form-group row custom-form-group" >
                                    <label class="col-sm-3 form-control-label">phone</label>
                                    <div class="col-sm-7">
                                        <input type="phone" value="" name="phone" class="form-control col-sm-12" id="">
                                      
                                    </div>
                                </div>
                               <div class="form-group row custom-form-group" >
                                    <label class="col-sm-3 form-control-label">password</label>
                                    <div class="col-sm-7">
                                        <input type="password" value="" name="password" class="form-control col-sm-12" id="">
                                      
                                    </div>
                                </div>
                                <div class="form-group row custom-form-group" >
                                    <label class="col-sm-3 form-control-label">password-confirmation</label>
                                    <div class="col-sm-7">
                                        <input type="password" value="" name="password-confirmation" class="form-control col-sm-12" id="">
                                      
                                    </div>
                                </div>
                                <div class="form-group row custom-form-group" >
                                    <label class="col-sm-3 form-control-label">Role</label>
                                    <div class="col-sm-3">
                                    @php 
                                    $role=App\UserRole::where('role_status',1)->orderBy('role_id','ASC')->get();
                                    @endphp
                                    <select name="role" id="">
                                    
                                        <option value="">Enter your  name</option>
                                        @foreach($role as $userRole)
                                        <option value="{{$userRole->role_id}}">{{$userRole->role_name}}</option>
                                        @endforeach
                                    </select>
                                       
                                    </div>
                                </div>
                         
                            </div>
                            <div class="card-footer text-center">
                               <button type="submit " class="btn btn-primary btn-md">Registration</button>  
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
@endsection