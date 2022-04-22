@extends('Shared._layout')
@section('title', 'Home Page')
@section('content')
    <div class="container">
        <div class="row">
            <H1>Hello, Welcome to Quality Books</H1>
            <H2>This is an assignment 2 of Web Application Development.</H2>
            <H3>Develop by PHP with Laravel.</H3>
        </div>
    </div>

    <?php
    session_start();
    $count = 0;
    // connecto database
    function db_connect(){
        $conn = mysqli_connect("localhost", "root", "", "laravel");
        if(!$conn){
            echo "Can't connect database " . mysqli_connect_error($conn);
            exit;
        }
        return $conn;
    }

    function select4LatestBook($conn){
        $row = array();
        $query = "SELECT book_isbn, book_image FROM books ORDER BY book_isbn DESC";
        $result = mysqli_query($conn, $query);
        if(!$result){
            echo "Can't retrieve data " . mysqli_error($conn);
            exit;
        }
        for($i = 0; $i < 4; $i++){
            array_push($row, mysqli_fetch_assoc($result));
        }
        return $row;
    }
    $conn = db_connect();
    $row = select4LatestBook($conn);
    ?>
    <!-- Example row of columns -->
    <p class="lead text-center text-muted">Latest books</p>
    <div class="row">
        <?php foreach($row as $book) { ?>
        <div class="col-md-3">
            <a href="./Supplier/book?bookisbn=<?php echo $book['book_isbn']; ?>">
                <img class="img-responsive img-thumbnail" src="<?php echo $book['book_image'] ?>" width="500" height="300">
            </a>
        </div>
        <?php } ?>
    </div>
    <?php
    if(isset($conn)) {mysqli_close($conn);}
    ?>
@endsection

