<?php
// Include the questions file to access the $questions array
include 'questions.php';

// Initialize variables
$score = 0;
$totalQuestions = count($questions);
$userAnswers = $_POST['answers'] ?? [];

// Calculate the score
foreach ($userAnswers as $questionIndex => $userAnswer) {
    if (isset($questions[$questionIndex]) && (int)$userAnswer == $questions[$questionIndex]['correct']) {
        $score++;
    }
}

// Calculate percentage
$percentage = ($score / $totalQuestions) * 100;

// Determine the result message
if ($percentage >= 80) {
    $resultMessage = "Excellent!";
} elseif ($percentage >= 60) {
    $resultMessage = "Good job!";
} elseif ($percentage >= 40) {
    $resultMessage = "Not bad.";
} else {
    $resultMessage = "You need to spend more time to learning.";
}
?>

<div class="results">
    <h2>Quiz Results</h2>
    <p>You scored <?php echo $score; ?> out of <?php echo $totalQuestions; ?> (<?php echo number_format($percentage, 1); ?>%)</p>
    <p><strong><?php echo $resultMessage; ?></strong></p>

    <h3>Question Review:</h3>
    <?php foreach ($questions as $index => $q): ?>
        <div class="question">
            <h4><?php echo ($index + 1) . '. ' . $q['question']; ?></h4>
            <p>
                Your answer:
                <?php
                if (isset($userAnswers[$index])) {
                    echo $q['options'][(int)$userAnswers[$index]];

                    if ((int)$userAnswers[$index] == $q['correct']) {
                        echo ' <span style="color: green;">(Correct)</span>';
                    } else {
                        echo ' <span style="color: red;">(Incorrect)</span>';
                    }
                } else {
                    echo '<span style="color: red;">Not answered</span>';
                }
                ?>
            </p>
            <p>Correct answer: <?php echo $q['options'][$q['correct']]; ?></p>
        </div>
    <?php endforeach; ?>

    <a href="index.php" class="btn" style="display: inline-block; margin-top: 20px; text-decoration: none;">Try Again</a>
</div>