<?php
// Создание многомерного массива с информацией о фильмах
let movies = [
    { title: "Побег из Шоушенка", rating: 9.3, actors: ["Тим Роббинс", "Морган Фриман"] },
    { title: "Крёстный отец", rating: 9.2, actors: ["Марлон Брандо", "Аль Пачино"] },
    { title: "Темный рыцарь", rating: 9.0, actors: ["Хит Леджер", "Кристиан Бэйл"] },
    { title: "Звёздные войны: Эпизод 5 – Империя наносит ответный удар", rating: 8.7, actors: ["Марк Хэмилл", "Харрисон Форд"] },
    { title: "Властелин колец: Возвращение короля", rating: 8.9, actors: ["Элайджа Вуд", "Иэн Маккеллен"] }
];

// Нахождение 3 фильмов с наивысшим рейтингом
let topMovies = movies.sort((a, b) => b.rating - a.rating).slice(0, 3);

// Вывод информации о 3 фильмах с наивысшим рейтингом
console.log("Топ 3 фильмов:");
topMovies.forEach((movie, index) => {
    console.log("Фильм " + (index + 1) + ":");
    console.log("Название: " + movie.title);
    console.log("Рейтинг: " + movie.rating);
    console.log("Актеры: " + movie.actors.join(", "));
});
?>