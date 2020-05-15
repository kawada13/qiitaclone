@extends('layouts.common')
@section('content')
@if(!Auth::check())
<div id="login-wrapper" class="row">
    <div class="col-7">
        <h1 class="text-white"><b>Hello！</b></h1>
        <p class="text-white">Qiita風は、プログラミング練習用に作りました。<br>Qitaっぽいサイトを作って学んだことを復習し、スキル定着を目指す！<br>コードを書いていて気づいたこと・学んだことはバンバンシェアして行こう！</p>
    </div>
    <div class="col-5">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <table>
                <tr>
                    <th>ユーザ名</th>
                    <td><input type="text" class="form-control" placeholder="qiita風" size="50" value="{{ old('email') }}" name="username" required autofocus></td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td><input type="email" class="form-control" placeholder="qiitahuu@qiitahuu.com" size="50" name="email" required></td>
                </tr>
                <tr>
                    <th>パスワード</th>
                    <td><input type="password" class="form-control" name="password" required size="50"></td>
                </tr>
                <tr>
                    <th></th>
                    <td><input type="submit" value="ログイン" class="form-control"></td>
                </tr>
            </table>
        </form>
    </div>
</div>
@else

@endif


@endsection