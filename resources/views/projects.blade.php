@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl animate-fade-in">
                            <span class="block">My Projects</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0 animate-fade-in-up" style="animation-delay: 200ms">
                            A collection of my work showcasing expertise in web development, systems programming, and full-stack solutions.
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

    <!-- Project Categories -->
    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-center space-x-4 mb-8 reveal">
                <button class="px-4 py-2 rounded-full bg-primary text-white hover:bg-primary/90 transition-colors duration-200">
                    All Projects
                </button>
                <button class="px-4 py-2 rounded-full bg-white text-gray-700 hover:bg-gray-50 transition-colors duration-200">
                    Web Apps
                </button>
                <button class="px-4 py-2 rounded-full bg-white text-gray-700 hover:bg-gray-50 transition-colors duration-200">
                    Systems
                </button>
                <button class="px-4 py-2 rounded-full bg-white text-gray-700 hover:bg-gray-50 transition-colors duration-200">
                    Open Source
                </button>
            </div>

            <!-- Projects Grid -->
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                @foreach([
                    [
                        'title' => 'TaskFlow',
                        'description' => 'A modern task management web application built with Laravel, featuring real-time updates, team collaboration, and intuitive task organization.',
                        'tags' => ['Laravel', 'Vue.js', 'MySQL', 'Tailwind CSS'],
                        'image' => 'https://placehold.co/600x400/4F46E5/FFFFFF/webp?text=TaskFlow&font=raleway',
                        'metrics' => ['Real-time', 'Team Sync', 'Task Analytics'],
                        'category' => 'Web Apps',
                        'features' => [
                            'Real-time task updates using WebSocket',
                            'Team collaboration features',
                            'Task analytics and reporting',
                            'Responsive design with Tailwind CSS'
                        ],
                        'link' => '#'
                    ],
                    [
                        'title' => 'High-Performance API Gateway',
                        'description' => 'A blazing-fast API Gateway built with Rust and Tokio, handling millions of requests per second with minimal latency.',
                        'tags' => ['Rust', 'Tokio', 'WebAssembly'],
                        'image' => 'https://placehold.co/600x400/2563EB/FFFFFF/webp?text=API+Gateway&font=raleway',
                        'metrics' => ['10ms Latency', '99.99% Uptime', '2M req/s'],
                        'category' => 'Systems',
                        'features' => [
                            'High-performance request routing',
                            'Built with Rust for maximum efficiency',
                            'WebAssembly integration',
                            'Advanced monitoring and metrics'
                        ],
                        'link' => '#'
                    ],
                    [
                        'title' => 'Real-time Data Processing',
                        'description' => 'Rust-powered data processing pipeline that handles real-time analytics with exceptional performance.',
                        'tags' => ['Rust', 'Apache Kafka', 'PostgreSQL'],
                        'image' => 'https://placehold.co/600x400/059669/FFFFFF/webp?text=Data+Processing&font=raleway',
                        'metrics' => ['5TB/day', 'Real-time', 'Zero data loss'],
                        'category' => 'Systems',
                        'features' => [
                            'Real-time data processing pipeline',
                            'Integration with Apache Kafka',
                            'PostgreSQL optimization',
                            'Scalable architecture'
                        ],
                        'link' => '#'
                    ],
                    [
                        'title' => 'Rust Networking Library',
                        'description' => 'High-performance networking library for Rust with zero-copy operations and async support.',
                        'tags' => ['Rust', 'Networking', 'Async'],
                        'image' => 'https://placehold.co/600x400/DC2626/FFFFFF/webp?text=Rust+Networking&font=raleway',
                        'metrics' => ['Zero-copy', 'Async', 'High Performance'],
                        'category' => 'Open Source',
                        'features' => [
                            'Zero-copy network operations',
                            'Async/await support',
                            'Comprehensive documentation',
                            'Cross-platform compatibility'
                        ],
                        'link' => '#'
                    ],
                    [
                        'title' => 'WebAssembly Toolkit',
                        'description' => 'Toolkit for compiling Rust code to WebAssembly with optimizations and browser integration.',
                        'tags' => ['Rust', 'WebAssembly', 'JavaScript'],
                        'image' => 'https://placehold.co/600x400/7C3AED/FFFFFF/webp?text=WASM+Toolkit&font=raleway',
                        'metrics' => ['Fast Compilation', 'Small Size', 'Browser Ready'],
                        'category' => 'Open Source',
                        'features' => [
                            'Optimized WebAssembly compilation',
                            'Browser integration tools',
                            'Performance optimization utilities',
                            'Developer-friendly API'
                        ],
                        'link' => '#'
                    ],
                    [
                        'title' => 'System Utilities',
                        'description' => 'Collection of high-performance system utilities written in Rust for common operations.',
                        'tags' => ['Rust', 'Systems', 'CLI'],
                        'image' => 'https://placehold.co/600x400/0891B2/FFFFFF/webp?text=System+Utils&font=raleway',
                        'metrics' => ['Fast Execution', 'Low Memory', 'Cross-platform'],
                        'category' => 'Open Source',
                        'features' => [
                            'Command-line utilities',
                            'System resource monitoring',
                            'File system operations',
                            'Process management'
                        ],
                        'link' => '#'
                    ]
                ] as $index => $project)
                <div class="card group reveal transform transition-all duration-300 hover:scale-105 hover:shadow-xl animation-delay-{{ $index }}" 
                     x-data="{ showDetails: false }">
                    <div class="relative overflow-hidden">
                        <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" 
                             class="w-full h-48 object-cover transform transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-start p-6">
                            <div class="text-white">
                                <span class="text-sm font-medium bg-primary/80 px-2 py-1 rounded-full">{{ $project['category'] }}</span>
                                <h3 class="text-xl font-semibold mt-2">{{ $project['title'] }}</h3>
                                <p class="mt-2 text-sm">Click to learn more</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900">{{ $project['title'] }}</h3>
                        <p class="mt-2 text-gray-600">{{ $project['description'] }}</p>
                        <!-- Key Metrics -->
                        <div class="mt-4 grid grid-cols-3 gap-2">
                            @foreach($project['metrics'] as $metric)
                            <div class="text-center p-2 bg-gray-50 rounded">
                                <div class="text-sm font-semibold text-primary">{{ $metric }}</div>
                            </div>
                            @endforeach
                        </div>
                        <div class="mt-4 flex items-center justify-between">
                            <div class="flex flex-wrap gap-2">
                                @foreach($project['tags'] as $tag)
                                <span class="px-2 py-1 text-xs font-medium bg-primary/10 text-primary rounded-full">{{ $tag }}</span>
                                @endforeach
                            </div>
                            <div class="flex space-x-2">
                                <button @click="showDetails = !showDetails" 
                                        class="text-primary hover:text-secondary transition-colors duration-200">
                                    Learn more →
                                </button>
                                <a href="{{ $project['link'] }}" 
                                   class="text-primary hover:text-secondary transition-colors duration-200">
                                    View Project →
                                </a>
                            </div>
                        </div>
                        <div x-show="showDetails" 
                             x-collapse 
                             class="mt-4 p-4 bg-gray-50 rounded-lg">
                            <p class="text-sm text-gray-600">
                                Detailed technical implementation, including architecture decisions, performance optimizations,
                                and the impact of using modern technologies in production.
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="bg-primary">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="text-center reveal">
                <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                    <span class="block">Want to see more?</span>
                </h2>
                <p class="mt-4 text-lg leading-6 text-white/80">
                    Check out my GitHub profile for more projects and contributions.
                </p>
                <div class="mt-8 flex justify-center">
                    <div class="inline-flex rounded-md shadow">
                        <a href="#" 
                           class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-primary bg-white hover:bg-gray-50 hover:scale-105 transform transition-all duration-200">
                            View GitHub Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 