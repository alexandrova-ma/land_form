
<div class="our-services">
    <div class="our-services__h"> Our services</div>
    <div class="our-services__container container">
        <div class="service col-4">
            <div>
                <img src="img/wallet.png" class="service-pic">
            </div>
            <div class="service__text">
                <div class="service__name">Consectetur vestibulum</div>
                <div class="service__description">Consectetur vestibulum maecenas curabitur hac felis vestibulum urna
                    velit parturient suspendisse a ad lacus mauris
                </div>
            </div>
        </div>
        <div class="service col-4">
            <div>
                <img src="img/Smile.png" class="service-pic">
            </div>
            <div class="service__text">
                <div class="service__name">Consectetur vestibulum</div>
                <div class="service__description">Consectetur vestibulum maecenas curabitur hac felis vestibulum urna
                    velit parturient suspendisse a ad lacus mauris
                </div>
            </div>
        </div>
        <div class="service col-4">
            <div>
                <img src="img/Hearth.png" class="service-pic">
            </div>
            <div class="service__text">
                <div class="service__name">Consectetur vestibulum</div>
                <div class="service__description">Consectetur vestibulum maecenas curabitur hac felis vestibulum urna
                    velit parturient suspendisse a ad lacus mauris
                </div>
            </div>
        </div>
        <div class="service col-4">
            <div>
                <img src="img/Rocket.png" class="service-pic">
            </div>
            <div class="service__text">
                <div class="service__name">Consectetur vestibulum</div>
                <div class="service__description">Consectetur vestibulum maecenas curabitur hac felis vestibulum urna
                    velit parturient suspendisse a ad lacus mauris
                </div>
            </div>
        </div>
        <div class="service col-4">
            <div>
                <img src="img/Joystick.png" class="service-pic">
            </div>
            <div class="service__text">
                <div class="service__name">Consectetur vestibulum</div>
                <div class="service__description">Consectetur vestibulum maecenas curabitur hac felis vestibulum urna
                    velit parturient suspendisse a ad lacus mauris
                </div>
            </div>
        </div>
        <div class="service col-4">
            <div>
                <img src="img/Phone.png" class="service-pic">
            </div>
            <div class="service__text">
                <div class="service__name">Consectetur vestibulum</div>
                <div class="service__description">Consectetur vestibulum maecenas curabitur hac felis vestibulum urna
                    velit parturient suspendisse a ad lacus mauris
                </div>
            </div>
        </div>
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