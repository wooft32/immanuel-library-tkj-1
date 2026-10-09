
<?php

function getBooks(){
$books = [
  [
    "id" => 1,
    "title" => "Laskar Pelangi",
    "category" => "Fiksi",
    "year" => 2005,
    "stock" => 12,
    "authors" => ["Andrea Hirata"],
  ],
  [
    "id" => 2,
    "title" => "Bumi",
    "category" => "Fiksi",
    "year" => 2014,
    "stock" => 8,
    "authors" => ["Tere Liye"],
  ],
  [
    "id" => 3,
    "title" => "Harry Potter dan Batu Bertuah",
    "category" => "Fiksi",
    "year" => 1997,
    "stock" => 5,
    "authors" => ["J.K. Rowling"],
  ],
  [
    "id" => 4,
    "title" => "Bumi Manusia",
    "category" => "Sejarah",
    "year" => 1980,
    "stock" => 6,
    "authors" => ["Pramoedya Ananta Toer"],
  ],
  [
    "id" => 5,
    "title" => "Antologi Rasa Nusantara",
    "category" => "Fiksi",
    "year" => 2021,
    "stock" => 4,
    "authors" => ["Pramoedya Ananta Toer", "Sapardi Djoko Damono"],
  ],
];
return $books;
}

function getBook($id = null) {
    $books = getBooks();
    foreach ($books as $book) {
        if (isset($book['id']) && $book['id'] == $id) {
            return $book;
        }
    }
    return $books[0] ?? null;
}
