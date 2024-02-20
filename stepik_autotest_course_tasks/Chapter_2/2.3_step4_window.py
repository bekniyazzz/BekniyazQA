from selenium import webdriver
from selenium.webdriver.common.by import By
import math
import time

browser = webdriver.Chrome()
browser.get('http://suninjuly.github.io/alert_accept.html')

def find_ln(x):
    return str(math.log(abs(12 * math.sin(int(x)))))

try:
    button = browser.find_element(By.CSS_SELECTOR, ".btn.btn-primary")
    button.click()
    confirm = browser.switch_to.alert
    time.sleep(5)
    confirm.accept()
    find_x = browser.find_element(By.ID, "input_value")
    answer = find_ln(find_x.text)
    answer_input = browser.find_element(By.ID, "answer")
    answer_input.send_keys(answer)
    submit = browser.find_element(By.CSS_SELECTOR, ".btn.btn-primary")
    submit.click()

finally:
    time.sleep(5)
    browser.quit()