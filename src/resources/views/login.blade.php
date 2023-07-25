<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{asset('css/login.css')}}"/>
</head>
<body>
    <header>
        <p class="title">Atte</p>
    </header>
    <main>
        <h1>ログイン</h1>
        <div>
            <input class="mail" type="email" placeholder="メールアドレス">
        </div>
        <div>
            <input class="pass" type="password" placeholder="パスワード">
        </div>
        <div>
            <button class="login_button" type="submit">ログイン</button>
        </div>
        <p class="guidance">アカウントをお持ちでない方はこちらから</p>
        <a class="register" href="">会員登録</a>
    </main>
    <footer>
        <p class="footer-logo">Atte,inc.</p>
    </footer>
</body>
</html>