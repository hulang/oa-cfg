<?php

/**
 * +----------------------------------------------------------------------
 * 网站函数文件
 * +----------------------------------------------------------------------
 */

declare(strict_types=1);

if (!function_exists('getCmsConfig')) {
    /**
     * 获取配置
     * @return array
     */
    function getCmsConfig()
    {
        return \hulang\cfg\Site::getCmsConfig();
    }
}
if (!function_exists('getCmsDeveloperUserId')) {
    /**
     * 开发者用户
     * @return mixed
     */
    function getCmsDeveloperUserId()
    {
        return \hulang\cfg\Site::getCmsDeveloperUserId();
    }
}
if (!function_exists('getCmsPageHtmlDir')) {
    /**
     * 落地页生成目录
     * @return mixed
     */
    function getCmsPageHtmlDir()
    {
        return \hulang\cfg\Site::getCmsPageHtmlDir();
    }
}
if (!function_exists('getCmsPageViewUrl')) {
    /**
     * 内部落地页访问URL
     * @return mixed
     */
    function getCmsPageViewUrl()
    {
        return \hulang\cfg\Site::getCmsPageViewUrl();
    }
}
if (!function_exists('getCmsPageDefaultDir')) {
    /**
     * 落地页默认文件目录
     * @return mixed
     */
    function getCmsPageDefaultDir()
    {
        return \hulang\cfg\Site::getCmsPageDefaultDir();
    }
}
if (!function_exists('getCmsWxJsTpl')) {
    /**
     * 弹出微信js模板文件
     * @return mixed
     */
    function getCmsWxJsTpl()
    {
        return \hulang\cfg\Site::getCmsWxJsTpl();
    }
}
if (!function_exists('getCmsWxJsFile')) {
    /**
     * 弹出微信js生成文件
     * @return mixed
     */
    function getCmsWxJsFile()
    {
        return \hulang\cfg\Site::getCmsWxJsFile();
    }
}
