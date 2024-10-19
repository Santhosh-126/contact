    <!-- Contact Section -->
    <section class="contact" id="contact">
      <h2 class="section_title">Contact Us</h2>
      <div class="section_container">
        <div class="contact_container">
          <div class="contact_form">
            <form action="connect.php" method="POST">
              <div class="field">
                <label for="Name">Full Name<em>*</em></label>
                <input type="text" id="Name" name="name"  placeholder="Your Name" required />
              </div>
              <div class="field">
                <label for="email">Your Email<em>*</em></label>
                <input
                  type="text"
                  id="email" name="email"
                  placeholder="Your Email"
                  required
                />
              </div>
              <div class="field">
                <label for="number">Your Number<em>*</em></label>
                <input
                  type="number"
                  id="number" name="number"
                  placeholder="Your Contact Number"
                  required
                />
              </div>
              <div class="field">
                <label for="textarea">Textarea<em>*</em></label>
                <textarea
                  name="textarea"
                  id="textarea" name="textarea"
                  placeholder="Your Message"
                ></textarea>
              </div>

              <button class="button" id="submit">Submit</button>
              <div class="sucess">
                <strong>Success</strong>
              </div>
            
            </form>
          </div>