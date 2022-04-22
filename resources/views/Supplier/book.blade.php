@extends('Shared._layout')
@section('title', 'book')
<?php
session_start();
$book_isbn = $_GET['bookisbn'];
// connect to database
$conn = mysqli_connect("localhost", "root", "", "laravel");

$query = "SELECT * FROM books WHERE book_isbn = '$book_isbn'";
$result = mysqli_query($conn, $query);
if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
}

$row = mysqli_fetch_assoc($result);
if(!$row){
    echo "Empty book";
    exit;
}

$title = $row['book_title'];
?>
<!-- Example row of columns -->
<p class="lead" style="margin: 25px 0"><a href="./Books">Books</a> > <?php echo $row['book_title']; ?></p>
<div class="row">
    <div class="col-md-3 text-center">
        <img class="img-responsive img-thumbnail" src="<?php echo $row['book_image'] ?>" width="500" height="300">
    </div>
    <div class="col-md-6">
        <h4>Book Description</h4>
        <p><?php echo $row['book_descr']; ?></p>
        <h4>Book Details</h4>
        <table class="table">
            <?php foreach($row as $key => $value){
                if($key == "book_descr" || $key == "book_image" || $key == "publisherid" || $key == "book_title"){
                    continue;
                }
                switch($key){
                    case "book_isbn":
                        $key = "ISBN";
                        break;
                    case "book_title":
                        $key = "Title";
                        break;
                    case "book_author":
                        $key = "Author";
                        break;
                    case "book_price":
                        $key = "Price";
                        break;
                }
                ?>
                <tr>
                    <td><?php echo $key; ?></td>
                    <td><?php echo $value; ?></td>
                </tr>
                <?php
            }
            if(isset($conn)) {mysqli_close($conn); }
            ?>
        </table>
        <p class="btn-holder"><a href="add-to-cart/<?php echo $row['supplier_id']; ?>" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
    </div>
</div>

