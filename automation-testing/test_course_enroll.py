from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.common.exceptions import TimeoutException
import time


driver = webdriver.Chrome()
driver.maximize_window()

try:
    # -------------------------
    # 1. Login
    # -------------------------
    driver.get("http://localhost/springwtj/LearnHub/view/login.php")
    time.sleep(3)
    

    driver.find_element(By.ID, "student_id").send_keys("2")
    driver.find_element(By.ID, "password").send_keys("123456")

    driver.find_element(By.XPATH, "//button[text()='Login']").click()

    WebDriverWait(driver, 10).until(
        EC.url_contains("dashboard.php")
    )
    print("✅ Login successful, redirected to Dashboard")

    time.sleep(3)


    # -------------------------
    # 2. Go to Enroll Course Page
    # -------------------------
    driver.get("http://localhost/springwtj/LearnHub/view/enroll_course.php")

    WebDriverWait(driver, 10).until(
        EC.presence_of_element_located((By.TAG_NAME, "table"))
    )
    print("✅ Enroll Course page loaded, table found")
    time.sleep(3)


    # -------------------------
    # 3. TEST STUDENT PROFILE PAGE
    # -------------------------
    driver.get("http://localhost/springwtj/LearnHub/view/studentprofile.php")

    try:
        # Check h2 title exists
        WebDriverWait(driver, 10).until(
            EC.presence_of_element_located((By.XPATH, "//h2[text()='Edit Your Profile']"))
        )
        print("✅ Student Profile page loaded successfully")

    except TimeoutException:
        print("❌ Student Profile page not loaded correctly")


    print("🔹 Selenium test finished")

finally:
    driver.quit()
