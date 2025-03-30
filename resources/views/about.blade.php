@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl animate-fade-in">
                            <span class="block">About Me</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0 animate-fade-in-up" style="animation-delay: 200ms">
                            A passionate developer focused on creating efficient, scalable, and user-friendly solutions.
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

    <!-- Experience Timeline -->
    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="section-title text-center reveal">My Journey</h2>
            <div class="mt-10 space-y-8">
                @foreach([
                    [
                        'year' => '2023',
                        'title' => 'Senior Full-Stack Developer',
                        'company' => 'Tech Company',
                        'description' => 'Leading development of high-performance systems and mentoring junior developers.',
                        'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'
                    ],
                    [
                        'year' => '2021',
                        'title' => 'Backend Developer',
                        'company' => 'Startup',
                        'description' => 'Developed scalable backend services using Rust and Laravel.',
                        'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'
                    ],
                    [
                        'year' => '2019',
                        'title' => 'Software Engineer',
                        'company' => 'Enterprise',
                        'description' => 'Built and maintained web applications using modern technologies.',
                        'icon' => 'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'
                    ]
                ] as $index => $experience)
                <div class="relative reveal animation-delay-{{ $index }}">
                    <div class="absolute left-4 top-0 h-full w-0.5 bg-primary/20"></div>
                    <div class="relative flex items-start">
                        <div class="absolute left-4 top-0 h-8 w-8 rounded-full bg-primary flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $experience['icon'] }}" />
                            </svg>
                        </div>
                        <div class="ml-12 bg-white p-6 rounded-lg shadow-sm transform hover:scale-105 transition-all duration-300">
                            <div class="text-sm font-semibold text-primary">{{ $experience['year'] }}</div>
                            <h3 class="text-xl font-bold text-gray-900 mt-1">{{ $experience['title'] }}</h3>
                            <div class="text-gray-600 mt-1">{{ $experience['company'] }}</div>
                            <p class="mt-2 text-gray-500">{{ $experience['description'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Education Section -->
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="section-title text-center reveal">Education</h2>
            <div class="mt-10 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                @foreach([
                    [
                        'degree' => 'Master of Computer Science',
                        'school' => 'University Name',
                        'year' => '2019',
                        'description' => 'Specialized in Systems Programming and Distributed Systems'
                    ],
                    [
                        'degree' => 'Bachelor of Computer Science',
                        'school' => 'University Name',
                        'year' => '2017',
                        'description' => 'Focus on Software Engineering and Web Technologies'
                    ]
                ] as $index => $education)
                <div class="bg-white p-6 rounded-lg shadow-sm reveal transform hover:scale-105 transition-all duration-300 animation-delay-{{ $index }}">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-bold text-gray-900">{{ $education['degree'] }}</h3>
                        <span class="text-sm font-semibold text-primary">{{ $education['year'] }}</span>
                    </div>
                    <div class="mt-2 text-gray-600">{{ $education['school'] }}</div>
                    <p class="mt-2 text-gray-500">{{ $education['description'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Interests Section -->
    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="section-title text-center reveal">Interests & Hobbies</h2>
            <div class="mt-10 grid grid-cols-2 gap-4 sm:grid-cols-4">
                @foreach([
                    ['Open Source', 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253'],
                    ['System Design', 'M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z'],
                    ['Web Development', 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4'],
                    ['Cloud Computing', 'M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z']
                ] as $index => $interest)
                <div class="bg-white p-6 rounded-lg shadow-sm text-center reveal transform hover:scale-105 transition-all duration-300 animation-delay-{{ $index }}">
                    <svg class="w-12 h-12 mx-auto text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $interest[1] }}" />
                    </svg>
                    <div class="mt-4 text-lg font-semibold text-gray-900">{{ $interest[0] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection 