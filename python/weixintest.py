#!/usr/bin/env python
# -*- coding: utf-8 -*-
# @Author: kidjourney
# @Date:   2015-06-08 14:30:32
# @Last Modified by:   kidjourney
# @Last Modified time: 2015-06-08 14:34:54
import requests
import json

appId = "wx0cbff294868204e0"
secretkey = "5f71b030cab2c736c5815ee2d63ebb99"
user_access = "OezXcEiiBSKSxW0eoylIePkikUW5eNmKZ6PpyBxrSZCF4hyK9D6AjAS-CtXa70s1EnqKL6sp712FUm-FoR9mTqNiweI349S26gpv_-g_XfGgOXQj9jUrdpGD0aCqQI8msekDifG3f5E_ncNpGR47Ng"
user_refresh_token = "OezXcEiiBSKSxW0eoylIePkikUW5eNmKZ6PpyBxrSZCF4hyK9D6AjAS-CtXa70s1N_bIoTIULb952b2gqrxOQU7ZTxQKh3eacWwuyshxlIHzTPOBjbZhJUt6E53LbARtGZi_qsKuxja8b_bEAdiepA"
user_openid = "odjb4t65c_Cc2WTOHToewdQBTcXE"
user_infourl = "https://api.weixin.qq.com/sns/userinfo?access_token=%s&openid=%s" % (user_access , user_openid)
r = requests.get(user_infourl)
print(r.json())