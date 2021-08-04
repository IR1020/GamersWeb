<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>
        記事投稿画面
    </title>
</head>

<body>
    <h1>
        記事の投稿
    </h1>

    @foreach ($errors->all() as $error)
    <li>
        {{$error}}
    </li>
    @endforeach

    <form action="write_report" method="post">
        @csrf
        <input type="text" name="report_title" placeholder="記事タイトル"><br><br>

        <textarea name="report_text" rows="10" cols="70" placeholder="記事本文"></textarea><br>

        <input type="submit" value="投稿"><br>
    </form>

    @component('component.footer')
    @endcomponent
</body>

</html>