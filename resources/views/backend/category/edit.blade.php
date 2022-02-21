@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/category" class="btn btn-primary" >Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/category/{{ $category->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="name">Category Name</label>
                                <input id="name" class="form-control" type="text" name="name" value="{{ $category->name }}">
                            </div>

                            <div class="form-group">
                                <label for="photo">Upload Photo (Optional)</label>
                                <input id="photo" class="form-control-file" type="file" name="photo" accept="image/*" >
                            </div>

                            <div class="my-2">
                                <img src="{{ asset($category->photo) }}" width="120px" alt="">
                            </div>

                            <button class="btn btn-primary" type="submit">Update Record</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection