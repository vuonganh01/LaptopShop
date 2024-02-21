@extends('master')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Chỉnh sửa một Product</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('product.update', $product) }}" method="post" enctype="multipart/form-data">
            @csrf
        @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Product code*</label>
                    <input name="code" type="text" class="form-control" id="exampleInputEmail1"
                        placeholder="Enter code" value="{{ $product->code }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input name="name" type="text" class="form-control" id="exampleInputEmail1"
                        placeholder="Enter name" value="{{ $product->name }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input name="description" type="text" class="form-control" id="exampleInputPassword1"
                        placeholder="Description" value="{{ $product->description }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Img</label>
                    <input name="img" type="file" class="form-control" id="exampleInputPassword1" value="{{ $product->img }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Content</label>
                    <input name="content" type="text" class="form-control" id="exampleInputPassword1"
                        placeholder="Content" value="{{ $product->content }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Số lượng</label>
                    <input name="quantity" type="text" class="form-control" id="exampleInputPassword1"
                        placeholder="Số lượng" value="{{ $product->quantity }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Giá</label>
                    <input name="price" type="text" class="form-control" id="exampleInputPassword1"
                        placeholder="price" value="{{ $product->price }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Category</label>
                    <select name="category_id" id="">
                        <option value="{{ $product->category_id }}"></option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Brand</label>
                    <select name="brand_id" id="">
                        <option value="{{ $product->brand_id }}"></option>
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
    {{-- <h2>Chỉnh sửa Product</h2>
    <form action="{{ route('product.update', $product) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="">Name: </label>
        <input type="text" name="name" value="{{ $product->name }}"> <br>
        <label for="">Img: </label>
        <input type="file" name="img" value="{{ $product->img }}"> <br>
        <label for="">Description</label>
        <input type="text" name="description" value="{{ $product->description }}"> <br>
        <label for="">Content</label>
        <input type="text" name="content" value="{{ $product->content }}"> <br>
        <select name="category_id" id="">
            <option value="{{ $product->category_id }}"></option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <button>Lưu</button>
    </form> --}}
@endsection
