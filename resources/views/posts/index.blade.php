<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <h1><a href="{{ route('posts.index') }}">Laravel News</a></h1> {{-- index.blade.phpへのリンク --}}
    <br>
    <form action="{{ route('posts.news') }}" method="POST" onsubmit="return confirm('本当に投稿しますか？');" novalidate>
        @csrf
        <div>
            <label for ="title">タイトル</label>
            <input type="text" id="title" name="title">
        </div>
        <div>
            <label for ="news">本文</label>
            <input type="text" id="news" name="news">
        </div>
        <button type="submit">投稿</button>
    </form>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    @foreach ($posts as $post) {{-- PostControllerのindexメソッド内の「$posts」を受け取る --}}
        <h3>タイトル：{{ $post->title }}</h3>
        <p>内容：{{ $post->news }}</p>
        <br>
        <h3><a href ="{{ route('posts.show',$post->id) }}">本文はこちら:{{ $post->title}}</a></h3>
    @endforeach
</body>
</html>