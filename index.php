<?php 
class Book {
  private $name = '';
  private static $no = '';

  public function setName ($name) {
    $this->name = $name;
    // return "Book name";
  }
  public function getName () {
    return $this->name;
  }
  public static function xx () {
    self::$no;
  }
}
// Book::$no = 'xxx';
Book::xx ();
// $book = Book::create ();
// $book = Book::find ('one');

// $bookA->setName ('Book name = A');
// echo $bookA->getName ();
// echo "<br/>";

// $bookB = new Book ();
// $bookB->setName ('Book name = B');
// echo $bookB->getName ();