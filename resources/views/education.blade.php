@extends('layouts.app')

@section('title', 'Education & Certifications')

@section('content')
    <section class="py-5">
        <div class="container px-4">
            <div class="row mb-5 fade-in-up">
                <div class="col-md-8">
                    <h1 class="display-4 fw-bold mb-3">{{ $settings['edu_page_title'] ?? 'Educational' }} <span
                            class="text-orange">{{ $settings['edu_page_accent'] ?? 'Background' }}</span></h1>
                    <p class="lead text-secondary">
                        {{ $settings['edu_page_subtitle'] ?? 'My academic journey and professional certifications.' }}</p>
                </div>
            </div>

            <div class="row fade-in-up delay-1 justify-content-center">
                <div class="col-lg-10">
                    <h2 class="h3 fw-bold text-white mb-4"><i class="bi bi-mortarboard text-orange me-2"></i> Academic
                        <span class="text-orange">History</span>
                    </h2>
                    @forelse($educations as $edu)
                        <div class="mb-5 position-relative ps-4 border-start border-secondary border-opacity-25 pb-4">
                            <div class="position-absolute translate-middle-x start-0 bg-orange border border-dark rounded-circle"
                                style="width: 12px; height: 12px; top: 10px; left: -1px; background-color: var(--accent-orange);">
                            </div>

                            <div class="d-flex flex-sm-row flex-column justify-content-between align-items-sm-start mb-2">
                                <div>
                                    <h3 class="h4 fw-bold text-white mb-1">{{ $edu->role }}</h3>
                                    <div class="text-orange fw-bold small mb-3">{{ $edu->organization }}</div>
                                </div>
                                <div
                                    class="text-secondary small fw-bold bg-dark-accent px-3 py-1 rounded-pill border border-secondary border-opacity-10 mt-2 mt-sm-0">
                                    {{ $edu->year }}
                                </div>
                            </div>

                            <p class="text-secondary mb-0">
                                {{ $edu->description }}
                            </p>
                        </div>
                    @empty
                        <p class="text-secondary ps-4">No academic records found.</p>
                    @endforelse

                    <h2 class="h3 fw-bold text-white mb-4 mt-5"><i class="bi bi-patch-check text-orange me-2"></i>
                        {{ $settings['edu_certifications_title'] ?? 'Certifications & Awards' }}</h2>
                    <div class="row g-4">
                        @forelse($certifications as $cert)
                            <div class="col-md-6">
                                <div
                                    class="glass-card h-100 p-4 border border-secondary border-opacity-10 position-relative overflow-hidden">
                                    <div class="position-absolute top-0 end-0 p-3 opacity-10">
                                        <i class="bi bi-patch-check fs-1"></i>
                                    </div>
                                    <div class="text-orange small fw-bold mb-2">{{ $cert->year }}</div>
                                    <h3 class="h5 fw-bold text-white mb-2">{{ $cert->role }}</h3>
                                    <div class="text-secondary small mb-3">
                                        <i class="bi bi-building me-1"></i> {{ $cert->organization }}
                                    </div>
                                    <p class="text-secondary small mb-0">
                                        {{ $cert->description }}
                                    </p>
                                </div>
                            </div>
                        @empty
                            <div class="col-12">
                                <p class="text-secondary ps-4">No certifications or awards found.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection