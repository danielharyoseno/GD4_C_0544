<?php
    include '../component/sidebar.php'
?>
    <link href="../style1.css" rel="stylesheet">
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
    solid #D40013; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
    0.19);" >
        <h4>Edit Movies</h4>
        <hr>
        <div class="countainer card-content w-50">
            <form action="../process/editMoviesProcess.php" method="post">
            <?php
            if(isset($_GET['id'])){
                include ('../db.php');
                $id = $_GET['id'];
                $sql="SELECT * FROM movies WHERE id=$id";
                $result = mysqli_query($con,$sql) or die(mysqli_error($con));
                if($result) {
                        if(mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);   
                        $id = $row['id'];
                        $name = $row['name'];
                        $genre = $row['genre'];
                        $realese = $row['realese'];
                        $season = $row['season'];
                        $synopsis = $row['synopsis'];
                        }
                    }
                }
            ?>
            <table style="width: 100%;">
                <div><input type="text" name="id" hidden value="<?php echo $id?>"></div>
                <tr>
                <td>
                    <div class="mb-3">
                    <label for="titleInput" class="form-label">Judul</label>
                    <input type="text" class="form-control w-100" id="name" name="name" width="100%" value="<?php echo $name ?>"/>
                    </div>
                </td>
                </tr>
                <tr>
                <td>
                    <div class="mb-3">
                    <label for="genreInput" class="form-label">Genre</label>
                    <input type="text" class="form-control w-100" id="genre" name="genre" width="100%" value="<?php echo $genre ?>"/>
                    </div>
                </td>
                </tr>
                <tr>
                <td>
                    <div class="mb-3">
                    <label for="realeseInput" class="form-label">Realese</label>
                    <input type="text" class="form-control w-100" id="realese" name="realese" width="100%" value="<?php echo $realese ?>"/>
                    </div>
                </td>
                </tr>
                <tr>
                <td>
                    <div class="mb-3">
                    <label for="seasonInput" class="form-label">Season</label>
                    <input type="text" class="form-control w-100" id="season" name="season" width="100%" value="<?php echo $season ?>"/>
                    </div>
                </td>
                </tr>
                <tr>
                <td>
                    <div class="mb-3">
                    <label for="synopsisInput" class="form-label">Synopsis</label>
                    <input type="text" class="form-control w-100" id="synopsis" name="synopsis" width="100%" value="<?php echo $synopsis ?>"/>
                    </div>
                </td>
                </tr>
            </table>
            
            <button style="background-color:Red" type="submit" class="btn btn-primary"  name="editMovies">Change</button>
            </form>	
        </div>
    </div>
    </aside>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>
</html>