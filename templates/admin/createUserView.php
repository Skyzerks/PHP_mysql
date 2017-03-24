<h5>Input User information: </h5>

<form action="/admin/user/?method=create" method="POST">

    <input type="hidden" name="form[id]" value="<?=$data['user']['id']?>">

    <input type="text" name="form[name]" value="<?=$data['user']['name']?>" placeholder="Enter name"><br/>
    <input type="email" name="form[email]" value="<?=$data['user']['email']?>" placeholder="Enter email"><br/>
    <input type="text" name="form[login]" value="<?=$data['user']['login']?>" placeholder="Enter login"><br/>
    <input type="password" name="form[password]" value="" placeholder="Enter password"><br/>

    <button type="submit">Create</button>
</form>