<x-layout>
 
 <div id="dropdownAvatarName" style=position: relative;left: 30px;
  border: 3px solid #73AD21; class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
      <div class="font-medium ">{{Auth::user()->name}}</div>
      <div class="truncate">{{Auth::user()->email}}</div>
    </div>
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
    </ul>
    <div class="py-2">
    
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




 