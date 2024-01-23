<x-app-layout>
    <div class="container">
        <h1 class="text-center text-3xl py-5">Product Create Post</h1>
        <form action="{{route('products.store')}}" method="post" class="w-3/4 mx-auto bg-slate-200 px-5 py-5 my-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <select name="category_id" class="w-full">
                   @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                   @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="">Title</label>
                <input type="text" name="title" class="w-full" placeholder="Product Title">
            </div>
            <div class="mb-3">
                <label for="">Description</label>
               <textarea name="description" class="w-full" placeholder="Description"></textarea>
            </div>
            <div class="mb-3">
                <label for="">Product Quantity</label>
                <input type="number" name="quantity" min="0" class="w-full" placeholder="Write a title">
            </div>
            <div class="mb-3">
                <label for="">Price</label>
                <input type="number" name="price" min="0" class="w-full" placeholder="Price">
            </div>
            <div class="mb-3">
                <label for="">Discount Price</label>
                <input type="number" name="discount_price" min="0" class="w-full" placeholder="Discount Price">
            </div>
            <div class="mb-3">
                <label for="">Image</label>
                <input type="file" name="image" class="w-full border border-collapse border-slate-500 p-3" placeholder="Image">
            </div>
            <div class="mb-3">
                <input type="submit" class="bg-blue-400 px-5 py-2 rounded" value="Create">
            </div>
        </form>
    </div>
</x-app-layout>
