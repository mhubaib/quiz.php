<?php
$questions = [
    [
        'question' => "What is the capital of France?",
        'options' => ["Paris", "Berlin", "Madrid", "Rome"],
        'correct' => "0",
    ],
    [
        'question' => "Which planet is known as the Red Planet?",
        'options' => ["Mars", "Venus", "Jupiter", "Saturn"],
        'correct' => "0",
    ],
];
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <?php foreach ($questions as $index => $q): ?>
        <div class="question">
            <h3>
                <?php echo ($index + 1) . '. ' . $q['question']; ?>
            </h3>
            <div class="options">
                <?php foreach ($q['options'] as $optindex => $option) :?>
                 <div class="option">
                      <input type="radio" name="answers[<?php echo $index; ?>]" value="<?php echo $optindex; ?>" id="q<?php echo $index; ?>0<?php echo $optindex; ?>" required>  
                      <label for="q<?php echo $index; ?>0<?php echo $optindex; ?>">
                        <?php echo $option;?>
                      </label>
                 </div>   
                <?php endforeach;?>
            </div>
        </div>
    <?php endforeach;?>
    <input type="submit" class="btn" value="SubmitQuiz">
</form>