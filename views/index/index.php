<?php  foreach($newsList as $newsItems):?>
<article class="products-list-item">
    <a class="products-list-item__link" href="/news/><?php =$newsItems['id']?>">
                     <img class="products-list-item__image" src="><?php echo $newsItems['image']?>" alt="Mango people t-shirt">
                  <h2 class="products-list-item__name"><?php echo $newsItems['title']?></h2>
                  <div class="products-list-item__cost currency">><?php echo $newsItems['price']?></div>
                  </a>
    <a class="products-list-item__cart" href="./shopcart.html">Add to cart</a></article>
<?php endforeach;?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>index_GB_eshop</title>
    <link href="./style/normalize.min.css" rel="stylesheet">
    <link href="./style/css" rel="stylesheet">
    <link href="./style/style.css" rel="stylesheet">
    <link rel="stylesheet" href="./style/jquery-ui.css">
    <script src="./js/jquery.js"></script>
    <script src="./js/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 500,
                values: [75, 300],
                slide: function(event, ui) {
                    $("#amount").val("$" + ui.values[0]);
                    $("#amountMax").val("$" + ui.values[1]);
                }
            });

            $("#amount").val("$" + $("#slider-range").slider("values", 0));
            $("#amountMax").val("$" + $("#slider-range").slider("values", 1));
        });

    </script>
</head>

<body>
    <header class="header">
        <div class="container"><a class="logo header__logo" href="./index.html"><img src="./img/logo.png" alt="Logo">bran<span class="logo__d">d</span></a>
            <div class="header__search header-search">
                <div class="header-search__browse dropdown-menu"><span class="header-search__q">Browse</span>
                    <div class="dropdown-menu__container">
                        <div class="dropdown-menu__header"><a href="./index.html#">Women</a></div>
                        <ul>
                            <li><a href="./index.html#">Dresses</a></li>
                            <li><a href="./index.html#">Tops</a></li>
                            <li><a href="./index.html#">Sweaters/Knits</a></li>
                            <li><a href="./index.html#">Jackets/Coats</a></li>
                            <li><a href="./index.html#">Blazers</a></li>
                            <li><a href="./index.html#">Denim</a></li>
                            <li><a href="./index.html#">Leggings/Pants</a></li>
                            <li><a href="./index.html#">Skirts/Shorts</a></li>
                            <li><a href="./index.html#">Accessories</a></li>
                        </ul>
                        <div class="dropdown-menu__header"><a href="./index.html#">Men</a></div>
                        <ul>
                            <li><a href="./index.html#">Tees/Tank tops</a></li>
                            <li><a href="./index.html#">Shirts/Polos</a></li>
                            <li><a href="./index.html#">Sweaters</a></li>
                            <li><a href="./index.html#">Sweatshirts/Hoodies</a></li>
                            <li><a href="./index.html#">Blazers</a></li>
                            <li><a href="./index.html#">Jackets/vests</a></li>
                        </ul>
                    </div>
                </div>
                <input class="header-search__input" type="search" placeholder="Search for Item...">
                <button class="header-search__submit" type="submit"><i class="fa fa-search"></i></button>
            </div>
            <div class="header__cartbox">
                <div class="cart dropdown-menu"><img class="cart__image" src="./img/cart.png" alt="Cart">
                    <div class="cart__items-count">2</div>
                    <div class="dropdown-menu__container">
                        <ul class="cart__items">
                            <li class="cart__item cart-item">
                                <a href="./product.html">
                         <img class="cart-item__img" src="./img/cart-item1.jpg" alt="Rebox Zane">
                    </a>
                                <div class="cart-item__text">
                                    <a class="cart-item__head" href="./product.html">Rebox Zane</a>
                                    <img class="cart-item__stars" src="./img/stars.png" alt="Rating">
                                    <div class="cart-item__count-price"><span class="cart-item__count">1</span><i> x </i><span class="cart-item__price currency">250</span></div>
                                </div><a class="cart-item__delete" href="./index.html#item-delete"><i class="fa fa-times-circle"></i></a>
                            </li>
                            <li class="cart__item cart-item"><a href="./product.html"><img class="cart-item__img" src="./img/cart-item2.jpg" alt="Rebox Zane"></a>
                                <div class="cart-item__text"><a class="cart-item__head" href="./product.html">Rebox Zane</a><img class="cart-item__stars" src="./img/stars.png" alt="Rating">
                                    <div class="cart-item__count-price"><span class="cart-item__count">1</span><i> x </i><span class="cart-item__price currency">250</span></div>
                                </div><a class="cart-item__delete" href="./index.html#item-delete"><i class="fa fa-times-circle"></i></a>
                            </li>
                        </ul>
                        <div class="cart__total-price"><span class="total-price__total">TOTAL</span><span class="total-price__price currency">500.00</span></div><a class="cart__button button-second button-second--pink" href="./checkout.html">Checkout</a><a class="cart__button button-second" href="./shopcart.html">Go to Cart</a>
                    </div>
                </div><a class="header__accaunt button-main" href="./index.html#">My Account <i class="fa fa-caret-down"></i></a>
            </div>
        </div>
    </header>
    <nav class="header-nav">
        <ul>
            <li class="mega-menu dropdown-menu active"><a href="./showcase.html">Home</a>
                <div class="dropdown-menu__container">
                    <div class="mega-menu__wrapper">
                        <div class="mega-menu__col mega-menu__col1">
                            <div class="dropdown-menu__header"><a href="./showcase.html">Women</a></div>
                            <ul>
                                <li><a href="./index.html#">Dresses</a></li>
                                <li><a href="./index.html#">Tops</a></li>
                                <li><a href="./index.html#">Sweaters/Knits</a></li>
                                <li><a href="./index.html#">Jackets/Coats</a></li>
                                <li><a href="./index.html#">Blazers</a></li>
                                <li><a href="./index.html#">Denim</a></li>
                                <li><a href="./index.html#">Leggings/Pants</a></li>
                                <li><a href="./index.html#">Skirts/Shorts</a></li>
                                <li><a href="./index.html#">Accessories</a></li>
                            </ul>
                        </div>
                        <div class="mega-menu__col mega-menu__col2">
                            <div class="dropdown-menu__header"><a href="./showcase.html">Women</a></div>
                            <ul>
                                <li><a href="./showcase.html">Dresses</a></li>
                                <li><a href="./showcase.html">Tops</a></li>
                                <li><a href="./showcase.html">Sweaters/Knits</a></li>
                                <li><a href="./showcase.html">Jackets/Coats</a></li>
                            </ul>
                            <div class="dropdown-menu__header"><a href="./showcase.html">Women</a></div>
                            <ul>
                                <li><a href="./index.html#">Dresses</a></li>
                                <li><a href="./index.html#">Tops</a></li>
                                <li><a href="./index.html#">Sweaters/Knits</a></li>
                            </ul>
                        </div>
                        <div class="mega-menu__col mega-menu__col3">
                            <div class="dropdown-menu__header"><a href="./showcase.html">Women</a></div>
                            <ul>
                                <li><a href="./showcase.html">Dresses</a></li>
                                <li><a href="./showcase.html">Tops</a></li>
                                <li><a href="./showcase.html">Sweaters/Knits</a></li>
                                <li><a href="./showcase.html">Jackets/Coats</a></li>
                            </ul><a class="mega-menu__img" href="./product.html"><img src="./img/mm-subersale.jpg" alt="Super Sale!">
                  <div class="mega-menu__img-slogan">Super sale!</div></a>
                        </div>
                    </div>
                </div>
            </li>
            <li><a href="./showcase.html">Man</a></li>
            <li><a href="./showcase.html">Women</a></li>
            <li><a href="./showcase.html">Kids</a></li>
            <li><a href="./showcase.html">Accoseriese</a></li>
            <li><a href="./showcase.html">Featured</a></li>
            <li><a href="./showcase.html">Hot Deals</a></li>
        </ul>
    </nav>
    <section class="content products-catalog">
        <header class="breadcrumbs">
            <div class="container">
                <h1 class="h1 breadcrumbs__title">New Arrivals</h1>
                <ul class="breadcrumbs_breadcrumb">
                    <li><a href="./index.html">Home</a></li>
                    <li><a href="./showcase.html">Man</a></li>
                    <li>New Arrivals</li>
                </ul>
            </div>
        </header>
        <div class="products-catalog__main container">
            <div class="products-catalog__categories categories">
                <div class="categories-single active">
                    <div class="categories-single__name">Category<i class="categories-single__carret fa"></i></div>
                    <ul class="categories-single__list">
                        <li><a href="./showcase.html">Accessories</a></li>
                        <li><a href="./showcase.html">Bags</a></li>
                        <li><a href="./showcase.html">Denim</a></li>
                        <li><a href="./showcase.html">Hoodies &amp; Sweatshirts</a></li>
                        <li><a href="./showcase.html">Jackets &amp; Coats</a></li>
                        <li><a href="./showcase.html">Pants</a></li>
                        <li><a href="./showcase.html">Polos</a></li>
                        <li><a href="./showcase.html">Shirts</a></li>
                        <li><a href="./showcase.html">Shoes</a></li>
                        <li><a href="./showcase.html">Shorts</a></li>
                        <li><a href="./showcase.html">Sweaters &amp; Knits</a></li>
                        <li><a href="./showcase.html">T-Shirts</a></li>
                        <li><a href="./showcase.html">Tanks</a></li>
                    </ul>
                </div>
                <div class="categories-single">
                    <div class="categories-single__name">Brand<i class="categories-single__carret fa"></i></div>
                    <ul class="categories-single__list">
                        <li><a href="./showcase.html">Accessories</a></li>
                        <li><a href="./showcase.html">Bags</a></li>
                        <li><a href="./showcase.html">Denim</a></li>
                        <li><a href="./showcase.html">Hoodies &amp; Sweatshirts</a></li>
                        <li><a href="./showcase.html">Jackets &amp; Coats</a></li>
                        <li><a href="./showcase.html">Pants</a></li>
                        <li><a href="./showcase.html">Polos</a></li>
                        <li><a href="./showcase.html">Shirts</a></li>
                        <li><a href="./showcase.html">Shoes</a></li>
                        <li><a href="./showcase.html">Shorts</a></li>
                        <li><a href="./showcase.html">Sweaters &amp; Knits</a></li>
                        <li><a href="./showcase.html">T-Shirts</a></li>
                        <li><a href="./showcase.html">Tanks</a></li>
                    </ul>
                </div>
                <div class="categories-single">
                    <div class="categories-single__name">Designer<i class="categories-single__carret fa"></i></div>
                    <ul class="categories-single__list">
                        <li><a href="./showcase.html">Accessories</a></li>
                        <li><a href="./showcase.html">Bags</a></li>
                        <li><a href="./showcase.html">Denim</a></li>
                        <li><a href="./showcase.html">Hoodies &amp; Sweatshirts</a></li>
                        <li><a href="./showcase.html">Jackets &amp; Coats</a></li>
                        <li><a href="./showcase.html">Pants</a></li>
                        <li><a href="./showcase.html">Polos</a></li>
                        <li><a href="./showcase.html">Shirts</a></li>
                        <li><a href="./showcase.html">Shoes</a></li>
                        <li><a href="./showcase.html">Shorts</a></li>
                        <li><a href="./showcase.html">Sweaters &amp; Knits</a></li>
                        <li><a href="./showcase.html">T-Shirts</a></li>
                        <li><a href="./showcase.html">Tanks</a></li>
                    </ul>
                </div>
            </div>
            <div class="products-catalog__content">
                <form class="products-catalog__filter catalog-filter">
                    <div class="catalog-filter__single products-catalog__trending">
                        <div class="catalog-filter__title">Trending now</div>
                        <ul class="products-catalog__trending-list">
                            <li><a href="./showcase.html#">Bohemian</a></li>
                            <li><a href="./showcase.html#">Floral</a></li>
                            <li><a href="./showcase.html#">Lace</a></li>
                        </ul>
                        <ul class="products-catalog__trending-list">
                            <li><a href="./showcase.html#">Floral</a></li>
                            <li><a href="./showcase.html#">Lace</a></li>
                            <li><a href="./showcase.html#">Bohemian</a></li>
                        </ul>
                    </div>
                    <div class="catalog-filter__single products-catalog__size">
                        <div class="catalog-filter__title">Size</div>
                        <ul class="products-catalog__size-list">
                            <li>
                                <input type="checkbox" name="xxs" id="xxs">
                                <label for="xxs">xxs</label>
                            </li>
                            <li>
                                <input type="checkbox" name="xs" id="xs">
                                <label for="xs">xs</label>
                            </li>
                            <li>
                                <input type="checkbox" name="s" id="s">
                                <label for="s">s</label>
                            </li>
                            <li>
                                <input type="checkbox" name="m" id="m">
                                <label for="m">m</label>
                            </li>
                            <li>
                                <input type="checkbox" name="l" id="l">
                                <label for="l">l</label>
                            </li>
                            <li>
                                <input type="checkbox" name="xl" id="xl">
                                <label for="xl">xl</label>
                            </li>
                            <li>
                                <input type="checkbox" name="xxl" id="xxl">
                                <label for="xxl">xxl</label>
                            </li>
                        </ul>
                    </div>
                    <div class="catalog-filter__single products-catalog__price">
                        <div class="catalog-filter__title ">
                            <div class="catalog-filter__title">Price</div>
                            <div id="slider-range"></div>
                            <div class="priceSlider">
                                <input type="text" size="9" id="amount" readonly style="border:0; color:#f16d7f; font-weight:bold;">
                                <input type="text" size="9" id="amountMax" readonly style="border:0; color:#f16d7f; font-weight:bold;text-align: right;">
                            </div>
                        </div>

                        <!--input class="products-catalog__range" type="range" min="0" step="1" max="10"-b-><span id="amount" class="products-catalog__price-min">$52</span><span id="maxPrice" class="products-catalog__price-max">$400</span-->
                    </div>
                </form>
                <form class="products-catalog__sort">
                    <div class="input-addon">Sort by</div>
                    <select name="sort">
              <option value="9" selected="">Name</option>
            </select>
                    <div class="input-addon">Show</div>
                    <select name="show" id="sort-show">
              <option value="9" selected="">09</option>
            </select>
                </form>
                <div class="products-catalog__products products-list products-list--catalog">
                    <article class="products-list-item"><a class="products-list-item__link" href="./product.html"><img class="products-list-item__image" src="./img/featured-item1.jpg" alt="Mango people t-shirt">
                  <h2 class="products-list-item__name">Mango people t-shirt</h2>
                  <div class="products-list-item__cost currency">52.00</div></a><a class="products-list-item__cart" href="./shopcart.html">Add to cart</a></article>
                    <article class="products-list-item"><a class="products-list-item__link" href="./product.html"><img class="products-list-item__image" src="./img/featured-item2.jpg" alt="Mango people t-shirt">
                  <h2 class="products-list-item__name">Mango people t-shirt</h2>
                  <div class="products-list-item__cost currency">52.00</div></a><a class="products-list-item__cart" href="./shopcart.html">Add to cart</a></article>
                    <article class="products-list-item"><a class="products-list-item__link" href="./product.html"><img class="products-list-item__image" src="./img/featured-item3.jpg" alt="Mango people t-shirt">
                  <h2 class="products-list-item__name">Mango people t-shirt</h2>
                  <div class="products-list-item__cost currency">52.00</div></a><a class="products-list-item__cart" href="./shopcart.html">Add to cart</a></article>
                    <article class="products-list-item"><a class="products-list-item__link" href="./product.html"><img class="products-list-item__image" src="./img/featured-item4.jpg" alt="Mango people t-shirt">
                  <h2 class="products-list-item__name">Mango people t-shirt</h2>
                  <div class="products-list-item__cost currency">52.00</div></a><a class="products-list-item__cart" href="./shopcart.html">Add to cart</a></article>
                    <article class="products-list-item"><a class="products-list-item__link" href="./product.html"><img class="products-list-item__image" src="./img/featured-item5.jpg" alt="Mango people t-shirt">
                  <h2 class="products-list-item__name">Mango people t-shirt</h2>
                  <div class="products-list-item__cost currency">52.00</div></a><a class="products-list-item__cart" href="./shopcart.html">Add to cart</a></article>
                    <article class="products-list-item"><a class="products-list-item__link" href="./product.html"><img class="products-list-item__image" src="./img/featured-item6.jpg" alt="Mango people t-shirt">
                  <h2 class="products-list-item__name">Mango people t-shirt</h2>
                  <div class="products-list-item__cost currency">52.00</div></a><a class="products-list-item__cart" href="./shopcart.html">Add to cart</a></article>
                    <article class="products-list-item"><a class="products-list-item__link" href="./product.html"><img class="products-list-item__image" src="./img/featured-item7.jpg" alt="Mango people t-shirt">
                  <h2 class="products-list-item__name">Mango people t-shirt</h2>
                  <div class="products-list-item__cost currency">52.00</div></a><a class="products-list-item__cart" href="./shopcart.html">Add to cart</a></article>
                    <article class="products-list-item"><a class="products-list-item__link" href="./product.html"><img class="products-list-item__image" src="./img/featured-item8.jpg" alt="Mango people t-shirt">
                  <h2 class="products-list-item__name">Mango people t-shirt</h2>
                  <div class="products-list-item__cost currency">52.00</div></a><a class="products-list-item__cart" href="./shopcart.html">Add to cart</a></article>
                    <article class="products-list-item"><a class="products-list-item__link" href="./product.html"><img class="products-list-item__image" src="./img/featured-item1.jpg" alt="Mango people t-shirt">
                  <h2 class="products-list-item__name">Mango people t-shirt</h2>
                  <div class="products-list-item__cost currency">52.00</div></a><a class="products-list-item__cart" href="./shopcart.html">Add to cart</a></article>
                </div>
                <div class="products-catalog__pager">
                    <ul class="pager">
                        <li class="pager__left active"><a href="./showcase.html#"><i class="fa fa-chevron-left"></i></a></li>
                        <li class="active"><a href="./showcase.html#">1</a></li>
                        <li><a href="./showcase.html#">2</a></li>
                        <li><a href="./showcase.html#">3</a></li>
                        <li><a href="./showcase.html#">4</a></li>
                        <li><a href="./showcase.html#">5</a></li>
                        <li><a href="./showcase.html#">6</a></li>
                        <li>..</li>
                        <li><a href="./showcase.html#">20</a></li>
                        <li class="pager__right"><a href="./showcase.html#"><i class="fa fa-chevron-right"></i></a></li>
                    </ul><a class="button-second button-second--pink catalog__button">View all</a>
                </div>
            </div>
        </div>
    </section>
    <aside class="products-catalog___offers-block">
        <ul class="products-catalog___offers container offers offers--inline">
            <li class="offer-item"><img class="offer-item__img" src="./img/offer-delivery.png" alt="Free delivery">
                <div class="offer-item__text">
                    <div class="offer-item__name">Free delivery</div>
                    <div class="offer-item__desc">Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models.</div>
                </div>
            </li>
            <li class="offer-item"><img class="offer-item__img" src="./img/offer-sales.png" alt="Sales &amp; discounts">
                <div class="offer-item__text">
                    <div class="offer-item__name">Sales &amp; discounts</div>
                    <div class="offer-item__desc">Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models.</div>
                </div>
            </li>
            <li class="offer-item"><img class="offer-item__img" src="./img/offer-quality.png" alt="Quality assurance">
                <div class="offer-item__text">
                    <div class="offer-item__name">Quality assurance</div>
                    <div class="offer-item__desc">Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models.</div>
                </div>
            </li>
        </ul>
    </aside>
    <aside class="subrevs">
        <div class="container">
            <div class="subrevs__block">
                <div class="reviews"><img class="reviews__image" src="./img/user1.png" alt="User photo">
                    <div class="reviews__text">“Vestibulum quis porttitor dui! Quisque viverra nunc mi, a pulvinar purus condimentum a. Aliquam condimentum mattis neque sed pretium”
                        <div class="reviews__author reviev-author">
                            <div class="reviev-author__name">Bin Burhan</div>
                            <div class="reviev-author__desc">Dhaka, Bd</div>
                        </div>
                        <ul class="reviews__paginator">
                            <li class="rev1"><a href="./showcase.html#rev1"></a></li>
                            <li class="active"><a href="./showcase.html#active"></a></li>
                            <li class="rev3"><a href="./showcase.html#rev3"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="subrevs__block">
                <div class="subscribe">
                    <div class="subscribe__h1">Subscribe</div>
                    <div class="subscribe__h2">FOR OUR NEWLETTER AND PROMOTION</div>
                    <div class="subscribe__input">
                        <input class="text" type="email" placeholder="Enter Your Email">
                        <button class="button" type="submit">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <div class="about container">
        <div class="about__text"><a class="about__logo logo" href="./index.html"><img src="./img/logo.png" alt="Logo">bran<span class="logo__d">d</span></a>
            <p>Objectively transition extensive data rather than cross functional solutions. Monotonectally syndicate multidisciplinary materials before go forward benefits. Intrinsicly syndicate an expanded array of processes and cross-unit partnerships.</p>
            <p>Efficiently plagiarize 24/365 action items and focused infomediaries. Distinctively seize superior initiatives for wireless technologies.<br>Dynamically optimize.</p>
        </div>
        <nav class="about__menu">
            <h2>Company</h2>
            <ul>
                <li><a href="./showcase.html">Home</a></li>
                <li><a href="./showcase.html">Shop</a></li>
                <li><a href="./showcase.html">About</a></li>
                <li><a href="./showcase.html">How it works</a></li>
                <li><a href="./showcase.html">Contact</a></li>
            </ul>
        </nav>
        <nav class="about__menu">
            <h2>Information</h2>
            <ul>
                <li><a href="./showcase.html">Tearms &amp; Condition</a></li>
                <li><a href="./showcase.html">Privacy Policy</a></li>
                <li><a href="./showcase.html">How to Buy</a></li>
                <li><a href="./showcase.html">How to Sell</a></li>
                <li><a href="./showcase.html">Promotion</a></li>
            </ul>
        </nav>
        <nav class="about__menu">
            <h2>Shop Category</h2>
            <ul>
                <li><a href="./showcase.html">Men</a></li>
                <li><a href="./showcase.html">Women</a></li>
                <li><a href="./showcase.html">Child</a></li>
                <li><a href="./showcase.html">Apparel</a></li>
                <li><a href="./showcase.html">Brows All</a></li>
            </ul>
        </nav>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="footer__copy">© 2017 Brand All Rights Reserved.</div>
            <div class="footer__socials"><a href="./showcase.html" title="facebook"><i class="fa fa-facebook"></i></a><a href="./showcase.html" title="twitter"><i class="fa fa-twitter"></i></a><a href="./showcase.html" title="linkedin"><i class="fa fa-linkedin"></i></a><a href="./showcase.html" title="pinterest-p"><i class="fa fa-pinterest-p"></i></a><a href="./showcase.html" title="google-plus"><i class="fa fa-google-plus"></i></a>
            </div>
        </div>
    </footer>

</body>

</html>
