<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../assets/css/404-NOT-FOUND-animated.css">
    <link rel="stylesheet" href="../assets/css/Animated-CSS-Waves-Background-SVG.css">
    <link rel="stylesheet" href="../assets/css/Background-motion1-1.css">
    <link rel="stylesheet" href="../assets/css/Background-motion1.css">
    <link rel="stylesheet" href="../assets/css/Bootstrap-4---Photo-Gallery.css">
    <link rel="stylesheet" href="../assets/css/Contact-Form-Clean-1.css">
    <link rel="stylesheet" href="../assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/Contact-Form-v2-Modal--Full-with-Google-Map.css">
    <link rel="stylesheet" href="../assets/css/Drag--Drop-Upload-Form.css">
    <link rel="stylesheet" href="../assets/css/Drag-and-Drop-Multiple-File-Form-Input-upload-Advanced.css">
    <link rel="stylesheet" href="../assets/css/Drag-Drop-File-Input-Upload.css">
    <link rel="stylesheet" href="../assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="../assets/css/Modern-Contact-Form.css">
    <link rel="stylesheet" href="../assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="../assets/css/Profile-Edit-Form-1.css">
    <link rel="stylesheet" href="../assets/css/Profile-Edit-Form.css">
    <link rel="stylesheet" href="../assets/css/Projects-Clean.css">
    <link rel="stylesheet" href="../assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="../assets/css/styleAccueil.css">
    <link rel="stylesheet" href="../assets/css/Swiper-Slider-Card-For-Blog-Or-Product-1.css">
    <link rel="stylesheet" href="../assets/css/Swiper-Slider-Card-For-Blog-Or-Product.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" id="CSsites" href="#page-top">CloudStudio</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" id="pagesSite" href="../controler/home.ctrl.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" id="pagesSite" href="../controler/settings.ctrl.php">Account</a></li>
                    <li class="nav-item"><a class="nav-link" id="pagesSite" href="../controler/projects.ctrl.php">Projects</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" id="pagesSite" href="../controler/logout.ctrl.php">Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <hr>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" id="arianneCont">
        <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="../controler/home.ctrl.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" id="arianne" href="../controler/projects.ctrl.php">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" id="arianne" href="#"><?= $nomProjet ?></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="ProjectMainFirstContainer">
        <div class="container" id="ContainerTop">
            <div class="row">
                <div class="col-md-3"><img id="ProfilePic" src=<?= $profilePic ?>>
                    <p class="profilPic"><?= $name ?></p><small><?= $mail ?></small>
                </div>
                <div class="col-md-8 align-self-end">
                    <p id="ProjectTitle"><?= $nomProjet ?></p>
                </div>
            </div>
        </div>
    </div>
    <div id="ProjectMainFirstContainer">
        <div class="container" id="ContainerTop">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-9">
                    <nav class="navbar navbar-light navbar-expand-md" id="ProjectNavBar">
                        <div class="container-fluid"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                            <div class="collapse navbar-collapse" id="navcol-2">
                                <ul class="nav navbar-nav">
                                    <form method=POST action=#>
                                        <input type="hidden" name="nomProjet" value=<?= $nomProjet ?>></input>
                                        <input type="hidden" name="idProjet" value=<?= $idProjet ?>></input>
                                        <input type="hidden" name="versionCliquee" value="rien"></input>
                                        <input type="hidden" name="newstems" value="false"></input>
                                        <input type="hidden" name="nouvelleVersion" value="rien"></input>
                                        <li class="nav-item"><button class="btn text-capitalize nav-link active" id="ProjectNavItems" type="submit">Raw Session</button></li>
                                    </form>
                                    <form method=POST action=../controler/projetMainMix.ctrl.php>
                                        <input type="hidden" name="nomProjet" value=<?= $nomProjet ?>></input>
                                        <input type="hidden" name="idProjet" value=<?= $idProjet ?>></input>
                                        <input type="hidden" name="versionCliquee" value="rien"></input>
                                        <input type="hidden" name="newstems" value="false"></input>
                                        <input type="hidden" name="nouvelleVersion" value="rien"></input>
                                        <li class="nav-item"><button class="btn text-capitalize nav-link" id="ProjectNavItems" type="submit">Mix</button></li>
                                    </form>
                                    <form method=POST action=../controler/projetMainMaster.ctrl.php>
                                        <input type="hidden" name="nomProjet" value=<?= $nomProjet ?>></input>
                                        <input type="hidden" name="idProjet" value=<?= $idProjet ?>></input>
                                        <input type="hidden" name="versionCliquee" value="rien"></input>
                                        <input type="hidden" name="newstems" value="false"></input>
                                        <input type="hidden" name="nouvelleVersion" value="rien"></input>
                                        <li class="nav-item"><button class="btn text-capitalize nav-link" id="ProjectNavItems" type="submit">Master</button></li>
                                    </form>
                                    <form method=POST action=#>
                                        <li class="nav-item"><button class="btn text-capitalize nav-link" id="ProjectNavItems" type="submit">Chat</button></li>
                                    </form>
                                    <form method=POST action=../controler/projetCollaborator.ctrl.php>
                                        <input type="hidden" name="nomProjet" value=<?= $nomProjet ?>></input>
                                        <input type="hidden" name="idProjet" value=<?= $idProjet ?>></input>
                                        <input type="hidden" name="versionCliquee" value=<?= $versionAAfficher->id ?>></input>
                                        <input type="hidden" name="newstems" value="false"></input>
                                        <input type="hidden" name="nouvelleVersion" value="rien"></input>
                                        <li class="nav-item"><button class="btn text-capitalize nav-link" id="ProjectNavItems" type="submit">Collaborators</button></li>
                                    </form>
                                    <form method=POST action=#>
                                        <li class="nav-item"><button class="btn text-capitalize nav-link" id="ProjectNavItems" type="submit">Settings</button></li>
                                    </form>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div id="ProjectMainContainer">
        <div class="container" id="ContainerTop">
            <div class="row">
                <div class="col-md-3">
                    <div>
                        <?php
                        if (!empty($nouvelleVersion)) { ?>
                            <div class="row" id="CurrentVersion">
                                <div class="col-md-12" id="TopColumnVersion">
                                    <h5 id="hNewV">Upload Your Version</h5>
                                </div>
                                <div class="col text-right">
                                    <p id="SNewV">Click here when you all done</p>
                                    <form id="BTNProjectSelectItems" method=POST action=../controler/projetMainRaw.ctrl.php>
                                        <input type="hidden" name="action" value="ajoutVersion"></input>
                                        <input type="hidden" name="nomProjet" value=<?= $nomProjet ?>></input>
                                        <input type="hidden" name="idProjet" value=<?= $idProjet ?>></input>
                                        <input type="hidden" name="versionCliquee" value=<?= $versionAAfficher->id ?>></input>
                                        <input type="hidden" name="newstems" value="false"></input>
                                        <input type="hidden" name="nouvelleVersion" value="rien"></input>
                                        <button class="btn text-capitalize" id="CreateNewVBTN" type="submit">New Version</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col">
                                <form method=POST action=../controler/projetMainRaw.ctrl.php>
                                    <div class="row" id="NewVersion">
                                        <input type="hidden" name="nomProjet" value=<?= $nomProjet ?>></input>
                                        <input type="hidden" name="idProjet" value=<?= $idProjet ?>></input>
                                        <input type="hidden" name="versionCliquee" value=<?= $versionAAfficher->id ?>></input>
                                        <input type="hidden" name="newstems" value="false"></input>
                                        <input type="hidden" name="nouvelleVersion" value="rien"></input>
                                        <div class="col text-center"><button class="btn" id="PlusVersion" type="submit"><img src="../assets/img/Groupe 57.png"></button></div>
                                    </div>
                                </form>
                            </div>

                        <?php } else {
                        ?>
                            <div class="col">
                                <form method=POST action=../controler/projetMainRaw.ctrl.php>
                                    <div class="row" id="NewVersion">
                                        <input type="hidden" name="nouvelleVersion" value="pas rien"></input>
                                        <input type="hidden" name="newstems" value="false"></input>
                                        <input type="hidden" name="nomProjet" value=<?= $nomProjet ?>></input>
                                        <input type="hidden" name="idProjet" value=<?= $idProjet ?>></input>
                                        <input type="hidden" name="versionCliquee" value=<?= $versionAAfficher->id ?>></input>
                                        <div class="col text-center"><button class="btn" id="PlusVersion" type="submit"><img src="../assets/img/Groupe%2054.png"></button></div>
                                    </div>
                                </form>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="row">
                        <div class="col" id="ScrollableVersions">
                            <?php
                            foreach ($versionsRaw as $version) {
                                if ($version == $versionAAfficher) { ?>
                                    <div class="row" id="CurrentVersion">
                                        <div class="col-md-12" id="TopColumnVersion">
                                            <p class="versionCreatorP"><?= $dao->getUtilisateur($version->idCreateur)->nom . " " . $dao->getUtilisateur($version->idCreateur)->prenom ?></p>
                                            <p id="dateVersion-5" class="text-truncate"><?= $version->info ?></p>
                                        </div>
                                        <div class="col text-right">
                                            <p class="text-left versionCreatorP">V<?= $version->id ?></p>
                                            <form id="formDelete" method=POST action=../controler/projetMainRaw.ctrl.php>
                                                <input type="hidden" name="nomProjet" value=<?= $nomProjet ?>></input>
                                                <input type="hidden" name="idProjet" value=<?= $idProjet ?>></input>
                                                <input type="hidden" name="versionCliquee" value=<?= $versionAAfficher->id ?>></input>
                                                <input type="hidden" name="newstems" value="false"></input>
                                                <input type="hidden" name="nouvelleVersion" value="rien"></input>
                                                <input type="hidden" name="action" value="deleteVersion"></input>
                                                <?php if (count($versionsRaw) != 1) : ?>
                                                    <button class="btn" data-toggle="tooltip" data-bs-tooltip="" data-placement="left" id="editButton-5" type="submit" title="Delete your version" onclick="return confirm('Are you sure that you want to delete this version?')"><img class="border rounded-0" src="../assets/img/delete.png"></button>
                                                <?php endif; ?>
                                            </form>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="row" id="Versions">
                                        <div class="col-md-12" id="TopColumnVersion">
                                            <p class="versionCreatorP"><?= $dao->getUtilisateur($version->idCreateur)->nom . " " . $dao->getUtilisateur($version->idCreateur)->prenom ?></p>
                                            <p id="dateVersion-5" class="text-truncate"><?= $version->info ?></p>
                                        </div>
                                        <div class="col text-right">
                                            <form id="BTNProjectSelectItems" method=POST action=../controler/projetMainRaw.ctrl.php>
                                                <input type="hidden" name="newstems" value="false"></input>
                                                <input type="hidden" name="nomProjet" value=<?= $nomProjet ?>></input>
                                                <input type="hidden" name="idProjet" value=<?= $idProjet ?>></input>
                                                <input type="hidden" name="versionCliquee" value=<?= $version->id ?>></input>
                                                <input type="hidden" name="nouvelleVersion" value="rien"></input>
                                                <p class="text-left versionCreatorP">V<?= $version->id ?></p><button class="btn" data-toggle="tooltip" data-bs-tooltip="" data-placement="left" id="editButton-5" type="submit" title="Edit your version"><img class="border rounded-0" src="../assets/img/edit.png"></button>
                                            </form>
                                        </div>
                                    </div>
                            <?php }
                            } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-9" style="border-style: none;">
                    <div class="row">
                        <div class="col-md-6" id="description">
                            <?php if (empty($nouvelleVersion)) { ?>
                                <form id="DescriptionForm" method=POST action=../controler/projetMainRaw.ctrl.php>
                                    <h1 class="text-truncate text-capitalize" id="HWhite">Description</h1>
                                    <textarea name="info" rows="12" cols="80" placeholder="<?php echo htmlspecialchars($versionAAfficher->info, ENT_QUOTES, 'UTF-8'); ?>"></textarea>
                                    <input type="hidden" name="nomProjet" value=<?= $nomProjet ?>></input>
                                    <input type="hidden" name="idProjet" value=<?= $idProjet ?>></input>
                                    <input type="hidden" name="versionCliquee" value=<?= $versionAAfficher->id ?>></input>
                                    <input type="hidden" name="newstems" value="false"></input>
                                    <input type="hidden" name="nouvelleVersion" value="rien"></input>
                                    <input type="hidden" name="action" value="saveDescription"></input>
                                    <button class="btn btn-light form-btn" id="btnSave" type="submit" style="margin-top: 14px;">SAVE </button>
                                </form>
                            <?php } else { ?>
                                <h1 class="text-truncate text-capitalize" id="HWhite">Description</h1>
                                <p id="WhiteTxtProjet">You will be able to change the description later</p>
                            <?php } ?>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col" id="preview">
                                    <h1 class="text-capitalize" id="HBlack">preview</h1><audio class="border rounded-pill" controls src=<?= "../data/Projets/$idProjet/Raw/v$versionAAfficher->id/cloudStudioPreview.mp3" ?>></audio>
                                    <form id="DescriptionForm" enctype="multipart/form-data" action="../controler/projetMainRaw.ctrl.php" method="post">
                                        <input type="hidden" name="nomProjet" value=<?= $nomProjet ?>></input>
                                        <input type="hidden" name="idProjet" value=<?= $idProjet ?>></input>
                                        <input type="hidden" name="versionCliquee" value=<?= $versionAAfficher->id ?>></input>
                                        <input type="hidden" name="newstems" value="false"></input>
                                        <input type="hidden" name="nouvelleVersion" value="rien"></input>
                                        <input type="hidden" name="action" value="uploadPreview"></input>
                                        <input type="file" id="upload" name="input-file" hidden/><label id="btnUpload" for="upload" class="btn btn-light" data-placement="right" data-toggle="tooltip" title="Upload Your preview file"><img class="img-fluid" src="../assets/img/upload.png"></label>
                                        <input type="submit" value="Send">
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col" id="downloadV">
                                    <h1 class="text-capitalize" id="HBlack">Create zip file</h1>

                                    <form id="DescriptionForm" action="../controler/projetMainRaw.ctrl.php" method="post">
                                        <input type="hidden" name="nomProjet" value=<?= $nomProjet ?>></input>
                                        <input type="hidden" name="idProjet" value=<?= $idProjet ?>></input>
                                        <input type="hidden" name="versionCliquee" value=<?= $versionAAfficher->id ?>></input>
                                        <input type="hidden" name="newstems" value="false"></input>
                                        <input type="hidden" name="nouvelleVersion" value="rien"></input>
                                        <input type="hidden" name="action" value="downloadAllFiles"></input>
                                        <button class="btn btn-light" id="btnDownloadStems" type="submit">
                                            <img class="img-fluid" data-toggle="tooltip" data-bs-tooltip="" data-placement="right" src="../assets/img/thumbnails/downloading-file.png" width="27px" title="Click here create a zip file to allow you to download the entire version !">
                                        </button>
                                    </form>
                                </div>
                                <div class="col" id="addInfos">
                                    <h1 class="text-capitalize" id="HWhite">Delete all files</h1>
                                    <form id="DescriptionForm" action="../controler/projetMainRaw.ctrl.php" method="post">
                                        <input type="hidden" name="nomProjet" value=<?= $nomProjet ?>></input>
                                        <input type="hidden" name="idProjet" value=<?= $idProjet ?>></input>
                                        <input type="hidden" name="versionCliquee" value=<?= $versionAAfficher->id ?>></input>
                                        <input type="hidden" name="newstems" value="false"></input>
                                        <input type="hidden" name="nouvelleVersion" value="rien"></input>
                                        <input type="hidden" name="action" value="deleteAllFiles"></input>
                                        <button class="btn btn-dark" id="btnDeleteStems" type="submit" onclick="return confirm('Are you sure that you want to delete all the files of the current version?')">
                                            <img src="../assets/img/close.png" width="27px" height="27px" title="Delete all files of the version">
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if (empty($nouvelleVersion)) { ?>
                        <div class="row" id="colStemsTitle">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <h1 class="text-capitalize" id="HBlack" style="display: inline;">Files</h1>
                                        <form id="DescriptionForm" method=POST action=../controler/projetMainRaw.ctrl.php>
                                            <?php if (!empty($newstems)) { ?>
                                                <input type="hidden" name="newstems" value="false"></input>
                                                <input type="hidden" name="nomProjet" value=<?= $nomProjet ?>></input>
                                                <input type="hidden" name="idProjet" value=<?= $idProjet ?>></input>
                                                <input type="hidden" name="versionCliquee" value=<?= $versionAAfficher->id ?>></input>
                                                <input type="hidden" name="nouvelleVersion" value="rien"></input>
                                                <button class="btn btn-light text-capitalize" id="addStemsButton" type="submit">Cancel</button>
                                            <?php } else { ?>
                                                <input type="hidden" name="newstems" value="true"></input>
                                                <input type="hidden" name="nomProjet" value=<?= $nomProjet ?>></input>
                                                <input type="hidden" name="idProjet" value=<?= $idProjet ?>></input>
                                                <input type="hidden" name="versionCliquee" value=<?= $versionAAfficher->id ?>></input>
                                                <input type="hidden" name="nouvelleVersion" value="rien"></input>
                                                <button class="btn btn-light text-capitalize" id="addStemsButton" type="submit">Add file</button>
                                            <?php } ?>
                                        </form>
                                    </div>
                                </div>
                                <p id="LightTxt">All uploaded files</p>
                                <div class="row rowHundred">
                                    <?php if (!empty($newstems)) { ?>
                                        <div class="m-5" id="UploadZone">
                                            <div id="backdrop" class="backdrop backdrop-transition backdrop-dark">
                                                <div class="text-center w-100" style="position: absolute;top: 50%;">
                                                    <div class="bg-light border rounded border-success shadow-lg m-auto" style="width: 150px;height: 150px;"><i class="fa fa-upload d-block p-4" style="font-size: 50px;"></i><span>Drop file to attach</span></div>
                                                </div>
                                            </div>
                                            <div class="jumbotron pt-1" id="jumbotronDrop">

                                                <form method="post" enctype="multipart/form-data" action="../controler/projetMainRaw.ctrl.php">
                                                    <input type="file" id="form-files" class="invisible" name="input-file"></input>
                                                    <p id="ChooseBtn"><label for="form-files"><a class="btn btn-secondary btn-sm" role="button">Choose The File you want to import.</a></label>&nbsp;</p>
                                                    <input type="hidden" name="action" value="addFiles"></input>
                                                    <input type="hidden" name="nomProjet" value=<?= $nomProjet ?>></input>
                                                    <input type="hidden" name="idProjet" value=<?= $idProjet ?>></input>
                                                    <input type="hidden" name="versionCliquee" value=<?= $versionAAfficher->id ?>></input>
                                                    <input type="hidden" name="nouvelleVersion" value="rien"></input>
                                                    <input type="hidden" name="newstems" value="false"></input>
                                                    <button class="btn btn-block text-capitalize" id="SubmitDragandDropBTN" type="submit">ADD</button>
                                                </form>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <div class="col" id="scrollableZone">
                                        <?php
                                        foreach ($listeStems as $stems) { ?>
                                            <div class="row" id="StemsItems">
                                                <div class="col d-flex justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center" id="StemsWaveformColumn" style="border-top-left-radius: 10px;border-bottom-left-radius: 10px;"><img src="../assets/img/Waveform.png"></div>
                                                <div class="col-md-5 text-right d-inline" id="textStemsCol" style="min-width: 110px;">
                                                    <p class="text-left text-truncate" id="NameStemsP"><?= $stems ?></p>
                                                </div>

                                                <div class="col-md-auto d-flex flex-nowrap justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center" id="dlColStems">
                                                    <a href="<?= $dao->getURLFichierRaw($idProjet, $versionAAfficher->id, $stems) ?>" download="">
                                                        <button class="btn btn-dark" id="btnDownloadStems" type="button">
                                                            <img src="../assets/img/dl2.png" width="27px" height="27px"></button>
                                                    </a>
                                                    <form action="../controler/projetMainRaw.ctrl.php" method=POST>
                                                        <input type="hidden" name="action" value="deleteFiles"></input>
                                                        <input type="hidden" name="nomFichierASupprimer" value=<?= $stems ?>></input>
                                                        <input type="hidden" name="nomProjet" value=<?= $nomProjet ?>></input>
                                                        <input type="hidden" name="idProjet" value=<?= $idProjet ?>></input>
                                                        <input type="hidden" name="versionCliquee" value=<?= $versionAAfficher->id ?>></input>
                                                        <input type="hidden" name="nouvelleVersion" value="rien"></input>
                                                        <input type="hidden" name="newstems" value="false"></input>
                                                        <button class="btn btn-dark" id="btnDeleteStems" type="submit" onclick="return confirm('Are you sure that you want to delete this file?')"> <img src="../assets/img/close.png" width="27px" height="27px"> </button>
                                                    </form>
                                                </div>

                                            </div>
                                        <?php } ?>

                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <h1 class="text-capitalize" id="HBlack">comments</h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col"></div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">F.A.Q</a></li>
                            <li><a href="#">How to Start ?</a></li>
                            <li><a href="#">You have an issue ?</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="../controler/team.ctrl.php">Team</a></li>
                            <li><a href="../controler/contact.ctrl.php">Contact</a></li>
                            <li><a href="../controler/termscondition.ctrl.php">Terms And Conditions</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>CloudStudio</h3>
                        <p>CloudStudio is a music project management platform.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">CloudStudio © 2020</p>
            </div>
        </footer>
    </div>


    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/creative.js"></script>

</body>

</html>