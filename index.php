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
            <form action="result.php" method="post" class="d-flex flex-column">
                <div class="mb-3">
                    <label for="badword" class="form-label text-uppercase">Bad Word</label>
                    <input type="text" class="form-control" id="badword" name="badword" placeholder="Write the bad word here...">
                </div>
                <div class="mb-3">
                    <label for="paragraph" class="form-label text-uppercase">Paragraph</label>
                    <textarea class="form-control" id="paragraph" name="paragraph" rows="3" placeholder="Write your paragraph here..."></textarea>
                </div>
                <button class="btn btn-primary mt-2">Submit</button>
            </form>

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