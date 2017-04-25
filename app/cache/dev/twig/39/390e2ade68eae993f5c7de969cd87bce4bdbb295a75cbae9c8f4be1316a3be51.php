<?php

/* ::layout.html.twig */
class __TwigTemplate_5a2a9fd01bbabca6f1206a3506cc917d91d2f4e696a0c809b348591e1dd229dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
    <html>
        <head>
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
            
            <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
            ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "   
        </head>
        <body>
            <div class=\"container\">
            <br>
                <div  class=\"jumbotron\">
                    <h1>Support interne</h1>
                    <p> Ce support aux qualification</p>
                    <p><a class=\"btn btn-primary btn-large\"
                    href=\"http://www.qualibat.com\">
                    <span class=\"glyphicon glyphicon-align-left\" aria-hidden=\"true\"></span>
                        Lire le tiket >>
                    </a></p>
                   </div>
                
            <div class=\"row\">
            
                <div class=\"col-md-3\">
                    <div class=\"span3\">
                <div class=\"row\">
                <h3>Support Tickets</h3>
                
                <ul class=\"nav nav\">
                    <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("siqsupport_accueil");
        echo "\"> Accueil Support</a></li>
                    <li><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("siqsupport_ajouter");
        echo "\">Ajouter un Ticket</a></li>
                </ul>
                
                   
                ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SupportBundle:Support:menu", array("nombre" => 3)));
        echo "
                
            </div>
                </div>
            </div>
             
            ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "           
            </div>
            
        <hr>
        
        
        <footer>
            <p>The sky's the limit @ 2017 and beyond.</p>
        </footer>
       </div>
           
            ";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "        </body>
    </html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "SupportTicket";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "                <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
                <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/bootstrap/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
             ";
    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        // line 45
        echo "            ";
    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        // line 58
        echo "                
                <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
                <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
                
            ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 61,  131 => 58,  128 => 57,  124 => 45,  121 => 44,  115 => 9,  112 => 8,  109 => 7,  103 => 6,  98 => 64,  96 => 57,  83 => 46,  81 => 44,  72 => 38,  65 => 34,  61 => 33,  36 => 10,  34 => 7,  30 => 6,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
    <html>
        <head>
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
            
            <title>{% block title %}SupportTicket{% endblock %}</title>
            {% block stylesheets %}
                <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
                <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap/bootstrap.css') }}\" type=\"text/css\" />
             {% endblock %}   
        </head>
        <body>
            <div class=\"container\">
            <br>
                <div  class=\"jumbotron\">
                    <h1>Support interne</h1>
                    <p> Ce support aux qualification</p>
                    <p><a class=\"btn btn-primary btn-large\"
                    href=\"http://www.qualibat.com\">
                    <span class=\"glyphicon glyphicon-align-left\" aria-hidden=\"true\"></span>
                        Lire le tiket >>
                    </a></p>
                   </div>
                
            <div class=\"row\">
            
                <div class=\"col-md-3\">
                    <div class=\"span3\">
                <div class=\"row\">
                <h3>Support Tickets</h3>
                
                <ul class=\"nav nav\">
                    <li><a href=\"{{ path('siqsupport_accueil') }}\"> Accueil Support</a></li>
                    <li><a href=\"{{ path('siqsupport_ajouter') }}\">Ajouter un Ticket</a></li>
                </ul>
                
                   
                {{ render(controller(\"SupportBundle:Support:menu\", {'nombre': 3}))}}
                
            </div>
                </div>
            </div>
             
            {% block body %}
            {% endblock %}
           
            </div>
            
        <hr>
        
        
        <footer>
            <p>The sky's the limit @ 2017 and beyond.</p>
        </footer>
       </div>
           
            {% block javascripts %}
                
                <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
                <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
                <script type=\"text/javascript\" src=\"{{ asset('css/bootstrap/js/bootstrap.js')}}\"></script>
                
            {% endblock %}
        </body>
    </html>", "::layout.html.twig", "/var/www/html/SiQ/app/Resources/views/layout.html.twig");
    }
}
