<?php
// 如果传进来的键值对立面的url=dy就返回这个
if($_GET["url"]=='dy'){
    // 可以接收第二个参数post过来的请求然后补全字符串发送回去给前端
    echo '<ul>
        <li>111</li> 
        <li>222</li>
        <li>333</li>
    </ul>';
}else{
    echo 'muyou';
}
    
?>