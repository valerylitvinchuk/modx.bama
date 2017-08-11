<?php /* Smarty version 3.1.27, created on 2017-08-11 11:41:36
         compiled from "C:\OSPanel\domains\modx.bama\setup\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1278598d6dc0e3cff9_95439438%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50e1b3a74f83394a56f666347dcde3e5f0e1de4b' => 
    array (
      0 => 'C:\\OSPanel\\domains\\modx.bama\\setup\\templates\\footer.tpl',
      1 => 1492683676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1278598d6dc0e3cff9_95439438',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_598d6dc0e4ece9_44520631',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_598d6dc0e4ece9_44520631')) {
function content_598d6dc0e4ece9_44520631 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'C:/OSPanel/domains/modx.bama/core/model/smarty/plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '1278598d6dc0e3cff9_95439438';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>