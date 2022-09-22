<?php
    if(isset($_POST['editMovies'])){
        include('../db.php');
        $id = $_POST['id'];
        $name = $_POST['name'];
        $genre = $_POST['genre'];
        $realese = $_POST['realese'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];
        $query = mysqli_query($con,
            "UPDATE movies
            SET name='$name', genre='$genre', realese='$realese', season='$season', synopsis='$synopsis'
            WHERE id='$id'") or die(mysqli_error($con)); 
        if($query){
            echo
                '<script>
                alert("Edit Movie Success");
                window.location = "../page/listMoviesPage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Edit Film Failed");
                </script>';
        }
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>
