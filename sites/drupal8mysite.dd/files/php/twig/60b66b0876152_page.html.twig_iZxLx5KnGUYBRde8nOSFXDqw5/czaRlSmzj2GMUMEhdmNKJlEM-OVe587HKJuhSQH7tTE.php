<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/mysite/templates/page.html.twig */
class __TwigTemplate_20304fde883c78c78035d561a31ee7e8d93560d8b8acc722b7bac022936f7c1f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 13];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"site\">

        <div class=\"btn\">
            <a href=\"#\" class=\"scrollup\" style=\"\">&uarr;</a>
        </div>
        <div class=\"paspartu_top\"></div>
        <div class=\"paspartu_bottom\"></div>
        <div class=\"paspartu_left\"></div>
        <div class=\"paspartu_right\"></div>

\t    <div class=\"header\">

\t\t  ";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
\t   </div>
       <div class=\"content\">
\t     ";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
\t   </div>

\t   <div class=\"footer\">
\t\t";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
\t   </div>

</div>";
    }

    public function getTemplateName()
    {
        return "themes/mysite/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 20,  75 => 16,  69 => 13,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"site\">

        <div class=\"btn\">
            <a href=\"#\" class=\"scrollup\" style=\"\">&uarr;</a>
        </div>
        <div class=\"paspartu_top\"></div>
        <div class=\"paspartu_bottom\"></div>
        <div class=\"paspartu_left\"></div>
        <div class=\"paspartu_right\"></div>

\t    <div class=\"header\">

\t\t  {{ page.header }}
\t   </div>
       <div class=\"content\">
\t     {{ page.content }}
\t   </div>

\t   <div class=\"footer\">
\t\t{{ page.footer }}
\t   </div>

</div>", "themes/mysite/templates/page.html.twig", "E:\\Users\\HP\\Sites\\devdesktop\\drupal8mysite\\themes\\mysite\\templates\\page.html.twig");
    }
}
