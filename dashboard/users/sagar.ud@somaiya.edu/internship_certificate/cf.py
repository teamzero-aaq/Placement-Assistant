from selenium import webdriver 
import time 
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.support import expected_conditions as EC  
from selenium.webdriver.chrome.options import Options


# set webdriver path here it may vary 
brower = webdriver.Chrome(executable_path ="C:\\Users\\jk404064\\Desktop\\chromedriver.exe") 
  
website_URL ="https://www.youtube.com/watch?v=zVvZ6hFq12s&t=22s"
 
  
# After how many seconds you want to refresh the webpage 
# Few website count view if you stay there 
# for a particular time 
# you have to figure that out 
refreshrate1 = int(5)
refreshrate2 = int(2) 
count=0  
# This would keep running until you stop the compiler. 
while True:
  brower.get(website_URL)
  if(WebDriverWait(brower, 5).until(EC.presence_of_element_located((By.XPATH, '//button[@aria-label="Play"]')))):
      elem = brower.find_element_by_xpath("//button[@aria-label='Play']")

      elem.click() 
      time.sleep(refreshrate1)
      brower.close() 
      time.sleep(refreshrate2)
      brower = webdriver.Chrome(executable_path ="C:\\Users\\jk404064\\Desktop\\chromedriver.exe") 

  count=count+1
  if(count==40):
    break
