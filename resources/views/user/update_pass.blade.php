@include('template.header')

<div class="wrapper">
    <div class="reg-form">
    <p class="title-big center">Изменение пароля пользователя</p>
    <form action="/user/update-pass" method="post">
        {{ csrf_field() }}
        <span>Старый пароль: <input type="password" name="old_password"> <span class="red">{{$errors->first('password')}}</span></span>
        <span>Пароль: <input type="password" name="password"> <span class="red">{{$errors->first('password')}}</span></span>
        <span>Повторить пароль: <input type="password" name="repeat_password">  <span class="red">{{$errors->first('repeat_password')}}</span></span>
        <input type="submit" value="Изменить" class="btn">
    </form>
</div>
    <a href="/user/show/update/" class="btn">Изменить данные пользователя</a>
</div>

@include('template.footer')
