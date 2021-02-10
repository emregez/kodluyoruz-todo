<link rel="stylesheet" type="text/css" href="style.css"> 
<div class="toDoContainer">
    <form method="post" action="index.php">
        <?php foreach ($data as $d) { ?>
            <div id="todo<?= $d['id'] ?>" class="toDoItem">
                <div class="toDoContent">
                    <div class="toDoLabel">ID</div>
                    <input name="data[<?= $d['id'] ?>][id]" value="<?= $d['id'] ?>">
                    <br>
                    <br>
                    <div class="toDoLabel">Title</div>
                    <input name="data[<?= $d['id'] ?>][title]" value="<?= $d['title'] ?>">
                </div>
                <div class="toDoActions">
                    <br>
                    <button type="button" onclick="document.getElementById('todo<?= $d['id'] ?>').remove()"
                            class="deleteToDo">Delete
                    </button>
                </div>
            </div>
        <?php } ?>
        <hr>
        <h3>Add New Todo</h3>
        <div id="todo<?= $d['id'] ?>" class="toDoItem">
            <div class="toDoContent">
                <div class="toDoLabel">Title</div>
                <input name="newData[title]">
            </div>
        </div>
        <button class="saveButton" type="submit">Save</button>
    </form>
</div>
