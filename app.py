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

driver.find_element_by_link_text('vijay jonathan').click()
driver.implicitly_wait(3)
time.sleep(3)
driver.quit()

print('hi')
