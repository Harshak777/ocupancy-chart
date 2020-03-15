from selenium import webdriver
import time
from selenium.webdriver.support.ui import Select
from selenium.webdriver.common.desired_capabilities import DesiredCapabilities

options = webdriver.ChromeOptions()
options.add_argument("--start-maximized")

#positive student login
driver = webdriver.Remote(
   command_executor='http://127.0.0.1:3000/wd/hub',
   desired_capabilities=DesiredCapabilities.CHROME,options=options)

driver.get('http://localhost/files/')
NEXT_BUTTON_XPATH = '//input[@type="submit" and @name="SLOGIN"]'

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

#positive test case for Faculty login

driver = webdriver.Remote(
   command_executor='http://127.0.0.1:3000/wd/hub',
   desired_capabilities=DesiredCapabilities.CHROME,options=options)

driver.get('http://localhost/files/')
NEXT_BUTTON_XPATH = '//button[@type="submit" and @id="viewsemester"]'

print('Starting Webpage title: ',driver.title)

driver.implicitly_wait(2)
time.sleep(2)

driver.find_element_by_id('teacherLoginBtn').click()
driver.implicitly_wait(2)
time.sleep(2)
driver.find_element_by_name('FN').send_keys("test@gmail.com")
driver.implicitly_wait(2)
time.sleep(2)
driver.find_element_by_name('password').send_keys("9876543210")
driver.implicitly_wait(2)
time.sleep(2)
driver.find_element_by_id('FLOGIN').submit()

driver.implicitly_wait(3)
time.sleep(3)

select = Select(driver.find_element_by_name('class_room'))
driver.implicitly_wait(1)
time.sleep(1)
select.select_by_visible_text('a101')
driver.implicitly_wait(1)
time.sleep(1)
driver.find_element_by_xpath(NEXT_BUTTON_XPATH).submit()
driver.implicitly_wait(1)
time.sleep(1)

print('Page changed to: ',driver.title)
if "Faculty Timetable companion" == driver.title:
    print('Faculty Login Test Passed')
else:
    print('Faculty Login Test Failed')

driver.quit()

#positive test case creating a faculty account by logging into admin

driver = webdriver.Remote(
   command_executor='http://127.0.0.1:3000/wd/hub',
   desired_capabilities=DesiredCapabilities.CHROME,options=options)


driver.get('http://localhost/files/')
NEXT_BUTTON_XPATH = '//input[@type="submit" and @id="ALOGIN"]'

print('Starting Webpage title: ',driver.title)

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

driver.implicitly_wait(3)
time.sleep(3)

driver.find_element_by_id('teachermanual').click()
driver.implicitly_wait(1)
time.sleep(1)
driver.find_element_by_id('teachername').send_keys("John")
driver.implicitly_wait(1)
time.sleep(1)
driver.find_element_by_id('facultyno').send_keys("T302")
driver.implicitly_wait(1)
time.sleep(1)
driver.find_element_by_id('alias_name').send_keys("jwk")
driver.implicitly_wait(1)
time.sleep(1)
select = Select(driver.find_element_by_id('designation'))
driver.implicitly_wait(1)
time.sleep(1)
select.select_by_visible_text('Professor')
driver.implicitly_wait(1)
time.sleep(1)
driver.find_element_by_id('teachercontactnumber').send_keys("9133140732")
driver.implicitly_wait(1)
time.sleep(1)
driver.find_element_by_id('teacheremailid').send_keys("johnwick@gmail.com")
driver.implicitly_wait(1)
time.sleep(1)
driver.find_element_by_id('teacherpassword').send_keys("123678")
driver.implicitly_wait(1)
time.sleep(1)
driver.find_element_by_id('teacheraddress').send_keys("B302")
driver.implicitly_wait(1)
time.sleep(1)
driver.find_element_by_name('ADD').submit()
driver.implicitly_wait(5)
time.sleep(5)

print('Page changed to: ',driver.title)
if "Admin Timetable companion" == driver.title:
    print('Admin Login and Faculty creation Test Passed')
else:
    print('Admin Login and Faculty creation Failed')

driver.quit()

#negative test case for student login

driver = webdriver.Remote(
   command_executor='http://127.0.0.1:3000/wd/hub',
   desired_capabilities=DesiredCapabilities.CHROME,options=options)

driver.get('http://localhost/files/')
NEXT_BUTTON_XPATH = '//input[@type="submit" and @id="SLOGIN"]'

print('Starting Webpage title: ',driver.title)
driver.implicitly_wait(2)
time.sleep(2)

driver.find_element_by_id('studentLoginBtn').click()
driver.implicitly_wait(2)
time.sleep(2)
driver.find_element_by_name('sroll').send_keys("cb.en.u4cse17026")
driver.implicitly_wait(2)
time.sleep(2)
driver.find_element_by_name('spassword').send_keys("vijayjonathan")
driver.implicitly_wait(2)
time.sleep(2)
driver.find_element_by_xpath(NEXT_BUTTON_XPATH).submit()

driver.implicitly_wait(3)
time.sleep(3)

if "Student Timetable companion" == driver.title:
    print('Student Login Test Passed')
else:
    print('Student Login Test Failed')

driver.quit()

#negative test case admin login
driver = webdriver.Remote(
   command_executor='http://127.0.0.1:3000/wd/hub',
   desired_capabilities=DesiredCapabilities.CHROME,options=options)

driver.get('http://localhost/files/')
NEXT_BUTTON_XPATH = '//input[@type="submit" and @id="ALOGIN"]'

print('Starting Webpage title: ',driver.title)

driver.implicitly_wait(3)
time.sleep(3)

driver.find_element_by_id('adminLoginBtn').click()
driver.implicitly_wait(1)
time.sleep(1)
driver.find_element_by_name('UN').send_keys("admin123")
driver.implicitly_wait(1)
time.sleep(1)
driver.find_element_by_name('PASS').send_keys("pass123")
driver.implicitly_wait(1)
time.sleep(1)
driver.find_element_by_xpath(NEXT_BUTTON_XPATH).submit()
driver.quit()
driver.implicitly_wait(3)
time.sleep(3)
if "Admin Timetable companion" == driver.title:
    print('Admin Login Test Passed')
else:
    print('Admin Login Test Failed')

driver.quit()
