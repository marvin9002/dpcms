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
    'name' => 'cms',
    // 模块标题[必填]
    'title' => '门户',
    // 模块唯一标识[必填]，格式：模块名.开发者标识.module
    'identifier' => 'cms.ming.module',
    // 模块图标[选填]
    'icon' => 'fa fa-fw fa-newspaper-o',
    // 模块描述[选填]
    'description' => '门户模块',
    // 开发者[必填]
    'author' => 'CaiWeiMing',
    // 开发者网址[选填]
    'author_url' => 'http://www.dolphinphp.com',
    // 版本[必填],格式采用三段式：主版本号.次版本号.修订版本号
    'version' => '1.0.0',
    // 模块依赖[可选]，格式[[模块名, 模块唯一标识, 依赖版本, 对比方式]]
    'need_module' => [
        ['admin', 'admin.dolphinphp.module', '1.0.0']
    ],
    // 插件依赖[可选]，格式[[插件名, 插件唯一标识, 依赖版本, 对比方式]]
    'need_plugin' => [],
    // 数据表[有数据库表时必填]
    'tables' => [
        'cms_advert',
        'cms_advert_type',
        'cms_column',
        'cms_document',
        'cms_document_article',
        'cms_field',
        'cms_link',
        'cms_menu',
        'cms_model',
        'cms_nav',
        'cms_page',
        'cms_slider',
        'cms_support',
    ],
    // 原始数据库表前缀
    // 用于在导入模块sql时，将原有的表前缀转换成系统的表前缀
    // 一般模块自带sql文件时才需要配置
    'database_prefix' => 'dp_',
    // 模块参数配置
    'config' => [
        ['text', 'summary', '默认摘要字数', '发布文章时，如果没有填写摘要，则自动获取文档内容为摘要。如果此处不填写或填写0，则不提取摘要。', 0],
        ['ckeditor', 'contact', '联系方式', '', '<div class="font-s13 push"><strong>河源市卓锐科技有限公司</strong><br />
地址：河源市江东新区东环路汇通苑D3-H232<br />
电话：0762-8910006<br />
邮箱：admin@zrthink.com</div>'],
        ['textarea', 'meta_head', '顶部代码', '代码会放在 <code>&lt;/head&gt;</code> 标签以上'],
        ['textarea', 'meta_foot', '底部代码', '代码会放在 <code>&lt;/body&gt;</code> 标签以上'],
        ['radio', 'support_status', '在线客服', '', ['禁用', '启用'], 1],
        ['colorpicker', 'support_color', '在线客服配色', '', 'rgba(0,158,232,1)'],
        ['image', 'support_wx', '在线客服微信二维码', '在线客服微信二维码'],
        ['ckeditor', 'support_extra', '在线客服额外内容', '在线客服额外内容，可填写电话或其他说明'],
    ],
    // 行为配置
    'action' => [
        [
            'module' => 'cms',
            'name' => 'slider_delete',
            'title' => '删除滚动图片',
            'remark' => '删除滚动图片',
            'rule' => '',
            'log' => '[user|get_nickname] 删除了滚动图片：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'slider_edit',
            'title' => '编辑滚动图片',
            'remark' => '编辑滚动图片',
            'rule' => '',
            'log' => '[user|get_nickname] 编辑了滚动图片：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'slider_add',
            'title' => '添加滚动图片',
            'remark' => '添加滚动图片',
            'rule' => '',
            'log' => '[user|get_nickname] 添加了滚动图片：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'document_delete',
            'title' => '删除文档',
            'remark' => '删除文档',
            'rule' => '',
            'log' => '[user|get_nickname] 删除了文档：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'document_restore',
            'title' => '还原文档',
            'remark' => '还原文档',
            'rule' => '',
            'log' => '[user|get_nickname] 还原了文档：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'nav_disable',
            'title' => '禁用导航',
            'remark' => '禁用导航',
            'rule' => '',
            'log' => '[user|get_nickname] 禁用了导航：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'nav_enable',
            'title' => '启用导航',
            'remark' => '启用导航',
            'rule' => '',
            'log' => '[user|get_nickname] 启用了导航：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'nav_delete',
            'title' => '删除导航',
            'remark' => '删除导航',
            'rule' => '',
            'log' => '[user|get_nickname] 删除了导航：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'nav_edit',
            'title' => '编辑导航',
            'remark' => '编辑导航',
            'rule' => '',
            'log' => '[user|get_nickname] 编辑了导航：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'nav_add',
            'title' => '添加导航',
            'remark' => '添加导航',
            'rule' => '',
            'log' => '[user|get_nickname] 添加了导航：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'model_disable',
            'title' => '禁用内容模型',
            'remark' => '禁用内容模型',
            'rule' => '',
            'log' => '[user|get_nickname] 禁用了内容模型：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'model_enable',
            'title' => '启用内容模型',
            'remark' => '启用内容模型',
            'rule' => '',
            'log' => '[user|get_nickname] 启用了内容模型：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'model_delete',
            'title' => '删除内容模型',
            'remark' => '删除内容模型',
            'rule' => '',
            'log' => '[user|get_nickname] 删除了内容模型：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'model_edit',
            'title' => '编辑内容模型',
            'remark' => '编辑内容模型',
            'rule' => '',
            'log' => '[user|get_nickname] 编辑了内容模型：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'model_add',
            'title' => '添加内容模型',
            'remark' => '添加内容模型',
            'rule' => '',
            'log' => '[user|get_nickname] 添加了内容模型：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'menu_disable',
            'title' => '禁用导航菜单',
            'remark' => '禁用导航菜单',
            'rule' => '',
            'log' => '[user|get_nickname] 禁用了导航菜单：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'menu_enable',
            'title' => '启用导航菜单',
            'remark' => '启用导航菜单',
            'rule' => '',
            'log' => '[user|get_nickname] 启用了导航菜单：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'menu_delete',
            'title' => '删除导航菜单',
            'remark' => '删除导航菜单',
            'rule' => '',
            'log' => '[user|get_nickname] 删除了导航菜单：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'menu_edit',
            'title' => '编辑导航菜单',
            'remark' => '编辑导航菜单',
            'rule' => '',
            'log' => '[user|get_nickname] 编辑了导航菜单：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'menu_add',
            'title' => '添加导航菜单',
            'remark' => '添加导航菜单',
            'rule' => '',
            'log' => '[user|get_nickname] 添加了导航菜单：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'link_disable',
            'title' => '禁用友情链接',
            'remark' => '禁用友情链接',
            'rule' => '',
            'log' => '[user|get_nickname] 禁用了友情链接：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'link_enable',
            'title' => '启用友情链接',
            'remark' => '启用友情链接',
            'rule' => '',
            'log' => '[user|get_nickname] 启用了友情链接：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'link_delete',
            'title' => '删除友情链接',
            'remark' => '删除友情链接',
            'rule' => '',
            'log' => '[user|get_nickname] 删除了友情链接：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'link_edit',
            'title' => '编辑友情链接',
            'remark' => '编辑友情链接',
            'rule' => '',
            'log' => '[user|get_nickname] 编辑了友情链接：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'link_add',
            'title' => '添加友情链接',
            'remark' => '添加友情链接',
            'rule' => '',
            'log' => '[user|get_nickname] 添加了友情链接：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'field_disable',
            'title' => '禁用模型字段',
            'remark' => '禁用模型字段',
            'rule' => '',
            'log' => '[user|get_nickname] 禁用了模型字段：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'field_enable',
            'title' => '启用模型字段',
            'remark' => '启用模型字段',
            'rule' => '',
            'log' => '[user|get_nickname] 启用了模型字段：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'field_delete',
            'title' => '删除模型字段',
            'remark' => '删除模型字段',
            'rule' => '',
            'log' => '[user|get_nickname] 删除了模型字段：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'field_edit',
            'title' => '编辑模型字段',
            'remark' => '编辑模型字段',
            'rule' => '',
            'log' => '[user|get_nickname] 编辑了模型字段：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'field_add',
            'title' => '添加模型字段',
            'remark' => '添加模型字段',
            'rule' => '',
            'log' => '[user|get_nickname] 添加了模型字段：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'column_disable',
            'title' => '禁用栏目',
            'remark' => '禁用栏目',
            'rule' => '',
            'log' => '[user|get_nickname] 禁用了栏目：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'column_enable',
            'title' => '启用栏目',
            'remark' => '启用栏目',
            'rule' => '',
            'log' => '[user|get_nickname] 启用了栏目：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'column_delete',
            'title' => '删除栏目',
            'remark' => '删除栏目',
            'rule' => '',
            'log' => '[user|get_nickname] 删除了栏目：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'column_edit',
            'title' => '编辑栏目',
            'remark' => '编辑栏目',
            'rule' => '',
            'log' => '[user|get_nickname] 编辑了栏目：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'column_add',
            'title' => '添加栏目',
            'remark' => '添加栏目',
            'rule' => '',
            'log' => '[user|get_nickname] 添加了栏目：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'advert_type_disable',
            'title' => '禁用广告分类',
            'remark' => '禁用广告分类',
            'rule' => '',
            'log' => '[user|get_nickname] 禁用了广告分类：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'advert_type_enable',
            'title' => '启用广告分类',
            'remark' => '启用广告分类',
            'rule' => '',
            'log' => '[user|get_nickname] 启用了广告分类：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'advert_type_delete',
            'title' => '删除广告分类',
            'remark' => '删除广告分类',
            'rule' => '',
            'log' => '[user|get_nickname] 删除了广告分类：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'advert_type_edit',
            'title' => '编辑广告分类',
            'remark' => '编辑广告分类',
            'rule' => '',
            'log' => '[user|get_nickname] 编辑了广告分类：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'advert_type_add',
            'title' => '添加广告分类',
            'remark' => '添加广告分类',
            'rule' => '',
            'log' => '[user|get_nickname] 添加了广告分类：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'advert_disable',
            'title' => '禁用广告',
            'remark' => '禁用广告',
            'rule' => '',
            'log' => '[user|get_nickname] 禁用了广告：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'advert_enable',
            'title' => '启用广告',
            'remark' => '启用广告',
            'rule' => '',
            'log' => '[user|get_nickname] 启用了广告：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'advert_delete',
            'title' => '删除广告',
            'remark' => '删除广告',
            'rule' => '',
            'log' => '[user|get_nickname] 删除了广告：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'advert_edit',
            'title' => '编辑广告',
            'remark' => '编辑广告',
            'rule' => '',
            'log' => '[user|get_nickname] 编辑了广告：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'advert_add',
            'title' => '添加广告',
            'remark' => '添加广告',
            'rule' => '',
            'log' => '[user|get_nickname] 添加了广告：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'document_disable',
            'title' => '禁用文档',
            'remark' => '禁用文档',
            'rule' => '',
            'log' => '[user|get_nickname] 禁用了文档：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'document_enable',
            'title' => '启用文档',
            'remark' => '启用文档',
            'rule' => '',
            'log' => '[user|get_nickname] 启用了文档：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'document_trash',
            'title' => '回收文档',
            'remark' => '回收文档',
            'rule' => '',
            'log' => '[user|get_nickname] 回收了文档：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'document_edit',
            'title' => '编辑文档',
            'remark' => '编辑文档',
            'rule' => '',
            'log' => '[user|get_nickname] 编辑了文档：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'document_add',
            'title' => '添加文档',
            'remark' => '添加文档',
            'rule' => '',
            'log' => '[user|get_nickname] 添加了文档：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'slider_enable',
            'title' => '启用滚动图片',
            'remark' => '启用滚动图片',
            'rule' => '',
            'log' => '[user|get_nickname] 启用了滚动图片：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'slider_disable',
            'title' => '禁用滚动图片',
            'remark' => '禁用滚动图片',
            'rule' => '',
            'log' => '[user|get_nickname] 禁用了滚动图片：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'support_add',
            'title' => '添加客服',
            'remark' => '添加客服',
            'rule' => '',
            'log' => '[user|get_nickname] 添加了客服：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'support_edit',
            'title' => '编辑客服',
            'remark' => '编辑客服',
            'rule' => '',
            'log' => '[user|get_nickname] 编辑了客服：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'support_delete',
            'title' => '删除客服',
            'remark' => '删除客服',
            'rule' => '',
            'log' => '[user|get_nickname] 删除了客服：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'support_enable',
            'title' => '启用客服',
            'remark' => '启用客服',
            'rule' => '',
            'log' => '[user|get_nickname] 启用了客服：[details]',
            'status' => 1,
        ],
        [
            'module' => 'cms',
            'name' => 'support_disable',
            'title' => '禁用客服',
            'remark' => '禁用客服',
            'rule' => '',
            'log' => '[user|get_nickname] 禁用了客服：[details]',
            'status' => 1,
        ]
    ],
    // 授权配置
    'access' => [
        'group' => [
            "tab_title" => '栏目授权',
            "table_name" => "cms_column",
            "primary_key" => "id",
            "parent_id" => "pid",
            "node_name" => "name"
        ],
    ],
    //路由
    'route' => [
//            ':id' => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//            ':name' => ['index/hello', ['method' => 'post']],
            ''=>['cms/index/index']
     
    ]
];
