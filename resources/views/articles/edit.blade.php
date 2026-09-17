<x-layout title="Modifica l'articolo">
    <main class="editor py-5">
        <div data-aos="fade-up">
            <p class="eyebrow mb-4">/ Modifica</p>
            <h1 class="section-title mb-3">Modifica l'articolo</h1>
            <p class="section-copy mb-5">Aggiorna il contenuto della tua pubblicazione.</p>
        </div>

        <form class="editor-form w-full" action="{{ route('articles.update', $article) }}" method="post" data-aos="fade-up" data-aos-delay="100" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row g-4">
                <div class="col-md-8">
                    <label class="label" for="title">Titolo</label>
                    <input class="input" type="text" id="title" name="title" value="{{ old('title', $article->title) }}" placeholder="Inserisci il titolo" required>
                </div>
                <div class="col-md-6">
                    <label class="label" for="author">Nome</label>
                    <input class="input" type="text" id="author" name="author" value="{{ old('author', $article->author) }}" placeholder="Il tuo nome" required>
                </div>
                <div class="col-12">
                    <label class="label" for="category">Categoria</label>
                    <input class="input" type="text" id="category" name="category" value="{{ old('category', $article->category) }}" placeholder="Scrivi una categoria" required>
                </div>
                <div class="col-12">
                    <label class="label" for="content">Testo</label>
                    <textarea class="input textarea" id="content" name="content" rows="12" placeholder="Scrivi qui il tuo articolo" required>{{ old('content', $article->content) }}</textarea>
                </div>
                <div class="col-12">
                    <label class="label" for="image">Immagine</label>
                    <input class="input" type="file" id="image" name="img" accept="image/*">
                    @if ($article->img)
                        <div class="mt-3">
                            <img class="article-image" src="{{ asset('storage/' . $article->img) }}" alt="Immagine attuale dell'articolo {{ $article->title }}">
                        </div>
                    @endif
                </div>
            </div>

            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mt-5">
                <span class="hint">*Solo titolo, nome, categoria e testo sono obbligatori.</span>
                <button class="submit" type="submit">Salva modifiche <i class="bi bi-arrow-right"></i></button>
            </div>
        </form>
    </main>
</x-layout>