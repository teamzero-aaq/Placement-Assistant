import pandas as pd
import bson
import json
import os
import pymysql
#data= bson.decode_file_iter(open('thread.bson', 'rb'))
connection = pymysql.connect(host='localhost', user='root',password='',db='placement')
        

 
cursor = connection.cursor()
l1=[]

for file in os.listdir("C:\\Users\\ADMIN\\Desktop\\indiabix\\Scrape_IndiaBix_QA-master\\DB_Collections\\general_knowledge"):
     l1=file.split(".")
     query = 'insert into sub_courses (name1,name2) VALUES (%s,%s);'
     cursor.execute(query,('general_knowledge',l1[0]))
     connection.commit()

     
     
     l1=[]    
         


