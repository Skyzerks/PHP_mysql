<h5>Input Product information: </h5>

<form action="/admin/products/?method=create" method="POST">

<!--    <input type="hidden" name="form[id]" value="--><?//=$data['user']['id']?><!--">-->

    <input type="text" name="form[title]" value="<?=$data['product']['title']?>" placeholder="Enter title"><br/>
    <input type="email" name="form[price]" value="<?=$data['product']['price']?>" placeholder="Enter price"><br/>
    <input type="text" name="form[category_id]" value="<?=$data['product']['category_id']?>" placeholder="Enter category id"><br/>
    <input type="text" name="form[description]" value="<?=$data['product']['description']?>" placeholder="Enter description"><br/>

    <button type="submit">Create</button>
</form>