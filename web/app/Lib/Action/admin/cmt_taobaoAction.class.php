<?php global $phpjiami_decrypt;$phpjiami_decrypt['ïï�����������þ���Į�Ĕ��Î���']=base64_decode('TQ==');$phpjiami_decrypt['֎���֯���־�ľ��ï���Ĕ����Ď��']=base64_decode('Rg==');$phpjiami_decrypt['��֮���������֋������Ô���������']=base64_decode('RA==');$phpjiami_decrypt['Ô�������Ë����������֯���������']=base64_decode('Y2VpbA==');$phpjiami_decrypt['���������֔֋����Ď�֋��È������']=base64_decode('ZnVuY3Rpb25fZXhpc3Rz');$phpjiami_decrypt['��î��֋î���֥Î�Î��È��������']=base64_decode('aWNvbnY=');$phpjiami_decrypt['������������î��î���þ������å�']=base64_decode('c3RyX3JlcGxhY2U=');$phpjiami_decrypt['�֯������֎��֮��ľ��֋�î������']=base64_decode('Y291bnQ=');$phpjiami_decrypt['����������Ë������������������Î']=base64_decode('c3RydG90aW1l');$phpjiami_decrypt['��������î�֎�å��È������������']=base64_decode('cmFuZA==');$phpjiami_decrypt['����Ĉ�����������ĥ�����־��Î��']=base64_decode('ZmlsZV9nZXRfY29udGVudHM=');$phpjiami_decrypt['þ��֋���������֥�Î����þ������']=base64_decode('cnRyaW0=');$phpjiami_decrypt['��־���֋���������֥î����������']=base64_decode('bHRyaW0=');$phpjiami_decrypt['����î�����ֈ���î�å������֋���']=base64_decode('dHJpbQ==');$phpjiami_decrypt['��ËîÔ֋����������������������']=base64_decode('c3RycG9z');$phpjiami_decrypt['���ċ�ľ��־��������Ô�î֔���Ď']=base64_decode('ZXhwbG9kZQ==');$phpjiami_decrypt['�Î��������Î�����������ֈ�ċ�֎']=base64_decode('bWt0aW1l');$phpjiami_decrypt['�����֮�į���������������þ�Ĕ��']=base64_decode('ZGF0ZQ==');$phpjiami_decrypt['�������������Į���Ô�����֋�Ĕ��']=base64_decode('cHJlZ19tYXRjaA==');$phpjiami_decrypt['ĥ�������ï����ֈ�����î����ċ��']=base64_decode('cGFyc2VfdXJs');$phpjiami_decrypt['��ï���֔�������Î���֯��֔�����']=base64_decode('cGFyc2Vfc3Ry'); ?>
<?php
 class cmt_taobaoAction extends BackendAction {public function index(){$this->display();}public function item(){$_var_0 =$this->fetch('item');$this->ajaxReturn(1, '', $_var_0);$this->display();}public function item_add(){if (IS_POST){$_var_1 =$this->_post('url', 'trim');!$this->get_id($_var_1)&& $this->error(L('please_input'). L('correct_itemurl'), U('cmt_taobao/index'));$_var_2 =$this->get_id($_var_1);$_var_3 =$GLOBALS['phpjiami_decrypt']['ïï�����������þ���Į�Ĕ��Î���']('items')->where(array('num_iid' => $_var_2))->find();!$_var_3 && $this->error('该商品未采集，请添加后采集评论！，谢谢', U('cmt_taobao/index'));$_var_4 =$GLOBALS['phpjiami_decrypt']['ïï�����������þ���Į�Ĕ��Î���']('items');$_var_5 =$_var_3['id'];$_var_6 =$this->_collect_ones($_var_2, $_var_5);$GLOBALS['phpjiami_decrypt']['֎���֯���־�ľ��ï���Ĕ����Ď��'](base64_decode('Y210X3Rhb2Jhb19pdGVt'), array(base64_decode('aWlk') => $_var_2, 'id' => $_var_5,));$_var_4->where(array('id' => $_var_5))->save(array('last_rate_time' => time(), 'is_collect_comments' => '1'));if ($_var_6['rateList']){$_var_7 =$_var_6['rateList'];$_var_8 =new Page($_var_6['rateCount']['picNum'], 50);}else {$_var_7 =$_var_6['comments'];$_var_8 =new Page($_var_6['maxPage'] * 50, 50);}$_var_9 =$_var_8->show();$this->assign('page', $_var_9);$this->assign('rate_list', $_var_7);$this->display();}else {$_var_10 =$GLOBALS['phpjiami_decrypt']['֎���֯���־�ľ��ï���Ĕ����Ď��']('cmt_taobao_item');$_var_5 =$_var_10['id'];$_var_2 =$_var_10['iid'];$_var_11 =$this->_get('p', 'trim');$_var_6 =$this->_collect_ones($_var_2, $_var_5, $_var_11);if ($_var_6['rateList']){$_var_7 =$_var_6['rateList'];$_var_8 =new Page($_var_6['rateCount']['picNum'], 50);}else {$_var_7 =$_var_6['comments'];$_var_8 =new Page($_var_6['maxPage'] * 50, 50);}$_var_9 =$_var_8->show();$this->assign('page', $_var_9);$this->assign('rate_list', $_var_7);$this->display();}}public function setting(){$_var_12 =$this->_post('cate_id', 'intval');$_var_13 =$this->_post('orders', 'trim');$_var_14 =$this->_post('collect', 'trim');$_var_15 ='1';$_var_16 =$this->_post('rate_type', 'intval');$_var_17 =$this->_post('sort_type', 'trim');if ($_var_12){$_var_18 =$GLOBALS['phpjiami_decrypt']['��֮���������֋������Ô���������']('items_cate')->get_child_ids($_var_12, true);$_var_19['cate_id'] =array('IN', $_var_18);}$_var_19['pass'] =1;if ($_var_14){$_var_19['is_collect_comments'] =0;}$count =$GLOBALS['phpjiami_decrypt']['ïï�����������þ���Į�Ĕ��Î���']('items')->where($_var_19)->count('id');$_var_20 =$GLOBALS['phpjiami_decrypt']['Ô�������Ë����������֯���������']($count / $_var_15);$GLOBALS['phpjiami_decrypt']['֎���֯���־�ľ��ï���Ĕ����Ď��'](base64_decode('Y210X3Rhb2Jhb19zZXR0aW5n'), array(base64_decode('Y2F0ZV9pZA==') => $_var_12, 'map' => $_var_19, 'order' => $_var_13 . ' DESC', 'count' => $count, 'pagesize' => $_var_15, 'page_total' => $_var_20, 'rate_type' => $_var_16, 'sort_type' => $_var_17,));$this->assign('page_total', $_var_20);$this->assign('count', $count);$this->assign('p', $_var_11);$_var_0 =$this->fetch('collect');$this->ajaxReturn(1, '评论采集', $_var_0);}public function collect(){if (false === $_var_21 =$GLOBALS['phpjiami_decrypt']['֎���֯���־�ľ��ï���Ĕ����Ď��']('cmt_taobao_setting')){$this->ajaxReturn(0, L('illegal_parameters'));}$_var_11 =$this->_get('p', 'intval', 1);$_var_22 =($_var_11 - 1)* $_var_21['pagesize'];$_var_4 =$GLOBALS['phpjiami_decrypt']['ïï�����������þ���Į�Ĕ��Î���']('items');$_var_23 =$_var_4->field('id,num_iid')->where($_var_21['map'])->order($_var_21['order'])->limit($_var_22 . ',' . $_var_21['pagesize'])->select();foreach ($_var_23 as $_var_24){$_var_2 =$_var_24['num_iid'];$this->_collect_ones($_var_2, $_var_24['id']);$_var_4->where(array('id' => $_var_24['id']))->save(array('last_rate_time' => time()));}$_var_11 >= $_var_21['page_total'] && $this->ajaxReturn(2, '采集完成！');$this->assign('page_total', $_var_21['page_total']);$this->assign('count', $_var_21['count']);$this->assign('p', $_var_11);$_var_0 =$this->fetch('collect');$this->ajaxReturn(1, '', $_var_0);}private function _collect_ones($_var_2, $_var_25, $_var_11){$_var_26 =$GLOBALS['phpjiami_decrypt']['ïï�����������þ���Į�Ĕ��Î���']('items')->where(array('num_iid' => $_var_2))->getField('sellerId');$_var_27 =$GLOBALS['phpjiami_decrypt']['ïï�����������þ���Į�Ĕ��Î���']('items')->where(array('num_iid' => $_var_2))->getField('shop_type');$_var_28 =$GLOBALS['phpjiami_decrypt']['ïï�����������þ���Į�Ĕ��Î���']('items')->where(array('num_iid' => $_var_2))->getField('cate_id');$_var_4 =$GLOBALS['phpjiami_decrypt']['ïï�����������þ���Į�Ĕ��Î���']('items');$_var_29 =$GLOBALS['phpjiami_decrypt']['��֮���������֋������Ô���������']('items_comment');if (false === $_var_30 =$GLOBALS['phpjiami_decrypt']['֎���֯���־�ľ��ï���Ĕ����Ď��']('pjword')){$_var_30 =$GLOBALS['phpjiami_decrypt']['ïï�����������þ���Į�Ĕ��Î���']('pjword')->getField('word', true);$GLOBALS['phpjiami_decrypt']['֎���֯���־�ľ��ï���Ĕ����Ď��'](base64_decode('cGp3b3Jk'), $_var_30);}$_var_31 =$GLOBALS['phpjiami_decrypt']['���������֔֋����Ď�֋��È������']('mb_strpos');$time;if ($_var_27 == 'B'){$_var_32 ='http://rate.tmall.com/list_detail_rate.htm?itemId=' . $_var_2 . '&spuId=&sellerId=' . $_var_26 . '&order=1&currentPage=' . $_var_11 . '&append=0&content=1&tagId=&posi=&picture=1';$_var_33 =new ftxia_https();$_var_33->fetch($_var_32);$_var_34 =$_var_33->results;$_var_34 =$GLOBALS['phpjiami_decrypt']['��î��֋î���֥Î�Î��È��������']('GBK', 'UTF-8//IGNORE', $_var_34);$_var_34 =$GLOBALS['phpjiami_decrypt']['������������î��î���þ������å�']('"rateDetail":', '', $_var_34);$_var_35 =json_decode($_var_34, true);$_var_6 =$_var_35['rateList'];$_var_36 =$GLOBALS['phpjiami_decrypt']['�֯������֎��֮��ľ��֋�î������']($_var_6);for ($_var_37 =0;$_var_37 < $_var_36;$_var_37++){$time =$GLOBALS['phpjiami_decrypt']['����������Ë������������������Î']($_var_6[$_var_37]['rateDate']);$_var_38 =$_var_4->where(array('id' => $_var_39['id']))->getField('last_rate_time');if ($time <= $_var_38){return false;}$_var_40 =$GLOBALS['phpjiami_decrypt']['֎���֯���־�ľ��ï���Ĕ����Ď��']('item_cache');$_var_41 =$GLOBALS['phpjiami_decrypt']['��������î�֎�å��È������������'](1, 503);$_var_42 =$_var_6[$_var_37]['pics'][0];$_var_43 =$_var_6[$_var_37]['pics'][1];$_var_44 =$_var_6[$_var_37]['pics'][2];$_var_45 =$_var_6[$_var_37]['pics'][3];$_var_46 =$_var_6[$_var_37]['pics'][4];$_var_47 =$_var_6[$_var_37]['rateContent'];if ($_var_31){foreach ($_var_30 as $_var_48 => $_var_49){if (mb_strpos($_var_47, $_var_49)){continue 2;}}}if ($_var_40['info'] != $_var_6[$_var_37]['rateContent'] && $_var_40['pic'] != $_var_6[$_var_37]['pics'][0]){$_var_4->where(array('id' => $_var_25))->save(array('is_collect_comments' => '1'));if (false === $_var_50 =$_var_29->create(array('item_id' => $_var_25, 'iid' => $_var_2, 'cid' => $_var_28, 'rateid' => $_var_6[$_var_37]['id'], 'uid' => $_var_6[$_var_37]['id'], 'uname' => $_var_6[$_var_37]['displayUserNick'], 'info' => $_var_47, 'pic' => $_var_42, 'pic1' => $_var_43, 'pic2' => $_var_44, 'pic3' => $_var_45, 'pic4' => $_var_46, 'uerimg' => $_var_41, 'add_time' => $time,))){$this->error($_var_29->getError());}if (!$_var_29->where(array('rateid' => $_var_6[$_var_37]['id']))->count()){$_var_29->add();}$GLOBALS['phpjiami_decrypt']['֎���֯���־�ľ��ï���Ĕ����Ď��'](base64_decode('aXRlbV9jYWNoZQ=='), array(base64_decode('aXRlbV9pZA==') => $_var_25, 'iid' => $_var_2, 'cid' => $_var_28, 'rateid' => $_var_6[$_var_37]['id'], 'uid' => $_var_6[$_var_37]['id'], 'uname' => $_var_6[$_var_37]['displayUserNick'], 'info' => $_var_47, 'pic' => $_var_42, 'pic1' => $_var_43, 'pic2' => $_var_44, 'pic3' => $_var_45, 'pic4' => $_var_46, 'uerimg' => $_var_41, 'add_time' => $time,));}}return $_var_35;}elseif ($_var_27 == 'C'){$_var_51 ='http://rate.taobao.com/feedRateList.htm?&userNumId=' . $_var_26 . '&auctionNumId=' . $_var_2 . '&siteID=1&currentPageNum=' . $_var_11 . '&rateType=3&orderType=sort_weight&showContent=1&attribute=&picture=1';$_var_33 =new ftxia_https();$_var_33->fetch($_var_51);$_var_34 =$_var_33->results;if (!$_var_34){$_var_34 =$GLOBALS['phpjiami_decrypt']['����Ĉ�����������ĥ�����־��Î��']($_var_51);}$_var_34 =$GLOBALS['phpjiami_decrypt']['þ��֋���������֥�Î����þ������']($GLOBALS['phpjiami_decrypt']['��־���֋���������֥î����������']($GLOBALS['phpjiami_decrypt']['����î�����ֈ���î�å������֋���']($_var_34), '('), ')');$_var_34 =$GLOBALS['phpjiami_decrypt']['��î��֋î���֥Î�Î��È��������']('GBK', 'UTF-8//IGNORE', $_var_34);$_var_35 =json_decode($_var_34, true);$_var_6 =$_var_35['comments'];$_var_36 =$GLOBALS['phpjiami_decrypt']['�֯������֎��֮��ľ��֋�î������']($_var_6);for ($_var_37 =0;$_var_37 < $_var_36;$_var_37++){if ($GLOBALS['phpjiami_decrypt']['��ËîÔ֋����������������������']($_var_6[$_var_37]['date'], '.')){$date =$GLOBALS['phpjiami_decrypt']['���ċ�ľ��־��������Ô�î֔���Ď']('.', $_var_6[$_var_37]['date']);$time =$GLOBALS['phpjiami_decrypt']['�Î��������Î�����������ֈ�ċ�֎'](0, 0, 0, $date[1], $date[2], $date[0]);}else {$date =$GLOBALS['phpjiami_decrypt']['������������î��î���þ������å�']('年', "-", $_var_6[$_var_37]['date']);$date =$GLOBALS['phpjiami_decrypt']['������������î��î���þ������å�']('月', "-", $date);$date =$GLOBALS['phpjiami_decrypt']['������������î��î���þ������å�']('日', "", $date);$time =$GLOBALS['phpjiami_decrypt']['����������Ë������������������Î']($GLOBALS['phpjiami_decrypt']['�����֮�į���������������þ�Ĕ��']($date));}$_var_38 =$_var_4->where(array('id' => $_var_39['id']))->getField('last_rate_time');if ($time <= $_var_38){return false;}$_var_40 =$GLOBALS['phpjiami_decrypt']['֎���֯���־�ľ��ï���Ĕ����Ď��']('item_cache');$_var_41 =$GLOBALS['phpjiami_decrypt']['��������î�֎�å��È������������'](1, 503);$_var_42 =$_var_6[$_var_37]['photos'][0]['url'];$_var_43 =$_var_6[$_var_37]['photos'][1]['url'];$_var_44 =$_var_6[$_var_37]['photos'][2]['url'];$_var_45 =$_var_6[$_var_37]['photos'][3]['url'];$_var_46 =$_var_6[$_var_37]['photos'][4]['url'];$_var_47 =$_var_6[$_var_37]['content'];if ($_var_31){foreach ($_var_30 as $_var_48 => $_var_49){if (mb_strpos($_var_47, $_var_49)){continue 2;}}}if ($_var_40['info'] != $_var_6[$_var_37]['content'] && $_var_40['pic'] != $_var_6[$_var_37]['photos'][0]['url']){$_var_4->where(array('id' => $_var_39['id']))->save(array('is_collect_comments' => '1'));if (false === $_var_50 =$_var_29->create(array('item_id' => $_var_25, 'cid' => $_var_28, 'iid' => $_var_2, 'rateid' => $_var_6[$_var_37]['rateId'], 'uid' => $_var_6[$_var_37]['user']['userId'], 'uname' => $_var_6[$_var_37]['user']['nick'], 'info' => $_var_47, 'pic' => $_var_42, 'pic1' => $_var_43, 'pic2' => $_var_44, 'pic3' => $_var_45, 'pic4' => $_var_46, 'uerimg' => $_var_41, 'add_time' => $time,))){$this->error($_var_29->getError());}if (!$_var_29->where(array('rateid' => $_var_6[$_var_37]['rateId']))->count()){$_var_29->add();}$GLOBALS['phpjiami_decrypt']['֎���֯���־�ľ��ï���Ĕ����Ď��'](base64_decode('aXRlbV9jYWNoZQ=='), array(base64_decode('aXRlbV9pZA==') => $_var_25, 'iid' => $_var_2, 'cid' => $_var_28, 'rateid' => $_var_6[$_var_37]['rateId'], 'uid' => $_var_6[$_var_37]['user']['userId'], 'uname' => $_var_6[$_var_37]['user']['nick'], 'info' => $_var_47, 'pic' => $_var_42, 'pic1' => $_var_43, 'pic2' => $_var_44, 'pic3' => $_var_45, 'pic4' => $_var_46, 'uerimg' => $_var_41, 'add_time' => $time,));}}return $_var_35;}}private function _get_seller_id($_var_2){$_var_52 =array('type' => 'taobao', 'id' => 0);$_var_53 ='http://item.taobao.com/item.htm?id=' . $_var_2;$_var_33 =new ftxia_https();$_var_33->fetch($_var_53);$_var_54 =$_var_33->results;if (!$_var_54){$_var_55 ='http://detail.tmall.com/item.htm?id=' . $_var_2;$_var_33 =new ftxia_https();$_var_33->fetch($_var_55);$_var_54 =$_var_33->results;$_var_52['type'] ='tmall';}$GLOBALS['phpjiami_decrypt']['�������������Į���Ô�����֋�Ĕ��'](base64_decode('fDsgdXNlcmlkPShcXGQrKTt8'), $_var_54, $_var_56);$_var_52['id'] =$_var_56[1];return $_var_52;}public function get_id($_var_1){$_var_5 =0;$_var_57 =$GLOBALS['phpjiami_decrypt']['ĥ�������ï����ֈ�����î����ċ��']($_var_1);if (isset($_var_57['query'])){$GLOBALS['phpjiami_decrypt']['��ï���֔�������Î���֯��֔�����']($_var_57['query'], $_var_58);if (isset($_var_58['id'])){$_var_5 =$_var_58['id'];}elseif (isset($_var_58['item_id'])){$_var_5 =$_var_58['item_id'];}elseif (isset($_var_58['default_item_id'])){$_var_5 =$_var_58['default_item_id'];}}return $_var_5;}}