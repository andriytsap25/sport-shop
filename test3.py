import requests

def regression_test(url):
    try:
        response = requests.get(url)
        if response.status_code == 200:
            print(f"Тест пройшов успішно: {url} відповідає зі статусом 200.")
        else:
            print(f"Помилка: сторінка повернула статус {response.status_code}")
    except requests.exceptions.RequestException as e:
        print(f"Виникла помилка при запиті: {e}")
           
if __name__ == "__main__":
    url = "http://127.0.0.1:5500/index.html"  
    regression_test(url)
