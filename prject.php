<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Web</title>
    <link rel="stylesheet" href="project.css">
    <link rel="icon" href="a.png">
    
</head>

    <?php
        include'navbar.php';
        include'connection.php';
    ?>
<body style="background-color: rgb(105, 137, 189);">
   <main>
    <div class="maindiv">
        <h1><i>Title of a longer featured blog post</i></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil alias distinctio praesentium, ipsa eveniet harum voluptate </p>
        <a href=""><b>Continue reading ...</b></a>
    </div><br>
    <section id="container">
    <div class="left1">
        <small><b>World<br></b></small>
        <h3>featured post<br></h3>
        <h6 style="color: rgb(85, 78, 78);">Nov 12<br></h6>
        <h5> This is a widercard with supporting text below as a natural lead into additional content<br></h5>
        <a href="">continue reading</a>
    </div>
    <div class="left2">
       thumbnail </div>
    <div class="right1">
        <small><b>Design<br></b></small>
        <h3>post title<br></h3>
        <h6 style="color: rgb(85, 81, 81);">Nov 11<br></h6>
        <h5>This is a widercard with supporting text below as a natural lead into additional content<br></h5>
        <a href="">continue reading</a>
    </div>
    <div class="right2">thumbnail<br></div>
</section>
<section class="seccontainer">
<div id="container2">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim nemo deleniti, ipsum dolor sit amet consectetur icta sed hic illum maiores, ad voluptatibus, blanditiis vel  sit facere molestiae dicta officia! Autem molestias, eaque iusto, earum consequuntur, natus quas sequi quaerat dolorem praesentium consequatur perspiciatis?</p>
    <h2 style="font-size: x-large;"">Blockquote</h2>
    <p>This is an example of blockquotes</p>
    <blockquote>Quoted text goes  here.</blockquote>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum nulla unde aut alias debitis laudantium ducimus quae dolore reprehenderit est provident non tempora dolorem aliquam doloremque consectetur, repellendus fugit eveniet!</p>
    <h2>Example lists</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, saepe! Aliquid, omnis natus. Dignissimos dolorum velit dicta totam, omnis quis voluptatem, laborum voluptas repellendus unde eligendi ut voluptate incidunt culpa?</p>
    <ul style="margin-left: 40px;">
        <li>first list item</li>
        <li>second list item with a longer description</li>
        <li>third list item to close it out</li>
    </ul>
    <p>And this is an ordered list</p>
    <ol style="margin-left: 40px;">
        <li>first list item</li>
        <li>second list item with a longer description</li>
        <li>third list item to close it out</li>
    </ol>
    <?php
    include'data_entered.php';
    ?>

</div>
<div id="nestcontainer1">
<div id="container3">
  <h2 ><b><i>About</i></b></h2>
  <p style="font-size:smaller">Lorem ipsum dolor sit amet consectetur icta sed hic illum maiores, ad voluptatibus, blanditiis vel error laudantium? Recusandae temporibus laudantium ex enim hic aperiam accusamus.</p>  
</div>
<div id="container4">
    <h2><i>Archives</i></h2>
    <ul style="list-style-type: none;line-height:25px;">
        <li><a href="">March 2021</a></li>
        <li><a href="">Feburuary 2021</a></li>
        <li><a href="">January 2021</a></li>
        <li><a href="">December 2020</a></li>
        <li><a href="">November 2020</a></li>
        <li><a href="">October 2020</a></li>
        <li><a href="">September 2020</a></li>
        <li><a href="">August 2020</a></li>
        <li><a href="">July 2001</a></li>
        <li><a href="">June 2020</a></li>
        <li><a href="">May 2020</a></li>
        <li><a href="">April 2020</a></li>
    </ul>
    <h2>Elsewhere</h2>
    <ul style="list-style-type: none; line-height:25px;">
        <li><a href="">Github</a></li>
        <li><a href="">twitter</a></li>
        <li><a href="">Facebook</a></li>
    </ul>
</div>
</div>
</section>
</main>
</body>
</html>