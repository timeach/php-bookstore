@extends('Shared._layout')
@section('title', 'bookPerPub')

<?php
session_start();
// get pubid
if(isset($_GET['pubid'])){
    $pubid = $_GET['pubid'];
} else {
    echo "Wrong query! Check again!";
    exit;
}
$conn = mysqli_connect("localhost", "root", "", "laravel");
function getPubName($conn, $pubid){
    $query = "SELECT name FROM suppliers WHERE id = '$pubid'";
    $result = mysqli_query($conn, $query);
    if(!$result){
        echo "Can't retrieve data " . mysqli_error($conn);
        exit;
    }
    if(mysqli_num_rows($result) == 0){
        echo "Empty books ! Something wrong! check again";
        exit;
    }

    $row = mysqli_fetch_assoc($result);
    return $row['name'];
}
// connect database

$pubName = getPubName($conn, $pubid);

$query = "SELECT book_isbn, book_title, book_image FROM books WHERE supplier_id = '$pubid'";
$result = mysqli_query($conn, $query);
if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
}
if(mysqli_num_rows($result) == 0){
    echo "Empty books ! Please wait until new books coming!";
    exit;
}

$title = "Books Per Supplier";
?>
<p class="lead"><a href="./index.blade.php">Categories</a> > <?php echo $pubName; ?></p>
<?php while($row = mysqli_fetch_assoc($result)){
    ?>
    <div class="row">
        <div class="col-md-3">
            <img class="img-responsive img-thumbnail" src="<?php echo $row['book_image'] ?>" width="500" height="300">
    </div>
        <div class="col-md-7">
            <h4><?php echo $row['book_title'];?></h4>
            <a href="./book?bookisbn=<?php echo $row['book_isbn'];?>" class="btn btn-primary">Get Details</a>
        </div>
    </div>
    <br>
    <?php
}
if(isset($conn)) { mysqli_close($conn);}
?>

