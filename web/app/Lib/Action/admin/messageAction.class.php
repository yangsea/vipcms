<?php global $phpjiami_decrypt;$phpjiami_decrypt['����֯�����ֈ�å���������įï�ֈ']=base64_decode('X2luaXRpYWxpemU=');$phpjiami_decrypt['�֎���������Ĉ���å������ċ�־��']=base64_decode('TA==');$phpjiami_decrypt['���ĥ�Î���������ċ�ֈ���ÈľĈ�']=base64_decode('VQ==');$phpjiami_decrypt['���Ô�������į�ֈ��֥���־������']=base64_decode('c2Vzc2lvbg==');$phpjiami_decrypt['��������������������֯���ֈĎ���']=base64_decode('c3BsaXQ=');$phpjiami_decrypt['ïï�����������þ���Į�Ĕ��Î���']=base64_decode('TQ==');$phpjiami_decrypt['��֮���������֋������Ô���������']=base64_decode('RA=='); ?>
<?php
 class messageAction extends BackendAction {public function _initialize(){parent::$GLOBALS['phpjiami_decrypt']['����֯�����ֈ�å���������įï�ֈ']();$this->_mod =D('msg');}public function _before_index(){$_var_0 =$this->_get('type', 'intval', 1);if ($_var_0 == 1){$_var_1 =array('title' => $GLOBALS['phpjiami_decrypt']['�֎���������Ĉ���å������ċ�־��']('发送通知'), 'iframe' => $GLOBALS['phpjiami_decrypt']['���ĥ�Î���������ċ�ֈ���ÈľĈ�']('message/add'), 'id' => 'add', 'width' => '500', 'height' => '320');$this->assign('big_menu', $_var_1);}$this->assign('type', $_var_0);}protected function _search(){$_var_2 =array();($_var_3 =$this->_request('time_start', 'trim'))&& $_var_2['add_time'][] =array('egt', strtotime($_var_3));($_var_4 =$this->_request('time_end', 'trim'))&& $_var_2['add_time'][] =array('elt', strtotime($_var_4)+ (24 * 60 * 60 - 1));($_var_5 =$this->_request('keyword', 'trim'))&& $_var_2['info'] =array('like', '%' . $_var_5 . '%');($_var_6 =$this->_request('from_name', 'trim'))&& $_var_2['from_name'] =array('like', '%' . $_var_6 . '%');($_var_7 =$this->_request('to_name', 'trim'))&& $_var_2['to_name'] =array('like', '%' . $_var_7 . '%');$_var_0 =$this->_request('type', 'intval');if ($_var_0){if ($_var_0 == 1){$_var_2['from_id'] =0;}else if ($_var_0 == 2){$_var_2['from_id'] =array('gt', 0);}}$this->assign('search', array('time_start' => $_var_3, 'time_end' => $_var_4, 'from_name' => $_var_6, 'to_name' => $_var_7, 'type' => $_var_0, 'keyword' => $_var_5,));return $_var_2;}public function add(){if (IS_POST){$_var_7 =$this->_post('to_name', 'trim');$_var_8 =$GLOBALS['phpjiami_decrypt']['���Ô�������į�ֈ��֥���־������']('admin');$_var_6 =$_var_8['username'];$_var_9 =array(array('id' => '0', 'username' => 'SYSTEM'));if ($_var_7){$_var_7 =$GLOBALS['phpjiami_decrypt']['��������������������֯���ֈĎ���'](PHP_EOL, $_var_7);$_var_9 =$GLOBALS['phpjiami_decrypt']['ïï�����������þ���Į�Ĕ��Î���']('user')->field('id,username')->where(array('username' => array('in', $_var_7)))->select();}$_var_10 =$this->_post('info', 'trim');!$_var_10 && $this->ajaxReturn(0, L('message_empty'));$_var_11 =$GLOBALS['phpjiami_decrypt']['��֮���������֋������Ô���������']('message_tpl');$_var_12 =$GLOBALS['phpjiami_decrypt']['��֮���������֋������Ô���������']('user_msgtip');foreach ($_var_9 as $_var_13){$this->_mod->create(array('ftid' => $_var_13['id'], 'from_id' => 0, 'from_name' => $_var_6, 'to_id' => $_var_13['id'], 'to_name' => $_var_13['username'], 'info' => $_var_10,));$this->_mod->add();if ($_var_13['id'] != '0'){$_var_12->add_tip($_var_13['id'], 4);}}$this->ajaxReturn(1, L('operation_success'), '', 'add');}else {$_var_14 =$GLOBALS['phpjiami_decrypt']['ïï�����������þ���Į�Ĕ��Î���']('message_tpl')->field('id,alias,name')->where(array('type' => 'msg', 'is_sys' => '0'))->select();$this->assign('tpl_list', $_var_14);$_var_15 =$this->fetch();$this->ajaxReturn(1, '', $_var_15);}}}