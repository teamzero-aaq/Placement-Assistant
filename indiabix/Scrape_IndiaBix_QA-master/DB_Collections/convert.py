import pandas as pd
import bson
import json
import os
l1=[]
for file in os.listdir("C:\\Users\\ADMIN\\Desktop\\indiabix\\Scrape_IndiaBix_QA-master\\DB_Collections"):
    if file.endswith(".bson"):
        l1.append(file)
count=0
options=[]	
k3=0



while(k3!=len(l1)):
    data= bson.decode_file_iter(open(l1[k3], 'rb'))
    
    place=[]
    place_dict={}
    place_dict['test_questions']=[] 

    for i in data:
         ques=(i['question'])
         for j in (i['options']):
          options.append(j['option_value'])
     
         for l in range (1):
             temp=(i['answer'])
             ans=(temp['option_name'])
         print(ques)  
         exp=(i['answer_explanation'])

         if(len(options)==4):
                  item={
                    'question':ques,
                    'opta':options[0],
                    'optb':options[1],
                    'optc':options[2],
                    'optd':options[3],
                    'ans':ans,
                    'explanation':exp,
                    }
         elif(len(options)==5):
 	              item={
                          'question':ques,
                           'opta':options[0],
                           'optb':options[1],
                           'optc':options[2],
                           'optd':options[3],
                           'opte':options[4],
          
                          'ans':ans,
                           'explanation':exp,
         }
         else:
              item={
                'question':ques,
                'opta':options[0],
                'optb':options[1],
                
                
                
                'ans':ans,
                'explanation':exp,
              }



         
         place.append(item)
 
         count=count+1
         options=[]

    name_file=l1[k3].split(".")
    k3=k3+1
    place_dict['test_questions'].append(place) 
    with open(name_file[0]+".json", "w") as write_file:
              json.dump(place_dict,write_file)
