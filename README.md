# Задача на проектирование #
## Описание
Заказчику требуется информационная система, тестирующая респондентов для определения их будущей профессии или социальной группы. Каждый тест состоит из ряда вопросов с вариантами ответов, каждый из которых оценивается определённым баллом. Результат прохождения теста оценивается алгоритмом, который определённым образом оценивает полученные баллы и определяет, к какой группе относится респондент.

### Пример теста
_Вопрос №1: “Любите ли вы выпекать пироги?”._

* Ответ №1: Люблю.
* Ответ №2: Думаю только об этом, не могу спать.
* Ответ №3: Нет.

_Вопрос №2: “Как вы относитесь к еде?”._

* Ответ №1: Очень люблю вкусно поесть.
* Ответ №2: Отношусь спокойно.
* Ответ №3: Я - дизайнер блюд в ресторане.

_Вопрос №3: “Умеете ли вы варить суп?”._

* Ответ №1: Нет
* Ответ №2: Да
* Ответ №3: Наверное

### Примеры алгоритмов расчета
Алгоритм расчета для профессии “Повар”, используя эти вопросы, позволяет определять, насколько пользователю подходит профессия повара.
Алгоритм расчета для социальной группы “Гурман”, используя эти вопросы, позволяет определить, насколько респондент соответствует этой социальной группе.

### Задача
1. Спроектировать архитектуру приложения, это значит что требуются папки, классы, абстрактные классы и интерфейсы, с названиями методов и комментариями, что эти методы делают. Реализации методов быть НЕ должно.
2. Описать логику взаимодействия классов в файле example.php, с помощью php-кода. Создание классов, добавление вопросов в тест, рассчеты баллов, подстановка алгоритмов для рассчетов и т.д.

### Уточнения
1. Реализация должна позволять добавлять новые алгоритмы без изменения классов-сущностей
2. Тест дан для примера, т.е. его реализация не должна зависеть от конкретных алгоритмов.
3. В целом задача посмотреть уровень знаний ООП в частности DI и других паттернов.
4. Ориентировочное время выполнения задачи - 1 час.