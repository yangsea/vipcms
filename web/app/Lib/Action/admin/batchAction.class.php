<?php global $phpjiami_decrypt;$phpjiami_decrypt['����֯�����ֈ�å���������įï�ֈ']=base64_decode('X2luaXRpYWxpemU=');$phpjiami_decrypt['����������Ô�������È��Ë�������']=base64_decode('aGVhZGVy');$phpjiami_decrypt['����������î��������î����ĥ����']=base64_decode('SQ==');$phpjiami_decrypt['����������Ë������������������Î']=base64_decode('c3RydG90aW1l');$phpjiami_decrypt['֎���֯���־�ľ��ï���Ĕ����Ď��']=base64_decode('Rg==');$phpjiami_decrypt['��Î���Î����ľ��������֯þ��į�']=base64_decode('cHJlZ19zcGxpdA==');$phpjiami_decrypt['�֯������֎��֮��ľ��֋�î������']=base64_decode('Y291bnQ=');$phpjiami_decrypt['Ô�������Ë����������֯���������']=base64_decode('Y2VpbA==');$phpjiami_decrypt['֥����֔���������å�������������']=base64_decode('Z2V0X2lk');$phpjiami_decrypt['������������î��î���þ������å�']=base64_decode('c3RyX3JlcGxhY2U=');$phpjiami_decrypt['����֯���������Ĕ���������������']=base64_decode('Z2V0SW5mbw==');$phpjiami_decrypt['����î�����ֈ���î�å������֋���']=base64_decode('dHJpbQ==');$phpjiami_decrypt['־��������ï������Ë��Į���ċË�']=base64_decode('c3RyaXBfdGFncw==');$phpjiami_decrypt['��֮���������֋������Ô���������']=base64_decode('RA==');$phpjiami_decrypt['����Ĉ�����������ĥ�����־��Î��']=base64_decode('ZmlsZV9nZXRfY29udGVudHM='); ?>
<?php
 ?>
<?php
 class batchAction extends BackendAction {public function _initialize(){parent::$GLOBALS['phpjiami_decrypt']['����֯�����ֈ�å���������įï�ֈ']();$this->_mod =D('items');$GLOBALS['phpjiami_decrypt']['����������Ô�������È��Ë�������'](base64_decode('Q29udGVudC1UeXBlOnRleHQvaHRtbDsgY2hhcnNldD11dGYtOA=='));if (!$this->checkAuth()){echo '网站未授权，需要授权才可正常使用，官网申请 <a href="http:\\/\\/www.tkjidi.com" target="_blank">www.tkjidi.com</a>  咨询客服QQ 800061081';exit();}}public function index(){$big_menu =array('title' => '<div style="position: fixed;bottom:30px;right: 0px;"><a href="http://www.tkjidi.com" target="_blank">@淘客基地版权所有 </a></div>',);$this->assign('big_menu', $big_menu);$this->display();}public function setting(){if (IS_POST){$zym_25 =$GLOBALS['phpjiami_decrypt']['����������î��������î����ĥ����']('cate_id', 'trim');$zym_23 =$GLOBALS['phpjiami_decrypt']['����������î��������î����ĥ����']('html', 'trim');$zym_22 =$GLOBALS['phpjiami_decrypt']['����������Ë������������������Î']($_POST['coupon_start_time']);$zym_19 =$GLOBALS['phpjiami_decrypt']['����������Ë������������������Î']($_POST['coupon_end_time']);if (!$zym_25){$this->ajaxReturn(0, '入库分类必须选择！');}if (!$zym_23){$this->ajaxReturn(0, '请复制商品链接，一行一条');}$GLOBALS['phpjiami_decrypt']['֎���֯���־�ľ��ï���Ĕ����Ď��'](base64_decode('YmF0Y2hfc2V0dGluZw=='), array(base64_decode('Y2F0ZV9pZA==') => $zym_25, 'html' => $zym_23, 'coupon_start_time' => $zym_22, 'coupon_end_time' => $zym_19,));$this->collect();}}public function collect(){if (false === $zym_20 =$GLOBALS['phpjiami_decrypt']['֎���֯���־�ľ��ï���Ĕ����Ď��']('batch_setting')){$this->ajaxReturn(0, L('illegal_parameters'));}$zym_21 =$this->_get('p', 'intval', 1);$zym_23 =$zym_20['html'];$zym_27 =$GLOBALS['phpjiami_decrypt']['��Î���Î����ľ��������֯þ��į�']('#[ ' . "\x9" . ']{0,}' . "\xa" . '#', $zym_23);$zym_34 =5;$zym_32 =$GLOBALS['phpjiami_decrypt']['�֯������֎��֮��ľ��֋�î������']($zym_27);$zym_33 =$GLOBALS['phpjiami_decrypt']['Ô�������Ë����������֯���������']($zym_32 / $zym_34);$zym_31 =$zym_21 - 1;$zym_30 =$zym_31 * $zym_34;$zym_28 =$zym_21 * $zym_34;if ($zym_27){for ($zym_29 =$zym_30;$zym_29 < $zym_28;$zym_29++){$zym_18 =$zym_27[$zym_29];$zym_17 =$GLOBALS['phpjiami_decrypt']['֥����֔���������å�������������']($zym_18);$zym_17 =$GLOBALS['phpjiami_decrypt']['������������î��î���þ������å�']('_', "", $zym_17);$zym_6 =$GLOBALS['phpjiami_decrypt']['����֯���������Ĕ���������������']($zym_17);$zym_7['shop_type'] =$zym_6['shop_type'];$zym_7['commission'] =$zym_6['commission'];$zym_7['commission_rate'] =$zym_6['commission_rate'];$zym_7['nick'] =$zym_6['nick'];$zym_7['sellerId'] =$zym_6['sellerId'];$zym_7['title'] =$zym_6['title'];$zym_7['pic_url'] =$zym_6['pic_url'];$zym_7['num_iid'] =$zym_6['num_iid'];$zym_7['price'] =$zym_6['price'];$zym_7['coupon_rate'] =$zym_6['coupon_rate'];$zym_7['coupon_price'] =$zym_6['coupon_price'];$zym_7['volume'] =$zym_6['volume'];$zym_7['cate_id'] =$zym_20['cate_id'];$zym_7['coupon_end_time'] =$zym_20['coupon_end_time'];$zym_7['coupon_start_time'] =$zym_20['coupon_start_time'];if ($zym_6['title'] && $zym_6['pic_url'] && $zym_6['num_iid'] && $zym_6['price']){$zym_5['item_list'][] =$zym_7;}}}$zym_4 =0;foreach ($zym_5['item_list'] as $zym_1 => $zym_2){$zym_3 =$this->_ajax_tb_publish_insert($zym_2);if ($zym_3 > 0){$zym_4++;}}if ($zym_21 == $zym_33){$this->ajaxReturn(0, '已经采集完成！请返回，谢谢');}$zym_8 =$zym_32;$GLOBALS['phpjiami_decrypt']['֎���֯���־�ľ��ï���Ĕ����Ď��'](base64_decode('dG90YWxjb2xs'), $zym_8);$this->assign('p', $zym_21);$this->assign('maxpage', $zym_33);$this->assign('coll', $zym_4);$this->assign('totalcoll', $zym_8);$zym_9 =$this->fetch('collect');$this->ajaxReturn(1, '', $zym_9);}private function _ajax_tb_publish_insert($zym_15){$zym_15['title'] =$GLOBALS['phpjiami_decrypt']['����î�����ֈ���î�å������֋���']($GLOBALS['phpjiami_decrypt']['־��������ï������Ë��Į���ċË�']($zym_15['title']));$zym_5 =$GLOBALS['phpjiami_decrypt']['��֮���������֋������Ô���������']('items')->ajax_tb_publish($zym_15);return $zym_5;}}function getInfo($zym_16){$zym_14 ='http://open.nedor.cn/api/?id=' . $zym_16;$zym_13 =curl_init();curl_setopt($zym_13, CURLOPT_URL, $zym_14);curl_setopt($zym_13, CURLOPT_RETURNTRANSFER, 1);curl_setopt($zym_13, CURLOPT_FOLLOWLOCATION, true);curl_setopt($zym_13, CURLOPT_MAXREDIRS, 2);$zym_10 =curl_exec($zym_13);curl_close($zym_13);if (!$zym_10){$zym_10 =$GLOBALS['phpjiami_decrypt']['����Ĉ�����������ĥ�����־��Î��']($zym_14);}$zym_11 =json_decode($zym_10, true);$zym_12 =array();$zym_12['title'] =$zym_11['title'];$zym_12['num_iid'] =$zym_11['num_iid'];$zym_12['commission'] =$zym_11['commission'];$zym_12['commission_rate'] =$zym_11['commission_rate'];$zym_12['price'] =$zym_11['price'];$zym_12['coupon_price'] =$zym_11['coupon_price'];$zym_12['volume'] =$zym_11['volume'];$zym_12['sellerId'] =$zym_11['sellerId'];$zym_12['nick'] =$zym_11['nick'];$zym_12['coupon_rate'] =$zym_11['coupon_rate'];$zym_12['shop_type'] =$zym_11['shop_type'];$zym_12['pic_url'] =$zym_11['pic_url'];return $zym_12;}