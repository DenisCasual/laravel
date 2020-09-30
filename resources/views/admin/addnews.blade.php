@extends('layouts.main')

@section('title', 'addnews')

@section('menu')
    @include('admin.menu')
@endsection

@section('content')
    <html>
    <head>
        <title>Добавление новости</title>
        <script>
            function CopyTxt() {
                function strtr(str, repl) {
                    for (var i = 0; i < str.length; i++) {
                        var f = str.charAt(i), r = repl[f];
                        if (r) str = str.replace(new RegExp(f, 'g'), r);
                    }
                    return str;
                }
                var trans = {
                    'А':'A', 'Б':'B', 'В':'V', 'Г':'G', 'Д':'D', 'Е':'E', 'Ё':'E', 'Ж':'Gh', 'З':'Z', 'И':'I', 'Й':'Y', 'К':'K', 'Л':'L', 'М':'M', 'Н':'N', 'О':'O', 'П':'P', 'Р':'R', 'С':'S', 'Т':'T', 'У':'U', 'Ф':'F', 'Х':'H', 'Ц':'C', 'Ч':'Ch', 'Ш':'Sh', 'Щ':'Sch', 'Ъ':'Y', 'Ы':'Y', 'Ь':'Y', 'Э':'E', 'Ю':'Yu', 'Я':'Ya', 'а':'a', 'б':'b', 'в':'v', 'г':'g', 'д':'d', 'е':'e', 'ё':'e', 'ж':'gh', 'з':'z', 'и':'i', 'й':'y', 'к':'k', 'л':'l', 'м':'m', 'н':'n', 'о':'o', 'п':'p', 'р':'r', 'с':'s', 'т':'t', 'у':'u', 'ф':'f', 'х':'h', 'ц':'c', 'ч':'ch', 'ш':'sh', 'щ':'sch', 'ъ':'y', 'ы':'y', 'ь':'y', 'э':'e', 'ю':'yu', 'я':'ya', ' ':'_'
                };
                var txt = strtr(document.getElementById('id1').value, trans);
                document.getElementById('id2').value = txt;
            }
        </script>
    </head>
    <body>
    <div class="iro-admin-page">
        <?php if (isset($errors) && is_array($errors)): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
            <li> - <?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
        <h1>СОЗДАТЬ НОВОСТЬ</h1>
        <br><br/>
        <form method="post" action=""  enctype="multipart/form-data" >
            <lable>Заголовок* <br><input id="id1" onkeyup="CopyTxt()" type="text" name="title" size="80"></lable><br><br>
            <lable>Дата* <br><input type="date" name="date" size="10"></lable><br><br>
            <lable>Загрузить изображение* <br><input name="img_url" type="file" /></lable><br><br>
            <lable>Автоматический Url* <br><input id="id2" type="text" name="url" size="80" value=""></lable> *.html<br><br>
            <textarea name="html" rows="10" cols="80"></textarea><br>
            <input class="button" type="submit" name="submit" value="Сохранить"><br><br><br><br>
        </form>
    </div>
    </body>
    </html>
@endsection

