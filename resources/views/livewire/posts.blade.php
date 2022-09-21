<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            @forelse ($posts as $post)
            <div class="grid grid-cols-1 gap-8 p-5">
                <div class="h-full p-5 bg-white">
                    <h3 class="pb-1.5 text-2xl font-bold text-black text-center">{{$post->title}}</h3>
                    <h3 class="pb-1.5 text-1xl font-bold text-black text-left">Requirements</h3>
                    
                    <div class="pb-2.5 bg-slate-200 p-2">
                        {{ $post->requirements }}
                    </div>
                    <div class="block mt-3 text-center">
                        <a href="{{route('apply')}}" class="py-2 px-4 rounded-md bg-slate-600 font-semibold uppercase inline-block hover:bg-slate-800 text-white">Apply Now</a>
                    </div>
                </div>

            </div>
            @empty
                
            @endforelse
            
            
        </div>
    </div>
</div>