<x-app-layout>
   <p>{{ route('chirps.store') }}</p>
   <p>{{ route('chirps.index') }}</p>
   <p>{{ route('chirps.index') }}</p>
    <x-alert :color=" 'bg-yellow-900' " : message= "  $message "/>
    <x-alert :color=" 'bg-yellow-900' " : message= " ' Ce champs est requis ' "/>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg: p-8">
        <form action="{{route('chirps.store')}}" method="post">
            @csrf 
            <textarea name= "message" placeholder="{{__('What\'son your mind ?')}}"
            class="block w-full border -gray-300 focus:border-indigo-300 focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            {{old ('message')}}
            </textarea>
            <x-input-error : messages= "$errors -> get('message')" class="mt-2"/>
                <x-primary-button class="mt-4">{{__ ('chirp')}}</x-primary-button>
        </form>
    </div> 
</x-layout>
