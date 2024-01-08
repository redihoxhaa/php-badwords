<?php
$badword = $_POST["badword"];
$paragraph = $_POST["paragraph"];
$modified_paragraph = str_replace($badword, '***', $paragraph);
$counter = substr_count($paragraph, $badword);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Import Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- /Import Bootstrap -->

    <!-- Import CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- /Import CSS -->

    <!-- Titolo scheda -->
    <title>Bad Words</title>
    <!-- /Titolo scheda -->

</head>

<body>
    <div class="container mt-5">
        <!-- Header -->
        <header>
            <h1 class="text-center text-uppercase">Don't say it!</h1>
        </header>
        <!-- /Header -->

        <!-- Main -->
        <main>
            <div class="text-uppercase mb-5"> Your paragraph is:
                <div class="result">
                    <?php echo $paragraph; ?>
                </div>
            </div>

            <div class="text-uppercase mb-5"> The paragraph is
                <div class="result">
                    <?php echo strlen($paragraph); ?>
                </div>
                characters long
            </div>

            <hr>

            <div class="text-uppercase mt-5 mb-5"> Your 🤭 badword is:
                <div class="result badword">
                    <?php echo $badword; ?>
                </div>
                and it occurs
                <div class="result">
                    <?php echo $counter; ?>
                </div>
                times
            </div>

            <div class="text-uppercase mb-5"> Your modified paragraph is:
                <div class="result">
                    <?php echo $modified_paragraph; ?>
                </div>
            </div>

            <div class="text-uppercase mb-5"> The modified paragraph is
                <div class="result">
                    <?php echo strlen($modified_paragraph); ?>
                </div>
                characters long counting "***", and
                <div class="result">
                    <?php echo strlen($modified_paragraph) - (3 * $counter); ?>
                </div>
                without counting them
            </div>

        </main>
        <!-- /Main -->

        <!-- Footer -->
        <footer>

        </footer>
        <!-- /Footer -->
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- /Bootstrap JS -->

</body>

</html>