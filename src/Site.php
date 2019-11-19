<?php

namespace hulang\cfg;

/*
** 网站配置,修改无效,每次更新OA自动安装一次
*/

trait Site
{
	/**
	 * 版本
	 */
	protected $cms_install_version = '20191119';
	/**
	 * 开发者用户
	 */
	protected $cms_developer_user_id = [1, 2];
	/**
	 * 落地页生成目录
	 */
	protected $cms_page_html_dir = 'public/static/html/info/';
	/**
	 * 内部落地页访问URL
	 */
	protected $cms_page_view_url = '/static/html/info/';
	/**
	 * 落地页默认文件目录
	 */
	protected $cms_page_default_dir = 'public/static/html/index/';
	/**
	 * 弹出微信js模板文件
	 */
	protected $cms_wx_js_tpl = 'public/static/html/wx/index.html';
	/**
	 * 弹出微信js生成目录
	 */
	protected $cms_wx_js_file = 'public/static/page/js/wx.js';
}
