<?php

$host = '127.0.0.1';
$port = 3307;
$username = 'root';
$password = 'root';
$dbName = 'pwmodul5';

$dsn = "mysql:host=$host;port=$port;dbname=$dbName;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Authors
    $authorNames = ['Carl Sagan', 'Yuval Noah Harari', 'Albert Camus'];
    $authorStatement = $pdo->prepare("INSERT INTO `authors` (`name`) VALUES (?)");
    foreach ($authorNames as $authorName) {
        $authorStatement->execute([$authorName]);
    }

    // Genres
    $genreNames = ['Science', 'History', 'Philosophy'];
    $genreStatement = $pdo->prepare("INSERT INTO `genres` (`name`) VALUES (?)");
    foreach ($genreNames as $genreName) {
        $genreStatement->execute([$genreName]);
    }

    // Users
    $userNames = ['Alice Johnson', 'Bob Williams', 'Charlie Davis'];
    $userStatement = $pdo->prepare("INSERT INTO `users` (`name`) VALUES (?)");
    foreach ($userNames as $userName) {
        $userStatement->execute([$userName]);
    }

    // Books
    $booksData = [
        ['Cosmos', 1, 1],
        ['Sapiens', 2, 2],
        ['Homo Deus', 2, 2],
        ['The Stranger', 3, 3]
    ];
    $bookStatement = $pdo->prepare("INSERT INTO `books` (`title`, `genre_id`, `author_id`) VALUES (?, ?, ?)");
    foreach ($booksData as $book) {
        $bookStatement->execute($book);
    }

    // Books Loans
    $loanData = [
        [1, 1, '2023-01-01', '2023-01-15'],
        [2, 2, '2023-02-15', '2023-03-01'],
        [3, 3, '2023-03-10', '2023-03-24'],
        [1, 4, '2023-04-20', '2023-05-04']
    ];
    $loanStatement = $pdo->prepare("INSERT INTO `books_loans` (`user_id`, `book_id`, `loan_date`, `return_date`) VALUES (?, ?, ?, ?)");
    foreach ($loanData as $loan) {
        $loanStatement->execute($loan);
    }

    echo "Seeding successful!";
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
