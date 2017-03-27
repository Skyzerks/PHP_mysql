<form action="/admin/products/?method=update" method="POST" enctype="multipart/form-data">

    <input type="hidden" name="form[id]" value="<?=$data['product']['id']?>">

    <input type="text" name="form[category_id]" value="<?=$data['product']['category_id']?>"><br/>
    <input type="text" name="form[title]" value="<?=$data['product']['title']?>"><br/>
    <input type="text" name="form[price]" value="<?=$data['product']['price']?>"><br/>
    <input type="text" name="form[description]" value="<?=$data['product']['description']?>"><br/>
    Avatar: <input type="file" name="avatar" ><br/><br/>

    <button type="submit">Update</button>
</form>