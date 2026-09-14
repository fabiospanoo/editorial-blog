<nav class="navbar navbar-expand-lg navbar-dark app-navbar">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('welcome') ? 'active' : '' }}" aria-current="page" href="{{ route('welcome') }}">/ Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('articles') || request()->routeIs('article.show') || request()->routeIs('articles.*') ? 'active' : '' }}" href="{{ route('articles') }}">/ Articles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">/ Contacts</a>
          </li>
        </ul>
      </div>
    </div>
</nav>