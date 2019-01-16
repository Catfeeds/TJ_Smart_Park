<?php

/**
 * 菜单配置文件
 * 参考文档：https://www.kancloud.cn/youpzt/eacoo/413039
 */
return [
    'admin_menus' => [
        [
            'title' => '项目预算管理',
            'name' => 'park/project_budget',
            'icon' => '',
            'is_menu' => 1,
            'sub_menu' => [
                [
                    'title' => '项目预算列表',
                    'name' => 'park_project_budget/Budget/index',
                    'is_menu' => 1,
                    'icon' => ''
                ],
                [
                    'title' => '添加项目预算',
                    'name' => 'park_project_budget/Budget/edit',
                    'is_menu' => 0,
                    'icon' => ''
                ],
                [
                    'title' => '删除项目预算',
                    'name' => 'park_project_budget/Budget/delete',
                    'is_menu' => 0,
                    'icon' => ''
                ],
            ],
        ]
    ]
];