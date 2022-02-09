<form action="" class="form contact-form" method="post">
    @csrf
    <div class="input">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div class="input">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </div>
    <div class="input">
        <label for="message">Message</label>
        <textarea name="message" id="message" cols="30" rows="5"></textarea>
    </div>
    <button type="submit">Send message</button>
</form>
