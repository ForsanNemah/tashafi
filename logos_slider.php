<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logo Slider</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div id="logoCarousel" class="carousel slide">
        <div class="carousel-inner">
            <?php
                $folder = 'logos'; // Folder name where logos are stored
                $files = array_diff(scandir($folder), array('..', '.')); // Get all files in the folder

                $first = true;
                foreach ($files as $file) {
                    if (is_file("$folder/$file")) {
                        $activeClass = $first ? 'active' : '';
                        echo "<div class='carousel-item $activeClass'>
                                <img src='$folder/$file' class='d-block w-100' alt='Logo'>
                              </div>";
                        $first = false;
                    }
                }
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#logoCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#logoCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
