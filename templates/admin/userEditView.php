<form action="/admin/user/?method=update" method="POST">

    <input type="hidden" name="form[id]" value="<?=$data['user']['id']?>">

    <input type="text" name="form[name]" value="<?=$data['user']['name']?>"><br/>
    <input type="email" name="form[email]" value="<?=$data['user']['email']?>"><br/>
    <input type="text" name="form[login]" value="<?=$data['user']['login']?>"><br/>
    <input type="password" name="form[password]" value=""><br/>


    <button type="submit">Update</button>
</form>