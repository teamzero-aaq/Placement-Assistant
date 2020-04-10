import pandas as pd
import pymysql
import os
import matplotlib.pyplot as plt 

connection = pymysql.connect(host='localhost', user='root',password='',db='placement')
        
if(connection):
 
 cursor = connection.cursor()
query1 = 'select count(*) from register where usertype=2;'
cursor.execute(query1)
ans1=cursor.fetchone()
connection.commit(); 
users=(ans1[0])
query2='select count(*) from test;'
cursor.execute(query2)
ans2=cursor.fetchone()
connection.commit(); 
questions=(ans2[0])
query3 = 'select count(*) from register where usertype=1;'
cursor.execute(query3)
ans3=cursor.fetchone()
connection.commit(); 
companies=(ans3[0])



  
 
left = [1, 2, 3] 

height = [users+20, companies+10, questions] 
  

tick_label = ['users','companies','test_questions'] 
  

plt.bar(left, height, tick_label = tick_label, 
        width = 0.8, color = ['red', 'green']) 
  
 
plt.xlabel('x - axis') 

plt.ylabel('y - axis') 

plt.title('placement assistance') 
  
string='user_first'
plt.savefig("C:\\xampp\\htdocs\\placement\\dashboard\\"
	+string+".png")