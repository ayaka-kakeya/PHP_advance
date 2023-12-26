<?php
/* Smarty version 4.3.4, created on 2023-12-26 21:34:19
  from '/Applications/MAMP/htdocs/mvc_app/Views/contact/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_658ac84b0de6a4_62073033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8191df73e17ae95a53a86a7e820983ec095db08f' => 
    array (
      0 => '/Applications/MAMP/htdocs/mvc_app/Views/contact/update.tpl',
      1 => 1703594054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658ac84b0de6a4_62073033 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
                            <input type="text" class="form-control" maxlength="10" name="name" value="<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['data']->value->name, 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
" required>
                            <div class="valid-feedback">入力完了</div>
                            <div class="invalid-feedback">氏名は10文字以内で必須入力です。</div>
                            <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                            
                        </div>
                        <div>
                            <label for="kana"> フリガナ</label>
                            <input type="text" class="form-control" maxlength="10" name="kana" value="<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['data']->value->kana, 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
" required>
                            <div class="valid-feedback">入力完了</div>
                            <div class="invalid-feedback">フリガナは10文字以内で必須入力です。</div>
                            <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['kana'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                        </div>
                        <div>
                            <label for="tel">電話番号</label>
                            <input type="tel" pattern="\d+" class="form-control" name="tel" value="<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['data']->value->tel, 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
">
                            <div class="invalid-feedback">電話番号は数字のみで入力してください。</div>
                            <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['tel'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                        </div>
                        <div>
                            <label for="email">メールアドレス</label>
                            <input type="email" class="form-control" name="email" value="<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['data']->value->email, 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
" required>
                            <div class="valid-feedback">入力完了</div>
                            <div class="invalid-feedback">メールアドレスは必須入力です。</div>
                            <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                        </div>
                        <div>
                            <label for="body">お問い合わせ内容</label>
                            <textarea required style="white-space:pre-wrap" class="form-control" rows="5" name="body"><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['data']->value->body, 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                            <div class="valid-feedback">入力完了</div>
                            <div class="invalid-feedback">お問い合わせ内容は必須入力です。</div>
                            <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['body'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                        </div>

                        <h3>上記の内容でよろしいですか？</h3>
                        <input type="hidden" name="csrf_token" value=<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>
>
                        
                        <button type="button" class="btn bg-warning my-2" onclick=history.back()>キャンセル</button>
                        <button type="submit" class="btn bg-warning my-2">更新</button>
                    </form>
                </div>          
            </div>
        </div>

    </body>
</html><?php }
}
