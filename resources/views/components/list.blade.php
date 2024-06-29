<x-layout>

 <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
<a href="{{route('create_product')}}"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></a></svg>

<div style="padding-top:60px;margin-right:30px;">
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
     
    <table  class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="p-4">
                    <div class="flex items-center">
                        <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </div>
                </th>

                <th scope="col" class="px-6 py-3">
                    Product name
                </th>

                <th scope="col" class="px-6 py-3">
                thumbnail
                </th>
                 
                <th scope="col" class="px-6 py-3">
                    amount
                </th>
                <th scope="col" class="px-6 py-3">
                    price
                </th>
                <th scope="col" class="px-6 py-3">
                   created_at
                </th>
                <th scope="col" class="px-6 py-3">
                    updated_at
                </th>
                
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>

        @foreach($product as $products)

           <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">

                    <div class="flex items-center">
                        <input id="checkbox-table-search-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                    </div>

                </td>

                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                 {{$products->name}}   
                </th>
                
                <td class="px-6 py-4">
                 <img width=50 height=50 src="{{asset('storage/app/'.$products->thumbnail)}}">
                </td>
                

                <td class="px-6 py-4">
                {{$products->amount}}    
                </td>

                <td class="px-6 py-4">
                {{$products->price}}   
                </td>

                <td class="px-6 py-4">
                 {{$products->created_at}}    
                </td>

                <td class="px-6 py-4">
                {{$products->updated_at}}    
                </td>
                 
                <td class="flex items-center px-6 py-4">
                <a href="{{route('edit',$products->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                <a href="#" id="delete" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3 delete" data-id="{{$products->id }}">Remove</a>
                     
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
</div>

<div class="mt-6">

<nav aria-label="Page navigation example">
   {{$product->links()}}
</nav>

</div>
 <div class="flex justify-center m-5">
    <button id="deleteButton" data-modal-target=" " data-modal-toggle="deleteModal" class="block text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="button">
       
    Show delete confirmation
    </button>
</div>
 
<script type="text/javascript">
$(function() {
    $('.delete').click(function() {
        Swal.fire({
            title: "confirmDelete",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Tak',
            cancelButtonText: 'Nie'
        }).then((result) => {
            if (result.value) {
                $.ajax({

                    
                     
                    method: "DELETE",

                    data: {
                   "_token": "{{ csrf_token() }}",
                   url: "deleteUrl/" + $(this).data("id")
                   },
                   
                    
                    url: "deleteUrl/" + $(this).data("id")
                })
                .done(function (data) {
                    window.location.reload();
                })
                .fail(function (data) {
                    Swal.fire('Oops...', data.responseJSON.message, data.responseJSON.status);
                });
            }
        })
    });
});

</script>
 
</x-layout>