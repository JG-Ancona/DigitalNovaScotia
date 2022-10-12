# API call to open source weather 

import requests

api_key = "67da29cb91129f1a68c1c06c1be92daa"
city = "Orlando"
url = 'http://api.openweathermap.org/data/2.5/weather?q='+city+'&units=imperial&appid='+api_key

request = requests.get(url)

json = request.json()
#print(json)

desciption = json.get("weather")[0].get("description")
print("Today's forecast is:",desciption)

temp_min = json.get("main").get("temp_min")
print("The minimum temperature is",temp_min)

temp_max = json.get("main").get("temp_max")
print("The maximum temperature is",temp_max)