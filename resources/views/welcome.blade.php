<x-layout>
    <main class="welcome-page py-5">
        <section class="welcome-hero row align-items-center g-0" aria-labelledby="welcome-title">
            <div class="col-lg-10">
                <p class="eyebrow mb-4">Studio // 01</p>
                <h1 id="welcome-title" class="welcome-title mb-4">Pensiero digitale,<br><span>forma essenziale.</span></h1>
                <p class="welcome-lead mb-0">Un archivio indipendente di idee, sistemi e storie dal confine tra tecnologia e cultura.</p>
            </div>

        </section>

        <section class="articles-entry row align-items-end g-0" aria-labelledby="articles-title">
            <div class="col-md-8">
                <p class="eyebrow mb-3">// Archivio</p>
                <h2 id="articles-title" class="section-title mb-3">Leggi oltre la superficie.</h2>
                <p class="section-copy mb-0">Articoli brevi e osservazioni curate per orientarsi nel rumore digitale.</p>
            </div>
            <div class="col-md-4 text-md-end">
                <a class="articles-link" href="{{ route('articles') }}">
                    Esplora gli articoli <span aria-hidden="true">-&gt;</span>
                </a>
            </div>
        </section>
    </main>
</x-layout>