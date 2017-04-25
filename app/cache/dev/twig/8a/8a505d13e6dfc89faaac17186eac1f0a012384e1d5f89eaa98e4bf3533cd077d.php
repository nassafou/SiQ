<?php

/* SupportBundle:Support:index.html.twig */
class __TwigTemplate_5f6c6765b87ba93bd9d0891ef5a863a0ba0b059aafc03da4ab7db0ab9020bd09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SupportBundle::layout.html.twig", "SupportBundle:Support:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'siqsupport_body' => array($this, 'block_siqsupport_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SupportBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_siqsupport_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h2>Liste des tickets </h2>
    
        <ul>
        <row>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 11
            echo "            <li>
                <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("siqsupport_voir", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(            // line 13
$context["ticket"], "titre", array()), "html", null, true);
            echo "</a>
                par ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "auteur", array()), "html", null, true);
            echo ",
                le  ";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ticket"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 18
            echo "            <li>Pas (encore) de tickets </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </row>
    </ul>
    
";
    }

    public function getTemplateName()
    {
        return "SupportBundle:Support:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 20,  75 => 18,  67 => 15,  63 => 14,  59 => 13,  56 => 12,  53 => 11,  48 => 10,  42 => 6,  39 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SupportBundle::layout.html.twig\" %}
{% block title %}
    Accueil - {{ parent() }}
{% endblock %}
{% block siqsupport_body %}
    <h2>Liste des tickets </h2>
    
        <ul>
        <row>
        {% for ticket in tickets %}
            <li>
                <a href=\"{{ path('siqsupport_voir', {'id': ticket.id}) }}\">{{
                ticket.titre }}</a>
                par {{ ticket.auteur }},
                le  {{ ticket.date|date('d/m/Y') }}
            </li>
        {% else %}
            <li>Pas (encore) de tickets </li>
        {% endfor %}
        </row>
    </ul>
    
{% endblock %}", "SupportBundle:Support:index.html.twig", "/var/www/html/SiQ/src/SiQ/SupportBundle/Resources/views/Support/index.html.twig");
    }
}
