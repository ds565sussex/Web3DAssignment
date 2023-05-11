<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="./css/bootstrap-4.4.1.css">
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/custom.css">
   

    <title>Assignment</title>
    <script src="./js/popper.min.js" crossorigin="anonymous"></script>
    <script src="./js/jquery-3.4.1.js"></script>
    <script src="./js/bootstrap-4.4.1.js"></script>
    <script src="./js/swap.js"></script>
    <script src='./js/x3dom.js'></script>
    <script src='./js/modelInteraction.js'></script>
    <script src='./js/getJsonData.js'></script>
    <script src='./js/custom.js'></script>
    <script src="https://kit.fontawesome.com/6ac3910c4e.js" crossorigin="anonymous"></script>

  </head>
<body>
<nav class="navbar navbar-dark sticky-top navbar-expand-sm" style="background-color: black">
    <div class="container d-flex align-items-center justify-content-center flex-column">
        <div class=" collapse navbar-collapse logo">
        <a class="navbar-brand" href="javascript:swap('home')">
            <h1>1</h1>
            <h1>oca</h1>
            <h2>Cola</h2>
        </a>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex align-items-center">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"> <a class="nav-link active" href="javascript:swap('coke'); javascript:cokeScene();">Coke <span class="dot">•</span> </a> </li>
                    <li class="nav-item"> <a class="nav-link active" href="javascript:swap('sprite'); javascript:spriteScene();">Sprite <span class="dot">•</span> </a> </li>
                    <li class="nav-item"> <a class="nav-link active" href="javascript:swap('pepper'); javascript:pepperCanScene();">Dr Pepper <span class="dot">•</span> </a> </li>
                    <li class="nav-item"><a class="nav-link active" href="javascript:swap('fanta'); javascript:fantaScene();">Fanta </a> </li>
                </ul>
            </div>
        </div>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
    </button>
</nav>


<div class="container-fluid">

    <div id="home" style="display: block;">
        <div class="d-flex align-items-center justify-content-center"  style="margin-top: 20px">
            <div class="title">Ou<span id="underline" >r Bran</span>ds</div>     
        </div>

        <div class="row justify-content-center" style="margin-top: 20px">
            <div class="col-sm-4 col-12 text-center">
                <div class="coke-card">
                    
                    <div class="card" style="min-height: 300px;"  >
   
                        <div class="card-body d-flex align-items-center justify-content-center flex-column">
                            <div class="coke-card-txt">
                                <h1>1</h1>
                                <h1>oca</h1>
                                <h2>Cola</h2>
                            </div>
                            <a href="javascript:swap('coke'); javascript:cokeScene();" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12 text-center">
                <div class="sprite-card">
                    <div class="card" style="min-height: 300px;" >
                        <div class="card-body d-flex align-items-center justify-content-center flex-column">
                            <div class="sprite-card-txt">
                                <h1>Sprite</h1>
                            </div>
                            <a href="javascript:swap('sprite'); javascript:spriteScene();" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" style="margin-top: 20px">
        <div class="col-sm-4 col-12 text-center">
                <div class="fanta-card">
                    <div class="card" style="min-height: 300px;" >
                        <div class="card-body d-flex align-items-center justify-content-center flex-column">
                            <div class="fanta-card-txt">
                                <h1>Fanta</h1>
                            </div>
                        </div>
                        <a href="javascript:swap('fanta'); javascript:fantaScene();" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12 text-center">
            <div class="pepper-card">
                    <div class="card" style="min-height: 300px;" >
                        <div class="card-body d-flex align-items-center justify-content-center flex-column">
                            <div class="pepper-card-txt">
                                <h1>Dr Pepper</h1>
                            </div>
                            <a href="javascript:swap('pepper'); javascript:pepperCanScene();" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div id="pages" style="display: none;">


    <div class="row">
        <div class= "col-sm-9">
        <div id="coke" style="display: none;">  

            <div class="text-center">
            <div id="title_coke"class="page-title"></div>
            <div class="sub-title">
                <div id="desc_coke" class="sub-title-text">
             </div>
            </div>
            </div>
            <div class="d-flex justify-content-center">
                <ul class="nav ">
                    <li class="nav-item text-center ">
                        <a class="nav-link active" href="javascript:cokeScene()">Bottle</a>
                    </li>
                    <li class="nav-item text-center ">
                        <a class="nav-link" href="javascript:cokeCanScene()">Can</a>
                    </li>
                </ul>
            </div>
            
        </div>

        <div id="sprite" style="display: none;">
        <div class="text-center ">
                 <div id="title_sprite"class="page-title"></div>
                 <div class="sub-title">
                    <div id="desc_sprite" class="sub-title-text">
                    </div>
                </div>
            </div>
        </div>
        <div id="pepper" style="display: none;">
        <div class="text-center">
        <div id="title_pepper"class="page-title"></div>
            <div class="sub-title">
                <div id="desc_pepper" class="sub-title-text">
                </div>
            </div>
            </div>
        </div>
        <div id="fanta" style="display: none;">
        <div class="text-center">
        <div id="title_fanta"class="page-title"></div>

            <div class="sub-title">
                <div id="desc_fanta" class="sub-title-text">
                </div>
            </div>
</div>
        </div>


                <div class="d-flex align-items-center justify-content-center"  style="margin-top: 20px">
                    <div class="model3D">
                        <x3d  id="model" width="100%" height="400px">
                            <scene>
                                <Switch whichChoice="0" id="SceneSwitch">
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" url="./assets/x3d/cokebottle.x3d"> </inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true"  url="./assets/x3d/sprite_bottle.x3d"> </inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" url="./assets/x3d/fanta.x3d"> </inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" url="./assets/x3d/coke_can.x3d"> </inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" url="./assets/x3d/pepper_can.x3d"> </inline>
                                    </transform>
                            </scene>
                        </x3d>
                    </div> 
                </div>

                <div class="row d-flex justify-content-center align-items-center"  style="margin-top: 240px">
                    <div class="btn-group col-sm-2 col-9" >
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Camera Views
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" onclick="cameraFront();">Front</a>
                            <a class="dropdown-item" onclick="cameraBack();">Back</a>
                            <a class="dropdown-item" onclick="cameraLeft();">Left</a>
                            <a class="dropdown-item" onclick="cameraRight();">Right</a>
                        </div>
                    </div>
                    <div class="btn-group col-sm-2 col-9">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Lighting Options
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" onclick="spot();">Toggle Spot light</a>
                            <a class="dropdown-item" onclick="point();">Toggle Point light</a>
                            <a class="dropdown-item" onclick="directional();">Toggle Directional light</a>
                        </div>
                    </div>
                    <div class= "col-sm-2 col-9">
                        <a href="#" class="btn btn-secondary btn-responsive" onclick="wireFrame();">Toggle wireframe</a>
                    </div>
                    <div class= "col-sm-2 col-9">
                        <a class="btn btn-secondary btn-responsive" href="#" onclick="spin();">Toggle Spin</a>
                    </div>

                </div>

                <div class="d-flex align-items-center justify-content-center" style="margin-top: 10px">
                    <button type="button" class="btn btn-primary" onclick="info();" data-toggle="modal" data-target="#myModal">
                        Model Info
                    </button>


                    <div class="modal" id="myModal" >
                        <div class="modal-dialog">
                            <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <div id="m_t"></div>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div id="m_p1"></div>
                                <div id="m_p2"></div>
                                <div id="m_p3"></div>

                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3" >
                <div class="text-center" style="margin-top : 30px" >
                    <p class="other-products">Other Products you may like</p>
                        
                    </div>
                <div class="gallery">

                    <div class="d-flex flex-column align-items-center justify-content-center gallery-images">
                        <img src="./assets/images/coke_cherry.jpeg" onclick="goToCherry();" class="gallery-image">
                        <img src="./assets/images/fanta_lemonm.jpeg" onclick="goToLemon();" alt="..." class="gallery-image">
                        <img src="./assets/images/fanta_grape.png" onclick="goToGrape();" alt="..." class="gallery-image">
                        <img src="./assets/images/vin_coke.jpeg" onclick="goToVin();" alt="..." class="gallery-image-coke">
        
                    </div>
                </div>

            </div>
        </div>


    </div>
</div>

<nav id="footerColor" class="navbar navbar-expand-sm footer">
    <div class="container-fluid">   
        <div class="navbar-text float-left copyright">
            <p><span class="align-baseline">&copy 2023 3D Apps</p>
        </div>
    </div>
</nav> 
   







        
        

</body>
</html>