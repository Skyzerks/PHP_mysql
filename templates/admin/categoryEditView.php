<form action="/admin/categories/?method=update" method="POST" enctype="multipart/form-data">

    <input type="hidden" name="form[id]" value="<?=$data['category']['id']?>">

    <input type="text" name="form[title]" value="<?=$data['category']['title']?>"><br/>
    Avatar: <input type="file" name="avatar" ><br/><br/>

    <button type="submit">Update</button>
</form>