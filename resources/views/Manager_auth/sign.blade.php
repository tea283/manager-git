@extends('layouts.app')

@section('content')
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<div class="oll">
    <div class="text-center">
        <h1 style="text-align:center">マネージャー会員登録(変更可能)</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::open(['route' => 'manaup.post']) !!}
                <div class="form-group">
                    {!! Form::label('photo', '自分のアイコンのurlをお貼りください。') !!}
                    {!! Form::text('photo', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('name', '名前(ニックネームでもOKです。)') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('age', '年齢(数字だけご入力ください。)') !!}
                    {!! Form::text('age', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('gender', '性別') !!}
                <select name="gender" class="border rounded px-2 py-1 mb-5" name="gender">
                    <option value="">▼選択してください</option>
                    <option>男</option></option>
                    <option>女</option>
                </select>
                </div>
                <div class="form-group">
                    {!! Form::label('sns', 'sns(リンクをお貼りください。)(ない場合はなしとお書きください。)') !!}
                    {!! Form::text('sns', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('skill', 'スキル、資格、できること') !!}
                    {!! Form::text('skill', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('gakureki', '学歴、経歴') !!}
                    {!! Form::text('gakureki', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('job', '現在のお仕事(ない場合は、「なし」とお書きください。)') !!}
                    {!! Form::text('job', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('pr', '自己PR') !!}
                    {!! Form::text('pr', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password_confirmation', 'パスワードの確認') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('登録', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection