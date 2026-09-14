<x-layout title="Scrivi un nuovo articolo">
    <main class="editor py-5">
        <div data-aos="fade-up">
            <p class="eyebrow mb-4">/ Nuova pubblicazione</p>
            <h1 class="section-title mb-3">Crea un articolo</h1>
            <p class="section-copy mb-5">Dai una forma chiara alla tua prossima idea.</p>
        </div>

        <form class="editor-form w-full" action="{{ route('articles.store') }}" method="post" data-aos="fade-up" data-aos-delay="100">
            @csrf
            <div class="row g-4">
                <div class="col-md-8">
                    <label class="label" for="title">Titolo</label>
                    <input class="input" type="text" id="title" name="title" placeholder="Inserisci il titolo" required>
                </div>
                <div class="col-md-4">
                    <label class="label" for="author">Nome</label>
                    <input class="input" type="text" id="author" name="author" placeholder="Il tuo nome" required>
                </div>
                <div class="col-12">
                    <label class="label" for="category">Categoria</label>
                    <input class="input" type="text" id="category" name="category" placeholder="Scrivi una categoria" required>
                </div>
                <div class="col-12">
                    <label class="label" for="content">Testo</label>
                    <textarea class="input textarea" id="content" name="content" rows="12" placeholder="Scrivi qui il tuo articolo" required></textarea>
                </div>
            </div>

            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mt-5">
                <span class="hint">*Tutti i campi sono obbligatori.</span>
                <button class="submit" type="submit">Pubblica articolo <i class="bi bi-arrow-right"></i></button>
            </div>
        </form>
    </main>
</x-layout>