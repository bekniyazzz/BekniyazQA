from selenium import webdriver
from selenium.webdriver.common.by import By
import time
import math

browser = webdriver.Chrome()
browser.get('http://suninjuly.github.io/redirect_accept.html')

def find_ln(x):
    return str(math.log(abs(12 * math.sin(int(x)))))
try:
    button = browser.find_element(By.CSS_SELECTOR, ".trollface.btn.btn-primary").click()
    browser.switch_to.window(window_name = browser.window_handles[1])

    x = browser.find_element(By.ID, "input_value")
    answer = find_ln(x.text)
    answer_input = browser.find_element(By.ID, "answer").send_keys(answer)
    submit = browser.find_element(By.CSS_SELECTOR, ".btn.btn-primary").click()

finally:
    time.sleep(5)
    browser.quit()



