#!/usr/bin/env python
# -*- coding: utf-8 -*-
# @Author: kidjourney
# @Date:   2015-06-08 12:25:39
# @Last Modified by:   kidjourney
# @Last Modified time: 2015-06-08 16:30:40
import requests
import json
access_token = "WBfPY-QseiD19p2-e_6bzdKfH_QEd7K3xQzqaAC1Gco-8H2OV_X3DGVxxkla3qCVlOd47-O39hlUlRJNTPzIb3SpvwJ32p5UiVpPrlK4E50"
appId = "wx0cbff294868204e0"
secretkey = "5f71b030cab2c736c5815ee2d63ebb99"

data = {"button":[
    {"name":"menu" , 
      "sub_button":
      [
        {
          "type":"view",
          "name":"Getauth",
          "url":"https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx0cbff294868204e0&redirect_uri=http://weiappdemo.sinaapp.com/userinfo.php&response_type=code&scope=snsapi_userinfo&state=1#wechat_redirect"
        },
        {
          "type":"view",
          "name":"Testsite",
          "url":"http://www.baidu.com"
        }
      ]
    }
    ]}
data = json.dumps(data)
r = requests.post("https://api.weixin.qq.com/cgi-bin/menu/create?access_token=" + access_token , data=data)
print(r.content)  