@extends('layouts.app')

@section('title', 'Skills & Expertise')

@section('content')
    <section class="py-5">
        <div class="container px-4">
            <div class="row mb-5 fade-in-up">
                <div class="col-md-8">
                    <h1 class="display-4 fw-bold mb-3">{{ $settings['skills_page_title'] ?? 'Skills &' }} <span class="text-orange">{{ $settings['skills_page_accent'] ?? 'Expertise' }}</span></h1>
                    <p class="lead text-secondary">{{ $settings['skills_page_subtitle'] ?? 'A comprehensive list of my technical capabilities and creative expertise.' }}
                    </p>
                </div>
            </div>

            <div class="row g-4 fade-in-up delay-1">
                @forelse($skills as $skill)
                    <div class="col-lg-3 col-md-6">
                        <div class="glass-card">
                            <div class="stat-number">#{{ $skill->number_prefix ?? sprintf('%02d', $loop->iteration) }}</div>
                            <h3 class="h4 fw-bold text-white mb-3">{{ $skill->name }}</h3>
                            <p class="text-secondary mb-0">
                                {{ $skill->description }}
                            </p>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <p class="text-secondary">No skills found in the database.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection