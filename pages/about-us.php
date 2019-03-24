<div class="gallery-head">
        <h1>Aboute Us</h1>
</div>
<div class= "container-fluid">
    <a href="img/img.png" target="_blank" data-fancybox="images"> <img src="img/img.png"></a>
    <a href="img/img.png" target="_blank" data-fancybox="images"> <img src="img/img.png"></a>
    <a href="img/img.png" target="_blank" data-fancybox="images"> <img src="img/img.png"></a>
    <a href="img/img.png" target="_blank" data-fancybox="images"> <img src="img/img.png"></a>
    <a href="img/img.png" target="_blank" data-fancybox="images"> <img src="img/img.png"></a>
    <a href="img/img.png" target="_blank" data-fancybox="images"> <img src="img/img.png"></a>
    <a href="img/img.png" target="_blank" data-fancybox="images"> <img src="img/img.png"></a>
    <a href="img/img.png" target="_blank" data-fancybox="images"> <img src="img/img.png"></a>
</div>
<div class="footer"></div>
<div class="form-container hidden"  id="form-ajax">
    <form name="form" action="ajax.php" method="POST" class="ajax-form">
        <div class="contacts__h"> Contacts Us</div>
        <label>
            <input name="name" type="text" placeholder="Name" required>
            <span class="name_error"> </span>
        </label>
        <label>
            <input name="email" type="text" placeholder="E-mail" required>
            <span class="email_error"> </span>
        </label>
        <label >
            <input name="phone" type="text" placeholder="+7(999)999-99-99" required>
            <span class="phone_error"> </span>
        </label
        <label>
            <textarea name="message" placeholder="Message"></textarea>
        </label>
        <label>
            <input type="hidden" class="hidden" name="start-time" value="<? echo date('Y-m-d H:i:s'); ?>">
        </label>
        <button type="submit">Contacts Us</button>
    </form>
</div>
<script>
    $('[data-fancybox="images"]').fancybox({
// Options will go here
});
</script>
<script type="text/javascript" src="js/script2.js"></script>
