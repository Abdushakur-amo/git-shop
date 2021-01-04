
<div class="flex_container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Вход в панель Администратора</div>
        <div class="card-body">
            <form action="/admin/login" method="post">
                <div class="form-group">
                    <label>Логин</label>
                    <input class="form-control" type="text" name="login">
                </div>
                <div class="form-group">
                    <label>Пароль</label>
                    <input class="form-control" type="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Вход</button>
            </form>
        </div>
    </div>
</div>
<style>
	.card-body {
    width: 320px;
    background: rgba(0,0,0,0.1);
    padding: 20px;
    margin: 10px;

}

.form-group input {
    width: 100%;
    background: #ffffff00;
    border: solid 1px #ffffff45;
    margin-bottom: 20px;
    padding: 10px;
    outline: none;
}

.card-body button {
    margin-top: 10px;
    padding: 10px;
    width: 40%;
    font-weight: 800;
    background: none;
    border: solid 1px #ddd;
    transition: .90s all;
}




</style>