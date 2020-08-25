<form action='<?= htmlentities($_SERVER['SCRIPT_NAME']) ?>' method='post'>
Имя: <input type='text' name='name'/>
<input type='hidden' name='stage' value='<?= $stage + 1 ?>'/>
<input type='submit' value='Next'/>
</form>