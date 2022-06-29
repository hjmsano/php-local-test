<?php
include('./lib/login.php');
include('./lib/product.php');
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Welcome to My Shop | <?php print($title) ?></title>
  <meta name="keyword" content="test-page" />
  <meta name="description" content="Lorem ipsum dolor sit amet" />
</head>

<body style="margin: 0; padding: 0;">
  <div data-trackable="main" style="width: 840px; margin: 40px 50px; padding: 0;">
    <header id="header" data-trackable="header" style="width: 100%; margin: 0; padding: 0;">
      <div data-trackable="title" style="float: left; height: 100px; width: 40%">
        <h1 id="title"><a href="/">My Shop</a></h1>
      </div>
      <form data-trackable="member" style="float: right; height: 100px; width: 60%; text-align: right;" method="POST">
        <?php print($header_html) ?>
      </form>
    </header>
    <div id="body" data-trackable="body" style="margin-left: auto; margin-right: auto; clear: both; width: 100%">
      <div id="menu" data-trackable="menu" style="float: left; width: 20%">
        <ul>
            <li><a href="./?product=prod_code_a" data-trackable="link-to-A">Product A</a></li>
            <li><a href="./?product=prod_code_b" data-trackable="link-to-B">Product B</a></li>
            <li><a href="./?product=prod_code_c" data-trackable="link-to-C">Product C</a></li>
            <li><a href="./?product=prod_code_d" data-trackable="link-to-D">Product D</a></li>
        </ul>
      </div>
      <div id="content" data-trackable="content" style="float: right; width: 80%">
        <h2><?php print($title) ?></h2>
        <p><?php print($description) ?></p>
        <?php
        if($image){
            print('<img src="' . $image . '" />');
        }
        if($price){
            print('<div>Price: ' . $price . '</div>');
            print('
            <form name="cart" id="cart" action="/cart.php" method="POST">
                <input type="hidden" name="product_id" value="' . $_GET["product"] . '" />
                <input type="submit" name="add_to_cart" id="add_to_cart" value="Add to Cart" />
            </form>');
        }
        ?>
      </div>
    </div>
    <footer id="footer" data-trackable="footer" style="clear: both;">
      <p>Copyright 2022</p>
    </footer>
  </div>
</body>
</html>
