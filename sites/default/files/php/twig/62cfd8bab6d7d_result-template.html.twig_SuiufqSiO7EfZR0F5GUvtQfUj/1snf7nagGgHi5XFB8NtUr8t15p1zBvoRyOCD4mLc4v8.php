<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/custom/post_module/templates/result-template.html.twig */
class __TwigTemplate_b175b18b385e887d7db9becfb2eb0f09860897368e2fd9afa4409d06e0f96068 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-4\">
      <h3>";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Tag"));
        echo "</h3>
      ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["tag"]) {
            // line 8
            echo "        <li class=\"list-group-item\">
          <a title=\"\"
             href=\"";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tag"], "url", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "\">
            ";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tag"], "getName", [], "method", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "
          </a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
    </div>
    <div class=\"col-md-8\">
      <h3>";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("List article search"));
        echo "</h3>
      <ul class=\"list-group list-group-flush\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["article"]) {
            // line 21
            echo "          <li class=\"list-group-item\">
            <a title=\"";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "node_field_data_title", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "\"
               link=\"";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("post_module.show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "nid", [], "any", false, false, true, 23)]), "html", null, true);
            echo "\"
               href=\"";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "urlLink", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "\">
              ";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "</a>
          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "      </ul>
      <div class=\"ty\">";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 29, $this->source), "html", null, true);
        echo "</div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/post_module/templates/result-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 29,  110 => 28,  101 => 25,  97 => 24,  93 => 23,  89 => 22,  86 => 21,  82 => 20,  77 => 18,  72 => 15,  62 => 11,  58 => 10,  54 => 8,  50 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/post_module/templates/result-template.html.twig", "C:\\xampp\\htdocs\\drupal9_test_xyz\\modules\\custom\\post_module\\templates\\result-template.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 7);
        static $filters = array("t" => 6, "escape" => 10);
        static $functions = array("path" => 23);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['t', 'escape'],
                ['path']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
