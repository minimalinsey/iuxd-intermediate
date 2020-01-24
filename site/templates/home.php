<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/home.css">
    <title>Service Blueprint</title>
  </head>
  <body>
    
<main>
  <article class="note">
    <header class="note-header intro"></header>

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="header-title">
                <h1><?= $page->title() ?></h1>
                <time class="note-date"><?= $page->date()->toDate('d F Y') ?></time>
                <?php if ($page->tags()->isNotEmpty()) : ?>
                <p class="note-tags tags"><?= $page->tags() ?></p>
                <?= $page->IntroText()->kt() ?>
                <?php endif ?>
            </div>
        </div>
    </div>

    <section class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="what">
                    <?= $page->WhatTitle()->kt() ?>
                    <?= $page->WhatText()->kt() ?>
                </div>
                <div class="whattwo">
                    <?= $page->WhatTitleTwo()->kt() ?>
                    <?= $page->WhatTextTwo()->kt() ?>
                     <div class="when">
                        <?= $page->WhenText()->kt() ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--- accordion ---> 
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="how">
                 <?= $page->HowTitle()->kt() ?>
                 <?= $page->HowText()->kt() ?>
                <div class="accordion" id="accordionExample">
                    <div class="cardone">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <?= $page->TitleFirst()->kt() ?> 
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <?= $page->TextFirst()->kt() ?> 
                            </div>
                        </div>
                    </div>
                    <div class="cardtwo">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <?= $page->TitleSecond()->kt() ?> 
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <?= $page->TextSecond()->kt() ?> 
                            </div>
                        </div>
                    </div>
                    <div class="cardthree">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <?= $page->TitleThird()->kt() ?> 
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <?= $page->TextThird()->kt() ?>
                            </div>
                        </div>
                    </div>
                    <div class="cardfour">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <?= $page->TitleFourth()->kt() ?> 
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                                    <?= $page->TextFourth()->kt() ?>
                            </div>
                        </div>
                    </div>
                    <div class="cardfive">
                        <div class="card-header" id="headingFive">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <?= $page->TitleFifth()->kt() ?> 
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                            <div class="card-body">
                                    <?= $page->TextFifth()->kt() ?>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!--- accordion ---> 

    <section class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="what">
                    <?= $page->TitleImplement()->kt() ?>
                    <?= $page->TextImplement()->kt() ?>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="bronnen">
                    <?= $page->BronnenTitle()->kt() ?>
                    <?= $page->BronnenText()->kt() ?>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </article>
</main>

<?php snippet('footer') ?>
