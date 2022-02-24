@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/product/create" class="btn btn-primary" >Add Product</a>
                    </div>
                    <div class="card-body">
                        <table class="table" id="datatable">
                         <thead>
                            <tr>
                                <th>SN</th>
                                <th>Product Name</th>
                                <th>Photo</th>
                                <th>stock</th>
                                <th>Under</th>
                                <th>Price</th>
                                <th>Discount(%)</th>
                                <th>Selling Price</th>
                                <th>Action</th>
                            </tr>
                         </thead>
                            <tbody>
                                @foreach ($product as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td><img src="{{ asset($item->photo) }}" width="120px" alt=""></td>
                                    <td class="{{ $item->stock == 0 ? 'text-danger text-bold' : '' }} {{ $item->stock == 1 ? 'text-primary text-bold' : '' }}" >{{ $item->stock == 1 ? 'Available' : 'Out of stock'}}</td>
                                    <td>{{ $item->category->name }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->discount_price }}</td>
                                    <td>{{ $item->selling_price }}</td>
                                    <td>
                                        <a href="/product/{{ $item->id }}/edit" class="badge badge-primary" >Edit</a>
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