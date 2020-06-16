def first_of(key,val,first_dict):
	val_list=[]
	first=[]
	count=0
	if(val.find("|")!=-1):
		val_list=val.split("|")
	else:
		val_list.append(val)
	for data in val_list:
		for letter in data:
			count=count+1
			if(letter.islower() or letter=='?'):
				first.append(letter)
				break
			else:
				if(letter in first_dict.keys()):
					if('?' in first_dict[letter]):
						if(count==len(data)-1):
							first.extend(first_dict[letter])
						else:
							temp=first_dict[letter]
							temp.remove('?')
							first.extend(temp)

					else:
						first.extend(first_dict[letter])
						break
				else:
					break
		count=0			

						
						
				
					
				
					
					
	return first				
    
def follow_of(key1,dict1,follow_dict,first_dict):
	follow=[]
	for key,val in dict1.items():
		val_list=[]
		if(val.find("|")!=-1):
			val_list=val.split("|")
		else:
			val_list.append(val)
		for data in val_list:
			if(data.find(key1)!=-1):
				
				index=data.index(key1)
				
				if(index==len(data)-1):
					if(key1!=key):
						follow.extend(follow_dict[key])
				index=index+1
				for i in range(index,len(data)):
					if(data[i].islower()):
						follow.append(data[i])
						break
					else:
						if('?' in first_dict[data[i]]):
							temp=first_dict[data[i]]
							temp.remove('?')
							follow.extend(temp)
						else:
							follow.extend(first_dict[data[i]])
							break
						if(i==len(data)-1):
							
							if(key1!=key):
								follow.extend(follow_dict[key])
	return follow							

							





						



			

			


				


		
		
	


	

f=open("samp.txt","r")
line=f.read()
l=line.split("\n")
ter=[]
b=[]
dict1={}
first_dict={}
follow_dict={}
empty={}
print(l)
for data in l:
	b.append((data.split(">")[1]).replace(" ",""))
	val=(data.split(">")[1]).replace(" ","")
	key=data[:1]
	dict1[key]=val
	ter.append(data[:1])
print(dict1)
for key,val in dict1.items():
	lists=first_of(key,val,first_dict)
	first_dict[key]=lists
	
for key,val in dict1.items():
	lists=first_of(key,val,first_dict)
	first_dict[key]=lists
print("#######first######")
print(first_dict)

for key,val in dict1.items():
	if(key=='S'):
		follow_dict[key]=['$']
	else:
		lists=follow_of(key,dict1,follow_dict,first_dict)
		follow_dict[key]=lists
		
	
print("#######follow######")	
print(follow_dict)	


