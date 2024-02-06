# film-catalog
Приложение CRUD API для каталога фильмов

# Установка
1. Клонируйте репозиторий
```
git clone https://github.com/progroman-ru/film-catalog.git
```
2. Запустите Docker compose
```
$ docker-compose up -d --build
```   

# Использование
1.	Запрос на получение списка фильмов с описанной ниже структурой – GET
```
http://localhost:8085/api/films
```
2.	Запрос на изменение фильма по его ID – PATCH
```
http://localhost:8085/api/films/{id}
```
3.	Запрос на добавление фильма – POST
```
http://localhost:8085/api/films/
```   
4.	Запрос на удаление фильма – DELETE
```
http://localhost:8085/api/films/{id}
```


