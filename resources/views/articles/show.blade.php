<x-layout :title="$article->title">
    <main class="py-5">
        <div class="d-flex flex-wrap align-items-end justify-content-between gap-4" data-aos="fade-up">
            <div>
                <p class="eyebrow mb-4">/ {{ $article->category }}</p>
                <h1 class="section-title mb-3">{{ $article->title }}</h1>
                <p class="section-copy mb-0 text-uppercase">{{ $article->author }} · {{ $article->created_at->diffForHumans() }}</p>
            </div>
            <a class="articles-link" href="{{ route('articles') }}"><i class="bi bi-arrow-left"></i> Torna agli articoli</a>
        </div>
        <div class="row signal-panel pt-4 pb-4 mt-5 align-items-start" data-aos="fade-up" data-aos-delay="100">
            <div class="col-md-8">
                <p>{!! nl2br(e($article->content)) !!}</p>
            </div>
            @if ($article->img)
                <div class="col-md-4 d-flex justify-content-center">
                    <img class="article-show-image" src="{{ asset('storage/' . $article->img) }}" alt="Immagine dell'articolo {{ $article->title }}">
                </div>
            @endif
        </div>
    </main>
</x-layout>