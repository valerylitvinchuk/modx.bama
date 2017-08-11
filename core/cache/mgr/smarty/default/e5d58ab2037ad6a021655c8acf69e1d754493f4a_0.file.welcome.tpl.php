<?php /* Smarty version 3.1.27, created on 2017-08-11 11:42:26
         compiled from "C:\OSPanel\domains\modx.bama\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10612598d6df2297536_15479889%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5d58ab2037ad6a021655c8acf69e1d754493f4a' => 
    array (
      0 => 'C:\\OSPanel\\domains\\modx.bama\\manager\\templates\\default\\welcome.tpl',
      1 => 1492683676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10612598d6df2297536_15479889',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_598d6df229baf0_45284934',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_598d6df229baf0_45284934')) {
function content_598d6df229baf0_45284934 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10612598d6df2297536_15479889';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>