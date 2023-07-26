<main class="grid-container">
    <section class="contact-form">
        <h1>Contact Us</h1>
        <form data-abide novalidate>
            <div class="grid-x grid-padding-x">
                <div class="medium-6 cell">
                    <label>Name
                        <input type="text" placeholder="Your name" required>
                        <span class="form-error">
                                    Name is required.
                                </span>
                    </label>
                </div>
                <div class="medium-6 cell">
                    <label>Email
                        <input type="email" placeholder="Your email" required pattern="email">
                        <span class="form-error">
                                    I'm required!
                                </span>
                    </label>
                </div>
                <div class="medium-12 cell">
                    <label>Message
                        <textarea placeholder="Your message" required></textarea>
                        <span class="form-error">
                                    Message is required.
                                </span>
                    </label>
                </div>
                <div class="medium-12 cell">
                    <button type="submit" class="button">Submit</button>
                </div>
            </div>
        </form>
    </section>
</main>