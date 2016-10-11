<?php
phpinfo();exit;
echo '<br />'.$_SERVER['HTTP_ACCEPT_LANGUAGE'].'<br />';

if(strrpos(strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE']), 'zh-cn') !== false) {
    echo '<br />你的是中文操作系统<br />';
}
else
{
    echo '<br />非中文操作系统<br />';
}