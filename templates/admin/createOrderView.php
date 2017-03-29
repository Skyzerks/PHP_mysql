<h5>Input Order information: </h5>

<form action="/admin/orders/?method=create" method="POST">

<!--    <input type="hidden" name="form[id]" value="--><?//=$data['user']['id']?><!--">-->

    <input type="text" name="form[user_id]" value="<?=$data['order']['title']?>" placeholder="Enter user id"><br/>
    <input type="email" name="form[product_ids]" value="<?=$data['order']['product_ids']?>" placeholder="Enter price"><br/>
    <input type="text" name="form[created_at]" value="<?=$data['order']['created_at']?>" placeholder="Enter category id"><br/>
    <input type="text" name="form[delivered_at]" value="<?=$data['order']['delivered_at']?>" placeholder="Enter description"><br/>
    <input type="text" name="form[status]" value="<?=$data['order']['delivered_at']?>" placeholder="Enter description"><br/>
    Total price: 
<!--    TODO: total price-->

    <button type="submit">Create</button>
</form>