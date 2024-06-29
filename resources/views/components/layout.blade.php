<!doctype html>

<html x-data="{ darkMode: localStorage.getItem('dark') === 'true'}"
			x-init="$watch('darkMode', val => localStorage.setItem('dark', val))"
			x-bind:class="{ 'dark': darkMode }">

<head>
    <meta charset="utf-8">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <main class="flex gap-8 bg-white dark:bg-gray-900">
        <x-sidebar class="min-w-fit flex-grow-0 flex-shrink-0 hidden md:block"/>
        
        <main class="mt-4 px-4">
            <div class="block sm:absolute top-5 right-8 order-1">
                <x-dark-mode-toggle size="4" />
            </div>
            {{ $slot }}
            <x-footer/>
        </main> 
        </main> 

        <script src="{{ asset('resources/js/delete.js') }}"></script>
    <script type="text/javascript">
        @yield('javascript')
    </script>
    @yield('js-files')    
    
</body>
</html>