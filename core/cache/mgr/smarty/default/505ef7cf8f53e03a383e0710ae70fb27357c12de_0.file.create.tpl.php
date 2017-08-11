<?php /* Smarty version 3.1.27, created on 2017-08-11 12:01:48
         compiled from "C:\OSPanel\domains\modx.bama\manager\templates\default\element\snippet\create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19404598d727c0c0fc5_20317004%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '505ef7cf8f53e03a383e0710ae70fb27357c12de' => 
    array (
      0 => 'C:\\OSPanel\\domains\\modx.bama\\manager\\templates\\default\\element\\snippet\\create.tpl',
      1 => 1492683674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19404598d727c0c0fc5_20317004',
  'variables' => 
  array (
    'onSnipFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_598d727c0c3027_21695269',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_598d727c0c3027_21695269')) {
function content_598d727c0c3027_21695269 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19404598d727c0c0fc5_20317004';
?>
<div id="modx-panel-snippet-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onSnipFormPrerender']->value;

}
}
?>