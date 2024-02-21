@extends('master')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tạo mới một Category</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">description</label>
                    <input name="description" type="text" class="form-control" id="exampleInputPassword1" placeholder="Description">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Img</label>
                    <input name="img" type="file" class="form-control" id="exampleInputPassword1">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    {{-- <h2>Tạo mới Category</h2>
        <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="">Name: </label>
            <input type="text" name="name"> <br>
            <label for="">Img: </label>
            <input type="file" name="img"> <br>
            <label for="">Description</label>
            <input type="text" name="description"> <br>
            <button>Tạo mới</button>
        </form> --}}
@endsection
