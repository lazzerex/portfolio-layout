@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl animate-fade-in">
                            <span class="block">Get in Touch</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0 animate-fade-in-up" style="animation-delay: 200ms">
                            Let's discuss how we can work together to bring your ideas to life.
                        </p>
                    </div>
                </main>
            </div>
        </div>
        <!-- Decorative blob -->
        <div class="absolute right-0 top-0 -z-10 opacity-10">
            <svg class="w-96 h-96" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M44.7,-76.4C58.8,-69.2,71.8,-59.1,79.6,-45.8C87.4,-32.5,90,-16.3,88.5,-1.5C87,13.3,81.4,26.5,73.6,38.4C65.8,50.3,55.7,60.9,43.2,67.4C30.7,73.9,15.3,76.3,0.7,75.2C-13.9,74.1,-27.7,69.4,-41.5,62.8C-55.3,56.2,-69,47.6,-77.1,35.4C-85.2,23.2,-87.7,7.4,-85.9,-8.2C-84.1,-23.8,-78,-39.2,-67.7,-49.5C-57.4,-59.8,-42.9,-65,-29.6,-70.5C-16.3,-76,-8.2,-81.8,3.4,-87.8C15,-93.8,30.6,-83.6,44.7,-76.4Z" transform="translate(100 100)" />
            </svg>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white p-8 rounded-lg shadow-sm reveal">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Send a Message</h2>
                    
                    @if(session('success'))
                        <div class="mb-4 p-4 text-sm text-green-700 bg-green-100 rounded-lg">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="mb-4 p-4 text-sm text-red-700 bg-red-100 rounded-lg">
                            <ul class="list-disc list-inside">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="space-y-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                <input type="text" name="name" id="name" required
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm transition-colors duration-200">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" name="email" id="email" required
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm transition-colors duration-200">
                            </div>
                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                                <input type="text" name="subject" id="subject" required
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm transition-colors duration-200">
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                                <textarea name="message" id="message" rows="4" required
                                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm transition-colors duration-200"></textarea>
                            </div>
                        </div>
                        <div>
                            <button type="submit" 
                                    class="btn-primary w-full transform hover:scale-105 transition-all duration-200">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="space-y-8 reveal">
                    <!-- Contact Cards -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @foreach([
                            [
                                'title' => 'Email',
                                'value' => 'your.email@example.com',
                                'icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                                'link' => 'mailto:your.email@example.com'
                            ],
                            [
                                'title' => 'Location',
                                'value' => 'Your City, Country',
                                'icon' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z',
                                'link' => '#'
                            ],
                            [
                                'title' => 'GitHub',
                                'value' => '@yourusername',
                                'icon' => 'M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z',
                                'link' => 'https://github.com/yourusername'
                            ],
                            [
                                'title' => 'LinkedIn',
                                'value' => 'Your Name',
                                'icon' => 'M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-.88-.06-1.601-1-1.601-1 0-1.16.781-1.16 1.601v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z',
                                'link' => 'https://linkedin.com/in/yourusername'
                            ]
                        ] as $index => $contact)
                        <a href="{{ $contact['link'] }}" 
                           class="bg-white p-6 rounded-lg shadow-sm transform hover:scale-105 transition-all duration-300 reveal animation-delay-{{ $index }}">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <svg class="h-6 w-6 text-primary" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="{{ $contact['icon'] }}" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-medium text-gray-900">{{ $contact['title'] }}</h3>
                                    <p class="mt-1 text-gray-500">{{ $contact['value'] }}</p>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>

                    <!-- Availability Status -->
                    <div class="bg-white p-6 rounded-lg shadow-sm reveal transform hover:scale-105 transition-all duration-300">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="h-3 w-3 rounded-full bg-green-500 animate-pulse"></div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Available for Work</h3>
                                <p class="mt-1 text-gray-500">I'm currently open to new opportunities and collaborations.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Response Time -->
                    <div class="bg-white p-6 rounded-lg shadow-sm reveal transform hover:scale-105 transition-all duration-300">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Quick Response</h3>
                                <p class="mt-1 text-gray-500">I typically respond to messages within 24 hours.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Map Section -->
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow-sm reveal">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Location</h2>
                <div class="aspect-w-16 aspect-h-9 rounded-lg overflow-hidden">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.30591910525!2d-74.25986532942815!3d40.69714941978971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1641234567890!5m2!1sen!2s" 
                            width="100%" 
                            height="450" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
@endsection 