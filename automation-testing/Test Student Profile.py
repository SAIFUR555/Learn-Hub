from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import time
import os

# --- START SELENIUM ---
driver = webdriver.Chrome()
driver.get("http://localhost/springwtj/LearnHub/view/login.php")
driver.maximize_window()

wait = WebDriverWait(driver, 10)

print("\n🔍 Testing Student Profile Page...\n")

# -----------------------------
#  STEP 1: LOGIN FIRST
# -----------------------------
student_id = "1"
password = "123456"

wait.until(EC.presence_of_element_located((By.ID, "student_id"))).send_keys(student_id)
wait.until(EC.presence_of_element_located((By.ID, "password"))).send_keys(password)
driver.find_element(By.TAG_NAME, "button").click()

# Verify login success
try:
    wait.until(EC.url_contains("dashboard.php"))
    print("✅ Login successful")
except:
    print("❌ Login failed — check student_id or password")
    driver.quit()
    exit()

# -----------------------------
#  STEP 2: GO TO PROFILE PAGE
# -----------------------------
driver.get("http://localhost/springwtj/LearnHub/view/studentprofile.php")

try:
    wait.until(EC.presence_of_element_located((By.TAG_NAME, "form")))
    print("✅ Profile page loaded successfully")
except:
    print("❌ Profile page NOT loaded")
    driver.quit()
    exit()

# -----------------------------
#  STEP 3: FILL PROFILE FORM
# -----------------------------
def fill_input(name, value):
    field = wait.until(EC.presence_of_element_located((By.NAME, name)))
    field.clear()
    field.send_keys(value)

fill_input("name", "Saif RRahman")
fill_input("dob", "2003-12-09")
fill_input("nationality", "Dhaka")
fill_input("email", "saif@example.com")
fill_input("phone", "0167621277")
fill_input("address", "Dhaka, Bangladesh")
fill_input("department", "CSE")
fill_input("education", "HSC")
fill_input("emergency_contact", "01800000000")
fill_input("guardian_name", "Mr. Rahman")
fill_input("guardian_phone", "01900000000")

# Select Gender
gender = wait.until(EC.presence_of_element_located((By.NAME, "gender")))
gender.send_keys("male")

# -----------------------------
#  STEP 4: UPLOAD PICTURE
# -----------------------------
picture_path = os.path.abspath("C:/Users/Admin/Downloads/profile.jpg")  # <-- update image name

try:
    upload = driver.find_element(By.NAME, "student_picture")
    upload.send_keys(picture_path)
    print("📸 Picture uploaded")
except:
    print("⚠ No picture uploaded")

# -----------------------------
#  STEP 5: SUBMIT FORM
# -----------------------------
driver.find_element(By.XPATH, "//input[@type='submit']").click()

time.sleep(2)

# -----------------------------
#  STEP 6: VERIFY SUCCESS MESSAGE
# -----------------------------
try:
    success_msg = driver.find_element(By.XPATH, "//*[contains(text(),'Profile updated successfully')]")
    print("🎉 SUCCESS: Profile updated correctly!")
except:
    print("❌ FAILED: Success message not found")

print("\n🔹 Selenium Test Completed\n")

driver.quit()
