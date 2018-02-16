<!DOCTYPE html>
<html>
<head>
	<title>Test Task for MagneticOne</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
       <h1>Test Task for MagneticOne</h1>
</header>

  <main>

     <div class="tabs">

    <input type="radio" name="inset" value="" id="tab_0" checked>
    <label for="tab_0">Leads</label>

    <input type="radio" name="inset" value="" id="tab_1">
    <label for="tab_1">Accounts</label>

    <input type="radio" name="inset" value="" id="tab_2">
    <label for="tab_2">Contacts</label>

    <input type="radio" name="inset" value="" id="tab_3">
    <label for="tab_3">Tasks</label>

    <input type="radio" name="inset" value="" id="tab_4">
    <label for="tab_4">Opportunities</label>

    <input type="radio" name="inset" value="" id="tab_5">
    <label for="tab_5">Users</label>

    <div id="txt_0">
    	<ul class="border">
            <?php for($row=0;$row<$get_entry_list_leads->total_count;$row++) { ?>
                <li><?php echo $get_entry_list_leads->entry_list[$row]->name_value_list->name->value; ?></li>
            <?php } ?>
        </ul>
    </div>

    <div id="txt_1">
        <ul class="border">
            <?php for($row=0;$row<$get_entry_list_accounts->total_count;$row++) { ?>
                <li><?php echo $get_entry_list_accounts->entry_list[$row]->name_value_list->name->value; ?></li>
            <?php } ?>
        </ul>
    </div>
    <div id="txt_2">
        <ul class="border">
            <?php for($row=0;$row<$get_entry_list_contacts->total_count;$row++) { ?>
                <li><?php echo $get_entry_list_contacts->entry_list[$row]->name_value_list->name->value; ?></li>
            <?php } ?>
        </ul>
    </div>
    <div id="txt_3">
        <ul class="border">
            <?php for($row=0;$row<$get_entry_list_tasks->total_count;$row++) { ?>
                <li><?php echo $get_entry_list_tasks->entry_list[$row]->name_value_list->name->value; ?></li>
            <?php } ?>
        </ul>
    </div>
    <div id="txt_4">
    	<ul class="border">
            <?php for($row=0;$row<$get_entry_list_opportunities->total_count;$row++) { ?>
                <li><?php echo $get_entry_list_opportunities->entry_list[$row]->name_value_list->name->value; ?></li>
            <?php } ?>
        </ul>
    </div>
    <div id="txt_5">
        <ul class="border">
            <?php for($row=0;$row<$get_entry_list_users->total_count;$row++) { ?>
                <li><?php echo $get_entry_list_users->entry_list[$row]->name_value_list->name->value; ?></li>
            <?php } ?>
        </ul>
    </div>
</div>

 </main>

<footer>

     <p>
        <small>
          <time>2018</time> © Andrii Moruzhko
       </small>
    </p>

</footer>

</body>
</html>

</body>
</html>