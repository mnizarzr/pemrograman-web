<?php

require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();

$host = '127.0.0.1';
$port = 3307;
$username = 'root';
$password = 'root';
$database = 'pwmodul5';

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Seed authors table
for ($i = 0; $i < 10; $i++) {
    $authorName = $faker->name;
    $pdo->exec("INSERT INTO authors (name) VALUES ('$authorName')");
}

// Seed genres table
$genres = ['Fiction', 'Non-Fiction', 'Science Fiction', 'Mystery', 'Romance', 'Fantasy'];

foreach ($genres as $genre) {
    $pdo->exec("INSERT INTO genres (name) VALUES ('$genre')");
}

// Seed users table
for ($i = 0; $i < 10; $i++) {
    $userName = $faker->name;
    $pdo->exec("INSERT INTO users (name) VALUES ('$userName')");
}

// Seed books table
for ($i = 0; $i < 20; $i++) {
    $bookTitle = $faker->sentence(3);
    $authorId = $faker->numberBetween(1, 10);
    $genreId = $faker->numberBetween(1, count($genres));
    $pdo->exec("INSERT INTO books (title, author_id, genre_id) VALUES ('$bookTitle', $authorId, $genreId)");
}

// Seed books_loans table
for ($i = 0; $i < 30; $i++) {
    $userId = $faker->numberBetween(1, 10);
    $bookId = $faker->numberBetween(1, 20);
    $loanDate = $faker->date;
    $returnDate = $faker->optional(0.7, null)->date; // 70% chance of having a return date

    $pdo->exec("INSERT INTO books_loans (user_id, book_id, loan_date, return_date) VALUES ($userId, $bookId, '$loanDate', " . ($returnDate ? "'$returnDate'" : "NULL") . ")");
}

echo "Database seeded successfully.\n";

?>
