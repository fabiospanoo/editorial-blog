<x-layout title="Tutti gli articoli">
    <main class="py-5">
        <div class="d-flex flex-wrap align-items-end justify-content-between gap-4" data-aos="fade-up">
            <div>
                <p class="eyebrow mb-4">// Archivio</p>
                <h1 class="section-title mb-3">Articoli</h1>
                <p class="section-copy mb-0">Raccolta dei migliori articoli del nostro archivio.</p>
            </div>
            <a class="articles-link" href="{{ route('articles.create') }}">Scrivi un articolo <i class="bi bi-arrow-right"></i></a>
        </div>
        <div class="row g-4 mt-4" data-aos="fade-up" data-aos-delay="100">
            @forelse ($articles as $article)
                <div class="col-mg-12">
                    <div class="signal-panel pt-4 pb-4 h-100">
                        <p class="eyebrow">{{ $article->category }}</p>
                        <h2 class="section-title mb-2"><a class="article-title" href="{{ route('article.show', $article) }}">{{ $article->title }}</a></h2>
                        <p class="section-copy mb-0">{{ Str::limit($article->content, 120) }}</p>
                        <p class="eyebrow mt-3 mb-0">{{ $article->author }} · {{ $article->created_at->diffForHumans() }}</p>
                    </div>
                </div>
            @empty
                <p class="section-copy">Nessun articolo disponibile.</p>
            @endforelse
        </div>
    </main>
</x-layout>