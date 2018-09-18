<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Contact Form</title>
        <link rel="stylesheet" type="text/css" href="resources/css/style.css" />
    </head>

    <body>
        <div class="container">
            <div class="form-box">
                <form id="contact">
                    <section class="header">
                        <h2>Contact</h2>
                    </section>

                    <section class="form-section">
                        <input type="text" name="name" placeholder="Full Name" required>
                    </section>

                    <section class="form-section">
                        <input type="email" name="email" placeholder="Email" required>
                    </section>

                    <section class="form-section">
                        <textarea type="text" name="msg" placeholder="Enter Message" required></textarea>
                    </section>

                    <section class="form-section">
                        <button type="submit" id="submit">Send Message</button>
                    </section>            
                </form>
            </div>
        </div>

    </body>
</html>