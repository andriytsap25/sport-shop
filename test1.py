import time
from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.chrome.options import Options
from webdriver_manager.chrome import ChromeDriverManager

URL = "http://127.0.0.1:5500/index.html"

def measure_page_load(url: str, tries: int = 1):
    chrome_options = Options()
    chrome_options.add_argument("--headless=new")  
    chrome_options.add_argument("--no-sandbox")
    chrome_options.add_argument("--disable-dev-shm-usage")

    for i in range(1, tries + 1):
        driver = webdriver.Chrome(
            service=Service(ChromeDriverManager().install()),
            options=chrome_options
        )

        start = time.perf_counter()
        driver.get(url)

        driver.execute_script("""
            return new Promise(resolve => {
                if (document.readyState !== 'complete') {
                    window.addEventListener('load', resolve);
                } else {
                    resolve();
                }
            });
        """)
        elapsed = time.perf_counter() - start

        print(f"[{i}] Сторінка повністю завантажена за {elapsed:.2f} секунд")

        driver.quit()

if __name__ == "__main__":
    measure_page_load(URL)
