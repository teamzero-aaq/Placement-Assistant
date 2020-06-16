def get_hist(img):
    kernel = np.ones((3,3),np.uint8)
    img_HSV = cv2.cvtColor(img, cv2.COLOR_BGR2HSV)
    HSV_mask = cv2.inRange(img_HSV, (0, 15, 0), (17,170,255))
    HSV_mask = cv2.morphologyEx(HSV_mask, cv2.MORPH_OPEN, np.ones((3,3), np.uint8))
    img_YCrCb = cv2.cvtColor(img, cv2.COLOR_BGR2YCrCb)
    YCrCb_mask = cv2.inRange(img_YCrCb, (0, 135, 85), (255,180,135))
    YCrCb_mask = cv2.morphologyEx(YCrCb_mask, cv2.MORPH_OPEN, np.ones((3,3), np.uint8))
    global_mask=cv2.bitwise_and(YCrCb_mask,HSV_mask)
    global_mask=cv2.medianBlur(global_mask,3)
    global_mask = cv2.morphologyEx(global_mask, cv2.MORPH_OPEN, np.ones((4,4), np.uint8))
    global_mask=cv2.dilate(global_mask,kernel,iterations = 10)
    global_mask=cv2.GaussianBlur(global_mask,(5,5),100)
    contours,hierarchy= cv2.findContours(global_mask,cv2.RETR_TREE,cv2.CHAIN_APPROX_SIMPLE)
    hull1=[cv2.convexHull(c) for c in contours]
    cnt = max(contours, key = lambda x: cv2.contourArea(x))
    hull = cv2.convexHull(cnt)
    f=cv2.drawContours(img,hull1,-1,(255,255,255))
    #cv2.imshow("mask is",global_mask)
    return hull1,hull,global_mask	
"""
  kernel = np.ones((3,3),np.uint8)

  lower_skin = np.array([0, 20, 70], dtype=np.uint8)
  upper_skin = np.array([20, 255, 255], dtype=np.uint8)
  hsv=cv2.cvtColor(img,cv2.COLOR_BGR2HSV)
  d=cv2.inRange(hsv, lower_skin, upper_skin)
  d=cv2.cvtColor(d,cv2.COLOR_GRAY2RGB)
  d=cv2.cvtColor(d,cv2.COLOR_RGB2GRAY)
    #ret, thresh1 = cv2.threshold(d, 120, 255, cv2.THRESH_BINARY) 


  #d=cv2.dilate(d,kernel,iterations = 4)
  #d=cv2.GaussianBlur(d,(5,5),100) 


  contours,hierarchy= cv2.findContours(d,cv2.RETR_TREE,cv2.CHAIN_APPROX_SIMPLE)
   
  hull1=[cv2.convexHull(c) for c in contours]
  cnt = max(contours, key = lambda x: cv2.contourArea(x))

  hull = cv2.convexHull(cnt)
  f=cv2.drawContours(img,hull1,-1,(255,255,255))
        
    #approx the contour a little
  epsilon = 0.0005*cv2.arcLength(cnt,True)
  approx= cv2.approxPolyDP(cnt,epsilon,True)
       
        
    #make convex hull around hand
    #hull = cv2.convexHull(cnt)
        
     #define area of hull and area of hand
  areahull = cv2.contourArea(hull)
  areacnt = cv2.contourArea(cnt)
      
    #find the percentage of area not covered by hand in convex hull
  arearatio=((areahull-areacnt)/areacnt)*100
  print("area ratio "+str(arearatio))
  print("area hand "+ str(areacnt))
  print("area hull "+str(areahull))
  print("len of hull "+str(epsilon))
  return hull,f
"""
import pandas as pd
import numpy as np
import cv2 as cv2
import math
from matplotlib import pyplot as plt
import os 
import csv
from sklearn.model_selection import train_test_split
from sklearn.svm import SVC
from sklearn.metrics import classification_report,confusion_matrix
from sklearn.model_selection import GridSearchCV
df=pd.read_csv("main.csv")
df_features=df.drop(['value'],axis=1)
df_target=df['value']
print(df_features.columns)
cwd=os.getcwd()
img = cv2.imread(cwd+"\\dama.jpeg")
img_HSV = cv2.cvtColor(img, cv2.COLOR_BGR2HSV)
#skin color range for hsv color space 
HSV_mask = cv2.inRange(img_HSV, (0, 15, 0), (17,170,255)) 
HSV_mask = cv2.morphologyEx(HSV_mask, cv2.MORPH_OPEN, np.ones((3,3), np.uint8))

#converting from gbr to YCbCr color space
img_YCrCb = cv2.cvtColor(img, cv2.COLOR_BGR2YCrCb)
#skin color range for hsv color space 
YCrCb_mask = cv2.inRange(img_YCrCb, (0, 135, 85), (255,180,135)) 
YCrCb_mask = cv2.morphologyEx(YCrCb_mask, cv2.MORPH_OPEN, np.ones((3,3), np.uint8))

#merge skin detection (YCbCr and hsv)
global_mask=cv2.bitwise_and(YCrCb_mask,HSV_mask)
global_mask=cv2.medianBlur(global_mask,3)
global_mask = cv2.morphologyEx(global_mask, cv2.MORPH_OPEN, np.ones((4,4), np.uint8))
HSV_result = cv2.bitwise_not(global_mask)
print(np.array(HSV_result).shape)

img1=cv2.cvtColor(global_mask,cv2.COLOR_BGR2RGB)
#ret, thresh1 = cv2.threshold(global_mask, 120, 255, cv2.THRESH_BINARY)

#img1=cv2.cvtColor(img,cv2.COLOR_BGR2GRAY)
img1=cv2.GaussianBlur(img1,(15,15),0)
img1=cv2.resize(img1,(640,480),interpolation=cv2.INTER_AREA)
cv2.imshow("image is",img1)
cv2.waitKey(0)
cv2.destroyAllWindows()
img1=cv2.resize(img1,(28,28),interpolation=cv2.INTER_AREA)
l=(img1.ravel())
print(len(l))

#X_train,X_test,y_train,y_test=train_test_split(df_features,df_target,test_size=0.33,random_state=30)
model=SVC()
#print(X_train)
model.fit(df_features,df_target)
#print((X_train))
pre=model.predict([l])
#print(confusion_matrix(y_test,pre))
print(pre)
#print(classification_report(y_test,pre))


param_grid={'C':[1000]}
grid=GridSearchCV(SVC(),param_grid)
grid.fit(df_features,df_target)
grid_pre=grid.predict([l])
#print(confusion_matrix(y_test,grid_pre))
print(grid_pre)
#print(classification_report(y_test,grid_pre))
#print(grid_pre)