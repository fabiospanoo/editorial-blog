<x-layout title="Mettiamoci in contatto">
    <main class="py-5">
        <section class="contact-header" aria-labelledby="contact-title" data-aos="fade-up">
            <p class="eyebrow mb-4">// Contatti</p>
            <h1 id="contact-title" class="section-title mb-3">Mettiamoci in contatto.</h1>
            <p class="section-copy mb-0">Raccontami la tua idea, rispondo appena posso.</p>
        </section>
        <div class="contact-grid" data-aos="fade-up" data-aos-delay="100">
            <section class="contact-column" aria-labelledby="profile-title">
                <div class="profile">
                    <img class="profile-photo fixed" src="https://picsum.photos/600" alt="Foto di Fabio Spanò">
                    <div>
                        <p class="eyebrow mb-2">// Chi scrive</p>
                        <h2 id="profile-title" class="section-title mb-2">Fabio Spanò</h2>
                        <p class="section-copy-underline mb-2">Web Developer · Agentic AI · Java</p>
                        <p class="section-copy mb-0">Mi occupo di sviluppo software spaziando dal web alla programmazione a basso livello. Nel tempo libero configuro sistemi Linux, sperimento con schede Raspberry Pi, mi dedico alla stampa 3D e gestisco campagne da Dungeon Master.</p>                    
                    </div>
                </div>
            </section>
            <section class="contact-column" aria-labelledby="form-title">
                <form class="editor-form" action="{{ route('contact.send') }}" method="post">
                    @csrf
                    @if (session('success'))
                        <div class="contact-success mb-4">
                            <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="hint mb-4" style="color: var(--color-lighter);">Controlla i campi: sono tutti obbligatori.</div>
                    @endif
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="label" for="name">Nome</label>
                            <input class="input" type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Il tuo nome" required>
                        </div>
                        <div class="col-md-6">
                            <label class="label" for="email">Email</label>
                            <input class="input" type="email" id="email" name="email" value="{{ old('email') }}" placeholder="tua@email.it" required>
                        </div>
                        <div class="col-12">
                            <label class="label" for="message">Messaggio</label>
                            <textarea class="input textarea" id="message" name="message" rows="5" placeholder="Scrivi qui la tua idea" required>{{ old('message') }}</textarea>
                        </div>
                        <div class="col-12">
                            <span class="hint">*Tutti i campi sono obbligatori.</span>
                        </div>
                        <div class="col-12">
                            <button class="submit" type="submit">Invia <i class="bi bi-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
                <div class="contact-links mt-5">
                    <a class="contact-button" href="https://github.com/fabiospanoo" target="_blank" rel="noopener"><i class="bi bi-github me-2"></i>GitHub <i class="bi bi-arrow-right"></i></a>
                    <a class="contact-button" href="#" target="_blank" rel="noopener"><i class="bi bi-linkedin me-2"></i>LinkedIn <i class="bi bi-arrow-right"></i></a>
                </div>
            </section>
        </div>
    </main>
</x-layout>