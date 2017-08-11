<?php /* Smarty version 3.1.27, created on 2017-08-11 11:45:32
         compiled from "C:\OSPanel\domains\modx.bama\manager\templates\default\workspaces\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9955598d6eacc54420_17926998%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c78a584984b526f8136977250c4bd80559956250' => 
    array (
      0 => 'C:\\OSPanel\\domains\\modx.bama\\manager\\templates\\default\\workspaces\\index.tpl',
      1 => 1492683676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9955598d6eacc54420_17926998',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_598d6eacc5d168_80288794',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_598d6eacc5d168_80288794')) {
function content_598d6eacc5d168_80288794 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9955598d6eacc54420_17926998';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>