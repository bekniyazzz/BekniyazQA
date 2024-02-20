from selenium import webdriver
from selenium.webdriver.common.by import By
import time
import math
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC


def find_ln(x):
  return str(math.log(abs(12 * math.sin(int(x)))))

browser = webdriver.Chrome()
browser.get('http://suninjuly.github.io/explicit_wait2.html')

try:
  price = WebDriverWait(browser, 12).until(EC.text_to_be_present_in_element(((By.ID, 'price')), text_='$100'))
  button = browser.find_element(By.ID, 'book').click()

  answer = find_ln(browser.find_element(By.ID, 'input_value').text)
  answer_input = browser.find_element(By.ID, 'answer')
  browser.execute_script("return arguments[0].scrollIntoView(true);",answer_input)
  answer_input.send_keys(answer)
  submit = browser.find_element(By.ID, 'solve').click()

finally:
  time.sleep(5)
  browser.quit()

