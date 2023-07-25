<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/stamp.css') }}" />
    <title>勤怠入力画面</title>
</head>
<body>
    <header>
        <p class="title">Atte</p>
            <ul class="header-nav">
                <li class="header-li">
                    <a href="">ホーム</a>
                </li>
                <li class="header-li">
                    <a href="">日付一覧</a>
                </li>
                <li class="header-li">
                    <a href="">ログアウト</a>
                </li>
            </ul>
    </header>
    <main>
        <div class="username">
            <h1 class="user">〇〇〇〇</h1>
            <h1 class="default">さんお疲れ様です！</h1>
        </div>
        <div class="stamp">
            <button class="start" type="submit">勤務開始</button>
            <button class="end" type="submit">勤務終了</button>
            <br>
            <button class="rest-start" type="submit">休憩開始</button>
            <button class="rest-end" type="submit">休憩終了</button>
    </main>
    <footer>
        <p class="footer-logo">Atte,inc.</p>
    </footer>
</body>
</html>