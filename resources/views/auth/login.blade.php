<x-layout title="Accedi">
    <main class="editor py-5">
        <div class="row justify-content-center">
            <div class="col-md-6" data-aos="fade-up">
                <p class="eyebrow mb-4">/ Accesso autori</p>
                <h1 class="section-title mb-3">Login</h1>
                <p class="section-copy mb-5">Bentornato, entra per pubblicare nuovi articoli.</p>

                <form class="editor-form" action="{{ route('login') }}" method="post">
                    @csrf
                    @if ($errors->any())
                        <div class="hint mb-4" style="color: var(--color-lighter);">Email o password non corretti: controlla e riprova.</div>
                    @endif
                    <div class="row g-4">
                        <div class="col-12">
                            <label class="label" for="email">Email</label>
                            <input class="input" type="email" id="email" name="email" value="{{ old('email') }}" placeholder="tua@email.it" required autofocus>
                        </div>
                        <div class="col-12">
                            <label class="label" for="password">Password</label>
                            <input class="input" type="password" id="password" name="password" placeholder="La tua password" required>
                        </div>
                        <div class="col-12">
                            <span class="hint">*Non hai un account? <a class="articles-link" href="{{ route('register') }}">Registrati qui</a>.</span>
                        </div>
                        <div class="col-12">
                            <button class="submit" type="submit">Accedi <i class="bi bi-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
</x-layout>