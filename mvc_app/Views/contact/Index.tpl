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
                
                
                    <h2 class="text-center">入力画面</h2>
                    <form class="was-validated" action="/contact/check" method = "post" novalidate>
                       
                        <div class="form-group">
                            <label for="name">氏名(必須)</label>
                            <input type="text" required maxlength="10" class="form-control" name="name" placeholder="テスト太郎" value="{$post['name']|default:''}">
                            <div class="valid-feedback">入力完了</div>
                            <div class="invalid-feedback">氏名は10文字以内で必須入力です。</div>
                            <p class="error-text">{$errorMessages['name']|default:''}</p>
                        </div>
                        <div class="form-group">
                            <label for="kana"> フリガナ(必須)</label>
                            <input type="text" required maxlength="10" class="form-control" name="kana" placeholder="テストタロウ" value="{$post['kana']|default:''}">
                            <div class="valid-feedback">入力完了</div>
                            <div class="invalid-feedback">フリガナは10文字以内で必須入力です。</div>                           
                            <p class="error-text">{$errorMessages['kana']|default:''}</p>
                        </div>
                        <div class="form-group">
                            <label for="tel">電話番号(任意)</label>
                            <input type="tel" pattern="\d+" class="form-control" name="tel" placeholder="00000000000" value="{$post['tel']|default:''}">
                            <div class="invalid-feedback">電話番号は数字のみで入力してください。</div>
                            <p class="error-text">{$errorMessages['tel']|default:''}</p>
                        </div>
                        <div class="form-group">
                            <label for="email">メールアドレス(必須)</label>
                            <input type="email" required class="form-control" name="email" placeholder="exemple@cin-group.co.jp" value="{$post['email']|default:''}">
                            <div class="valid-feedback">入力完了</div>
                            <div class="invalid-feedback">メールアドレスは必須入力です。</div>
                            <p class="error-text">{$errorMessages['email']|default:''}</p>
                        </div>
                        <div class="form-group">
                            <label for="body">お問い合わせ内容(必須)</label>
                            <textarea required style="white-space:pre-wrap" placeholder="お問い合わせ" class="form-control" rows="5" name="body">{$post['body']|default:''}</textarea>
                            <div class="valid-feedback">入力完了</div>
                            <div class="invalid-feedback">お問い合わせ内容は必須入力です。</div>
                            <p class="error-text">{$errorMessages['body']|default:''}</p>
                        </div>
                        <input type="hidden" name="csrf_token" value="{$csrf_token}">
                        <button type="button" onclick="submit();" class="btn bg-warning my-2">送信内容を確認</button>
                    </form>
                </div>          
            </div>
            <div class="row justify-content-center">
                <div class="col-10">   
                    <table class="table table-bordered">
                            <tr class="table-primary"><th>氏名</th><th>フリガナ</th><th>電話番号</th><th>メールアドレス</th><th>お問い合わせ内容</th><th></th><th></th></tr>

                            {section name=row loop=$list}<tr><td>{$list[row].name|escape:'htmlall'}</td><td>{$list[row].kana|escape:'htmlall'}</td><td>{$list[row].tel|escape:'htmlall'}</td><td>{$list[row].email|escape:'htmlall'}</td><td style="white-space:pre-wrap">{$list[row].body|escape:'htmlall'}</td><td><a href="/contact/getupdate?id={$list[row].id}">編集</a></td><td><a href="/contact/delete?id={$list[row].id}" onclick="return confirm('本当に削除しますか？')">削除</a></td></tr>{/section}
                            
                    </table>
                </div>
            </div>     
        </div>
                  
                    
               
    </body>
</html>