<?php

/**
 * +----------------------------------------------------------------------
 * 网站助手函数文件
 * +----------------------------------------------------------------------
 */

declare(strict_types=1);

if (!function_exists('getSysName')) {
    /**
     * 系统|名称
     * @return mixed|string
     */
    function getSysName()
    {
        return \hulang\cfg\Site::getSysName();
    }
}
if (!function_exists('getSysAuthor')) {
    /**
     * 系统|作者
     * @return mixed|string
     */
    function getSysAuthor()
    {
        return \hulang\cfg\Site::getSysAuthor();
    }
}
if (!function_exists('getSysRelease')) {
    /**
     * 系统|更新时间
     * @return mixed|string
     */
    function getSysRelease()
    {
        return \hulang\cfg\Site::getSysRelease();
    }
}
if (!function_exists('getSysVersion')) {
    /**
     * 系统|版本
     * @return mixed|string
     */
    function getSysVersion()
    {
        return \hulang\cfg\Site::getSysVersion();
    }
}
if (!function_exists('getSysConfig')) {
    /**
     * 获取配置
     * @return mixed|array
     */
    function getSysConfig()
    {
        return \hulang\cfg\Site::getSysConfig();
    }
}
if (!function_exists('getSysDeveloperUserId')) {
    /**
     * 开发者用户
     * @return mixed|array
     */
    function getSysDeveloperUserId()
    {
        return \hulang\cfg\Site::getSysDeveloperUserId();
    }
}
if (!function_exists('getSysPageHtmlDir')) {
    /**
     * 落地页生成目录
     * @return mixed|string
     */
    function getSysPageHtmlDir()
    {
        return \hulang\cfg\Site::getSysPageHtmlDir();
    }
}
if (!function_exists('getSysPageViewUrl')) {
    /**
     * 内部落地页访问URL
     * @return mixed|string
     */
    function getSysPageViewUrl()
    {
        return \hulang\cfg\Site::getSysPageViewUrl();
    }
}
if (!function_exists('getSysPageDefaultDir')) {
    /**
     * 落地页默认文件目录
     * @return mixed|string
     */
    function getSysPageDefaultDir()
    {
        return \hulang\cfg\Site::getSysPageDefaultDir();
    }
}
if (!function_exists('getSysWxJsTpl')) {
    /**
     * 弹出微信js模板文件
     * @return mixed|string
     */
    function getSysWxJsTpl()
    {
        return \hulang\cfg\Site::getSysWxJsTpl();
    }
}
if (!function_exists('getSysWxJsFile')) {
    /**
     * 弹出微信js生成文件
     * @return mixed|string
     */
    function getSysWxJsFile()
    {
        return \hulang\cfg\Site::getSysWxJsFile();
    }
}
