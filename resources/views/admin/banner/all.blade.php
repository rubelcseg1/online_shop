@extends('layouts.admin');
@section('content')
<div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6 card_header_title">
                                      <i class="fa fa-gg-circle" aria-hidden="true"></i> All User information

                                    </div>
                                    <div class="col-md-6 card_header_button">
                                        <a class="btn btn-light btn-sm" href=""> <i class="fa fa-th" aria-hidden="true"></i> Add user</a>
                                    </div>
                                    <div class="clr"></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped text-center table-hover  custom-table">
                                    <thead class=" ">
                                        <tr class=" "> 
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>phone</th>
                                          
                                            <th>role</th>
                                            <th>manage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($user as $data)
                                        <tr>
                                            <td scope="row">{{$data->name}}</td>
                                            <td>{{$data->email}}</td>
                                            <td>{{$data->phone}}</td>
                                            <td>{{$data->userRole->role_name}}</td>

                                            <td>
                                                <a href="{{url('admin/user/view/'.$data->id)}}"><i class="fa fa-plus-square" aria-hidden="true"></i></a>
                                                <a href=""><i style="color:orange;" class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                                <a href=""><i style="color:red;" class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                           
                            </div>
                            <div class="card-footer">
                                <a class=" text-light btn btn-sm btn-info">print</a>
                                <a class=" text-light btn-sm btn-primary">Excel</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
@endsection