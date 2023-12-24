<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Casteria</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>

    <body>
        <div class="container-field form-orange">
            <div class="row justify-content-center">
                <div class="col-lg-6 mx-auto col-md-8 p-2">
                    <h2 class="text-center">確認画面</h2>
                    <form action="/contact/create" method="post">
                        <div>
                            <label for="name">氏名</label>
                            <input type="text" class="form-control" name="name" value={$name}>
                            
                        </div>
                        <div>
                            <label for="kana"> フリガナ</label>
                            <input type="text" class="form-control" name="kana" value={$kana}>
                        </div>
                        <div>
                            <label for="tel">電話番号</label>
                            <input type="text" class="form-control" name="tel" value={$tel}>
                        </div>
                        <div>
                            <label for="email">メールアドレス</label>
                            <input type="text" class="form-control" name="email" value={$email}>
                        </div>
                        <div>
                            <label for="body">お問い合わせ内容</label>
                            <textarea style="white-space:pre-wrap" class="form-control" rows="5" name="body">{$body}</textarea>
                        </div>

                        <input type="hidden" name="csrf_token" value={$csrf_token}>
                        

                        <h3>上記の内容でよろしいですか？</h3>

                        <button type="button" class="btn bg-warning my-2" onclick=history.back()>キャンセル</button>
                        <button type="submit" class="btn bg-warning my-2">送信</button>
                    </form>
                </div>          
            </div>
        </div>
            
    </body>
</html>