<!DOCTYPE html>
<html lang="en">
<head>

<include file="public:head_user" />
</head>
<body>
	<include file="public:toper" />
    <include file="public:header_user" />
    <div class="c_center">
    	<include file="user/left" />
        
        <div class="cen_right">
            <include file="user/top" />
            <div class="r_bottom">
                <div class="a_invit">
                    通过您的专属邀请链接邀请好友访问{:C('ftx_site_name')},注册账号，您将获得{$union.per_visit}{:L('exchange')}积分，您每个月最多可以获得{$union.count_visit}个{:L('exchange')}个积分！<br>
                    邀请注册：通过您的专属邀请链接邀请好友访问，并使用手机成功注册账号，您将获得{$union.per_reg}{:L('exchange')}积分，您每个月最多可以获得{$union.count_reg}个{:L('exchange')}个积分！                   
                </div>
                <div class="log-table">
                <table border="0" cellspacing="0">
					<tr class="thead">
						<th>类别</th>
						<th>用户</th>
						<th>奖励</th>
						<th class="last">邀请时间</th>
					</tr>
					<notempty name="union_list">
					<volist name="union_list" id="val" mod="2">
					<tr   <eq name="mod" value="0">class="tr"</eq> <eq name="mod" value="1">class="tr-one"</eq>>
						<td><if condition="$val['ousername']">邀请注册<else/>邀请访问</if></td>
						<td><if condition="$val['ousername']">{$val.ousername}<else/>{$val.ip}</if></td>
						<td>{$val.score}</td>
						<td>{$val.add_time|frienddate}</td>
					</tr>
					</volist>
					<else />
					<tr><td colspan="4">
						<div class="find_gift">
						<p>还没有好友通过您的邀请注册哦！</p>
						<p>邀请好友，得金币！<a target="_blank" href="{:U('user/union')}">赶快行动吧！</a></p>
						</div>
						</td></tr>
					</notempty>
				</table>
				<div class="page page3">
					<div class="pageNav">{$page}</div>
				</div>
                </div>
                
            </div>
        </div>
    </div>
    
    <include file="public:footer_user" />
    
</body>

</html>
