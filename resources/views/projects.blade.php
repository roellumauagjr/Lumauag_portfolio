@extends('layouts.app')

@section('title', 'Work & Projects')

@section('content')
    <section class="py-5">
        <div class="container px-4">
            <div class="row mb-5 fade-in-up">
                <div class="col-md-8">
                    <h1 class="display-4 fw-bold mb-3">{{ $settings['projects_page_title'] ?? 'Featured' }} <span class="text-orange">{{ $settings['projects_page_accent'] ?? 'Projects' }}</span></h1>
                    <p class="lead text-secondary">{{ $settings['projects_page_subtitle'] ?? 'A curated selection of my past work and personal projects.' }}</p>
                </div>
            </div>

            <div class="row g-4 fade-in-up delay-1">
                @forelse($projects as $project)
                    <div class="col-lg-4 col-md-6">
                        <div class="glass-card">
                            <div class="stat-number">#{{ sprintf('%02d', $loop->iteration) }}</div>
                            <div class="text-orange small fw-bold mb-1">{{ $project->client_name }}</div>
                            <h3 class="h4 fw-bold text-white mb-3">{{ $project->title }}</h3>
                            <p class="text-secondary mb-0">
                                {{ $project->description }}
                            </p>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <p class="text-secondary">No projects found in the database.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection