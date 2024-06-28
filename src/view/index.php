<?php
session_start();

use App\Classes\News;

include 'header.php';

/////////////////////pagination//////////////////////////
$conn = mysqli_connect('localhost', 'root', '');
if (!$conn) {
    die("Connection failed" . mysqli_connect_error());
} else {
    mysqli_select_db($conn, 'validation');
}

$results_per_page = 3;

$query = "select *from news";
$result = mysqli_query($conn, $query);
$number_of_result = mysqli_num_rows($result);

$number_of_page = ceil($number_of_result / $results_per_page);

if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}

$page_first_result = ($page - 1) * $results_per_page;

$query = "SELECT * FROM news LIMIT " . $page_first_result . ',' . $results_per_page;
$result = mysqli_query($conn, $query); ?>


<div class="welcome">Bienvenue <?php echo $identification; ?></div>
<main>
    <h1>News </h1>
    <div class="cartes-news">
        <?php while ($row = mysqli_fetch_array($result)) {  ?>
            <div class="card" style="width: 18rem;">
                <img src="<?php echo $row['enclosure']; ?>" class="card-img-top" alt="image">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['title']; ?></h5>
                    <p class="card-text"><?php echo $row['description']; ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Date de publicatiion: <?php echo $row['pubDate']; ?></li>
                    <li class="list-group-item"><?php echo $row['creator']; ?></li>
                    <li class="list-group-item"><?php echo $row['comments']; ?></li>
                </ul>
                <div class="card-link">
                    <div id="container">
                        <button class="learn-more">
                            <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                            </span>
                            <a href="<?php echo $row['link']; ?>" class="button-text">Learn More</a>
                        </button>
                    </div>

                </div>
            </div>

        <?php } ?>
        <a href="#" class="scrollup">Scroll</a>

    </div>

</main>

</div>
<nav class="pagination">
    <?php for ($page = 1; $page <= $number_of_page; $page++) {
        echo '<a href = "index.php?page=' . $page . '">' . $page . ' </a>';
    }
    ?>
</nav>

<?php include 'footer.php';
