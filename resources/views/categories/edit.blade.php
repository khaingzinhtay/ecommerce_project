<x-app-layout>
    <div class="container">
        <form action="{{route('categories.update',$category->id)}}" method="post" class="w-3/4 mx-auto px-5 py-5 bg-slate-200 my-5">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="">Category Name</label>
                <input type="text" class="w-full" name="category_name" value="{{$category->category_name}}">
            </div>
            <div class="mb-3">
                <input type="submit" value="Update" class="bg-blue-300 px-5 py-2 rounded">
            </div>
        </form>
    </div>
</x-app-layout>
