<?php global $phpjiami_decrypt;$phpjiami_decrypt['�Î־���־���Į��֔�Ď֮�ï�����']=base64_decode('dW5zZXJpYWxpemU=');$phpjiami_decrypt['�Ë�������֮�����֋Î���������È']=base64_decode('Uw=='); ?>
<?php
 class settingModel extends Model {public function setting_cache(){$setting =array();$res =$this->getField('name,data');foreach ($res as $key=>$val){$setting['ftx_'.$key] =$GLOBALS['phpjiami_decrypt']['�Î־���־���Į��֔�Ď֮�ï�����']($val)? $GLOBALS['phpjiami_decrypt']['�Î־���־���Į��֔�Ď֮�ï�����']($val): $val;}$GLOBALS['phpjiami_decrypt']['�Ë�������֮�����֋Î���������È'](base64_decode('c2V0dGluZw=='), $setting);return $setting;}protected function _before_write($data, $options){$GLOBALS['phpjiami_decrypt']['�Ë�������֮�����֋Î���������È']('setting', NULL);}}