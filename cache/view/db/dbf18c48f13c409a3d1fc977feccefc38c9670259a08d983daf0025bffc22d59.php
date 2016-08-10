<?php

/* index.twig */
class __TwigTemplate_c4d6d254f2a0bc4de0dd4b28b03e3f91dfa952864e644f7d2a4dd41522e310d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, translate("charset"), "html", null, true);
        echo "\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>PHP - Demo form with bootstrap</title>

    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"css/style.css\" rel=\"stylesheet\">
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
</head>
<body>

<div class=\"bg\" style=\"background-image: url(https://unsplash.it/g/1920/1080?random);\"></div>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"form-container col-md-6 col-md-push-3 col-xs-12\">
            <div class=\"logo\"><h2>LOGO</h2></div>
            <form method=\"post\" action=\"action/process\">
                <div class=\"input-group\">
                    <label for=\"username\"><i class=\"glyphicon glyphicon-user\"></i> Username </label>
                    <input name=\"username\" id=\"username\" type=\"text\" />
                </div>
                <div class=\"input-group\">
                    <label for=\"email\"> <i class=\"glyphicon glyphicon-envelope\"></i> E-mail </label>
                    <input name=\"email\" id=\"email\" type=\"email\" />
                </div>
                <div class=\"input-group\">
                    <input name=\"submit\" class=\"btn btn-success pull-left\" id=\"submit\" type=\"submit\" value=\"Submit\" />
                </div>
            </form>
        </div>
    </div>
</div>

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<script src=\"js/bootstrap.min.js\"></script>
<script src=\"js/app.js\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="{{ translate('charset') }}">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*     <title>PHP - Demo form with bootstrap</title>*/
/* */
/*     <link href="css/bootstrap.min.css" rel="stylesheet">*/
/*     <link href="css/style.css" rel="stylesheet">*/
/*     <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>*/
/* </head>*/
/* <body>*/
/* */
/* <div class="bg" style="background-image: url(https://unsplash.it/g/1920/1080?random);"></div>*/
/* */
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="form-container col-md-6 col-md-push-3 col-xs-12">*/
/*             <div class="logo"><h2>LOGO</h2></div>*/
/*             <form method="post" action="action/process">*/
/*                 <div class="input-group">*/
/*                     <label for="username"><i class="glyphicon glyphicon-user"></i> Username </label>*/
/*                     <input name="username" id="username" type="text" />*/
/*                 </div>*/
/*                 <div class="input-group">*/
/*                     <label for="email"> <i class="glyphicon glyphicon-envelope"></i> E-mail </label>*/
/*                     <input name="email" id="email" type="email" />*/
/*                 </div>*/
/*                 <div class="input-group">*/
/*                     <input name="submit" class="btn btn-success pull-left" id="submit" type="submit" value="Submit" />*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>*/
/* <script src="js/bootstrap.min.js"></script>*/
/* <script src="js/app.js"></script>*/
/* </body>*/
/* </html>*/
