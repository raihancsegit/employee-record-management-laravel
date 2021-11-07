@extends('layout')
@section('title','View Employee')
@section('content')

                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <svg class="svg-inline--fa fa-table fa-w-16 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="table" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM224 416H64v-96h160v96zm0-160H64v-96h160v96zm224 160H288v-96h160v96zm0-160H288v-96h160v96z"></path></svg><!-- <i class="fas fa-table me-1"></i> Font Awesome fontawesome.com -->
                                All Employee 
                                <a href="{{url('depart/create')}}" class="float-end float-end btn btn-sm btn-primary">Add New</a>
                            </div>
                            <div class="card-body">
                                <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns"><div class="dataTable-top"><div class="dataTable-dropdown"><label><select class="dataTable-selector"><option value="5">5</option><option value="10" selected="">10</option><option value="15">15</option><option value="20">20</option><option value="25">25</option></select> entries per page</label></div><div class="dataTable-search"><input class="dataTable-input" placeholder="Search..." type="text"></div></div><div class="dataTable-container"><table id="datatablesSimple" class="dataTable-table">
                                    <thead>
                                        <tr>
                                            <th data-sortable="" style="width: 19.6115%;">
                                               <a href="#" class="dataTable-sorter">#</a>
                                           </th>
                                           <th data-sortable="" style="width: 19.6115%;">
                                               <a href="#" class="dataTable-sorter">Department</a>
                                           </th>
                                           <th data-sortable="" style="width: 19.6115%;">
                                               <a href="#" class="dataTable-sorter">Full Name</a>
                                           </th>
                                           <th data-sortable="" style="width: 19.6115%;">
                                               <a href="#" class="dataTable-sorter">Address</a>
                                           </th>
                                           <th data-sortable="" style="width: 19.6115%;">
                                               <a href="#" class="dataTable-sorter">Action</a>
                                           </th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    @if($data)
                                    @foreach($data as $d)
                                        <tr>
                                            <td>{{$d->id}}</td>
                                            <td>{{$d->department->title}}</td>
                                            <td>{{$d->full_name}}</td>
                                            <td>{{$d->address}}</td>
                                            <td>
                                               <a href="{{url('employee/'.$d->id)}}" class="btn btn-sm btn-warning">Show</a>
                                                <a href="{{url('employee/'.$d->id.'/edit')}}" class="btn btn-sm btn-info">Update</a>
                                                <a onclick="return confirm('are you sure delete this data?')" href="{{url('employee/'.$d->id.'/delete')}}" class="btn btn-sm btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                        
                                    </tbody>
                                </table></div><div class="dataTable-bottom"><div class="dataTable-info">Showing 1 to 10 of 57 entries</div><nav class="dataTable-pagination"><ul class="dataTable-pagination-list"><li class="active"><a href="#" data-page="1">1</a></li><li class=""><a href="#" data-page="2">2</a></li><li class=""><a href="#" data-page="3">3</a></li><li class=""><a href="#" data-page="4">4</a></li><li class=""><a href="#" data-page="5">5</a></li><li class=""><a href="#" data-page="6">6</a></li><li class="pager"><a href="#" data-page="2">›</a></li></ul></nav></div></div>
                            </div>
                        </div>
                    
@endsection