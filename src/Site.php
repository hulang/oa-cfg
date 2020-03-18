<?php

/**
 * +----------------------------------------------------------------------
 * 网站配置,修改无效,每次更新OA自动安装一次
 * +----------------------------------------------------------------------
 */

declare(strict_types=1);

namespace hulang\cfg;

class Site
{
	/**
	 * 版本
	 */
	protected static $cms_install_version = '20200318';
	/**
	 * 开发者用户
	 */
	protected static $cms_developer_user_id = [1, 2];
	/**
	 * 落地页生成目录
	 */
	protected static $cms_page_html_dir = 'public/static/html/info/';
	/**
	 * 内部落地页访问URL
	 */
	protected static $cms_page_view_url = '/static/html/info/';
	/**
	 * 落地页默认文件目录
	 */
	protected static $cms_page_default_dir = 'public/static/html/index/';
	/**
	 * 弹出微信js模板文件
	 */
	protected static $cms_wx_js_tpl = 'public/static/html/wx/index.html';
	/**
	 * 弹出微信js生成文件
	 */
	protected static $cms_wx_js_file = 'public/static/page/js/wx.js';

	/**
	 * 获取配置
	 * @return array
	 */
	public static function getCmsConfig()
	{
		$data = [];
		$data['cms_install_version'] = self::$cms_install_version;
		$data['cms_developer_user_id'] = self::$cms_developer_user_id;
		$data['cms_page_html_dir'] = self::$cms_page_html_dir;
		$data['cms_page_view_url'] = self::$cms_page_view_url;
		$data['cms_page_default_dir'] = self::$cms_page_default_dir;
		$data['cms_wx_js_tpl'] = self::$cms_wx_js_tpl;
		$data['cms_wx_js_file'] = self::$cms_wx_js_file;
		return $data;
	}
	/**
	 * 版本
	 * @return mixed
	 */
	public static function getCmsInstallVersion()
	{
		return self::$cms_install_version;
	}
	/**
	 * 开发者用户
	 * @return mixed
	 */
	public static function getCmsDeveloperUserId()
	{
		return self::$cms_developer_user_id;
	}
	/**
	 * 落地页生成目录
	 * @return mixed
	 */
	public static function getCmsPageHtmlDir()
	{
		return self::$cms_page_html_dir;
	}
	/**
	 * 内部落地页访问URL
	 * @return mixed
	 */
	public static function getCmsPageViewUrl()
	{
		return self::$cms_page_view_url;
	}
	/**
	 * 落地页默认文件目录
	 * @return mixed
	 */
	public static function getCmsPageDefaultDir()
	{
		return self::$cms_page_default_dir;
	}
	/**
	 * 弹出微信js模板文件
	 * @return mixed
	 */
	public static function getCmsWxJsTpl()
	{
		return self::$cms_wx_js_tpl;
	}
	/**
	 * 弹出微信js生成文件
	 * @return mixed
	 */
	public static function getCmsWxJsFile()
	{
		return self::$cms_wx_js_file;
	}
}
