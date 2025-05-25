<?php
function vat_calculator_form() {
    ob_start();
	?>
    <form id="vat-calculator">
        <label for="amount">Amount:</label>
        <input type="number" name="amount" id="amount" required>
        
        <label for="vat_rate">VAT Rate (%):</label>
        <input type="number" name="vat_rate" id="vat_rate" required>
        <button type="button" id="calculate-btn">Calculate</button>
    </form>
    <div class="text">
        <p>Thank you</p>
    </div>
    <div id="result">
        <p id="vat-output"></p>
        <p id="total-output"></p>
    </div>
    <?php
    return ob_get_clean();
}
?>
