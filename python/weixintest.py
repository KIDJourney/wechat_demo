#!/usr/bin/env python
# -*- coding: utf-8 -*-
# @Author: kidjourney
# @Date:   2015-06-08 14:30:32
# @Last Modified by:   kidjourney
# @Last Modified time: 2015-06-09 18:42:40
import requests
import json

r = requests.get(user_infourl)
print(r.json())