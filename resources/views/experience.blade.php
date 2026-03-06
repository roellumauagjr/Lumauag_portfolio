@extends('layouts.app')

@section('title', 'Experience & Education')

@section('content')
    <section class="py-5">
        <div class="container px-4">
            <div class="row mb-5 fade-in-up">
                <div class="col-md-8">
                    <h1 class="display-4 fw-bold mb-3">{{ $settings['experience_page_title'] ?? 'Career' }} <span class="text-orange">{{ $settings['experience_page_accent'] ?? 'Journey' }}</span></h1>
                    <p class="lead text-secondary">{{ $settings['experience_page_subtitle'] ?? 'My professional experience and academic background.' }}</p>
                </div>
            </div>

            <div class="row fade-in-up delay-1 justify-content-center">
                <div class="col-lg-10">
                    <h2 class="h3 fw-bold text-white mb-4"><i class="bi bi-briefcase text-orange me-2"></i> {{ $settings['exp_professional_title'] ?? 'Affiliations' }}</h2>
                    @forelse($experiences->where('type', 'experience') as $exp)
                        <div class="mb-5 position-relative ps-4 border-start border-secondary border-opacity-25 pb-4">
                            <div class="position-absolute translate-middle-x start-0 bg-orange border border-dark rounded-circle"
                                style="width: 12px; height: 12px; top: 10px; left: -1px; background-color: var(--accent-orange);">
                            </div>

                            <div class="d-flex flex-sm-row flex-column justify-content-between align-items-sm-start mb-2">
                                <div>
                                    <h3 class="h4 fw-bold text-white mb-1">{{ $exp->role }}</h3>
                                    <div class="text-orange fw-bold small mb-3">{{ $exp->organization }}</div>
                                </div>
                                <div
                                    class="text-secondary small fw-bold bg-dark-accent px-3 py-1 rounded-pill border border-secondary border-opacity-10 mt-2 mt-sm-0">
                                    {{ $exp->year }}
                                </div>
                            </div>

                            <p class="text-secondary mb-0">
                                {{ $exp->description }}
                            </p>
                        </div>
                    @empty
                        <p class="text-secondary ps-4">No affiliations records found.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
@endsection