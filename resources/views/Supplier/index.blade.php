@extends('Shared._layout')
@section('title', 'Supplier Index')

    <?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "laravel");
    $query = "SELECT * FROM suppliers ORDER BY id";
    $result = mysqli_query($conn, $query);
    if(!$result){
        echo "Can't retrieve data " . mysqli_error($conn);
        exit;
    }
    if(mysqli_num_rows($result) == 0){
        echo "Empty publisher ! Something wrong! check again";
        exit;
    }

    $title = "List of Categories";
    ?>
    <p class="lead">Categories: Organized by the book kinds</p>
    <ul>
        <?php
        while($row = mysqli_fetch_assoc($result)){
        $count = 0;
        $query = "SELECT supplier_id FROM books";
        $result2 = mysqli_query($conn, $query);
        if(!$result2){
            echo "Can't retrieve data " . mysqli_error($conn);
            exit;
        }
        while ($pubInBook = mysqli_fetch_assoc($result2)){
            if($pubInBook['supplier_id'] == $row['id']){
                $count++;
            }
        }
        ?>
        <li>
            <span class="badge"><?php echo $count; ?></span>
            <a href="./Supplier/bookPerPub?pubid=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a>
        </li>
        <?php } ?>
        <li>
            <a href="./Books">List full of books</a>
        </li>
    </ul>
    <?php
    mysqli_close($conn);
    ?>

    <p>
        <a href="{{url('Supplier/Create')}}">Create New</a>
    </p>


