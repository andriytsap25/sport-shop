from selenium import webdriver
from selenium.webdriver.common.by import By
import time

url = "http://127.0.0.1:5500/index-1.html" 

driver = webdriver.Chrome()

try:
    driver.get(url)

    buy_buttons = driver.find_elements(By.CLASS_NAME, "link-1")
    if not buy_buttons:
        print("Кнопка 'Купити' не знайдена")
    else:
        first_button = buy_buttons[0]

        first_button.click()

        time.sleep(2)

        current_url = driver.current_url
        if "index-2.html" in current_url:
            print("Кнопка справна: Перехід відбувся коректно.")
        else:
            print(f"Кнопка не працює як очікувалось. Поточна сторінка: {current_url}")

finally:
    driver.quit()
