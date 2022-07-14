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

/* themes/custom/water_theme/templates/block/block--postsection.html.twig */
class __TwigTemplate_5b8e34964908ad2660bd47d6d024b954f9681a4e44eef58026afa75da7d0ff25 extends \Twig\Template
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
        echo "<div class=\"section-title\">
  <h2><span>All Stories</span></h2>
</div>
<div class=\"card-columns listrecent\">

  <!-- begin post -->
  <div class=\"card\">
    <a href=\"post.html\">
      <img class=\"img-fluid\" src=\"themes/custom/water_theme/img/demopic/5.jpg\" alt=\"\">
    </a>
    <div class=\"card-block\">
      <h2 class=\"card-title\"><a href=\"post.html\">Autumn doesn't have to be nostalgic, you know?</a></h2>
      <h4 class=\"card-text\">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h4>
      <div class=\"metafooter\">
        <div class=\"wrapfooter\">
\t\t\t\t\t\t<span class=\"meta-footer-thumb\">
\t\t\t\t\t\t<a href=\"author.html\"><img class=\"author-thumb\" src=\"https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x\" alt=\"Sal\"></a>
\t\t\t\t\t\t</span>
          <span class=\"author-meta\">
\t\t\t\t\t\t<span class=\"post-name\"><a href=\"author.html\">Sal</a></span><br/>
\t\t\t\t\t\t<span class=\"post-date\">22 July 2017</span><span class=\"dot\"></span><span class=\"post-read\">6 min read</span>
\t\t\t\t\t\t</span>
          <span class=\"post-read-more\"><a href=\"post.html\" title=\"Read Story\"><svg class=\"svgIcon-use\" width=\"25\" height=\"25\" viewbox=\"0 0 25 25\"><path d=\"M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z\" fill-rule=\"evenodd\"></path></svg></a></span>
        </div>
      </div>
    </div>
  </div>
  <!-- end post -->

  <!-- begin post -->
  <div class=\"card\">
    <a href=\"post.html\">
      <img class=\"img-fluid\" src=\"themes/custom/water_theme/img/demopic/6.jpg\" alt=\"\">
    </a>
    <div class=\"card-block\">
      <h2 class=\"card-title\"><a href=\"post.html\">Best galleries in the world with photos</a></h2>
      <h4 class=\"card-text\">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h4>
      <div class=\"metafooter\">
        <div class=\"wrapfooter\">
\t\t\t\t\t\t<span class=\"meta-footer-thumb\">
\t\t\t\t\t\t<a href=\"author.html\"><img class=\"author-thumb\" src=\"https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x\" alt=\"Sal\"></a>
\t\t\t\t\t\t</span>
          <span class=\"author-meta\">
\t\t\t\t\t\t<span class=\"post-name\"><a href=\"author.html\">Sal</a></span><br/>
\t\t\t\t\t\t<span class=\"post-date\">22 July 2017</span><span class=\"dot\"></span><span class=\"post-read\">6 min read</span>
\t\t\t\t\t\t</span>
          <span class=\"post-read-more\"><a href=\"post.html\" title=\"Read Story\"><svg class=\"svgIcon-use\" width=\"25\" height=\"25\" viewbox=\"0 0 25 25\"><path d=\"M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z\" fill-rule=\"evenodd\"></path></svg></a></span>
        </div>
      </div>
    </div>
  </div>
  <!-- end post -->

  <!-- begin post -->
  <div class=\"card\">
    <a href=\"post.html\">
      <img class=\"img-fluid\" src=\"themes/custom/water_theme/img/demopic/7.jpg\" alt=\"\">
    </a>
    <div class=\"card-block\">
      <h2 class=\"card-title\"><a href=\"post.html\">Little red dress and a perfect summer</a></h2>
      <h4 class=\"card-text\">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h4>
      <div class=\"metafooter\">
        <div class=\"wrapfooter\">
\t\t\t\t\t\t<span class=\"meta-footer-thumb\">
\t\t\t\t\t\t<a href=\"author.html\"><img class=\"author-thumb\" src=\"https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x\" alt=\"Sal\"></a>
\t\t\t\t\t\t</span>
          <span class=\"author-meta\">
\t\t\t\t\t\t<span class=\"post-name\"><a href=\"author.html\">Sal</a></span><br/>
\t\t\t\t\t\t<span class=\"post-date\">22 July 2017</span><span class=\"dot\"></span><span class=\"post-read\">6 min read</span>
\t\t\t\t\t\t</span>
          <span class=\"post-read-more\"><a href=\"post.html\" title=\"Read Story\"><svg class=\"svgIcon-use\" width=\"25\" height=\"25\" viewbox=\"0 0 25 25\"><path d=\"M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z\" fill-rule=\"evenodd\"></path></svg></a></span>
        </div>
      </div>
    </div>
  </div>
  <!-- end post -->

  <!-- begin post -->
  <div class=\"card\">
    <a href=\"post.html\">
      <img class=\"img-fluid\" src=\"themes/custom/water_theme/img/demopic/8.jpg\" alt=\"\">
    </a>
    <div class=\"card-block\">
      <h2 class=\"card-title\"><a href=\"post.html\">Thinking outside the box can help you prosper</a></h2>
      <h4 class=\"card-text\">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h4>
      <div class=\"metafooter\">
        <div class=\"wrapfooter\">
\t\t\t\t\t\t<span class=\"meta-footer-thumb\">
\t\t\t\t\t\t<a href=\"author.html\"><img class=\"author-thumb\" src=\"https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x\" alt=\"Sal\"></a>
\t\t\t\t\t\t</span>
          <span class=\"author-meta\">
\t\t\t\t\t\t<span class=\"post-name\"><a href=\"author.html\">Sal</a></span><br/>
\t\t\t\t\t\t<span class=\"post-date\">22 July 2017</span><span class=\"dot\"></span><span class=\"post-read\">6 min read</span>
\t\t\t\t\t\t</span>
          <span class=\"post-read-more\"><a href=\"post.html\" title=\"Read Story\"><svg class=\"svgIcon-use\" width=\"25\" height=\"25\" viewbox=\"0 0 25 25\"><path d=\"M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z\" fill-rule=\"evenodd\"></path></svg></a></span>
        </div>
      </div>
    </div>
  </div>
  <!-- end post -->

  <!-- begin post -->
  <div class=\"card\">
    <a href=\"post.html\">
      <img class=\"img-fluid\" src=\"themes/custom/water_theme/img/demopic/9.jpg\" alt=\"\">
    </a>
    <div class=\"card-block\">
      <h2 class=\"card-title\"><a href=\"post.html\">10 Things you should know about choosing your house</a></h2>
      <h4 class=\"card-text\">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h4>
      <div class=\"metafooter\">
        <div class=\"wrapfooter\">
\t\t\t\t\t\t<span class=\"meta-footer-thumb\">
\t\t\t\t\t\t<a href=\"author.html\"><img class=\"author-thumb\" src=\"https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x\" alt=\"Sal\"></a>
\t\t\t\t\t\t</span>
          <span class=\"author-meta\">
\t\t\t\t\t\t<span class=\"post-name\"><a href=\"author.html\">Sal</a></span><br/>
\t\t\t\t\t\t<span class=\"post-date\">22 July 2017</span><span class=\"dot\"></span><span class=\"post-read\">6 min read</span>
\t\t\t\t\t\t</span>
          <span class=\"post-read-more\"><a href=\"post.html\" title=\"Read Story\"><svg class=\"svgIcon-use\" width=\"25\" height=\"25\" viewbox=\"0 0 25 25\"><path d=\"M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z\" fill-rule=\"evenodd\"></path></svg></a></span>
        </div>
      </div>
    </div>
  </div>
  <!-- end post -->

  <!-- begin post -->
  <div class=\"card\">
    <a href=\"post.html\">
      <img class=\"img-fluid\" src=\"themes/custom/water_theme/img/demopic/10.jpg\" alt=\"\">
    </a>
    <div class=\"card-block\">
      <h2 class=\"card-title\"><a href=\"post.html\">Visiting the world means learning cultures</a></h2>
      <h4 class=\"card-text\">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h4>
      <div class=\"metafooter\">
        <div class=\"wrapfooter\">
\t\t\t\t\t\t<span class=\"meta-footer-thumb\">
\t\t\t\t\t\t<a href=\"author.html\"><img class=\"author-thumb\" src=\"https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x\" alt=\"Sal\"></a>
\t\t\t\t\t\t</span>
          <span class=\"author-meta\">
\t\t\t\t\t\t<span class=\"post-name\"><a href=\"author.html\">Sal</a></span><br/>
\t\t\t\t\t\t<span class=\"post-date\">22 July 2017</span><span class=\"dot\"></span><span class=\"post-read\">6 min read</span>
\t\t\t\t\t\t</span>
          <span class=\"post-read-more\"><a href=\"post.html\" title=\"Read Story\"><svg class=\"svgIcon-use\" width=\"25\" height=\"25\" viewbox=\"0 0 25 25\"><path d=\"M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z\" fill-rule=\"evenodd\"></path></svg></a></span>
        </div>
      </div>
    </div>
  </div>
  <!-- end post -->

</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/water_theme/templates/block/block--postsection.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/water_theme/templates/block/block--postsection.html.twig", "C:\\xampp\\htdocs\\drupal9_test_xyz\\themes\\custom\\water_theme\\templates\\block\\block--postsection.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
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
