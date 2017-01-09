<?php

/* FOSUserBundle:Alex:index.html.twig */
class __TwigTemplate_5884c468f2900f784ed81fe42af4774c9eea5d292813a5921505c0b377ba2425 extends Twig_Template
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
        echo "<html>
<body>
hello ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "
<br>

";
        // line 6
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 7
            echo "    Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
    -
    <a href=\"";
            // line 9
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
";
        } else {
            // line 11
            echo "    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
";
        }
        // line 13
        echo "</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Alex:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  42 => 11,  37 => 9,  31 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<body>
hello {{ name }}
<br>

{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
    Connecté en tant que {{ app.user.username }}
    -
    <a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
{% else %}
    <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
{% endif %}
</body>
</html>

", "FOSUserBundle:Alex:index.html.twig", "/var/www/SF2/src/CapBundle/Resources/views/Alex/index.html.twig");
    }
}
