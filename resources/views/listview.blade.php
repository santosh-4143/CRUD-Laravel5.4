@extends('layout.footer');
@extends('layout.app');
@section('title','ListUser');
@section('body')


		@section('page-title','List User');

<div id="collapseOne1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php $i=1;?>
                          @foreach($users as $user)  	
                              <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->address}}</td>
                                <td><a href="{{ URL::asset('/user/'.$user->id.'/edit') }}" class="btn btn-primary">Edit</a></td>
                                <td><a href="{{ URL::asset('/user/'.$user->id.'/destroy') }}" class="btn btn-danger">Delete</a></td>
                                {{$i++}}
                              </tr>
                           @endforeach   
                            </tbody>
                          </table>
                        </div>
                      </div>

@endsection
@extends('layout.header');