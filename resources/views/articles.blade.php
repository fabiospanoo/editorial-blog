<x-layout title="Tutti gli articoli">
    <main class="py-5">
        <div class="d-flex flex-wrap align-items-end justify-content-between gap-4" data-aos="fade-up">
            <div>
                <p class="eyebrow mb-4">// Archivio</p>
                <h1 class="section-title mb-3">Articoli</h1>
                <p class="section-copy mb-0">Raccolta dei migliori articoli del nostro archivio.</p>
            </div>
            <div class="d-flex flex-column align-items-md-end gap-2">
                @if (session('message'))
                    <span class="hint" style="color: var(--color-lighter);">{{ session('message') }}</span>
                @endif
                @auth
                    <a class="articles-link" href="{{ route('articles.create') }}">Scrivi un articolo <i class="bi bi-arrow-right"></i></a>
                @endauth
                @guest
                    <a class="articles-link" href="{{ route('login') }}">Accedi per scrivere <i class="bi bi-arrow-right"></i></a>
                @endguest
            </div>
        </div>
        <div class="row g-4 mt-4" data-aos="fade-up" data-aos-delay="100">
            @forelse ($articles as $article)
                @if ($article->img == null)
                    <div class="col-mg-12">
                        <div class="signal-panel pt-4 pb-4 h-100">
                            <p class="eyebrow">{{ $article->category }}</p>
                            <h2 class="section-title mb-2"><a class="article-title" href="{{ route('article.show', $article) }}">{{ $article->title }}</a></h2>
                            <p class="section-copy mb-0">{{ Str::limit($article->content, 120) }}</p>
                            <p class="eyebrow mt-3 mb-0">{{ $article->author }} · {{ $article->created_at->diffForHumans() }}</p>
                            @auth
                                <div class="d-flex gap-3 mt-3">
                                    <a class="articles-link" href="{{ route('articles.edit', $article) }}">Modifica</a>
                                    <form action="{{ route('articles.destroy', $article) }}" method="post" onsubmit="return confirm('Eliminare questo articolo?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="articles-link btn p-0" type="submit">Elimina</button>
                                    </form>
                                </div>
                            @endauth
                        </div>
                    </div>
                @else
                    <div class="col-mg-12">
                        <div class="row signal-panel pt-4 pb-4 h-100">
                            <div class="col-md-8">
                            <p class="eyebrow">{{ $article->category }}</p>
                            <h2 class="section-title mb-2"><a class="article-title" href="{{ route('article.show', $article) }}">{{ $article->title }}</a></h2>
                            <p class="section-copy mb-0">{{ Str::limit($article->content, 120) }}</p>
                            <p class="eyebrow mt-3 mb-0">{{ $article->author }} · {{ $article->created_at->diffForHumans() }}</p>
                            @auth
                                <div class="d-flex gap-3 mt-3">
                                    <a class="articles-link" href="{{ route('articles.edit', $article) }}">Modifica</a>
                                    <form action="{{ route('articles.destroy', $article) }}" method="post" onsubmit="return confirm('Eliminare questo articolo?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="articles-link btn p-0" type="submit">Elimina</button>
                                    </form>
                                </div>
                            @endauth
                            </div>
                            <div class="col-md-4 d-flex align-items-center">
                                <img class="article-image mt-3 justify-content-end" src="{{ asset('storage/' . $article->img) }}" alt="Immagine dell'articolo {{ $article->title }}">
                            </div>
                        </div>
                    </div>
                @endif
                @empty
                <p class="section-copy">Nessun articolo disponibile.</p>
            @endforelse
        </div>
    </main>
</x-layout>