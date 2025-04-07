@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl animate-fade-in">
                            <span class="block">Hi, I'm</span>
                            <span class="block text-primary animate-slide-in">Your Name</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0 animate-fade-in-up" style="animation-delay: 200ms">
                            I'm a passionate full-stack developer specializing in Rust and web technologies. 
                            From high-performance systems to elegant web applications, I bring ideas to life.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start animate-fade-in-up" style="animation-delay: 400ms">
                            <div class="rounded-md shadow">
                                <a href="{{ route('projects') }}" class="btn-primary hover:scale-105 transform transition-transform duration-200">
                                    View My Work
                                </a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="{{ route('contact') }}" class="btn-secondary hover:scale-105 transform transition-transform duration-200">
                                    Contact Me
                                </a>
                            </div>
                        </div>
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

    <!-- Stats Section -->
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-4 sm:grid-cols-4">
                <div class="bg-white p-6 rounded-lg shadow-sm text-center reveal transform hover:scale-105 transition-all duration-300">
                    <div class="text-4xl font-bold text-primary">5+</div>
                    <div class="text-gray-600 mt-2">Years with Rust</div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm text-center reveal transform hover:scale-105 transition-all duration-300">
                    <div class="text-4xl font-bold text-primary">50+</div>
                    <div class="text-gray-600 mt-2">Projects Completed</div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm text-center reveal transform hover:scale-105 transition-all duration-300">
                    <div class="text-4xl font-bold text-primary">100%</div>
                    <div class="text-gray-600 mt-2">Client Satisfaction</div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm text-center reveal transform hover:scale-105 transition-all duration-300">
                    <div class="text-4xl font-bold text-primary">10M+</div>
                    <div class="text-gray-600 mt-2">Requests/Day Handled</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Projects Section -->
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="section-title text-center reveal">Featured Projects</h2>
            <p class="mt-4 max-w-2xl mx-auto text-center text-gray-500 reveal">
                Here are some of my recent projects showcasing high-performance systems and web applications built with Rust.
            </p>
            <div class="mt-10 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                @foreach([
                    [
                        'title' => 'TaskFlow',
                        'description' => 'A modern task management web application built with Laravel, featuring real-time updates, team collaboration, and intuitive task organization.',
                        'tags' => ['Laravel', 'Vue.js', 'MySQL', 'Tailwind CSS'],
                        'image' => 'https://placehold.co/600x400/4F46E5/FFFFFF/webp?text=TaskFlow&font=raleway',
                        'metrics' => ['Real-time', 'Team Sync', 'Task Analytics'],
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
                        'features' => [
                            'Real-time data processing pipeline',
                            'Integration with Apache Kafka',
                            'PostgreSQL optimization',
                            'Scalable architecture'
                        ],
                        'link' => '#'
                    ],
                    [
                        'title' => 'Full-Stack Web App',
                        'description' => 'Modern web application using Rust for the backend API and React for the frontend, demonstrating full-stack capabilities.',
                        'tags' => ['Rust', 'React', 'Docker'],
                        'image' => 'https://placehold.co/600x400/7C3AED/FFFFFF/webp?text=Full+Stack&font=raleway',
                        'metrics' => ['50K Users', '100ms TTI', 'PWA Ready'],
                        'features' => [
                            'Rust-powered backend API',
                            'React frontend with modern UI',
                            'Docker containerization',
                            'Progressive Web App features'
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
                            <ul class="list-disc list-inside space-y-2 text-sm text-gray-600">
                                @foreach($project['features'] as $feature)
                                <li>{{ $feature }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Skills Section with animated progress bars -->
    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="section-title text-center reveal">Skills & Expertise</h2>
            <p class="mt-4 max-w-2xl mx-auto text-center text-gray-500 reveal">
                With a strong foundation in systems programming and modern web technologies, I create efficient and scalable solutions.
            </p>
            <div class="mt-10 grid grid-cols-1 gap-6 sm:grid-cols-2">
                <!-- Systems Programming -->
                <div class="space-y-6 reveal">
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <h3 class="text-xl font-semibold text-gray-900 flex items-center">
                            <svg class="w-6 h-6 mr-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                            Systems Programming
                        </h3>
                        @foreach([
                            ['Rust', '95', 'High-performance systems programming'],
                            ['WebAssembly', '85', 'Browser-based computation'],
                            ['Tokio', '90', 'Async runtime & networking'],
                            ['Systems Architecture', '88', 'Distributed systems']
                        ] as $skill)
                        <div class="relative pt-1 mt-4"
                             x-data="{ inView: false }"
                             x-intersect="inView = true">
                            <div class="flex mb-2 items-center justify-between">
                                <div>
                                    <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-primary bg-primary/10">
                                        {{ $skill[0] }}
                                    </span>
                                </div>
                                <div class="text-right">
                                    <span class="text-xs font-semibold inline-block text-primary">
                                        {{ $skill[1] }}%
                                    </span>
                                </div>
                            </div>
                            <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-primary/10">
                                <div x-show="inView"
                                     x-transition:enter="transition ease-out duration-1000"
                                     x-transition:enter-start="w-0"
                                     x-transition:enter-end="w-full"
                                     class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-primary"
                                     :style="'width: ' + {{ $skill[1] }} + '%'"></div>
                            </div>
                            <div class="text-sm text-gray-600">{{ $skill[2] }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Web Development -->
                <div class="space-y-6 reveal">
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <h3 class="text-xl font-semibold text-gray-900 flex items-center">
                            <svg class="w-6 h-6 mr-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                            Web Development
                        </h3>
                        @foreach([
                            ['Laravel', '90', 'Backend Development'],
                            ['Vue.js', '85', 'Frontend Development'],
                            ['PostgreSQL', '88', 'Database Design'],
                            ['Docker', '85', 'Containerization']
                        ] as $skill)
                        <div class="relative pt-1 mt-4"
                             x-data="{ inView: false }"
                             x-intersect="inView = true">
                            <div class="flex mb-2 items-center justify-between">
                                <div>
                                    <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-primary bg-primary/10">
                                        {{ $skill[0] }}
                                    </span>
                                </div>
                                <div class="text-right">
                                    <span class="text-xs font-semibold inline-block text-primary">
                                        {{ $skill[1] }}%
                                    </span>
                                </div>
                            </div>
                            <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-primary/10">
                                <div x-show="inView"
                                     x-transition:enter="transition ease-out duration-1000"
                                     x-transition:enter-start="w-0"
                                     x-transition:enter-end="w-full"
                                     class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-primary"
                                     :style="'width: ' + {{ $skill[1] }} + '%'"></div>
                            </div>
                            <div class="text-sm text-gray-600">{{ $skill[2] }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Open Source Contributions -->
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="section-title text-center reveal">Open Source Contributions</h2>
            <p class="mt-4 max-w-2xl mx-auto text-center text-gray-500 reveal">
                I'm an active contributor to the Rust ecosystem, helping build the future of systems programming.
            </p>
            <div class="mt-10 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach([
                    [
                        'name' => 'Rust Crate',
                        'stars' => '1.2k',
                        'description' => 'High-performance networking library for Rust',
                        'link' => '#'
                    ],
                    [
                        'name' => 'WebAssembly Tool',
                        'stars' => '800',
                        'description' => 'Rust to WebAssembly compilation toolkit',
                        'link' => '#'
                    ],
                    [
                        'name' => 'System Utilities',
                        'stars' => '500',
                        'description' => 'Collection of Rust system utilities',
                        'link' => '#'
                    ]
                ] as $contribution)
                <div class="bg-white p-6 rounded-lg shadow-sm reveal transform hover:scale-105 transition-all duration-300">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-900">{{ $contribution['name'] }}</h3>
                        <div class="flex items-center text-yellow-500">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <span class="ml-1 text-sm font-semibold">{{ $contribution['stars'] }}</span>
                        </div>
                    </div>
                    <p class="mt-2 text-gray-600">{{ $contribution['description'] }}</p>
                    <a href="{{ $contribution['link'] }}" class="mt-4 inline-flex items-center text-primary hover:text-secondary">
                        View Project
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
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
                    <span class="block">Ready to build something fast and reliable?</span>
                </h2>
                <p class="mt-4 text-lg leading-6 text-white/80">
                    Let's create high-performance solutions together using Rust and modern web technologies.
                </p>
                <div class="mt-8 flex justify-center">
                    <div class="inline-flex rounded-md shadow">
                        <a href="{{ route('contact') }}" 
                           class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-primary bg-white hover:bg-gray-50 hover:scale-105 transform transition-all duration-200">
                            Get in touch
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
