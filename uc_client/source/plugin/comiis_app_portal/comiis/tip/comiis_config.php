<?php
/**
 * 
 * ��-��-�����ѣ�Ϊ��֤�ݸ�����Դ�ĸ���ά�����ϣ���ֹ�ݸ����׷���Դ�����ⷺ�ģ�
 *             ϣ���������زݸ�����Դ�Ļ�Ա��Ҫ����Ѳݸ����׷���Դ�ṩ��������;
 *             �类���֣���ȡ���ݸ���VIP��Ա�ʸ�ֹͣһ�к��ڸ���֧���Լ����в���BUG����������
 *          
 * ��.��.�ɳ�Ʒ ������Ʒ
 * �ݸ��� ȫ���׷� https://Www.Caogen8.co
 * ������www.Cgzz8.com (���ղر���!)
 * ����Դ��Դ�������ռ�,��������ѧϰ����������������ҵ��;����������24Сʱ��ɾ��!
 * ����֧��/����ά����QQ 2575 163778
 * лл֧�֣���л���.�ݸ���.�Ĺ�ע������������   
 * 
 */
 
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
global $comiis_config, $comiis_portal;
$comiis_config = array(
	'name' => $comiis_portal['tip_a'],
	'dir' => 'tip',
	'copyright' => 'http://www.comiis.com',
	'version' => '2',
	'types' => '3',
	'install' => array('block'=>array('0'=>array( 'bid'=>0, 'blockclass'=>'html_html', 'blocktype'=>'1', 'name'=>'comiis', 'title'=>'', 'classname'=>'', 'summary'=>'<div class="comiis_mh_quote bg_h" style="color:#d99908">'.$comiis_portal['tip_b'].'</div>', 'uid'=>'0', 'username'=>'comiis', 'styleid'=>'0', 'blockstyle'=>'', 'picwidth'=>'0', 'picheight'=>'0', 'target'=>'blank', 'dateformat'=>'Y-m-d', 'dateuformat'=>'0', 'script'=>'blank', 'param'=>array( 'content'=>'<div class="comiis_mh_quote bg_h" style="color:#d99908">'.$comiis_portal['tip_b'].'</div>', 'items'=>10,), 'shownum'=>'10', 'cachetime'=>'0', 'cachetimerange'=>'0,0', 'punctualupdate'=>'0', 'hidedisplay'=>'0', 'dateline'=>'1485311501', 'notinherited'=>'0', 'isblank'=>'0',),),'style'=>array())
);