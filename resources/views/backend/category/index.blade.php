@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a class="btn btn-primary" href="/category/create">Add Category</a>
                    </div>
                    <div class="card-body">
                        <table class="table" id="datatable">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Category</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                           <tbody>
                            @foreach ($category as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td><img src="{{ asset( $item->photo ) }}" width="50px" alt=""></td>
                                <td>
                                    <a href="/category/{{ $item->id }}/edit" class="badge badge-info" >Edit</a>
                                    <a href="/category/{{ $item->id }}/edit" class="badge badge-success" >Show</a>
                                </td>
                                

                            </tr>
                        @endforeach
                           </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection