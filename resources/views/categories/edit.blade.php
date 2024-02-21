@extends('master')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Chỉnh sửa một Category</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('category.update', $category) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input name="name" type="text" class="form-control" id="exampleInputEmail1"
                        placeholder="Enter name" value="{{ $category->name }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">description</label>
                    <input name="description" type="text" class="form-control" id="exampleInputPassword1"
                        placeholder="Description" value="{{ $category->description }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Img</label>
                    <input name="img" type="file" class="form-control" id="exampleInputPassword1"
                        value="{{ $category->img }}">
                    @if ($errors->has('image'))
                        <span class="text-danger">{{ $errors->first('image') }}</span>
                    @endif
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    {{-- <h2>Chỉnh sửa Category</h2>
<form action="{{ route('category.update', $category) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="">Name: </label>
    <input type="text" name="name" value="{{ $category->name }}"> <br>
    <label for="">Img: </label>
    <input type="file" name="img" value="{{ $category->img }}"> <br>
    <label for="">Description</label>
    <input type="text" name="description" value="{{ $category->description }}"> <br>
    <button>Lưu</button>
</form> --}}
@endsection
