<?php

namespace BrowserDetect;

class BrowserDetect
{
    public static function detect(): string
    {
        $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';

        $clients = [
            'Postman' => ['PostmanRuntime'],
            'Thunder Client' => ['Thunder Client'],
            'Insomnia' => ['Insomnia'],
            'curl' => ['curl'],
            'Wget' => ['Wget'],
            'HTTPie' => ['HTTPie'],
            'Axios' => ['axios'],
            'Java HTTP Client' => ['Java'],
            'Go HTTP Client' => ['Go-http-client'],
            'Python Requests' => ['python-requests'],
            'Node.js HTTP Client' => ['node-fetch', 'Node.js'],
        ];

        $browsers = [
            'Opera' => ['OPR', 'Opera'],
            'Microsoft Edge' => ['Edg'],
            'Google Chrome' => ['Chrome'],
            'Mozilla Firefox' => ['Firefox'],
            'Safari' => ['Safari'],
            'Internet Explorer' => ['MSIE', 'Trident'],
            'Brave' => ['Brave'],
            'Vivaldi' => ['Vivaldi'],
            'Samsung Internet' => ['SamsungBrowser'],
            'UC Browser' => ['UCBrowser'],
            'QQ Browser' => ['QQBrowser'],
            'Yandex Browser' => ['YaBrowser'],
            'Maxthon' => ['Maxthon'],
            'Puffin' => ['Puffin'],
            'Netscape' => ['Netscape'],
            'Seamonkey' => ['Seamonkey'],
            'Baidu' => ['Baidu'],
            'Sogou' => ['Sogou'],
            'Coc Coc' => ['coc_coc_browser'],
            'PlayStation Browser' => ['PlayStation'],
            'Nintendo Browser' => ['NintendoBrowser'],
            'Silk' => ['Silk'],
            'Midori' => ['Midori'],
            'Lynx' => ['Lynx'],
            'Konqueror' => ['Konqueror'],
        ];

        foreach ($clients as $name => $signatures) {
            foreach ($signatures as $signature) {
                if (stripos($userAgent, $signature) !== false) {
                    return $name . ' (API Client)';
                }
            }
        }

        foreach ($browsers as $name => $signatures) {
            foreach ($signatures as $signature) {
                if (stripos($userAgent, $signature) !== false) {
                    return $name;
                }
            }
        }

        return 'Unknown Client/Browser ## '.$userAgent;
    }
}
