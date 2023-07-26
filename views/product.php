<article class="grid-container">
    <div class="grid-x grid-margin-x">
        <div class="medium-6 cell">
            <img class="thumbnail" src="https://placehold.it/650x350">
            <div class="grid-x grid-padding-x small-up-4">
                <div class="cell">
                    <img src="https://placehold.it/250x200">
                </div>
                <div class="cell">
                    <img src="https://placehold.it/250x200">
                </div>
                <div class="cell">
                    <img src="https://placehold.it/250x200">
                </div>
                <div class="cell">
                    <img src="https://placehold.it/250x200">
                </div>
            </div>
        </div>
        <div class="medium-6 large-5 cell large-offset-1">
            <h3><?= $products['name'] ?></h3>
            <p><?= $product['description'] ?></p>

            <label>Size
                <select>
                    <option value="husker">Small</option>
                    <option value="starbuck">Medium</option>
                    <option value="hotdog">Large</option>
                    <option value="apollo">Yeti</option>
                </select>
            </label>

            <div class="grid-x">
                <div class="small-3 cell">
                    <label for="middle-label" class="middle">Quantity</label>
                </div>
                <div class="small-9 cell">
                    <input type="text" id="middle-label" placeholder="One fish two fish">
                </div>
            </div>

            <a href="#" class="button large expanded">Buy Now</a>

            <div class="small secondary expanded button-group">
                <a class="button">Facebook</a>
                <a class="button">Twitter</a>
                <a class="button">Yo</a>
            </div>
        </div>
    </div>

    <div class="">
        <hr>
        <ul class="tabs" data-tabs="" id="example-tabs" role="tablist" data-e="7yqvd7-e">
            <li class="tabs-title is-active" role="presentation"><a href="#panel1" aria-selected="true" role="tab" aria-controls="panel1" id="panel1-label" tabindex="0">Reviews</a></li>
            <li class="tabs-title" role="presentation"><a href="#panel2" role="tab" aria-controls="panel2" aria-selected="false" id="panel2-label" tabindex="-1">Similar Products</a></li>
        </ul>
        <div class="tabs-content" data-tabs-content="example-tabs">
            <div class="tabs-panel is-active" id="panel1" role="tabpanel" aria-labelledby="panel1-label">
                <h4>Reviews</h4>
                <div class="media-object stack-for-small">
                    <div class="media-object-section">
                        <img class="thumbnail" src="https://placehold.it/200x200">
                    </div>
                    <div class="media-object-section">
                        <h5>Mike Stevenson</h5>
                        <p>I'm going to improvise. Listen, there's something you should know about me... about inception. An idea is like a virus, resilient, highly contagious. The smallest seed of an idea can grow. It can grow to define or destroy you.</p>
                    </div>
                </div>
                <div class="media-object stack-for-small">
                    <div class="media-object-section">
                        <img class="thumbnail" src="https://placehold.it/200x200">
                    </div>
                    <div class="media-object-section">
                        <h5>Mike Stevenson</h5>
                        <p>I'm going to improvise. Listen, there's something you should know about me... about inception. An idea is like a virus, resilient, highly contagious. The smallest seed of an idea can grow. It can grow to define or destroy you</p>
                    </div>
                </div>
                <div class="media-object stack-for-small">
                    <div class="media-object-section">
                        <img class="thumbnail" src="https://placehold.it/200x200">
                    </div>
                    <div class="media-object-section">
                        <h5>Mike Stevenson</h5>
                        <p>I'm going to improvise. Listen, there's something you should know about me... about inception. An idea is like a virus, resilient, highly contagious. The smallest seed of an idea can grow. It can grow to define or destroy you</p>
                    </div>
                </div>
                <label>
                    My Review
                    <textarea placeholder="None"></textarea>
                </label>
                <button class="button">Submit Review</button>
            </div>
            <div class="tabs-panel" id="panel2" role="tabpanel" aria-labelledby="panel2-label" aria-hidden="true">
                <div class="grid-x grid-margin-x medium-up-3 large-up-5">
                    <div class="cell">
                        <img class="thumbnail" src="https://placehold.it/350x200">
                        <h5>Other Product <small>$22</small></h5>
                        <p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam.</p>
                        <a href="#" class="button hollow tiny expanded">Buy Now</a>
                    </div>
                    <div class="cell">
                        <img class="thumbnail" src="https://placehold.it/350x200">
                        <h5>Other Product <small>$22</small></h5>
                        <p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam.</p>
                        <a href="#" class="button hollow tiny expanded">Buy Now</a>
                    </div>
                    <div class="cell">
                        <img class="thumbnail" src="https://placehold.it/350x200">
                        <h5>Other Product <small>$22</small></h5>
                        <p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam.</p>
                        <a href="#" class="button hollow tiny expanded">Buy Now</a>
                    </div>
                    <div class="cell">
                        <img class="thumbnail" src="https://placehold.it/350x200">
                        <h5>Other Product <small>$22</small></h5>
                        <p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam.</p>
                        <a href="#" class="button hollow tiny expanded">Buy Now</a>
                    </div>
                    <div class="cell">
                        <img class="thumbnail" src="https://placehold.it/350x200">
                        <h5>Other Product <small>$22</small></h5>
                        <p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam.</p>
                        <a href="#" class="button hollow tiny expanded">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>