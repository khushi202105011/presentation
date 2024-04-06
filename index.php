<?php
include 'dbinfo.php';

// Fetch tutorials


// Fetch articles
$articles_query = "SELECT * FROM articles";
$articles_result = $conn->query($articles_query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tourism</title>
    <style>
        body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    color: #333;
    margin: 0;
    padding: 0;
   
}

.banner {
            position: relative;
        }

       .banner h1 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 2em;
            text-align: center;
            margin: 0;
        }

       .banner img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

nav {
    background-color: #333;
    padding: 10px;
    text-align: center;
}

nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

nav li {
    display: inline-block;
    margin-right: 20px;
    color: white;
}

.main-content {
    display: flex;
    
}

.left-container {
    
    width:100%;
}

.right-container {
    
    width:100%;
}


.left-container iframe {

    
    left: 0;
    width: 100%; /* Set a specific width, for example: 640px */
    height: 10px%; /* Set a specific height, for example: 360px */
}


.right-container img {
    width: 250px;
    height: 250px; 
}

footer {
    margin-top: auto;
    text-align: center;
    background-color: #333;
    color: white;
    padding: 5px;
    width: 100%;
    position: fixed;
    bottom: 0;
}
</style>
</head>
<body>
<div class="banner">
    <h1>Welcome to Canada</h1>
    <img src="https://cdn.authentik.com/canada/images/trip/list/world/conquete-de-louest_1_52879.jpg"Contact Banner Image>
</div>




<!-- Main Content Section -->

    <!-- Right Container -->
    <div class="right-container">
        <h2>Places to visit:</h2>
        <ul>
            <?php while ($article = $articles_result->fetch_assoc()): ?>
                <li>
                    <h3><?php echo $article['title']; ?></h3>
                    <img src="<?php echo $article['image_url']; ?>" alt="<?php echo $article['title']; ?>">
                    <p><?php echo $article['content']; ?></p>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
</section>

<!-- Footer -->
<footer>
    Khushi 202105011
</footer>

</body>
</html>