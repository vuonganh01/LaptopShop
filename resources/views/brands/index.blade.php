@extends('master')
@section('content')

<h1>brand</h1>
<form action="{{ route('brand.create') }}" method="get">
    <button class="btn btn-success mb-1" type="submit">Tạo mới một Brand</button>
</form>

<table class="table table-dark">
    <tr>
        <th>Tên</th>
        <th>slug</th>
        <th>description</th>
        <th>img</th>
        <th>Hành động</th>
    </tr>
    @foreach($brands as $brand)
    <tr>
        <td>{{ $brand->name }}</td>
        <td>{{ $brand->slug }}</td>
        <td>{{ $brand->description }}</td>
        <td><img style="width: 100px" src="{{ asset($brand->img) }}" alt=""></td>
        <td>
            <form action="/brand/{{ $brand->id }}/edit" method="GET">
                <button class="btn btn-warning" type="submit">Sửa</button>
            </form>
            <form action="{{ route('brand.destroy', $brand) }}" method="POST">
            @csrf
            @method('delete')
                <button class="btn btn-danger" type="submit">Xoá</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>
@endsection
    