<?php

// +----------------------------------------------------------------------
// | 海豚PHP框架 [ DolphinPHP ]
// +----------------------------------------------------------------------
// | 版权所有 2016~2017 河源市卓锐科技有限公司 [ http://www.zrthink.com ]
// +----------------------------------------------------------------------
// | 官方网站: http://dolphinphp.com
// +----------------------------------------------------------------------
// | 开源协议 ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------

/**
 * 模块信息
 */
return [
    // 模块名[必填]
    'name' => 'wxwall',
    // 模块标题[必填]
    'title' => '微信墙',
    // 模块唯一标识[必填]，格式：模块名.开发者标识.module
    'identifier' => 'wxwall.marvin9002.module',
    // 模块图标[选填]
    'icon' => 'fa fa-fw fa-google-wallet',
    // 模块描述[选填]
    'description' => '微信墙模块',
    // 开发者[必填]
    'author' => 'marvin9002',
    // 开发者网址[选填]
    'author_url' => 'http://www.pptv.com',
    // 版本[必填],格式采用三段式：主版本号.次版本号.修订版本号
    'version' => '1.0.0',
    // 模块依赖[可选]，格式[[模块名, 模块唯一标识, 依赖版本, 对比方式]]
    'need_module' => [
        ['admin', 'admin.dolphinphp.module', '1.0.0'],
        ['user', 'user.dolphinphp.module', '1.0.0']
    ],
    // 插件依赖[可选]，格式[[插件名, 插件唯一标识, 依赖版本, 对比方式]]
    'need_plugin' => [],
    // 数据表[有数据库表时必填]
    'tables' => [
        'wxwall_barrage',
        'wxwall_music',
        'wxwall_order',
        'wxwall_order_config',
        'wxwall_photo',
        'wxwall_video',
        'wxwall_wechat_user',
    ],
    // 原始数据库表前缀
    // 用于在导入模块sql时，将原有的表前缀转换成系统的表前缀
    // 一般模块自带sql文件时才需要配置
    'database_prefix' => 'dp_',
    // 模块参数配置
//    'config' => [
//        ['text', 'summary', '默认摘要字数', '发布文章时，如果没有填写摘要，则自动获取文档内容为摘要。如果此处不填写或填写0，则不提取摘要。', 0],
//        ['ckeditor', 'contact', '联系方式', '', '<div class="font-s13 push"><strong>河源市卓锐科技有限公司</strong><br />
//地址：河源市江东新区东环路汇通苑D3-H232<br />
//电话：0762-8910006<br />
//邮箱：admin@zrthink.com</div>'],
//        ['textarea', 'meta_head', '顶部代码', '代码会放在 <code>&lt;/head&gt;</code> 标签以上'],
//        ['textarea', 'meta_foot', '底部代码', '代码会放在 <code>&lt;/body&gt;</code> 标签以上'],
//        ['radio', 'support_status', '在线客服', '', ['禁用', '启用'], 1],
//        ['colorpicker', 'support_color', '在线客服配色', '', 'rgba(0,158,232,1)'],
//        ['image', 'support_wx', '在线客服微信二维码', '在线客服微信二维码'],
//        ['ckeditor', 'support_extra', '在线客服额外内容', '在线客服额外内容，可填写电话或其他说明'],
//    ],
    'config' => [
        [
            'text',
            'name',
            '公众号名称',
            '自行扩展时使用',
            '',
        ],
        [
            'text',
            'id',
            '公众号原始ID',
            '自行扩展时使用',
            '',
        ],
        [
            'text',
            'number',
            '微信号',
            '自行扩展时使用',
            '',
        ],
        [
            'text',
            'app_id',
            'AppID',
            '',
            '',
        ],
        [
            'text',
            'secret',
            'AppSecret',
            '',
            '',
        ],
        [
            'text',
            'token',
            'Token',
            '',
            '',
        ],
        [
            'text',
            'aes_key',
            'EncodingAESKey',
            '安全模式下请一定要填写',
            '',
        ],
        [
            'select',
            'type',
            '微信号类型',
            '自行扩展时使用',
            [
                '订阅号',
                '服务号',
            ],
            '0',
        ],
        [
            'radio',
            'debug',
            'Debug模式',
            '关闭时，不记录微信日志。日志路径 <code>/runtime/log/wechat/easywechat.log</code>',
            [
                '开启',
                '关闭',
            ],
            '1',
        ],
        [
            'ckeditor',
            'check',
            '敏感词过滤',
            '弹幕敏感词过滤',
            '操,sb,傻逼,艹,日你妈,干你妹,老子,bitch,婊子'
        ],
    ],
    'action' => [],
    'access' => [],
    'home'=>[
        'ischild'=>0,
        'parent'=>0,
        'domain'=>'',
        'menu'=>'index/index',
        'menu_title'=>'wxwall',
        'menu_order'=>'0',
    ]
];
