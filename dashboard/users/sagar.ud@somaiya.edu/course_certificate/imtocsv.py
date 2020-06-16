def distance(point1,point2):
    return math.sqrt((point1[0]-point2[0])**2 + (point1[1]-point2[1])**2)

def idealFilterLP(D0,imgShape):
    base = np.zeros(imgShape[:2])
    rows, cols = imgShape[:2]
    center = (rows/2,cols/2)
    for x in range(cols):
        for y in range(rows):
            if distance((y,x),center) < D0:
                base[y,x] = 1
    return base

def idealFilterHP(D0,imgShape):
    base = np.ones(imgShape[:2])
    rows, cols = imgShape[:2]
    center = (rows/2,cols/2)
    for x in range(cols):
        for y in range(rows):
            if distance((y,x),center) < D0:
                base[y,x] = 0
    return base

import cv2
import numpy as np
import math
import matplotlib.pyplot as plt
pi=math.pi

#Open a simple image
img = cv2.imread("tank.bmp", 0)
low_mask=np.array([[1/9,1/9,1/9]])
low_mask=np.repeat(low_mask,3,0)
high_mask=np.array([[-1,-1,-1],[-1,8,-1],[-1,-1,-1]])
high_mask=1/9*high_mask
print(high_mask)
img_with_pad=np.zeros([img.shape[0]+2,img.shape[1]+2],dtype=np.uint8)
img_with_pad[1:img.shape[0]+1,1:img.shape[1]+1]=img
print(img.shape)
low_img=np.zeros([img.shape[0],img.shape[1]])
high_img=np.zeros([img.shape[0],img.shape[1]])
median_img=np.zeros([img.shape[0],img.shape[1]])
for i in range(img.shape[0]):
  for j in range(img.shape[1]):
    low_img[i,j]=np.sum(img_with_pad[i:i+3,j:j+3].dot(low_mask))
    high_img[i,j]=np.sum(img_with_pad[i:i+3,j:j+3].dot(high_mask))
    median_img[i,j]=np.median(img_with_pad[i:i+3,j:j+3])

cv2.imshow("imgl",low_img)
cv2.waitKey(0)
cv2.imshow("imgh",high_img)
cv2.waitKey(0)
cv2.imshow("imgm",median_img)
cv2.waitKey(0)    