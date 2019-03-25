<div class="container-fluid bg-linear">
    <div class="form-contacts">
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
</div>

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
<div class="footer"></div>

