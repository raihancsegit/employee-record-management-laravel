@extends('layout')
@section('title','Edit Department')
@section('content')

                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <svg class="svg-inline--fa fa-table fa-w-16 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="table" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM224 416H64v-96h160v96zm0-160H64v-96h160v96zm224 160H288v-96h160v96zm0-160H288v-96h160v96z"></path></svg><!-- <i class="fas fa-table me-1"></i> Font Awesome fontawesome.com -->
                                Edit Department 
                                <a href="{{url('depart')}}" class="float-end btn btn-sm btn-primary">View All</a>
                            </div>
                            <div class="card-body">
                                @if($errors->any())
                                    @foreach($errors->all() as $err)
                                    <p class="text-danger">{{$err}}</p>
                                    @endforeach
                                @endif
                                @if(Session::has('msg'))
                                 <p class="text-success">{{session('msg')}}</p>
                                @endif
                                <form action="{{url('depart/'.$data->id)}}" method="post">
                                    @method('put')
                                    @csrf 
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Title</th>
                                            <td>
                                                <input type="text" value="{{$data->title}}" name="title" class="form-control">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">
                                                <input type="submit" value="Submit" class="btn btn-primary">
                                            </td>
                                        </tr>

                                    </table>

                                </form>

                                
                            </div>
                        </div>
                    
@endsection