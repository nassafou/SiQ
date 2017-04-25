<?php

/* SupportBundle:Support:menu.html.twig */
class __TwigTemplate_759c8e98ff5bcfff77d152c85ad2e22c98c0e67ca21e51644d5a65a9990d221e extends Twig_Template
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
        echo "<h3>Les derniers tickets</h3>
    <ul class=\"nav nav\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_tickets"]) ? $context["liste_tickets"] : $this->getContext($context, "liste_tickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 4
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("siqsupport_voir", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "titre", array()), "html", null, true);
            echo "
            </a>
            </li>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "   
    </ul>
";
    }

    public function getTemplateName()
    {
        return "SupportBundle:Support:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>Les derniers tickets</h3>
    <ul class=\"nav nav\">
        {% for ticket in liste_tickets %}
            <li><a href=\"{{ path('siqsupport_voir', {'id': ticket.id}) }}\">{{ ticket.titre }}
            </a>
            </li>
         {% endfor %}   
    </ul>
", "SupportBundle:Support:menu.html.twig", "/var/www/html/SiQ/src/SiQ/SupportBundle/Resources/views/Support/menu.html.twig");
    }
}
