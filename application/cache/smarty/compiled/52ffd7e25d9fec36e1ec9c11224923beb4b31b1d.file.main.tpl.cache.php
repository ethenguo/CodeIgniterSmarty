<?php /* Smarty version Smarty-3.1.17, created on 2014-10-14 19:53:37
         compiled from "application\views\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9507543d5fe38bd7a9-04759506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52ffd7e25d9fec36e1ec9c11224923beb4b31b1d' => 
    array (
      0 => 'application\\views\\main.tpl',
      1 => 1413309202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9507543d5fe38bd7a9-04759506',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_543d5fe38ffe38_54027902',
  'variables' => 
  array (
    'title' => 0,
    'global' => 0,
    'body' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d5fe38ffe38_54027902')) {function content_543d5fe38ffe38_54027902($_smarty_tpl) {?><html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link rel="stylesheet" type="text/css" href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['global']->value['cdn'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
/css/style.css">
</head>
<body>
    <?php echo $_smarty_tpl->tpl_vars['body']->value;?>

   
</body>
</html><?php }} ?>
