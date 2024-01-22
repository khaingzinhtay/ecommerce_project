<x-app-layout>
    <div class="container">
        <form action="{{route('categories.store')}}" method="post" class="w-3/4 mx-auto bg-slate-100 my-5 px-5 py-5">
            @csrf
            <div class="mb-3">
                <label for="name">Category Name</label>
                <input type="text" name="category_name" class="w-full" placeholder="Category Name....">
            </div>
            <div class="mb-3">
                <input type="submit" class="bg-blue-500 px-5 py-2 rounded">
            </div>
        </form>
    </div>
</x-app-layout>
