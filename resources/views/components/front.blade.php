<!doctype html>

<html x-data="{ darkMode: localStorage.getItem('dark') === 'true'}"
			x-init="$watch('darkMode', val => localStorage.setItem('dark', val))"
			x-bind:class="{ 'dark': darkMode }">

<head>
    <meta charset="utf-8">
     
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
     
    <script type="text/javascript"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
 
<main class="flex gap-8 bg-white dark:bg-gray-900">
         
        
        <main class="mt-4 px-4">
             
            {{ $slot }}
            
        </main> 
        </main> 

</body>
</html>