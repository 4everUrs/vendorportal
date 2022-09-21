<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Requests  Lists') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:py-8 ml-9 mr-9  ">
        <div class="bg-slate-300 overflow-hidden shadow-xl sm:rounded-lg pt-6 pb-6">
            <h3 class="text-3xl font-bold text-black text-center">Shop</h3>
            {{-- <h4 class="text-1xl font-bold text-black text-left pl-3 pt-6">Notes</h4>
            <h5 class="text-1xl font-bold text-black text-left pl-3">This shop is second hand or some stock in warehouse!!</h5> --}}
            
        </div>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:py-0 ml-9 mr-9  ">
        <div class="bg-slate-300 overflow-hidden shadow-xl sm:rounded-lg pt-6 pb-6 px-8">
    <div class="grid grid-cols-1 gap-4">
      <figure class="flex flex-wrap bg-slate-100 rounded-xl p-8 md:p-0 dark:bg-slate-800 overflow-hidden">
        <img class="w-full mx-auto" src="https://mdbootstrap.com/img/new/standard/city/042.jpg" alt="" width="384" height="512">
        <div class="w-full pt-6 md:p-8 text-center space-y-4">
            <h3 class="text-xl font-bold">Second Hand Tree</h3>
            <div class="text-lg font-semibold text-slate-500">
                $110.00-$180.00
              </div>
        <div class="flex align-center content-center justify-center -m-1 flex-wrap">
            <div class=" inline-block mt-3 text-center m-1">
                <a href="#" class="py-2 px-4 rounded-md bg-slate-600 font-semibold uppercase inline-block hover:bg-slate-800 text-white">Buy now</a>
            </div>
            <div class="inline-block mt-3 text-center m-1">
                <a href="#" class="py-2 px-4 rounded-md bg-slate-600 font-semibold uppercase inline-block hover:bg-slate-800 text-white">Add to cart</a>
            </div>
        </div>
        </div>
      </figure>
      
     
      </div>
    </div>
</div>


</x-app-layout>
