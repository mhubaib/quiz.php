<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Quiz</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .quiz-container {
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .question {
            margin-bottom: 20px;
        }

        .options {
            margin-left: 20px;
        }

        .option {
            margin-bottom: 10px;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="quiz-container">
        <h1>Simple PHP Quiz</h1>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include 'process.php';
        } else {
            include 'questions.php';
        }
        ?>
    </div>
</body>

</html>