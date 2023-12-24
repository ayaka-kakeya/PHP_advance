<?php
/* Smarty version 4.3.4, created on 2023-12-24 07:38:53
  from '/Applications/MAMP/htdocs/mvc_app/Views/contact/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6587617d35bd78_94140633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8191df73e17ae95a53a86a7e820983ec095db08f' => 
    array (
      0 => '/Applications/MAMP/htdocs/mvc_app/Views/contact/update.tpl',
      1 => 1703371086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6587617d35bd78_94140633 (Smarty_Internal_Template $_smarty_tpl) {
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
                <div class="col-lg-6 mx-auto col-md-8">
                    <h2>更新画面</h2>
                    <form action="/contact/update" method="post">
                        
                        <div>
                            <label for="name">氏名</label>
                            <input type="text" class="form-control" name="name" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['data']->value->name ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['data']->value['name'] ?? null : $tmp);?>
">
                            <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                            
                        </div>
                        <div>
                            <label for="kana"> フリガナ</label>
                            <input type="text" class="form-control" name="kana" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['data']->value->kana ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['data']->value['kana'] ?? null : $tmp);?>
">
                            <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['kana'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                        </div>
                        <div>
                            <label for="tel">電話番号</label>
                            <input type="text" class="form-control" name="tel" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['data']->value->tel ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['data']->value['tel'] ?? null : $tmp);?>
">
                        </div>
                        <div>
                            <label for="email">メールアドレス</label>
                            <input type="text" class="form-control" name="email" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['data']->value->email ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['data']->value['email'] ?? null : $tmp);?>
">
                            <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                        </div>
                        <div>
                            <label for="body">お問い合わせ内容</label>
                            <textarea style="white-space:pre-wrap" class="form-control" rows="5" name="body"><?php echo (($tmp = $_smarty_tpl->tpl_vars['data']->value->body ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['data']->value['body'] ?? null : $tmp);?>
</textarea>
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
