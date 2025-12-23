from selenium import webdriver
from selenium.webdriver.common.by import By
import time

driver = webdriver.Chrome()
driver.maximize_window()

driver.get("http://localhost/springwtj/LearnHub/view/login.php")
time.sleep(2)

# Correct find element syntax
student_id_input = driver.find_element(By.ID, "student_id")
password_input = driver.find_element(By.ID, "password")

student_id_input.send_keys("1")
password_input.send_keys("123456")

time.sleep(1)

login_button = driver.find_element(By.XPATH, "//button[@type='submit']")
login_button.click()
time.sleep(2)

time.sleep(3)

if "dashboard.php" in driver.current_url:
    print("✅ Login Test Passed! Redirected to Dashboard.")
else:
    print("❌ Login did NOT redirect. Check credentials or backend.")

driver.quit()

