@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $manager->name }}</h3>
                </div>
                <div class="card-body">
                    {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
                    <img class="rounded img-fluid" src="{{ Gravatar::get($manager->email, ['size' => 500]) }}" alt="">
                </div>
            </div>
        </aside>
        <div class="col-sm-8">
            <ul class="nav nav-tabs nav-justified mb-3">
                {{-- ユーザ詳細タブ --}}
                <li class="nav-item">
                    <a href="{{ route('users.show', ['user' => $manager->id]) }}" class="nav-link {{ Request::routeIs('users.show') ? 'active' : '' }}">
                        
                    </a>
                </li>
                {{-- フォロー一覧タブ --}}
                <li class="nav-item"><a href="#" class="nav-link">フォロー</a></li>
                {{-- フォロワー一覧タブ --}}
                <li class="nav-item"><a href="#" class="nav-link">フォロワー</a></li>
            </ul>
        </div>
    </div>
@endsection