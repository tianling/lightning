<?php
/**
 * file: recharge.php
 * author: Toruneko<toruneko@outlook.com>
 * date: 2013-12-6
 * desc: 
 */
?>
<h1>搜索</h1>
<form>
    <fieldset>
        <label for="nick-name">昵称</label>
        <input type="text" id="nick-name" name="nick-name" />
        <label for="user-name">姓名</label>
        <input type="text" id="user-name" name="user-name" />
        <label for="mobile-number">手机</label>
        <input type="text" id="mobile-number" name="mobile-number" />
        <label for="email">邮箱</label>
        <input type="text" id="email" name="email" />
        <label for="money-balance-0">金额(元)</label>
        <input type="text" id="money-balance-0" name="money-balance-0" />
        <label for="money-balance-1">---</label>
        <input type="text" id="money-balance-1" name="money-balance-1" />
        <label for="apply-time-0">申请时间</label>
        <input type="text" id="apply-time-0" name="apply-time-0" />
        <label for="apply-time-1">---</label>
        <input type="text" id="apply-time-1" name="apply-time-1" />
        <input type="button" value="搜索" id="search" />
    </fieldset>
</form>
<table class="userMessage">
    <tbody>
    <tr>
        <td>昵称</td>
        <td>姓名</td>
        <td>手机号码</td>
        <td>邮箱</td>
        <td>信用</td>
        <td>提现原因</td>
        <td>金额（元）</td>
        <td>申请时间</td>
        <td>手续费</td>
        <td>实提金额（元）</td>
        <td>操作</td>
    </tr>
    <tr>
        <td>昵称</td>
        <td>姓名</td>
        <td>手机号码</td>
        <td>邮箱</td>
        <td>信用</td>
        <td>提现原因</td>
        <td>金额（元）</td>
        <td>申请时间</td>
        <td>手续费</td>
        <td>实提金额（元）</td>
        <td>
            <a href="#" class="check" data-method="allow-get">允许提现</a>
            <a href="#" class="check" data-method="delete">删除记录</a>
            <a href="#" class="check" data-method="check-user">查看用户信息</a>
        </td>
    </tr>
    </tbody>
</table>
<p>
    <span class="page">1</span>
    <span class="page">2</span>
    <span class="page">3</span>
    <span class="page">4</span>
    <span class="page">5</span>
</p>