@extends('master')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tạo mới một Product</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Product code*</label>
                    <input name="code" type="text" class="form-control" id="exampleInputEmail1"
                        placeholder="Enter code">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input name="name" type="text" class="form-control" id="exampleInputEmail1"
                        placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input name="description" type="text" class="form-control" id="exampleInputPassword1"
                        placeholder="Description">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Img</label>
                    <input name="img" type="file" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Content</label>
                    <input name="content" type="text" class="form-control" id="exampleInputPassword1"
                        placeholder="Content">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Số lượng</label>
                    <input name="quantity" type="text" class="form-control" id="exampleInputPassword1"
                        placeholder="số lượng">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Giá*</label>
                    <input name="price" type="text" class="form-control" id="exampleInputPassword1"
                        placeholder="price">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Category</label>
                    <select name="category_id" id="">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Brand</label>
                    <select name="brand_id" id="">
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    {{-- <h2>Tạo mới Product</h2>
    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Name: </label>
        <input type="text" name="name"> <br>
        <label for="">Img: </label>
        <input type="file" name="img"> <br>
        <label for="">Description</label>
        <input type="text" name="description"> <br>
        <label for="">Content</label>
        <input type="text" name="content"> <br>
        <select name="category_id" id="">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <br>
        <button>Tạo mới</button>
    </form> --}}
@endsection
