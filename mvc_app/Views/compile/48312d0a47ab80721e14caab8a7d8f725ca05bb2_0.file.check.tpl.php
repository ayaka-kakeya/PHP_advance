<?php
/* Smarty version 4.3.4, created on 2023-12-24 15:07:05
  from '/Applications/MAMP/htdocs/mvc_app/Views/contact/check.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6587ca8916bf22_64599787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48312d0a47ab80721e14caab8a7d8f725ca05bb2' => 
    array (
      0 => '/Applications/MAMP/htdocs/mvc_app/Views/contact/check.tpl',
      1 => 1703397759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6587ca8916bf22_64599787 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h2 class="text-center">確認画面</h2>
                    <form action="/contact/create" method="post">
                        <div>
                            <label for="name">氏名</label>
                            <input type="text" class="form-control" name="name" value=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
>
                            
                        </div>
                        <div>
                            <label for="kana"> フリガナ</label>
                            <input type="text" class="form-control" name="kana" value=<?php echo $_smarty_tpl->tpl_vars['kana']->value;?>
>
                        </div>
                        <div>
                            <label for="tel">電話番号</label>
                            <input type="text" class="form-control" name="tel" value=<?php echo $_smarty_tpl->tpl_vars['tel']->value;?>
>
                        </div>
                        <div>
                            <label for="email">メールアドレス</label>
                            <input type="text" class="form-control" name="email" value=<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
>
                        </div>
                        <div>
                            <label for="body">お問い合わせ内容</label>
                            <textarea style="white-space:pre-wrap" class="form-control" rows="5" name="body"><?php echo $_smarty_tpl->tpl_vars['body']->value;?>
</textarea>
                        </div>

                        <input type="hidden" name="csrf_token" value=<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>
>
                        

                        <h3>上記の内容でよろしいですか？</h3>

                        <button type="button" class="btn bg-warning my-2" onclick=history.back()>キャンセル</button>
                        <button type="submit" class="btn bg-warning my-2">送信</button>
                    </form>
                </div>          
            </div>
        </div>
            
    </body>
</html><?php }
}
