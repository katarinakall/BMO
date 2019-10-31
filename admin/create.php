<form action="process-admin.php" method="post" class="crud">
    <fieldset>
        <legend>Lägg till ett objekt</legend>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="Title">
        <label for="category">Category</label>
        <input type="text" name="category" id="category" value="Category">
        <label for="text">Text</label>
        <input type="text" name="text" id="text" value="Text">
        <label for="image">Image</label>
        <input type="text" name="image" id="image" value="Image">
        <label for="owner">Owner</label>
        <input type="text" name="owner" id="owner" value="Owner">
        <button type="submit" name="action" value="create">Lägg till</button>
    </fieldset>
</form>
