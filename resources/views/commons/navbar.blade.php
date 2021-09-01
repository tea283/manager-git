
<header class="mb-4">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
        @if (Auth::check())
        {{-- トップページへのリンク --}}
        <nav class="navbar navbar-expand-sm navbar- bg-warning navbar navbar-light style="background-color:#956840;">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav">
                <li><a class="navbar-brand" href="/">
                    マネマチ(インフルエンサー)
                    </a>
                </li>
                {{-- ユーザ一覧ページへのリンク --}}
                <li class="nav-item">{!! link_to_route('users.index', 'マネージャー一覧', [], ['class' => 'nav-link']) !!}</li>
                <li class="nav-item dropdown">
            </ul>
        </div>
        </nav>
        @else
        {{-- トップページへのリンク --}}
        <nav class="navbar navbar-expand-sm navbar- bg-warning navbar navbar-light style="background-color:#956840;">
        <a class="navbar-brand" href="/">
            マネマチ
        </a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">会員登録</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item">{!! link_to_route('manaup.get', 'マネージャー会員登録', [], ['class' => 'nav-link']) !!}</a>
                        <a class="dropdown-item">{!! link_to_route('signup.get', 'インフルエンサー会員登録', [], ['class' => 'nav-link']) !!}</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">ログイン</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item">{!! link_to_route('manalog.get', 'マネージャーログイン', [], ['class' => 'nav-link']) !!}</a>
                        <a class="dropdown-item">{!! link_to_route('login.get', 'インフルエンサーログイン', [], ['class' => 'nav-link']) !!}</a>
                    </div>
                </li>
                <li>blog公開予定</li>
            </ul>
        </div>
        </nav>
        @endif
</header>

