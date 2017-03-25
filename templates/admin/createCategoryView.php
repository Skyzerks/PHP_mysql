<h5>Input Category information: </h5>

<form action="/admin/categories/?method=create" method="POST">

    <input type="text" name="form[title]" value="<?=$data['category']['title']?>" placeholder="Enter name"><br/>

    <button type="submit">Create</button>
</form>