<nav class="navbar navbar-light navbar-expand-md navbar-spark">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img class="h-37 w-auto" src="/img/logo.png" alt="Home">

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarSupportedContent" class="collapse navbar-collapse">

            <ul class="navbar-nav mr-auto">
                @includeIf('spark::nav.user-left')
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/login">{{__('Login')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">{{__('Register')}}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>