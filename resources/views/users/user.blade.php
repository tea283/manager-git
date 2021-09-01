@if (count($managers) > 0)
    <ul class="list-unstyled">
        @foreach ($managers as $manager)
            <li class="media">
                {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
                <img class="mr-2 rounded" src="{{ Gravatar::get($manager->email, ['size' => 50]) }}" alt="">
                <div class="media-body">
                    <div>
                        {{ $manager->name }}
                    </div>
                    <div>
                        {{-- ユーザ詳細ページへのリンク --}}
                        <p>{!! link_to_route('users.show', 'プロフィールを見る', ['user' => $manager->id]) !!}</p>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    url()->previous()
@endif