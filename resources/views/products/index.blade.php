<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
</head>
<body>
    <div class="container-scroller">
        @include('admin.sidebar')
        @include('admin.header')
        <div class="main-panel">
            <div class="content-wrapper">
                <h1 class="text-center py-5">All Products List</h1>
                <a href="{{route('products.create')}}" class="bg-blue-500 px-5 py-2 my-5">Product Create Link</a>
                <table class="table table-bordered my-3">
                    <tr>
                        <th>Category Name</th>
                        <th>Title</th>
                        {{-- <th>Description</th> --}}
                        <th>Image</th>
                        <th>Price</th>
                        <th>Discount Price</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{$product->category->category_name}}</td>
                            <td>{{$product->title}}</td>
                            {{-- <td>{{$product->description}}</td> --}}
                            <td><img src="{{ asset('storage/' . $product->image) }}" alt="Hello"></td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->discount_price}}</td>
                            <td class="flex">
                                <a href="" class="btn btn-primary">Edit</a>
                                <a href="" class="btn btn-warning mx-3">Show</a>
                                <form action="" method="post">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        @include('admin.js')
</body>
</html>
