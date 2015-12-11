<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Papyrus">
    <link rel="shortcut icon" href="img/favicon.ico">

    <title>Papyrus</title>

    <!-- Bootstrap Core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="custom.css" rel="stylesheet" type="text/css">

    <!-- Core JavaScript Files -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/scrolling-nav.js"></script>

    <script>
        $(function () {
            $("#footer").load("./footer.html");
        });
    </script>


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">

            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand navbar-brand-custom" href="#page-top"><img class="img-responsive" src="img/papyrus-logo.png" alt="Papyrus"></a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#technologies">Technologies</a>
                    </li>
                    <li class="page-scroll">
                        <a href="download.html">Downloads</a>
                    </li>
                    <li class="page-scroll">
                        <a href="documentation.html">Documentation</a>
                    </li>
                    <li class="page-scroll">
                        <a href="community.html">Community</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <section class="custom-section">

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="technology-name">Papyrus<br>
                        <span class="technology-moto">
                            Modeling environment
                        </span>
                    </h1>
                    <img class="img-responsive center-block" src="img/screenshot.png" alt="Papyrus">


                </div>
                <div class="col-md-4">

                    <h1 class="news-title">News &amp; Events <a href="news/index.php"><img src="img/rss.png" alt="RSS"></a></h1>
                    <div class="well news-well">
                        <?php
                            require_once ('news/newstohtml.php');
                            $papyrusnews = news_to_html("news/news.xml", "", "", "", false, "long", "5");
                            echo $papyrusnews;
                        ?>
                    </div>

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12 description-paragraph">
                    <p class="text-justify">Papyrus is aiming at providing an integrated and user-consumable environment for editing any kind of EMF model and particularly supporting <a href="http://www.uml.org">UML2</a> and related modeling languages such as <a href="http://www.omgsysml.org/">SysML</a> and <a href="http://www.omgmarte.org/">MARTE</a>. Papyrus provides diagram editors for EMF-based modeling languages amongst them <a href="http://www.uml.org">UML2</a> and <a href="http://www.omgsysml.org/">SysML</a> and the glue required for integrating these editors (GMF-based or not) with other MBD and MDSD tools.
                    </p>
                    <p class="text-justify">Papyrus also offers a very advanced support of UML profiles that enables users to define editors for DSLs based on the <a href="http://www.uml.org">UML2</a> standard. The main feature of Papyrus regarding this latter point is a set of very powerful customization mechanisms which can be leveraged to create user-defined Papyrus perspectives and give it the same look and feel as a "pure" DSL editor.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">

                    <img class="img-responsive center-block" src="img/standard-modeling.png" alt="Standard Modeling">
                    <h2>Standard based</h2>

                    <p class="feature-body">Implemented standards: <a href="http://www.omg.org/spec/UML/">UML 2.5.0</a>, <a href="http://www.omg.org/spec/SysML/">SysML 1.2 &amp; 1.4</a>, <a href="http://www.omg.org/spec/OCL/">OCL 2.3.1</a>, <a href="http://www.omg.org/spec/FUML/">fUML 1.1</a>, <a href="http://www.omg.org/spec/ALF/">ALF 1.0.1</a>, <a href="http://www.omg.org/spec/MARTE/">MARTE 1.1</a> (incubation), <a href="http://www.east-adl.info/">EAST-ADL</a> (incubation), <a href="http://robotml.github.io/">RobotML</a> (incubation), UML-RT (incubation) and <a href="http://www.iso.org/iso/catalogue_detail.htm?csnumber=50508">ISO/IEC 42010</a>. </p>
                </div>
                <div class="col-md-4">

                    <img class="img-responsive center-block" src="img/domain-specific.png" alt="Domain Specific">
                    <h2>Domain Specific</h2>

                    <p class="feature-body">To address any specific domain, every part of Papyrus may be customized: UML profile, model explorer, diagram notation and style, properties views, palette and creation menus, and much more...</p>

                </div>
                <div class="col-md-4">

                    <img class="img-responsive center-block" src="img/exploitable.png" alt="Exploitable">
                    <h2>Enabler</h2>

                    <p class="feature-body">Papyrus enables model-based techniques: model-based simulation, model-based formal testing, safety analysis, performance/trade-offs analysis, architecture exploration...</p>
                </div>
            </div>
            
            <hr class="custom-divider">
            <div class="row">
                
                <div class="col-md-10 col-md-offset-1">
                    
                    <div class="well quote-well">
                        <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="5000">
                            <?php
                                require_once ('quotes/quotes2html.php');
                                $papyrusquotes = quoteshort_to_html("quotes/quotes.xml", 5);
                                echo $papyrusquotes;
                            ?>
                        </div>
                    </div>
                     <p><button type="button" class="btn btn-lg btn-success custom-success-btn" onclick="location.href='quotes.php'">Learn more about successful industrial and academic uses of Papyrus</button></p>
                </div>
            </div>
        </div>
    </section>

    <section id="technologies" class="custom-section">
        <h1 class="section-title">Technologies</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img class="feature-image img-responsive center-block" src="img/uml.png" alt="UML">
                </div>
                <div class="col-md-9">
                    <h2 class="feature-heading">UML 2.5.0</h2>
                    <p class="feature-body">
                        Papyrus is graphical editing tool for <a href="http://www.uml.org">UML 2</a> as defined by <a href="http://www.omg.org">OMG</a>. Papyrus targets to implement 100% of the OMG specification!
                    </p>
                    <p class="feature-body">
                        Papyrus provides editors for all the UML diagrams:
                    </p>
                    <table>
                        <tr>
                            <td>
                                <ul class="feature-body">
                                    <li>Class Diagram,
                                    </li>
                                    <li>Object Diagram,
                                    </li>
                                    <li>Package Diagram,
                                    </li>
                                    <li>Composite Structure Diagram,
                                    </li>
                                    <li>Component Diagram,
                                    </li>
                                    <li>Deployment Diagram,
                                    </li>
                                    <li>Profile Diagram.
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <ul class="feature-body">

                                    <li>Use case Diagram,
                                    </li>
                                    <li>Activity Diagram,
                                    </li>
                                    <li>State machine Diagram,
                                    </li>
                                    <li>Communication Diagram,
                                    </li>
                                    <li>Sequence Diagram,
                                    </li>
                                    <li>Timing Diagram,
                                    </li>
                                    <li>Interaction overview Diagram,
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>

            <hr class="custom-divider">

            <div class="row">

                <div class="col-md-3 col-md-push-9 col-sm-12">
                    <img class="feature-image img-responsive center-block" src="img/sysml.png" alt="SysML">
                </div>
                <div class="col-md-9 col-md-pull-3 col-sm-12">
                    <h2 class="feature-heading">SysML 1.2 and 1.4</h2>
                    <p class="feature-body">
                        Papyrus provides also a complete support to <a href="http://www.omgsysml.org/">SysML</a> in order to enable model-based system engineering. Specific graphical editors required for SysML are also provided:
                    </p>
                    <ul class="feature-body">
                        <li>Block Definition Diagram,
                        </li>
                        <li>Internal Block Diagram,
                        </li>
                        <li>Requirement Diagram,
                        </li>
                        <li>Parametric Diagram,
                        </li>
                        <li>Requirement table,
                        </li>
                        <li>Allocation table
                        </li>
                    </ul>
                </div>
            </div>

            <hr class="custom-divider">


            <div class="row">
                <div class="col-md-5">
                    <img class="feature-image img-responsive center-block" src="img/animated-textual.png" alt="Model Execution">
                </div>
                <div class="col-md-7">
                    <h2 class="feature-heading">Model execution</h2>
                    <p class="feature-body">
                        Thanks to <a href="http://git.eclipse.org/c/papyrus/org.eclipse.papyrus-moka.git/">Moka</a>, Papyrus can execute models using a rich and extensible animation and simulation framework.
                    </p>
                    <p class="feature-body">
                        Also, as graphical modeling is not always the best way for specifying the behavior of executable models, Papyrus provides textual notation edition with syntax highlight, completion and content assist. It is of course a customizable feature of Papyrus.
                    </p>
                </div>
            </div>

            <hr class="custom-divider">


            <div class="row">
                <div class="col-md-3 col-md-push-9 col-sm-12">
                    <img class="feature-image img-responsive center-block" src="img/customization.png" alt="Customozation">
                </div>
                <div class="col-md-9 col-md-pull-3 col-sm-12">
                    <h2 class="feature-heading">Fully customizable environment</h2>
                    <p class="feature-body">
                        All the modeling features of Papyrus are designed to be customizable and to maximize reuse. Therefore, should you want to adapt the standard Papyrus configuration for a specific domain, notation, modeling practice, use the powerful customization mechanisms of Papyrus to adapt the Papyrus modeling environment to suit your needs. Many configurations in Papyrus being model-based, the customization can be done live.
                    </p>

                    <ul class="feature-body">
                        <li>Define your own graphical, textual or tabular notation. </li>
                        <li>Filter existing palettes or define your own ones with a model-based configuration. </li>
                        <li>Define dedicated properties views to present just the characteristics that are important to you. </li>
                        <li>Read your model with dedicated model explorer structuring and rendering. </li>
                        <li>Reuse standard languages or define your own modeling language thanks to the UML profile editor. </li>
                    </ul>

                </div>
            </div>

            <hr class="custom-divider">


            <div class="row">
                <div class="col-md-3">
                    <img class="feature-image img-responsive center-block" src="img/relatives.png" alt="Papyrus relatives">
                </div>
                <div class="col-md-9">
                    <h2 class="feature-heading">Papyrus relatives</h2>
                    <p class="feature-body">
                        Many technologies complement, extend or use Papyrus. Following are key ones:




                    </p>
                    <ul class="feature-body">
                        <li><a href="https://projects.eclipse.org/projects/modeling.papyrus-rt">Papyrus RT</a> for Real-time Systems modeling.</li>
                        <li><a href="http://git.eclipse.org/c/papyrus/org.eclipse.papyrus-robotml.git/">RobotML</a>: a Papyrus-based modeling environment dedicated to robotics.</li>
                        <li><a href="http://projects.eclipse.org/projects/modeling.upr">Eclipse UML Profiles Repository</a></li>
                        <li><a href="http://git.eclipse.org/c/papyrus/org.eclipse.papyrus.tools.git/">Papyrus Tools</a>: a collection of tools that complement Papyrus. </li>
                        <li><a href="https://www.polarsys.org/esf/">Eclipse Safety Framework</a>: a set of tools for integrating safety techniques within a model driven engineering process. </li>
                    </ul>

                </div>
            </div>

        </div>
    </section>



    <div id="footer"></div>

</body>

</html>