# API call to open source weather 

import requests

api_key = "67da29cb91129f1a68c1c06c1be92daa"
city = "Orlando"
url = 'http://api.openweathermap.org/data/2.5/weather?q='+city+'&units=imperial&appid='+api_key

request = requests.get(url)

json = request.json()
print(json)