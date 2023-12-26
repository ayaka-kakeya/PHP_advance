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
                    <form class="was-validated" action="/contact/update" method="post" novalidate>
                        
                        <div>
                            <label for="name">氏名</label>
                            <input type="text" class="form-control" maxlength="10" name="name" value="{$data->name|escape:'htmlall'}" required>
                            <div class="valid-feedback">入力完了</div>
                            <div class="invalid-feedback">氏名は10文字以内で必須入力です。</div>
                            <p class="error-text">{$errorMessages['name']|default:''}</p>
                            
                        </div>
                        <div>
                            <label for="kana"> フリガナ</label>
                            <input type="text" class="form-control" maxlength="10" name="kana" value="{$data->kana|escape:'htmlall'}" required>
                            <div class="valid-feedback">入力完了</div>
                            <div class="invalid-feedback">フリガナは10文字以内で必須入力です。</div>
                            <p class="error-text">{$errorMessages['kana']|default:''}</p>
                        </div>
                        <div>
                            <label for="tel">電話番号</label>
                            <input type="tel" pattern="\d+" class="form-control" name="tel" value="{$data->tel|escape:'htmlall'}">
                            <div class="invalid-feedback">電話番号は数字のみで入力してください。</div>
                            <p class="error-text">{$errorMessages['tel']|default:''}</p>
                        </div>
                        <div>
                            <label for="email">メールアドレス</label>
                            <input type="email" class="form-control" name="email" value="{$data->email|escape:'htmlall'}" required>
                            <div class="valid-feedback">入力完了</div>
                            <div class="invalid-feedback">メールアドレスは必須入力です。</div>
                            <p class="error-text">{$errorMessages['email']|default:''}</p>
                        </div>
                        <div>
                            <label for="body">お問い合わせ内容</label>
                            <textarea required style="white-space:pre-wrap" class="form-control" rows="5" name="body">{$data->body|escape:'htmlall'}</textarea>
                            <div class="valid-feedback">入力完了</div>
                            <div class="invalid-feedback">お問い合わせ内容は必須入力です。</div>
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