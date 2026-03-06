@extends('layouts.app')

@section('title', 'Get in Touch')

@section('content')
    <section class="py-5">
        <div class="container px-4">
            <div class="row mb-5 fade-in-up">
                <div class="col-md-8">
                    <h1 class="display-4 fw-bold mb-3">{{ $settings['contact_page_title'] ?? 'Get in' }} <span class="text-orange">{{ $settings['contact_page_accent'] ?? 'Touch' }}</span></h1>
                    <p class="lead text-secondary">{{ $settings['contact_page_subtitle'] ?? "Let's collaborate on your next big idea." }}</p>
                </div>
            </div>

            <div class="row g-5 fade-in-up delay-1 justify-content-center">
                <div class="col-lg-8">
                    <div class="glass-card text-center py-5">
                        <h3 class="h4 fw-bold text-white mb-5">{{ $settings['contact_card_title'] ?? "Let's Connect" }}</h3>

                        <div class="row g-4 mb-5">
                            <div class="col-md-4">
                                <div class="stat-number mb-3 fs-2"><i class="bi bi-envelope"></i></div>
                                <div class="text-secondary small fw-bold">{{ $settings['contact_email_label'] ?? 'Email' }}</div>
                                <div class="text-white">{{ $settings['contact_email'] ?? 'roelslumauagjr@gmail.com' }}</div>
                            </div>

                            <div class="col-md-4">
                                <div class="stat-number mb-3 fs-2"><i class="bi bi-phone"></i></div>
                                <div class="text-secondary small fw-bold">{{ $settings['contact_phone_label'] ?? 'Phone' }}</div>
                                <div class="text-white">{{ $settings['contact_phone'] ?? '0962 1361 367' }}</div>
                            </div>

                            <div class="col-md-4">
                                <div class="stat-number mb-3 fs-2"><i class="bi bi-geo-alt"></i></div>
                                <div class="text-secondary small fw-bold">{{ $settings['contact_location_label'] ?? 'Location' }}</div>
                                <div class="text-white">{{ $settings['address'] ?? 'Bacolod City, Philippines' }}</div>
                            </div>
                        </div>

                        <hr class="border-secondary border-opacity-10 my-5">

                        <h4 class="h5 fw-bold text-white mb-4">{{ $settings['contact_follow_title'] ?? 'Follow Me' }}</h4>
                        <div class="d-flex justify-content-center gap-4">
                            <a href="{{ $settings['linkedin_url'] ?? 'https://linkedin.com' }}" target="_blank"
                                class="text-secondary text-decoration-none hover-white fs-4">
                                <i class="bi bi-linkedin"></i>
                                <span class="d-block small mt-1">LinkedIn</span>
                            </a>
                            <a href="{{ $settings['github_url'] ?? 'https://github.com' }}" target="_blank"
                                class="text-secondary text-decoration-none hover-white fs-4">
                                <i class="bi bi-github"></i>
                                <span class="d-block small mt-1">GitHub</span>
                            </a>
                            <a href="{{ $settings['facebook_url'] ?? 'https://facebook.com' }}" target="_blank"
                                class="text-secondary text-decoration-none hover-white fs-4">
                                <i class="bi bi-facebook"></i>
                                <span class="d-block small mt-1">Facebook</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .form-control:focus {
            background-color: #111;
            border-color: var(--accent-orange);
            color: white;
            box-shadow: none;
        }
    </style>
@endsection