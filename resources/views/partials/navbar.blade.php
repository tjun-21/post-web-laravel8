<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
      <a class="navbar-brand" href="/">IT Blogs</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ $active==="home" ? 'active':'' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $active==="all-post" ? 'active':'' }}" href="/posts">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $active==="about" ? 'active':'' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $active==="categories" ? 'active':'' }}" href="/categories">Category</a>
          </li>
          
        </ul>
      </div>
    </div>
</nav>