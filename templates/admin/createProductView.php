<h5>Input Product information: </h5>

<form action="/admin/products/?method=create" method="POST">

<!--    <input type="hidden" name="form[id]" value="--><?//=$data['user']['id']?><!--">-->

    <input type="text" name="form[title]" value="<?=$data['product']['title']?>" placeholder="Enter title"><br/>
    <input type="text" name="form[price]" value="<?=$data['product']['price']?>" placeholder="Enter price"><br/>
    <select name="form[category_id]" >
        <?php foreach ($data['options']['categories'] as $category) { ?>
            <option value="<?=$category['id']?>"><?=$category['title']?></option>
        <?php } ?>
    </select><br/>

    <textarea rows="3" cols="30" name="form[description]" value="<?=$data['product']['description']?>" placeholder = "Enter your description"></textarea><br/>

    <button type="submit">Create</button>
</form>