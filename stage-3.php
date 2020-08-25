<form action='<?= htmlentities($_SERVER['SCRIPT_NAME']) ?>' method='post'>
Фамилия: <input type='text' name='first_name'/>
<input type='hidden' name='stage' value='<?= $stage + 1 ?>'/>
<input type='submit' value='Next'/>