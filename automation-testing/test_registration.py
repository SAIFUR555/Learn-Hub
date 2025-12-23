from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import Select, WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import time

url = "http://localhost/springwtj/LearnHub/view/student.php"
time.sleep(2)

student_data = {
    "name": "Test User",
    "student_id": "123",
    "password": "test1234",
    "dob": "2000-01-01",
    "gender": "male",  # male/female/other
    "nationality": "Bangladeshi",
    "email": "testuser@example.com",
    "phone": "01712345678",
    "address": "Dhaka, Bangladesh",
    "department": "CSE",
    "education": "HSC",
    "emergency_contact": "01812345678",
    "guardian_name": "Guardian Name",
    "guardian_phone": "01887654321",
    "terms": True
}

driver = webdriver.Chrome()
driver.maximize_window()

try:
    print("➡ Opening Registration Page")
    driver.get(url)

    WebDriverWait(driver, 10).until(
        EC.presence_of_element_located((By.TAG_NAME, "form"))
    )
    print("✅ Registration page loaded")

    # Fill text inputs
    driver.find_element(By.NAME, "name").send_keys(student_data["name"])
    driver.find_element(By.NAME, "student_id").send_keys(student_data["student_id"])
    driver.find_element(By.NAME, "password").send_keys(student_data["password"])
    driver.find_element(By.NAME, "dob").send_keys(student_data["dob"])
    driver.find_element(By.NAME, "email").send_keys(student_data["email"])
    driver.find_element(By.NAME, "phone").send_keys(student_data["phone"])
    driver.find_element(By.NAME, "address").send_keys(student_data["address"])
    driver.find_element(By.NAME, "education").send_keys(student_data["education"])
    driver.find_element(By.NAME, "emergency_contact").send_keys(student_data["emergency_contact"])
    driver.find_element(By.NAME, "guardian_name").send_keys(student_data["guardian_name"])
    driver.find_element(By.NAME, "guardian_phone").send_keys(student_data["guardian_phone"])

    time.sleep(2)

    # Select gender by name + value
    gender_radio = driver.find_element(By.CSS_SELECTOR, f'input[name="gender"][value="{student_data["gender"]}"]')
    gender_radio.click()

    # Dropdowns
    Select(driver.find_element(By.NAME, "nationality")).select_by_value(student_data["nationality"])
    Select(driver.find_element(By.NAME, "department")).select_by_value(student_data["department"])

    # Skip picture upload (not present in PHP)

    # Agree to terms checkbox if present
    try:
        if student_data["terms"]:
            driver.find_element(By.NAME, "terms").click()
    except:
        pass  # Ignore if terms checkbox not in PHP

    print("✅ Filled all fields")

    # Submit form
    driver.find_element(By.NAME, "Submit").click()

    WebDriverWait(driver, 10).until(
        EC.url_contains("success.php")
    )
    print("✅ Form submitted successfully, redirected to success.php")

except Exception as e:
    print("❌ Test failed:", e)

finally:
    time.sleep(3)
    driver.quit()
    print("🎉 Test completed")
