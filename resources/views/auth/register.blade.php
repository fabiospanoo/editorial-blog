<x-layout title="Crea un account">
    <main class="editor py-5">
        <div class="row justify-content-center">
            <div class="col-md-6" data-aos="fade-up">
                <p class="eyebrow mb-4">/ Nuovo autore</p>
                <h1 class="section-title mb-3">Register</h1>
                <p class="section-copy mb-5">Crea un account per scrivere sul blog.</p>

                <form class="editor-form" action="{{ route('register') }}" method="post">
                    @csrf
                    @if ($errors->any())
                        <div class="hint mb-4" style="color: var(--color-lighter);">Controlla i campi: qualcosa non va.</div>
                    @endif
                    <div class="row g-4">
                        <div class="col-12">
                            <label class="label" for="name">Nome</label>
                            <input class="input" type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Il tuo nome" required autofocus>
                        </div>
                        <div class="col-12">
                            <label class="label" for="email">Email</label>
                            <input class="input" type="email" id="email" name="email" value="{{ old('email') }}" placeholder="tua@email.it" required>
                        </div>
                        <div class="col-md-6">
                            <label class="label" for="password">Password</label>
                            <input class="input" type="password" id="password" name="password" placeholder="Minimo 8 caratteri" required>
                        </div>
                        <div class="col-md-6">
                            <label class="label" for="password_confirmation">Conferma password</label>
                            <input class="input" type="password" id="password_confirmation" name="password_confirmation" placeholder="Ripeti la password" required>
                        </div>
                        <div class="col-12">
                            <span class="hint">*Tutti i campi sono obbligatori.</span>
                        </div>
                        <div class="col-12">
                            <button class="submit" type="submit">Registrati <i class="bi bi-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
</x-layout>