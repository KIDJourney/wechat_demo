#!/usr/bin/env python
# -*- coding: utf-8 -*-
# @Author: kidjourney
# @Date:   2015-06-08 12:25:39
# @Last Modified by:   kidjourney
# @Last Modified time: 2015-06-08 14:30:20
import requests
import json
access_token = "OQtLP_JWNmMw_2ycHAqrqAj4BVDkzmm6dyRkSZJroyHputwbmSSRbPwBYPKemFf5j4E6_6PIA340P2sZVINUo6k9aF8rFRGLQQkRauvpzRI"
appId = "wx0cbff294868204e0"
secretkey = "5f71b030cab2c736c5815ee2d63ebb99"

data = {"button":[
    {"name":"menu" , 
      "sub_button":
      [
        {
          "type":"view",
          "name":"Getauth",
          "url":"https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx0cbff294868204e0&redirect_uri=http://weiappdemo.sinaapp.com/oauth2.php&response_type=code&scope=snsapi_userinfo&state=1#wechat_redirect"
        },
        {
          "type":"view",
          "name":"mysite",
          "url":"http://weiappdemo.sinaapp.com/demo.php"
        }
      ]
    }
    ]}
data = json.dumps(data)
r = requests.post("https://api.weixin.qq.com/cgi-bin/menu/create?access_token=" + token , data=data)
print(r.content)  