<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top" role="navigation">
    <div class="container-fluid">
        <a href="{{ url('/') }}" class="navbar-brand" >{{ env('APP_NAME') }}</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div>
            <ul class="navbar-nav navbar-right">
                <li class="nav-item"><a class="nav-link" href="#">登录</a></li>
                <li class="nav-item"><a class="nav-link" href="#">注册</a></li>
            </ul>
        </div>
    </div>
</nav>
