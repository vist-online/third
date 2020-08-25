<form action='<?= htmlentities($_SERVER['SCRIPT_NAME']) ?>' method='post'>
Отчество: <input type='text' name='last_name'/>
<input type='hidden' name='stage' value='<?= $stage + 1 ?>'/>
<input type='submit' value='Next'/>