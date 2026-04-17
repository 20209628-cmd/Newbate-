import time
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC

URL = "http://localhost/News/index.php"
TITULO_ORIGINAL = "Articulo Test"
TITULO_EDITADO = "Articulo Editado"


def login(driver):
    wait = WebDriverWait(driver, 10)

    driver.get(URL)
    time.sleep(3)

    wait.until(EC.presence_of_element_located((By.NAME, "user")))
    time.sleep(3)

    driver.find_element(By.NAME, "user").send_keys("admin")
    time.sleep(3)

    driver.find_element(By.NAME, "pass").send_keys("1234")
    time.sleep(3)

    driver.find_element(By.XPATH, "//input[@value='Entrar']").click()
    time.sleep(3)

    wait.until(EC.presence_of_element_located((By.LINK_TEXT, "Crear Artículo")))
    time.sleep(3)


def test_crud_completo():
    options = Options()
    options.add_argument("--start-maximized")

    driver = webdriver.Chrome(options=options)
    wait = WebDriverWait(driver, 10)

    try:
     
        login(driver)

        
        wait.until(EC.element_to_be_clickable((By.LINK_TEXT, "Crear Artículo"))).click()
        time.sleep(3)

        wait.until(EC.presence_of_element_located((By.NAME, "titulo")))
        time.sleep(3)

        driver.find_element(By.NAME, "titulo").send_keys(TITULO_ORIGINAL)
        time.sleep(3)

        driver.find_element(By.NAME, "contenido").send_keys("Contenido prueba")
        time.sleep(3)

        driver.find_element(By.NAME, "categoria").send_keys("Test")
        time.sleep(3)

        wait.until(
            EC.element_to_be_clickable((By.XPATH, "//button[contains(text(),'Guardar')]"))
        ).click()
        time.sleep(3)

        wait.until(EC.presence_of_element_located((By.LINK_TEXT, "Crear Artículo")))
        time.sleep(3)

       
        editar_btn = wait.until(
            EC.element_to_be_clickable((
                By.XPATH,
                f"//*[contains(text(),'{TITULO_ORIGINAL}')]/following::a[contains(@href,'editar.php')][1]"
            ))
        )
        editar_btn.click()
        time.sleep(3)

        campo = wait.until(EC.presence_of_element_located((By.NAME, "titulo")))
        campo.clear()
        time.sleep(3)

        campo.send_keys(TITULO_EDITADO)
        time.sleep(3)

        wait.until(
            EC.element_to_be_clickable((By.XPATH, "//button[contains(text(),'Actualizar')]"))
        ).click()
        time.sleep(3)

        wait.until(EC.presence_of_element_located((By.LINK_TEXT, "Crear Artículo")))
        time.sleep(3)

       
        eliminar_btn = wait.until(
            EC.element_to_be_clickable((
                By.XPATH,
                f"//*[contains(text(),'{TITULO_EDITADO}')]/following::a[contains(@href,'eliminar.php')][1]"
            ))
        )
        eliminar_btn.click()
        time.sleep(3)

    except Exception as e:
        print("ERROR:", e)
        raise

    finally:
        driver.quit()