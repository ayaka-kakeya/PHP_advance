<?php
/* Smarty version 4.3.4, created on 2023-12-26 20:34:15
  from '/Applications/MAMP/htdocs/mvc_app/Views/contact/Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_658aba37840091_66090645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f4b3260eb9af4363921fabb5c6e64206b448bdc' => 
    array (
      0 => '/Applications/MAMP/htdocs/mvc_app/Views/contact/Index.tpl',
      1 => 1703590451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658aba37840091_66090645 (Smarty_Internal_Template $_smarty_tpl) {
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
                
                
                    <h2 class="text-center">入力画面</h2>
                    <form class="was-validated" action="/contact/check" method = "post" novalidate>
                       
                        <div class="form-group">
                            <label for="name">氏名(必須)</label>
                            <input type="text" required maxlength="10" class="form-control" name="name" placeholder="テスト太郎" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post']->value['name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                            <div class="valid-feedback">入力完了</div>
                            <div class="invalid-feedback">氏名は10文字以内で必須入力です。</div>
                            <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                        </div>
                        <div class="form-group">
                            <label for="kana"> フリガナ(必須)</label>
                            <input type="text" required maxlength="10" class="form-control" name="kana" placeholder="テストタロウ" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post']->value['kana'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                            <div class="valid-feedback">入力完了</div>
                            <div class="invalid-feedback">フリガナは10文字以内で必須入力です。</div>                           
                            <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['kana'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                        </div>
                        <div class="form-group">
                            <label for="tel">電話番号(任意)</label>
                            <input type="tel" pattern="\d+" class="form-control" name="tel" placeholder="00000000000" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post']->value['tel'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                            <div class="invalid-feedback">電話番号は数字のみで入力してください。</div>
                            <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['tel'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                        </div>
                        <div class="form-group">
                            <label for="email">メールアドレス(必須)</label>
                            <input type="email" required class="form-control" name="email" placeholder="exemple@cin-group.co.jp" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post']->value['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                            <div class="valid-feedback">入力完了</div>
                            <div class="invalid-feedback">メールアドレスは必須入力です。</div>
                            <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                        </div>
                        <div class="form-group">
                            <label for="body">お問い合わせ内容(必須)</label>
                            <textarea required style="white-space:pre-wrap" placeholder="お問い合わせ" class="form-control" rows="5" name="body"><?php echo (($tmp = $_smarty_tpl->tpl_vars['post']->value['body'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</textarea>
                            <div class="valid-feedback">入力完了</div>
                            <div class="invalid-feedback">お問い合わせ内容は必須入力です。</div>
                            <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['body'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                        </div>
                        <input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>
">
                        <button type="button" onclick="submit();" class="btn bg-warning my-2">送信内容を確認</button>
                    </form>
                </div>          
            </div>
            <div class="row justify-content-center">
                <div class="col-10">   
                    <table class="table table-bordered">
                            <tr class="table-primary"><th>氏名</th><th>フリガナ</th><th>電話番号</th><th>メールアドレス</th><th>お問い合わせ内容</th><th></th><th></th></tr>

                            <?php
$__section_row_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['list']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_row_0_total = $__section_row_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_row'] = new Smarty_Variable(array());
if ($__section_row_0_total !== 0) {
for ($__section_row_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] = 0; $__section_row_0_iteration <= $__section_row_0_total; $__section_row_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']++){
?><tr><td><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['name'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</td><td><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['kana'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</td><td><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['tel'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</td><td><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['email'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</td><td style="white-space:pre-wrap"><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['body'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</td><td><a href="/contact/getupdate?id=<?php echo $_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['id'];?>
">編集</a></td><td><a href="/contact/delete?id=<?php echo $_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['id'];?>
" onclick="return confirm('本当に削除しますか？')">削除</a></td></tr><?php
}
}
?>
                            
                    </table>
                </div>
            </div>     
        </div>
                  
                    
               
    </body>
</html><?php }
}
