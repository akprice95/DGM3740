<?php include '_header.php';?>
      <div class="mySlider lead">
        <picture>
          <source srcset="Images/1-1200.jpg" media="(min-width: 29.25rem)" />
          <img src="Images/1-350.jpg" alt="" />
        </picture>

        <picture>
          <source srcset="Images/2-1200.jpg" media="(min-width: 29.25rem)" />
          <img src="Images/2-350.jpg" alt="" />
        </picture>
        <picture>
          <source srcset="Images/3-1200.jpg" media="(min-width: 29.25rem)" />
          <img src="Images/3-350.jpg" alt="" />
        </picture>
        <picture>
          <source srcset="Images/4-1200.jpg" media="(min-width: 29.25rem)" />
          <img src="Images/4-350.jpg" alt="" />
        </picture>
      </div>

      <!-- End Slide -->

      <!-- Blog Thumbnails -->

      <h2>Recent Blog Articles</h2>
      <div id="blog-container">
        <div class="thumbnails">
          <a href="#">
            <img src="Images/SpaceHotel.jpg" alt="Space Hotel" />
            <span>Luxury Suites Tour</span>
            <p>May 15th, 2019</p>
          </a>
        </div>

        <div class="thumbnails">
          <a href="#">
            <img
              src="Images/SpaceWalk.jpg"
              alt="Brad Pitt putting on space gear"
            />
            <span>Brad Pitt takes his first space walk</span>
            <p>August 8th, 2019</p>
          </a>
        </div>

        <div class="thumbnails">
          <a href="#">
            <img src="Images/Elon.jpg" alt="Elon Car in space" />
            <span>Elon Launches a car into space?</span>
            <p>Febuary 12th, 2018</p>
          </a>
        </div>

        <div class="thumbnails">
          <a href="#">
            <img src="Images/spaceDinner.jpg" alt="Space Dinner" />
            <span>Exotic Food imported into Space</span>
            <p>April 12th, 2019</p>
          </a>
        </div>
      </div>

      <!-- End Blog Thumbnails -->

      <div id="contactFoot">
        <div id="contact">
          <h2>Contact Us</h2>
          <p>NASA Headquarters</p>
          <a
            href="https://www.google.com/maps/dir/''/white+house+address/data=!4m5!4m4!1m0!1m2!1m1!1s0x89b7b7bcdecbb1df:0x715969d86d0b76bf?sa=X&ved=2ahUKEwiduOiKppjdAhXIc98KHU9mDFUQ9RcwIXoECAYQEQ"
          >
            <p>300 E Street SW</p>
            <p>Washington, DC 20500</p>
          </a>
          <h2>Phone</h2>
          <a id="phone" href="tel:1-800-598-5899">1-800-598-5899</a>
          <h2>Hours of Operation</h2>
          <p>Monday-Friday 9am-4pm</p>
        </div>
        <div id="newsLetter">
          <h2>Newsletter</h2>
          <p>
            Subscribe to our email list and stay up-to-date with our hottest
            offers and latest specials.
          </p>
          <form>
            <input
              class="subscription"
              type="text"
              required
              placeholder="Email"
              name="email"
            />
            <input
              class="submitBtn"
              type="submit"
              value="submit"
              name="submit"
            />
          </form>
        </div>
        <div id="why">
          <h2>Why Cabot Cruises</h2>
          <p>
            Cabot Cruises is a travel agency providing the best cruise deals on
            our online travel website. We can help you with all inclusive
            vacaMons including discounted cruises.
          </p>
          <p>
            We do not sell travel to residents of Delaware, Iowa, Florida,
            Hawaii and Washington state because those states are just wierd. If
            you are a resident of one of these states, call your congressman and
            tell them to change the regulaMons.
          </p>
        </div>
      </div>

      <div id="social">
        <div class="socialMedia">
          <i class="fa fa-facebook-official" aria-hidden="true"></i>
        </div>
        <div class="socialMedia">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </div>
        <div class="socialMedia">
          <i class="fa fa-youtube" aria-hidden="true"></i>
        </div>
        <div class="socialMedia">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </div>
        <div class="socialMedia">
          <i class="fa fa-pinterest-p" aria-hidden="true"></i>
        </div>
      </div>
    
    <?php include '_footer.php';?>
