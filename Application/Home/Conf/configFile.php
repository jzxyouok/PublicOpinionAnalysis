<?php
/**
 * Author: liu
 * Date: 16/2/14
 * Time: 上午11:14
 * 配置覆盖示例，使用时新建configFile.php文件
 */

return array(
    // '配置项'=>'配置值'
    'TMPL_L_DELIM'=>'<{', //修改左定界符
    'TMPL_R_DELIM'=>'}>', //修改右定界符

    //数据库配置信息
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址
    'DB_NAME'   => 'publicopinion', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => '1234', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => '', // 数据库表前缀
    'DB_CHARSET'=> 'utf8', // 字符集
    'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增

    'SHOW_PAGE_TRACE'=>true,
);
