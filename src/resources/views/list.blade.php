<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/stamp.css') }}" />
    <title>勤務記録画面</title>
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
        
        <div class="list-table">
        <table class="list-table_inner" style="width: 100%; max-width: 0 auto;">
            <tr class="list-table_info">
                <th scope ="col">名前</th>
                <th scope ="col">勤務開始</th>
                <th scope ="col">勤務終了</th>
                <th scope ="col">休憩時間</th>
                <th scope ="col">勤務時間</th>
            </tr>
    </main>
    <footer>
        <p class="footer-logo">Atte,inc.</p>
    </footer>
</body>
</html>