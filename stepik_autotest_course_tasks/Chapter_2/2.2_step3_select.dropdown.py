from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import Select
import math
import time

browser = webdriver.Chrome()
browser.get("https://suninjuly.github.io/selects2.html")

try:
    x = browser.find_element(By.ID, "num1")
    num1 = x.text
    y = browser.find_element(By.ID, "num2")
    num2 = y.text
    dropdown = Select(browser.find_element(By.CSS_SELECTOR, ".custom-select"))
    dropdown.select_by_value(f"{int(num1) + int(num2)}")

    btn = browser.find_element(By.CSS_SELECTOR, ".btn")
    btn.click()

finally:
    time.sleep(5)
    browser.quit()


