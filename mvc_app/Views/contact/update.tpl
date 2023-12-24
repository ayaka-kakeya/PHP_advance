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
                    <h2 class="text-center">更新画面</h2>
                    <form action="/contact/update" method="post">
                        
                        <div>
                            <label for="name">氏名</label>
                            <input type="text" class="form-control" name="name" value="{$data->name|default:$data['name']}">
                            <p class="error-text">{$errorMessages['name']|default:''}</p>
                            
                        </div>
                        <div>
                            <label for="kana"> フリガナ</label>
                            <input type="text" class="form-control" name="kana" value="{$data->kana|default:$data['kana']}">
                            <p class="error-text">{$errorMessages['kana']|default:''}</p>
                        </div>
                        <div>
                            <label for="tel">電話番号</label>
                            <input type="text" class="form-control" name="tel" value="{$data->tel|default:$data['tel']}">
                        </div>
                        <div>
                            <label for="email">メールアドレス</label>
                            <input type="text" class="form-control" name="email" value="{$data->email|default:$data['email']}">
                            <p class="error-text">{$errorMessages['email']|default:''}</p>
                        </div>
                        <div>
                            <label for="body">お問い合わせ内容</label>
                            <textarea style="white-space:pre-wrap" class="form-control" rows="5" name="body">{$data->body|default:$data['body']}</textarea>
                            <p class="error-text">{$errorMessages['body']|default:''}</p>
                        </div>

                        <h3>上記の内容でよろしいですか？</h3>
                        <input type="hidden" name="csrf_token" value={$csrf_token}>
                        
                        <button type="button" class="btn bg-warning my-2" onclick=history.back()>キャンセル</button>
                        <button type="submit" class="btn bg-warning my-2">更新</button>
                    </form>
                </div>          
            </div>
        </div>

    </body>
</html>