<x-layout>
<div style="margin-left:1000px;">


<button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex items-center text-sm pe-1 font-medium text-gray-900 rounded-full hover:text-blue-600 dark:hover:text-blue-500 md:me-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white" type="button">
<span class="sr-only">Open user menu</span>
<img class="w-8 h-8 me-2 rounded-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPyGNr2qL63Sfugk2Z1-KBEwMGOfycBribew&s" alt="user photo">
 
<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
</svg>
</button>

<!-- Dropdown menu -->
<div id="dropdownAvatarName" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
      <div class="font-medium ">{{Auth::user()->name}}</div>
      <div class="truncate">{{Auth::user()->email}}</div>
    </div>
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
       
       
       
    </ul>
    <div class="py-2">
    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white  href="{{ route('logout') }}"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    {{ __('Logout') }}</a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf </form>
                                 











       
    </div>
</div>


</div> 

    <x-header>
         
         
        <x-slot:title>Dashboard</x-slot:title>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia sunt, assumenda dignissimos doloremque
        reiciendis autem iusto saepe ut minima nesciunt?
    </x-header>

    <section class="mt-8 flex flex-col md:flex-row gap-8">
        <x-card>
            <x-slot:title>2021 Stats</x-slot:title>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet, necessitatibus!
        </x-card>
        <x-card>
            <x-slot:title>2022 Stats</x-slot:title>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad, fugit.
        </x-card>
    </section>

    

</x-layout>

 