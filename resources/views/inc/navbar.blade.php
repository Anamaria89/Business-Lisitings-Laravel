
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Todo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="{{Request::is('/') ? 'nav-item active' : ''}}">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="{{Request::is('todo/create') ? 'nav-item active' : ''}}">
                  <a class="nav-link" href="todo/create">Create Todo</a>
                </li>
              </ul>
            </div>
        </div>
    </nav>
