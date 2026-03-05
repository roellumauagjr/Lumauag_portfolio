@extends('layouts.app')

@section('title', 'Creative Portfolio')

@section('content')
    <section class="hero-section fade-in-up">
        <div class="container px-4">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <p class="hero-subtitle mb-2">{{ $settings['hero_greeting'] ?? "Hey, I'm a" }}</p>
                    <h1 class="hero-title fade-in-up delay-1">
                        {{ $settings['hero_role_title'] ?? 'Creative Director' }}
                    </h1>

                    <div class="row mt-5">
                        <div class="col-md-8">
                            <p class="hero-description fade-in-up delay-2">
                                {{ $settings['about_text_paragraph'] ?? 'I’m a product designer focused on building clean, intuitive interfaces that solve real-world problems.' }}
                            </p>
                            <div class="mt-4 fade-in-up delay-3">
                                <a href="{{ route('contact') }}" class="btn-orange-pill text-decoration-none">
                                    {{ $settings['hero_cta_button'] ?? "Let's Build Something" }}
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="position-relative">
                        <div class="image-card">
                            <img src="{{ asset('assets/img/ROEL.png') }}" alt="Roel Lumauag"
                                class="img-fluid rounded-4 shadow-lg" style="border: 1px solid rgba(255,255,255,0.1);">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Skills Row (01, 02, 03...) -->
            <div class="row mt-5 pt-5 fade-in-up delay-3">
                @foreach($skills->take(4) as $skill)
                    <div class="col-md-3 col-6 mb-4">
                        <div class="stat-number">#{{ $skill->number_prefix ?? sprintf('%02d', $loop->iteration) }}</div>
                        <div class="fw-bold text-white">{{ $skill->name }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    <section class="py-5">
        <div class="container px-4">
            <div class="row mb-5">
                <div class="col-md-6">
                    <h3 class="text-orange mb-3">{{ $settings['behind_designs_title'] ?? 'Behind the Designs' }}</h3>
                    <h2 class="section-title">{{ $settings['behind_designs_subtitle'] ?? 'Shaping Experiences That Make Life Simpler' }}</h2>
                </div>
                <div class="col-md-6 d-flex align-items-end justify-content-md-end">
                    <p class="text-secondary max-w-400">
                        {{ $settings['behind_designs_description'] ?? "I believe that great design should feel invisible. It's about creating a language that connects and converts." }}
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="image-card">
                        <img src="{{ $settings['home_work_image_1'] ?? 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=1000&auto=format&fit=crop' }}"
                            alt="Work 1">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-card">
                        <img src="{{ $settings['home_work_image_2'] ?? 'https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?q=80&w=1000&auto=format&fit=crop' }}"
                            alt="Work 2">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-card">
                        <img src="{{ $settings['home_work_image_3'] ?? 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1000&auto=format&fit=crop' }}"
                            alt="Work 3">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection