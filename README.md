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
1.	Запрос на получение списка фильмов - GET
```
http://localhost:8085/api/films
```
2. Запрос на получение информации о фильме - GET
```
http://localhost:8085/api/films/{id}
```
3. Запрос на изменение фильма по его ID – PATCH
```
http://localhost:8085/api/films/{id}
```
4. Запрос на добавление фильма – POST
```
http://localhost:8085/api/films/
```   
5. Запрос на удаление фильма – DELETE
```
http://localhost:8085/api/films/{id}
```

Формат для передачи данных в POST и PATCH **form-data/params**

Для добавления запись должна содержать следующие поля:

| Параметр | Описание                    | Тип                     |
|----------|-----------------------------|-------------------------|
| name     | название фильма             | string, 2-200 символов  |
| duration | продолжительность в минутах | integer                 |
| year     | год выпуска                 | integer, например, 1994 |
| genre    | жанр                        | string, 5-100 символов  |
| director | режиссёр                    | string, 2-150 символов  |
