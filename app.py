from selenium import webdriver
import time
from selenium.webdriver.support.ui import Select

options = webdriver.ChromeOptions()
options.add_argument("--start-maximized")

driver = webdriver.Chrome('C:/Webdriver/chromedriver.exe',chrome_options=options)

driver.get('http://localhost/files/')
NEXT_BUTTON_XPATH = '//input[@type="submit" and @id="SLOGIN"]'

driver.implicitly_wait(2)
time.sleep(2)

print('Starting Webpage title: ',driver.title)

#positive student login
driver.find_element_by_id('studentLoginBtn').click()
driver.implicitly_wait(2)
time.sleep(2)
driver.find_element_by_name('sroll').send_keys("cb.en.u4cse17031")
driver.implicitly_wait(2)
time.sleep(2)
driver.find_element_by_name('spassword').send_keys("vijayjonathan")
driver.implicitly_wait(2)
time.sleep(2)
driver.find_element_by_xpath(NEXT_BUTTON_XPATH).submit()

driver.implicitly_wait(3)
time.sleep(3)

print('Page changed to: ',driver.title)
if "Student Timetable companion" == driver.title:
    print('Student Login Test Passed')
else:
    print('Student Login Test Failed')

driver.quit()

driver = webdriver.Chrome('C:/Webdriver/chromedriver.exe',chrome_options=options)

driver.get('http://localhost/files/')
NEXT_BUTTON_XPATH = '//button[@type="submit" and @id="viewsemester"]'

driver.implicitly_wait(2)
time.sleep(2)

driver.find_element_by_id('teacherLoginBtn').click()
driver.implicitly_wait(2)
time.sleep(2)
driver.find_element_by_name('FN').send_keys("test@gmail.com")
driver.implicitly_wait(2)
time.sleep(2)
driver.find_element_by_name('password').send_keys("123456789")
driver.implicitly_wait(2)
time.sleep(2)
driver.find_element_by_id('FLOGIN').submit()

if "Teacher Timetable companion" == driver.title:
    print('Teacher Login Test Passed')
else:
    print('Teacher Login Test Failed')

driver.quit()

driver = webdriver.Chrome('C:/Webdriver/chromedriver.exe',chrome_options=options)

driver.get('http://localhost/files/')
NEXT_BUTTON_XPATH = '//input[@type="submit" and @id="ALOGIN"]'

driver.implicitly_wait(3)
time.sleep(3)

driver.find_element_by_id('adminLoginBtn').click()
driver.implicitly_wait(1)
time.sleep(1)
driver.find_element_by_name('UN').send_keys("admin")
driver.implicitly_wait(1)
time.sleep(1)
driver.find_element_by_id('password').send_keys("pass123")
driver.implicitly_wait(1)
time.sleep(1)
driver.find_element_by_xpath(NEXT_BUTTON_XPATH).submit()

if 'Admin Timetable companion' == driver.title:
    print('Teacher Login Test Passed')
else:
    print('Teacher Login Test Failed')
    
