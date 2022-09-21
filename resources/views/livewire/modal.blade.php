<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> 
<div class="max-w-7xl mx-auto sm:px-6 lg:py-8 ml-9 mr-9  ">
    <div class="bg-slate-300 overflow-hidden shadow-xl sm:rounded-lg pt-6 pb-6">
        <form class="w-full max-w-lg m-auto ">
             <h3 class="pb-8 text-2xl font-bold text-black text-center">Applying Form</h3>
             
             <div class="flex flex-wrap ">

                <div class="w-full  px-2 mb-6 md:mb-0 ">
                    <label class="pt-6 block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Company Name
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="">
                    {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                </div> 

                <div class="w-full  px-2 mb-6 md:mb-0 ">
                    <label class="pt-6 block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Company Address
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="">
                    {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                </div> 

                <div class="w-full  px-2 mb-6 md:mb-0 ">
                    <label class="pt-6 block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Company Contact Info
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="">
                    {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                </div> 

                <div class="w-full  px-2 mb-6 md:mb-0 ">
                    <label class="pt-6 block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Bid Amount
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="">
                    {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                </div> 


                <div class="w-full block mt-3 text-center ">
                    <a href="#" class="py-2 px-4 rounded-md bg-slate-600 font-semibold uppercase inline-block hover:bg-slate-800 text-white">Submit</a>
                </div>
         
        </form>
    </div>
</div>
</div>


</x-app-layout>