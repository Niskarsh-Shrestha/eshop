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
                        <form action="/category" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Category Name</label>
                                <input id="name" class="form-control" type="text" name="name">
                            </div>

                            <div class="form-group">
                                <label for="photo">Upload Photo (Optional)</label>
                                <input id="photo" class="form-control-file" type="file" name="photo" accept="image/*">
                            </div>

                            

                            <button class="btn btn-primary" type="submit">Save Record</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection