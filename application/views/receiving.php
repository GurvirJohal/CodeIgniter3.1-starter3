<div class="row">
	<center><h4>Inventory.</h4></center><br>
	{supplies}
	<div class="span3x">
		<p>{code}<p></br>
		<form>
			<input type="text" name="receiving_unit">
			<input type="submit" name="submit">
		</form>		
	</div>
	{/supplies}
</div>

<?php
/* Triggers receipt & totalCost function on submit
	which logs the transaction and totalCost
*/
if (isset($_REQUEST['submit'])) {
    receipt();
	totalCost();
}
?>