<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Volymoly IT Solutions')</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Header -->
    <header class="bg-white shadow">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600">Volymoly</h1>

            <nav class="space-x-6">
                <a href="/" class="hover:text-blue-600">Home</a>
                <a href="/about" class="hover:text-blue-600">About</a>
                <a href="/services" class="hover:text-blue-600">Services</a>
                <a href="/projects" class="hover:text-blue-600">Portfolio</a>
                <a href="/contact" class="hover:text-blue-600">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white mt-16">
        <div class="container mx-auto px-6 py-8 text-center">
            <p>&copy; {{ date('Y') }} Volymoly IT Solutions. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
