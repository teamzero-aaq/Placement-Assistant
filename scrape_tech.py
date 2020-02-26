from bs4 import BeautifulSoup as soup
import pandas as pd
import requests
import pandas as pd
import json
import time

r2=requests.get('http://placement.freshersworld.com/mechanical-interview-questions/33121840')
data = r2.text
count=0
soup1= soup(data, "html.parser")
container=soup1.findAll('div',attrs={'id': 'content-des'})
for i in range(len(container)):
	in1=(((container[i])))
	print(in1)
	
file=open(".\\tech\\mechanical.txt","w",encoding="utf-8")
file.write(str(in1))	

	
	

