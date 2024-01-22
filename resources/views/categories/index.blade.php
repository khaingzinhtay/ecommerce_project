<x-app-layout>
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
                <h1 class="text-center py-5">Category All List</h1>
                <a href="{{route('categories.create')}}" class="btn btn-primary px-2 py-2 float-start">Create Category Link</a>
                <div>
                    <table class="table-fixed border border-collapse border-slate-300 px-5 py-5 mx-auto w-3/4 my-5">
                        <tr>
                            <th class="border border-slate-300 px-5 py-3">Name</th>
                            <th class="border border-slate-300 px-5">Action</th>
                        </tr>
                        @foreach ($categories as $category)
                            <tr>
                                <td class="border border-slate-300 px-5 py-2">{{$category->category_name}}</td>
                                <td class="border border-slate-300 px-5 py-2 flex">
                                    <a href="{{route('categories.edit',$category->id)}}" class="bg-blue-500 px-3 rounded py-2">Edit</a>
                                    <a href="" class="bg-yellow-500 px-3 py-2 rounded mx-3">Show</a>
                                    <form action="{{route('categories.destroy',$category->id)}}" onclick="return confirm('Are You Sure To Delete')" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-600 px-3 py-2 rounded">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        @include('admin.js')
</body>
</html>
</x-app-layout>

