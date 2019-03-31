<div class="video">
<iframe src="https://www.youtube.com/embed/CoorcqbkpI0" frameborder="0" allow="accelerometer; autoplay;
 encrypted-media; gyroscope; picture-in-picture" allowfullscreen> </iframe>
    <div class="container">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi nostrum minima ipsam quisquam 
        mollitia inventore? Illo, deserunt et ipsa repudiandae eaque obcaecati illum voluptates harum modi esse unde, quia impedit.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut voluptatibus sit laudantium nostrum voluptatum ullam autem quos,
        debitis suscipit quae quas nam voluptates repudiandae blanditiis doloribus accusamus labore ea libero.
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