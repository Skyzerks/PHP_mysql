<h5>Input Review information: </h5>

<form action="/admin/reviews/?method=create" method="POST">


    <select name="form[user_id]" >
        <?php foreach ($data['options']['users'] as $user) { ?>
            <option value="<?=$user['id']?>"><?=$user['name']?></option>
        <?php } ?>
    </select>
    <select name="form[product_id]" >
        <?php foreach ($data['options']['product_ids'] as $product) { ?>
            <option value="<?=$product['id']?>"><?=$product['title']?></option>
        <?php } ?>
    </select><br/>
    <textarea rows="6" cols="50" name="form[text]" value="<?=$data['review']['text']?>" placeholder = "Enter your review"></textarea><br/>


    <select name="form[rating]" >
        <?php foreach ($_config['review_ratings'] as $opt) { ?>
            <option value="<?=$opt?>"><?=$opt?></option>
        <?php } ?>
    </select>
    <!--    $review['id']           -->
    <!--    $review['user_id']      -->
    <!--    $review['product_id']   -->
    <!--    $review['created_at']   -->
    <!--    $review['text']         -->
    <!--    $review['rating']       -->

    <button type="submit">Create</button>
</form>