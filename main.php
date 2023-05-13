        <main>
            <!-- CONTAINER FOR SLIDE ONE -->
            <section class="container-slide_one" id="home">
                <!-- DEALS AND PROMOS SECTION -->

                <!-- Slider main container -->
                <section class="deals-promos">
                    <div class="deal-title">
                        <h2>deal's & promo's</h2>
                    </div>
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <img
                                    src="images/slides/barbell-dumbell.png"
                                    alt="Barbell and dumbell set promo"
                                />
                            </div>
                            <div class="swiper-slide">
                                <img
                                    src="images/slides/kettlebell.png"
                                    alt="kettlebell set promo"
                                />
                            </div>
                            <div class="swiper-slide">
                                <img
                                    src="images/slides/jump-rope.png"
                                    alt="kettlebell set promo"
                                />
                            </div>
                        </div>
                        <!-- page slide circle button -->
                        <div class="swiper-pagination"></div>

                        <!-- nav slide buttons-->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </section>

                <!-- SECTION COMPANY INTRODUCTION -->

                <section class="main-header">
                    <div class="main-title">
                        <h1>simplify</h1>
                        <div class="main-sub_title">your gym needs.</div>
                    </div>

                    <div class="main-content">
                        You're busy?, so we made it easy. Using
                        <strong>Equipify</strong>, you can buy the best quality
                        gym equipments without the hassle of going to a store.
                        All this without any compromise on quality,
                        Eco-friendliness, or portability.
                    </div>
                </section>
            </section>
            <!-- Video intro -->

            <section class="container-slide_two">
                <section class="video-intro">
                    <div class="video-wrapper">
                        <iframe
                            src="https://share.synthesia.io/embeds/videos/0c6d6252-73e1-4e6d-baaa-a6fa81a76566"
                            loading="lazy"
                            title="Synthesia video player - Your AI video"
                            allow="encrypted-media; fullscreen;"
                            class="video-review"
                            style="border: none"
                        >
                        </iframe>
                    </div>
                </section>

                <!-- Reviews section -->

                <section class="reviews-container">
                    <div class="review-wrapper">
                        <div class="review-title">
                            <h2>reviews</h2>
                        </div>
                        <div class="review-cards">
                            <div class="container-card col-card">
                                <div class="review-content">
                                    Thankfully, Equipify was a lifesaver for me!
                                    I could filter the equipment by category and
                                    then see the features of the equipment right
                                    on the product page. I was really impressed.
                                </div>
                                <div class="review-authors">
                                    <div
                                        class="review-author_profile author-content"
                                    >
                                        <img
                                            src="images/person1.jpg"
                                            alt="Person 1 profile picture"
                                            class="review-author_image"
                                        />
                                    </div>
                                    <div class="review-author_details">
                                        <div
                                            class="review-author_name author-content"
                                        >
                                            paul tomlinson
                                        </div>
                                        <div
                                            class="review-author_location author-content"
                                        >
                                            from canada
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-card col-card">
                                <div class="review-content">
                                    I love Equipify because I can order
                                    equipment online from their catalog, and
                                    they ship right to my front door. This has
                                    been a great solution for me.
                                </div>
                                <div class="review-authors">
                                    <div class="review-author_profile">
                                        <img
                                            src="images/person2.jpg"
                                            alt="Person 2 profile picture"
                                            class="review-author_image"
                                        />
                                    </div>
                                    <div class="review-author_details">
                                        <div class="review-author_name">
                                            rusty matula
                                        </div>
                                        <div class="review-author_location">
                                            from france
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-card row-card">
                                <div class="review-content">
                                    It's hard to find the right balance of
                                    stability and weight at the same time on
                                    fitness equipment, and the Equipment has a
                                    heavy enough base that feels stable without
                                    being too heavy.
                                </div>
                                <div class="review-authors">
                                    <div class="review-author_profile">
                                        <img
                                            src="images/person3.jpg"
                                            alt="Person 3 profile picture"
                                            class="review-author_image"
                                        />
                                    </div>
                                    <div class="review-author_details">
                                        <div class="review-author_name">
                                            daniel smith
                                        </div>
                                        <div class="review-author_location">
                                            from finland
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>

            <!-- ABOUT US SECTION -->

            <section class="about-us" id="about">
                <div class="content-container">
                    <div class="about-title"><h2>about us</h2></div>
                    <div class="about-content">
                        Equipify is a gym equipment Store. Here we will provide
                        you with only good gym equipment that is high quality
                        and different than others. We're dedicated to providing
                        you with the best gym equipment, with a focus on
                        high-quality materials and Eco-friendly.
                    </div>
                </div>
                <div class="about-logo">
                    <img src="images/equipify-logo.png" alt="Equipify Logo" />
                </div>
            </section>

            <!-- PRODUCTS -->

            <section class="products-container" id="product">
                <div class="products-wrapper_group">
                    <div class="products-title">
                        <h2>our products</h2>
                    </div>
                    <div class="products-cards">
                        <?php
                        $nomor = 1;
                        foreach ($rs as $row) { ?>

                        <div class="product-wrapper">
                            <div class="product-picture">
                                <img
                                    src="<?= "admin/database/uploads/".$row['image']  ?>"
                                    alt="<?= $row['nama']  ?>"
                                    class="product-image"
                                />
                            </div>
                            <div class="product-content">
                                <div class="product-title"><?= $row['nama']  ?></div>
                                <div class="product-description">
                                    <?= $row['deskripsi']  ?>
                                </div>
                                <div class="product-buy">
                                    <div class="product-cost">
                                        <?= $row['harga_beli']  ?>$
                                    </div>
                                    <a class="product_btn" href="?page=checkout_product.php&id=<?= $row['id'] ?>">
                                        <i class="bi bi-cart-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <?php } ?>
                    </div>
                </div>
            </section>

            <!-- CONTACT US -->

            <section class="contact-us">
                <div class="contact-container">
                    <div class="contact-title">
                        <h2>contact us</h2>
                    </div>
                    <div class="contact-form">
                        <form>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="Your name"
                                required
                            />
                            <input
                                type="email"
                                id="email name"
                                placeholder="Your E-mail"
                                required
                            />
                            <textarea
                                name="message"
                                id="message"
                                placeholder="Messages max-length 250-char."
                                rows="4"
                                maxlength="250"
                            ></textarea>
                            <button type="submit" name="submit" id="submit">
                                submit
                            </button>
                        </form>
                    </div>
                </div>
            </section>
        </main>