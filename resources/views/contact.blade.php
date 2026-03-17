@extends('layouts.app')

@section('title', 'Get in Touch')

@section('content')
    <section class="py-5">
        <div class="container px-4">
            <div class="row mb-5 fade-in-up">
                <div class="col-md-8">
                    <h1 class="display-4 fw-bold mb-3">{{ $settings['contact_page_title'] ?? 'Get in' }} <span
                            class="text-orange">{{ $settings['contact_page_accent'] ?? 'Touch' }}</span></h1>
                    <p class="lead text-secondary">
                        {{ $settings['contact_page_subtitle'] ?? "Let's collaborate on your next big idea." }}</p>
                </div>
            </div>

            <div class="row g-5 fade-in-up delay-1 justify-content-center">
                <div class="col-lg-8">
                    <div class="glass-card text-center py-5">
                        <h3 class="h4 fw-bold text-white mb-5">{{ $settings['contact_card_title'] ?? "Let's Connect" }}</h3>

                        <div class="row g-4 mb-5">
                            @foreach($contacts->where('type', 'main') as $contact)
                                <div class="col-md-4">
                                    <div class="stat-number mb-3 fs-2"><i class="bi {{ $contact->icon }}"></i></div>
                                    <div class="text-secondary small fw-bold">{{ $contact->platform }}</div>
                                    <div class="text-white">{{ $contact->display_text }}</div>
                                </div>
                            @endforeach
                        </div>

                        <hr class="border-secondary border-opacity-10 my-5">

                        <h4 class="h5 fw-bold text-white mb-4">{{ $settings['contact_follow_title'] ?? 'Follow Me' }}</h4>
                        <div class="d-flex justify-content-center gap-4">
                            @foreach($contacts->where('type', 'social') as $social)
                                <a href="{{ $social->value }}" target="_blank"
                                    class="text-secondary text-decoration-none hover-white fs-4">
                                    <i class="bi {{ $social->icon }}"></i>
                                    <span class="d-block small mt-1">{{ $social->platform }}</span>
                                </a>
                            @endforeach
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