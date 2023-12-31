<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{asset('css/register.css')}}"/>
    <title>会員登録</title>
</head>
<body>
    <header>
        <p class="title">Atte</p>
    </header>
    <main>
    <h1>新規登録画面</h1>
    <div class="register-form">
        <div>
            <input class="name" type="text" placeholder="名前">
        </div>
        <div>
            <input class="mail" type="email" placeholder="メールアドレス">
        </div>
        <div>
            <input class="pass" type="password" placeholder="パスワード">
        </div>
        <div>
            <input class="pass-confirmation" type="password" placeholder="確認用パスワード">
        </div>
        <div>
            <button class="register_button" type="submit">会員登録</button>
        </div>
    </div>
        <p class="guidance">アカウントをお持ちの方はこちらから</p>
        <a class="login" href="">ログイン</a>
    </main>
    <footer>
        <p class="footer-logo">Atte,inc.</p>
    </footer>
</body>
</html>