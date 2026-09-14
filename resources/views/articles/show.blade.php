<x-layout :title="$article->title">
    <main class="py-5">
        <div class="d-flex flex-wrap align-items-end justify-content-between gap-4">
            <div>
                <p class="eyebrow mb-4">/ {{ $article->category }}</p>
                <h1 class="section-title mb-3">{{ $article->title }}</h1>
                <p class="section-copy mb-0 text-uppercase">{{ $article->author }} · {{ $article->created_at->diffForHumans() }}</p>
            </div>
            <a class="articles-link" href="{{ route('articles') }}"><i class="bi bi-arrow-left"></i> Torna agli articoli</a>
        </div>
        <div class="signal-panel pt-4 pb-4 mt-5">
            <p>{{ $article->content }}</p>
        </div>
    </main>
</x-layout>