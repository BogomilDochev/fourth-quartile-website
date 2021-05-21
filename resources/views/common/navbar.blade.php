<nav class="navbar is-warning" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="/">
            <b><i>Example</i></b>
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a  href="/"
                class="navbar-item {{ Request::path() === '/' ? "is-active" : "" }}">
                Home
            </a>

            <a href="/videos"
               class="navbar-item {{ Request::path() === '/' ? "is-active" : "" }}">
                YouTube videos
            </a>

            <a href="/pictures"
               class="navbar-item {{ Request::path() === '/' ? "is-active" : "" }}">
                Pictures
            </a>

        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a class="button is-link">
                        <strong>Sign up</strong>
                    </a>
                    <a class="button is-light">
                        Log in
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
