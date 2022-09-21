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
                 <div class="w-full md:w-1/2 px-2 mb-6 md:mb-0 ">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Personnel FirstName
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="">
                    {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                </div>

                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                   Personnel LastName
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="">
                </div>

                {{-- <div class="flex flex-wrap mb-2 pt-6">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                        City
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="">
                    </div>
        
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        State
                        </label>
                        <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                            <option></option>
                            <option>Missouri</option>
                            <option>Texas</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                        Zip
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="90210">
                    </div>
                    </div> --}}

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
                    Item Name
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

                <div class="w-full  px-2 mb-6 md:mb-0 ">
                    <label class="pt-6 block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="file_input">Upload file</label>
                    <input class="red w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                </div> 



                <div class="w-full block mt-3 text-center ">
                    <a href="#" class="py-2 px-4 rounded-md bg-slate-600 font-semibold uppercase inline-block hover:bg-slate-800 text-white">Submit</a>
                </div>
         
        </form>
    </div>
</div>

</x-app-layout>