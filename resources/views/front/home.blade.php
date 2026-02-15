@extends('front.layouts.app')

@section('title', 'Home - Volymoly')

@section('content')

    <!-- Hero Section -->
    <section class="bg-blue-600 text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-4">
                {{ $data['data']['title'] ?? 'Welcome to Volymoly' }}
            </h2>

            <p class="text-lg mb-8">
                {{ $data['data']['description'] ?? 'We build scalable digital solutions for global clients.' }}
            </p>

            <a href="/contact"
               class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                Get In Touch
            </a>
        </div>
    </section>


    <!-- Services Preview -->
    <section class="py-16">
        <div class="container mx-auto px-6 text-center">

            <h3 class="text-3xl font-bold mb-12">Our Core Services</h3>

            <div class="grid md:grid-cols-3 gap-8">

                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <h4 class="text-xl font-semibold mb-4">Web Development</h4>
                    <p>Modern, scalable and secure web applications using Laravel & Vue.</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <h4 class="text-xl font-semibold mb-4">Mobile App Development</h4>
                    <p>Cross-platform mobile apps with high performance and elegant UI.</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <h4 class="text-xl font-semibold mb-4">API Development</h4>
                    <p>Robust and secure REST APIs for web and mobile integration.</p>
                </div>

            </div>

        </div>
    </section>


    <!-- Call To Action -->
    <section class="bg-gray-800 text-white py-16 text-center">
        <h3 class="text-3xl font-bold mb-4">Ready to Start Your Project?</h3>
        <p class="mb-8">Let’s build something amazing
