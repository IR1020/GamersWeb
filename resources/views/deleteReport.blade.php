<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>
        記事削除画面
    </title>
    
    <link rel="stylesheet" href="{{asset('../public/css/body.css')}}">
</head>

<body>
    <main>

    <form action="{{url('/delete_report/'.$report_id)}}" method="post">
        @csrf
        <p>本当に記事を削除しますか？</p>
        <input type="submit" name="select" value="はい">
        <input type="submit" name="select" value="いいえ"><br>
    </form>
    </main>

    @component('component.footer')
    @endcomponent
</body>

</html>