@extends('layouts.admin');
@section('content')
<div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6 card_header_title">
                                      <i class="fa fa-gg-circle" aria-hidden="true"></i> All View information

                                    </div>
                                    <div class="col-md-6 card_header_button">
                                        <a class="btn btn-light btn-sm" href="{{url('admin/user/all')}}"> <i class="fa fa-th" aria-hidden="true"></i> All user</a>
                                    </div>
                                    <div class="clr"></div>
                                </div>
                            </div>
                            <div class="card-body">
                               <div class="row">
                                   <div class="col-md-2"></div>
                                   <div class="col-md-8"> <table class="table table-bordered table-striped  table-hover  custom-view-table">
                           
                           <tbody>
                          
                               <tr><td>Name</td><td>:</td><td>{{$allview->name}}</td></tr>
                               <tr><td>email</td><td>:</td><td>{{$allview->email}}</td></tr>
                               <tr><td>role</td><td>:</td><td>role</td></tr>
                               <tr><td>username</td><td>:</td><td>rubel</td></tr>
                     
                    
                           </tbody>
                       </table></div>
                                   <div class="col-md-2"></div>
                               </div>
                           
                            </div>
                            <div class="card-footer">
                            <a href="" class="btn btn-danger">print</a>
                            <a href="" class="btn btn-secondary">Excel</a>
                            <a href="" class="btn btn-info">Download</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
@endsection