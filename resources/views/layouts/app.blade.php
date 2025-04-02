<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stemwijzer</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="bg-gray-50 text-gray-800 min-h-screen flex flex-col">

    <header class="bg-blue-600 p-4 text-white text-center">
        <h1 class="text-3xl font-semibold">Welkom bij de Stemwijzer</h1>
    </header>

    <main class="py-8 flex-grow">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white p-4 text-center">
        &copy; 2025 Stemwijzer. Developed by Tommy
    </footer>

</body>
</html>