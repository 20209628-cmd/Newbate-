from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.chrome.options import Options
import time

def test_login_valido():
    options = Options()
    options.add_argument("--start-maximized")

    driver = webdriver.Chrome(options=options)

    driver.get("http://localhost/News/index.php")

    driver.find_element(By.NAME, "user").send_keys("admin")
    driver.find_element(By.NAME, "pass").send_keys("1234")

    driver.find_element(By.NAME, "login").click()

    time.sleep(2)

    assert "admin.php" in driver.current_url

    driver.quit()