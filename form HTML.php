<div class="form">
    <form class="zapitvane" action="contactform.php" method="POST">
        Имена *
        <br>
        <input required type="text" name="username" placeholder="Име"> <input required type="text" name="famylyname" size="20" placeholder="Фамилия">
        <br>
        E-mail*
        <br>
        <input required type="email" size="20" autocomplete="on" placeholder="your@mail.bg" name="email" autofocus>
        <br>
        Тел.
        <br>
        <input type="number" name="number" size="20">
        <br>
        Запитване*
        <br>
        <textarea required rows="6" cols="25" name="comments"></textarea>
        <br>
        <br>
        <input class="submit1" type="submit" value="Изпращане">
    </form>
</div>