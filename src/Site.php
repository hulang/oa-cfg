<?php

/**
 * +----------------------------------------------------------------------
 * 网站落地页配置,修改无效,每次更新OA自动安装一次
 * +----------------------------------------------------------------------
 */

declare(strict_types=1);

namespace hulang\cfg;

class Site
{
    /**
     * 系统|名称
     * @return mixed|string
     */
    protected static $sys_name = '旅游推广管理系统';
    /**
     * 系统|作者
     * @return mixed|string
     */
    protected static $sys_author = 'hulangfy@163.com';
    /**
     * 系统|更新日期
     * @return mixed|string
     */
    protected static $sys_release = '20230217';
    /**
     * 系统|版本
     * @return mixed|string
     */
    protected static $sys_version = '2.0.2';
    /**
     * 开发者用户
     * @return mixed|array
     */
    protected static $sys_developer_user_id = [2];
    /**
     * 落地页生成目录
     * @return mixed|string
     */
    protected static $sys_page_html_dir = 'public/static/html/info/';
    /**
     * 内部落地页访问URL
     * @return mixed|string
     */
    protected static $sys_page_view_url = '/static/html/info/';
    /**
     * 落地页默认文件目录
     * @return mixed|string
     */
    protected static $sys_page_default_dir = 'public/static/html/index/';
    /**
     * 弹出微信js模板文件
     * @return mixed|string
     */
    protected static $sys_wx_js_tpl = 'public/static/html/wx/index.html';
    /**
     * 弹出微信js生成文件
     * @return mixed|string
     */
    protected static $sys_wx_js_file = 'public/static/page/js/wx.js';

    /**
     * 获取配置
     * @return mixed|array
     */
    public static function getSysConfig()
    {
        $data = [];
        $data['sys_name'] = self::$sys_name;
        $data['sys_author'] = self::$sys_author;
        $data['sys_release'] = self::$sys_release;
        $data['sys_version'] = self::$sys_version;
        $data['sys_developer_user_id'] = self::$sys_developer_user_id;
        $data['sys_page_html_dir'] = self::$sys_page_html_dir;
        $data['sys_page_view_url'] = self::$sys_page_view_url;
        $data['sys_page_default_dir'] = self::$sys_page_default_dir;
        $data['sys_wx_js_tpl'] = self::$sys_wx_js_tpl;
        $data['sys_wx_js_file'] = self::$sys_wx_js_file;
        return $data;
    }
    /**
     * 系统|名称
     * @return mixed|string
     */
    public static function getSysName()
    {
        return self::$sys_name;
    }
    /**
     * 系统|作者
     * @return mixed|string
     */
    public static function getSysAuthor()
    {
        return self::$sys_author;
    }
    /**
     * 系统|更新时间
     * @return mixed|string
     */
    public static function getSysRelease()
    {
        return self::$sys_release;
    }
    /**
     * 系统|版本
     * @return mixed|string
     */
    public static function getSysVersion()
    {
        return self::$sys_version;
    }
    /**
     * 开发者用户
     * @return mixed|array
     */
    public static function getSysDeveloperUserId()
    {
        return self::$sys_developer_user_id;
    }
    /**
     * 落地页生成目录
     * @return mixed|string
     */
    public static function getSysPageHtmlDir()
    {
        return self::$sys_page_html_dir;
    }
    /**
     * 内部落地页访问URL
     * @return mixed|string
     */
    public static function getSysPageViewUrl()
    {
        return self::$sys_page_view_url;
    }
    /**
     * 落地页默认文件目录
     * @return mixed|string
     */
    public static function getSysPageDefaultDir()
    {
        return self::$sys_page_default_dir;
    }
    /**
     * 弹出微信js模板文件
     * @return mixed|string
     */
    public static function getSysWxJsTpl()
    {
        return self::$sys_wx_js_tpl;
    }
    /**
     * 弹出微信js生成文件
     * @return mixed|string
     */
    public static function getSysWxJsFile()
    {
        return self::$sys_wx_js_file;
    }
}
