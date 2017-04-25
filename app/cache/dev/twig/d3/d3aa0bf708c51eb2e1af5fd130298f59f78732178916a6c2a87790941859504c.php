<?php

/* SupportBundle::layout.html.twig */
class __TwigTemplate_63e9477009cb6576992b5db8bef7ddb23adc14787dc52e449d6c91bfe551ca23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "SupportBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'siqsupport_body' => array($this, 'block_siqsupport_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        // line 8
        echo "    
    <h1>Support</h1>
    <hr>
    
    ";
        // line 12
        $this->displayBlock('siqsupport_body', $context, $blocks);
        // line 14
        echo "    
";
    }

    // line 12
    public function block_siqsupport_body($context, array $blocks = array())
    {
        // line 13
        echo "    ";
    }

    public function getTemplateName()
    {
        return "SupportBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 13,  58 => 12,  53 => 14,  51 => 12,  45 => 8,  43 => 7,  40 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}
{% block title %}
 {{ parent() }}
{% endblock %}

{% block body %}
    {# On definit un sous-titre commun à toutes les pages du bundle, par exemple #}
    
    <h1>Support</h1>
    <hr>
    
    {% block siqsupport_body %}
    {% endblock %}
    
{% endblock %}
", "SupportBundle::layout.html.twig", "/var/www/html/SiQ/src/SiQ/SupportBundle/Resources/views/layout.html.twig");
    }
}
