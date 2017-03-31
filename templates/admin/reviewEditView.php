<form action="/admin/reviews/?method=update" method="POST">

<!--    --><?php //var_dump($data); ?>

    <input type="hidden" name="form[id]" value="<?=$data['review']['id']?>">
    <input type="hidden" name="form[user_id]" value="<?=$data['review']['user_id']?>">
    <input type="hidden" name="form[product_id]" value="<?=$data['review']['product_id']?>">

    <textarea rows="6" cols="50" name="form[text]" value="<?=$data['review']['text']?>" placeholder = "Enter your review"></textarea><br/>
    <select name="form[rating]" >
        <?php foreach ($_config['review_ratings'] as $opt) {
            $selected = '';

            if($opt==$data['review']['rating']) {
                $selected = 'selected';
            }
            ?>

            <option value="<?=$opt?>"><?=$opt?></option>
            <?php
        }?>
    </select>

<!--    $review['id']           -->
<!--    $review['user_id']      -->
<!--    $review['product_id']   -->
<!--    $review['created_at']   -->
<!--    $review['text']         -->
<!--    $review['rating']       -->

        <button type="submit">Update</button>
</form>
