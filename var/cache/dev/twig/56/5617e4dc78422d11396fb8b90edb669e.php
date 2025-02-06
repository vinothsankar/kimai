<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @Tabler/layout-vertical.html.twig */
class __TwigTemplate_eb992eba7f4d116277ffc7913be8103d extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'html_start' => [$this, 'block_html_start'],
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body_start' => [$this, 'block_body_start'],
            'body_class' => [$this, 'block_body_class'],
            'after_body_start' => [$this, 'block_after_body_start'],
            'navbar' => [$this, 'block_navbar'],
            'sidebar_id' => [$this, 'block_sidebar_id'],
            'app_logo' => [$this, 'block_app_logo'],
            'navbar_brand_classes' => [$this, 'block_navbar_brand_classes'],
            'navbar_brand_class' => [$this, 'block_navbar_brand_class'],
            'navbar_menu_start' => [$this, 'block_navbar_menu_start'],
            'navbar_menu_end' => [$this, 'block_navbar_menu_end'],
            'header' => [$this, 'block_header'],
            'header_id' => [$this, 'block_header_id'],
            'navbar_search' => [$this, 'block_navbar_search'],
            'page_wrapper_id' => [$this, 'block_page_wrapper_id'],
            'page_header' => [$this, 'block_page_header'],
            'page_header_id' => [$this, 'block_page_header_id'],
            'page_intro' => [$this, 'block_page_intro'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'page_pretitle' => [$this, 'block_page_pretitle'],
            'page_title' => [$this, 'block_page_title'],
            'page_subtitle' => [$this, 'block_page_subtitle'],
            'page_actions_class' => [$this, 'block_page_actions_class'],
            'page_actions' => [$this, 'block_page_actions'],
            'page_content_before' => [$this, 'block_page_content_before'],
            'page_content_id' => [$this, 'block_page_content_id'],
            'page_content_class' => [$this, 'block_page_content_class'],
            'page_content_start' => [$this, 'block_page_content_start'],
            'page_content' => [$this, 'block_page_content'],
            'page_content_end' => [$this, 'block_page_content_end'],
            'page_content_after' => [$this, 'block_page_content_after'],
            'footer' => [$this, 'block_footer'],
            'footer_id' => [$this, 'block_footer_id'],
            'javascripts' => [$this, 'block_javascripts'],
            'navbar_start' => [$this, 'block_navbar_start'],
            'navbar_notifications' => [$this, 'block_navbar_notifications'],
            'navbar_user' => [$this, 'block_navbar_user'],
            'navbar_end' => [$this, 'block_navbar_end'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Tabler/layout-vertical.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Tabler/layout-vertical.html.twig"));

        // line 9
        yield "<!doctype html";
        yield from $this->unwrap()->yieldBlock('html_start', $context, $blocks);
        yield ">
<html lang=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "locale", [], "any", false, false, false, 10), "html", null, true);
        yield "\"";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabler_bundle"]) || array_key_exists("tabler_bundle", $context) ? $context["tabler_bundle"] : (function () { throw new RuntimeError('Variable "tabler_bundle" does not exist.', 10, $this->source); })()), "isRightToLeft", [], "method", false, false, false, 10)) {
            yield " dir=\"rtl\"";
        }
        yield ">
<head>
    ";
        // line 12
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 15
        yield "    <title>";
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    ";
        // line 16
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 23
        yield "</head>
<body";
        // line 24
        yield from $this->unwrap()->yieldBlock('body_start', $context, $blocks);
        yield " class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->bodyClass("antialiased"), "html", null, true);
        yield " ";
        yield from $this->unwrap()->yieldBlock('body_class', $context, $blocks);
        yield "\" data-bs-theme=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->theme(), "html", null, true);
        yield "\">
";
        // line 25
        yield from $this->unwrap()->yieldBlock('after_body_start', $context, $blocks);
        // line 26
        yield "<div class=\"page\">
    ";
        // line 27
        $context["navbarStartContent"] =         $this->unwrap()->renderBlock("navbar_start", $context, $blocks);
        // line 28
        yield "    ";
        $context["navbarNotificationsContent"] =         $this->unwrap()->renderBlock("navbar_notifications", $context, $blocks);
        // line 29
        yield "    ";
        $context["navbarUserContent"] =         $this->unwrap()->renderBlock("navbar_user", $context, $blocks);
        // line 30
        yield "    ";
        $context["navbarEndContent"] =         $this->unwrap()->renderBlock("navbar_end", $context, $blocks);
        // line 31
        yield "
    ";
        // line 33
        yield "    ";
        yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        // line 55
        yield "
    ";
        // line 56
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 77
        yield "    ";
        // line 78
        yield "
    <div id=\"";
        // line 79
        yield from $this->unwrap()->yieldBlock('page_wrapper_id', $context, $blocks);
        yield "\" class=\"page-wrapper\">
        ";
        // line 80
        yield from $this->unwrap()->yieldBlock('page_header', $context, $blocks);
        // line 118
        yield "
        <div class=\"page-body\">
            <div class=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->containerClass(""), "html", null, true);
        yield "\">
                <div class=\"row row-cards\">
                    ";
        // line 122
        yield from $this->unwrap()->yieldBlock('page_content_before', $context, $blocks);
        // line 123
        yield "
                    <section id=\"";
        // line 124
        yield from $this->unwrap()->yieldBlock('page_content_id', $context, $blocks);
        yield "\" class=\"";
        yield from $this->unwrap()->yieldBlock('page_content_class', $context, $blocks);
        yield "\">
                        ";
        // line 125
        yield from $this->unwrap()->yieldBlock('page_content_start', $context, $blocks);
        // line 126
        yield "                        ";
        yield from $this->unwrap()->yieldBlock('page_content', $context, $blocks);
        // line 127
        yield "                        ";
        yield from $this->unwrap()->yieldBlock('page_content_end', $context, $blocks);
        // line 128
        yield "                    </section>

                    ";
        // line 130
        yield from $this->unwrap()->yieldBlock('page_content_after', $context, $blocks);
        // line 131
        yield "                </div>
            </div>
        </div>

        ";
        // line 135
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 142
        yield "    </div>
</div>

";
        // line 145
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 148
        yield "</body>
</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_html_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "html_start"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "html_start"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 13
        yield "        ";
        yield from $this->loadTemplate("@Tabler/includes/html_head.html.twig", "@Tabler/layout-vertical.html.twig", 13)->unwrap()->yield($context);
        // line 14
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield from         $this->unwrap()->yieldBlock("page_title", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabler_bundle"]) || array_key_exists("tabler_bundle", $context) ? $context["tabler_bundle"] : (function () { throw new RuntimeError('Variable "tabler_bundle" does not exist.', 17, $this->source); })()), "isRightToLeft", [], "method", false, false, false, 17)) {
            // line 18
            yield "            <link rel=\"stylesheet\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/tabler/tabler-rtl.css"), "html", null, true);
            yield "?";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->assetVersion(), "html", null, true);
            yield "\">
        ";
        } else {
            // line 20
            yield "            <link rel=\"stylesheet\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/tabler/tabler.css"), "html", null, true);
            yield "?";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->assetVersion(), "html", null, true);
            yield "\">
        ";
        }
        // line 22
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_start"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_start"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_after_body_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "after_body_start"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "after_body_start"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 34
        yield "        <aside id=\"";
        yield from $this->unwrap()->yieldBlock('sidebar_id', $context, $blocks);
        yield "\" class=\"navbar navbar-vertical navbar-expand-lg\" data-bs-theme=\"";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabler_bundle"]) || array_key_exists("tabler_bundle", $context) ? $context["tabler_bundle"] : (function () { throw new RuntimeError('Variable "tabler_bundle" does not exist.', 34, $this->source); })()), "isNavbarDark", [], "method", false, false, false, 34) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabler_bundle"]) || array_key_exists("tabler_bundle", $context) ? $context["tabler_bundle"] : (function () { throw new RuntimeError('Variable "tabler_bundle" does not exist.', 34, $this->source); })()), "isDarkMode", [], "method", false, false, false, 34))) ? ("dark") : ("light"));
        yield "\">
            <div class=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->containerClass(""), "html", null, true);
        yield "\">
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                ";
        // line 39
        yield from $this->unwrap()->yieldBlock('app_logo', $context, $blocks);
        // line 44
        yield "                <div class=\"navbar-nav flex-row d-lg-none\">
                    ";
        // line 45
        yield $this->getTemplateForMacro("macro_navbar", $context, 45, $this->getSourceContext())->macro_navbar(...[(isset($context["navbarStartContent"]) || array_key_exists("navbarStartContent", $context) ? $context["navbarStartContent"] : (function () { throw new RuntimeError('Variable "navbarStartContent" does not exist.', 45, $this->source); })()), (isset($context["navbarNotificationsContent"]) || array_key_exists("navbarNotificationsContent", $context) ? $context["navbarNotificationsContent"] : (function () { throw new RuntimeError('Variable "navbarNotificationsContent" does not exist.', 45, $this->source); })()), (isset($context["navbarUserContent"]) || array_key_exists("navbarUserContent", $context) ? $context["navbarUserContent"] : (function () { throw new RuntimeError('Variable "navbarUserContent" does not exist.', 45, $this->source); })()), (isset($context["navbarEndContent"]) || array_key_exists("navbarEndContent", $context) ? $context["navbarEndContent"] : (function () { throw new RuntimeError('Variable "navbarEndContent" does not exist.', 45, $this->source); })())]);
        yield "
                </div>
                <div id=\"navbar-menu\" class=\"collapse navbar-collapse\">
                    ";
        // line 48
        yield from $this->unwrap()->yieldBlock('navbar_menu_start', $context, $blocks);
        // line 49
        yield "                    ";
        yield from $this->loadTemplate("@Tabler/includes/menu.html.twig", "@Tabler/layout-vertical.html.twig", 49)->unwrap()->yield(CoreExtension::merge($context, ["layout_type" => "vertical", "navbar_class" => "pt-lg-3"]));
        // line 50
        yield "                    ";
        yield from $this->unwrap()->yieldBlock('navbar_menu_end', $context, $blocks);
        // line 51
        yield "                </div>
            </div>
        </aside>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_id(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_id"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_id"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_app_logo(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "app_logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "app_logo"));

        // line 40
        yield "                    <h1 class=\"";
        yield from $this->unwrap()->yieldBlock('navbar_brand_classes', $context, $blocks);
        yield "\">
                        ";
        // line 41
        yield from $this->loadTemplate("@Tabler/includes/logo.html.twig", "@Tabler/layout-vertical.html.twig", 41)->unwrap()->yield($context);
        // line 42
        yield "                    </h1>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar_brand_classes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_brand_classes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_brand_classes"));

        yield "navbar-brand ";
        yield from $this->unwrap()->yieldBlock('navbar_brand_class', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar_brand_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_brand_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_brand_class"));

        yield "navbar-brand-autodark";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 48
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar_menu_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_menu_start"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_menu_start"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar_menu_end(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_menu_end"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_menu_end"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 56
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 57
        yield "        ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabler_bundle"]) || array_key_exists("tabler_bundle", $context) ? $context["tabler_bundle"] : (function () { throw new RuntimeError('Variable "tabler_bundle" does not exist.', 57, $this->source); })()), "isCondensedNavbar", [], "method", false, false, false, 57)) {
            // line 58
            yield "            <header id=\"";
            yield from $this->unwrap()->yieldBlock('header_id', $context, $blocks);
            yield "\" class=\"navbar navbar-expand-md d-none d-lg-flex d-print-none\">
                <div class=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->containerClass(""), "html", null, true);
            yield "\">
                    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>

                    <div class=\"navbar-nav flex-row order-md-last\">
                        ";
            // line 65
            yield $this->getTemplateForMacro("macro_navbar", $context, 65, $this->getSourceContext())->macro_navbar(...[(isset($context["navbarStartContent"]) || array_key_exists("navbarStartContent", $context) ? $context["navbarStartContent"] : (function () { throw new RuntimeError('Variable "navbarStartContent" does not exist.', 65, $this->source); })()), (isset($context["navbarNotificationsContent"]) || array_key_exists("navbarNotificationsContent", $context) ? $context["navbarNotificationsContent"] : (function () { throw new RuntimeError('Variable "navbarNotificationsContent" does not exist.', 65, $this->source); })()), (isset($context["navbarUserContent"]) || array_key_exists("navbarUserContent", $context) ? $context["navbarUserContent"] : (function () { throw new RuntimeError('Variable "navbarUserContent" does not exist.', 65, $this->source); })()), (isset($context["navbarEndContent"]) || array_key_exists("navbarEndContent", $context) ? $context["navbarEndContent"] : (function () { throw new RuntimeError('Variable "navbarEndContent" does not exist.', 65, $this->source); })())]);
            yield "
                    </div>

                    <div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
                        ";
            // line 69
            yield from $this->unwrap()->yieldBlock('navbar_search', $context, $blocks);
            // line 72
            yield "                    </div>
                </div>
            </header>
        ";
        }
        // line 76
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_id(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_id"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_id"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar_search(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_search"));

        // line 70
        yield "                            ";
        yield from $this->loadTemplate("@Tabler/includes/navbar_search.html.twig", "@Tabler/layout-vertical.html.twig", 70)->unwrap()->yield($context);
        // line 71
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 79
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_wrapper_id(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_wrapper_id"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_wrapper_id"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 80
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_header"));

        // line 81
        yield "            <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->containerClass(""), "html", null, true);
        yield "\">
                ";
        // line 83
        yield "                <div id=\"";
        yield from $this->unwrap()->yieldBlock('page_header_id', $context, $blocks);
        yield "\" class=\"page-header d-print-none\">
                    <div class=\"row align-items-center\">
                        <div class=\"col\">
                        ";
        // line 86
        yield from $this->unwrap()->yieldBlock('page_intro', $context, $blocks);
        // line 101
        yield "                        </div>
                        <div class=\"";
        // line 102
        yield from $this->unwrap()->yieldBlock('page_actions_class', $context, $blocks);
        yield "\">
                            ";
        // line 103
        yield from $this->unwrap()->yieldBlock('page_actions', $context, $blocks);
        // line 113
        yield "                        </div>
                    </div>
                </div>
            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 83
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_header_id(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_header_id"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_header_id"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_intro(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_intro"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_intro"));

        // line 87
        yield "                            ";
        yield from $this->unwrap()->yieldBlock('breadcrumb', $context, $blocks);
        // line 92
        yield "                            <h2 class=\"page-title\">
                                ";
        // line 93
        yield from $this->unwrap()->yieldBlock('page_title', $context, $blocks);
        // line 94
        yield "                            </h2>
                            ";
        // line 95
        yield from $this->unwrap()->yieldBlock('page_subtitle', $context, $blocks);
        // line 100
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 87
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 88
        yield "                                <div class=\"page-pretitle\">
                                    ";
        // line 89
        yield from $this->unwrap()->yieldBlock('page_pretitle', $context, $blocks);
        // line 90
        yield "                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 89
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_pretitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_pretitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_pretitle"));

        yield "Overview";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 93
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield "Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 95
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_subtitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_subtitle"));

        // line 96
        yield "                                <div class=\"text-body-secondary mt-1\">
                                    1-10 of 100
                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 102
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_actions_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions_class"));

        yield "col-auto ms-auto d-print-none";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 103
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        // line 104
        yield "                                <div class=\"btn-list\">
                                    <a href=\"#\" class=\"btn btn-white\">
                                        New view
                                    </a>
                                    <a href=\"#\" class=\"btn btn-primary d-none d-sm-inline-block\">
                                        Create new report
                                    </a>
                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 122
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_content_before(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_before"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_before"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 124
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_content_id(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_id"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_id"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_content_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_class"));

        yield "content";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 125
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_content_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_start"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_start"));

        yield Twig\Extension\CoreExtension::include($this->env, $context, "@Tabler/includes/flash_messages.html.twig");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 126
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 127
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_content_end(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_end"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_end"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 130
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_content_after(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_after"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_after"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 135
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 136
        yield "            <footer id=\"";
        yield from $this->unwrap()->yieldBlock('footer_id', $context, $blocks);
        yield "\" class=\"footer footer-transparent d-print-none\">
                <div class=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->containerClass(""), "html", null, true);
        yield "\">
                    ";
        // line 138
        yield from $this->loadTemplate("@Tabler/includes/footer.html.twig", "@Tabler/layout-vertical.html.twig", 138)->unwrap()->yield($context);
        // line 139
        yield "                </div>
            </footer>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 136
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer_id(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_id"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_id"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 145
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 146
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/tabler/tabler.js"), "html", null, true);
        yield "?";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->assetVersion(), "html", null, true);
        yield "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 152
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_start"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_start"));

        yield ($context["navbar_start"] ?? "");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 153
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar_notifications(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_notifications"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_notifications"));

        // line 154
        yield "        ";
        if (array_key_exists("navbar_notifications", $context)) {
            // line 155
            yield "            ";
            yield (isset($context["navbar_notifications"]) || array_key_exists("navbar_notifications", $context) ? $context["navbar_notifications"] : (function () { throw new RuntimeError('Variable "navbar_notifications" does not exist.', 155, $this->source); })());
            yield "
        ";
        } else {
            // line 157
            yield "            ";
            yield from $this->loadTemplate("@Tabler/includes/navbar_notifications.html.twig", "@Tabler/layout-vertical.html.twig", 157)->unwrap()->yield($context);
            // line 158
            yield "        ";
        }
        // line 159
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 160
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar_user(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_user"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_user"));

        // line 161
        yield "        ";
        if (array_key_exists("navbar_user", $context)) {
            // line 162
            yield "            ";
            yield (isset($context["navbar_user"]) || array_key_exists("navbar_user", $context) ? $context["navbar_user"] : (function () { throw new RuntimeError('Variable "navbar_user" does not exist.', 162, $this->source); })());
            yield "
        ";
        } else {
            // line 164
            yield "            ";
            yield from $this->loadTemplate("@Tabler/includes/navbar_user.html.twig", "@Tabler/layout-vertical.html.twig", 164)->unwrap()->yield($context);
            // line 165
            yield "        ";
        }
        // line 166
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 167
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar_end(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_end"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_end"));

        yield ($context["navbar_end"] ?? "");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 151
    public function macro_navbar($navbar_start = null, $navbar_notifications = null, $navbar_user = null, $navbar_end = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "navbar_start" => $navbar_start,
            "navbar_notifications" => $navbar_notifications,
            "navbar_user" => $navbar_user,
            "navbar_end" => $navbar_end,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "navbar"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "navbar"));

            // line 152
            yield "    ";
            yield from $this->unwrap()->yieldBlock('navbar_start', $context, $blocks);
            // line 153
            yield "    ";
            yield from $this->unwrap()->yieldBlock('navbar_notifications', $context, $blocks);
            // line 160
            yield "    ";
            yield from $this->unwrap()->yieldBlock('navbar_user', $context, $blocks);
            // line 167
            yield "    ";
            yield from $this->unwrap()->yieldBlock('navbar_end', $context, $blocks);
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Tabler/layout-vertical.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  1402 => 167,  1399 => 160,  1396 => 153,  1393 => 152,  1372 => 151,  1349 => 167,  1338 => 166,  1335 => 165,  1332 => 164,  1326 => 162,  1323 => 161,  1310 => 160,  1299 => 159,  1296 => 158,  1293 => 157,  1287 => 155,  1284 => 154,  1271 => 153,  1248 => 152,  1232 => 146,  1219 => 145,  1197 => 136,  1184 => 139,  1182 => 138,  1178 => 137,  1173 => 136,  1160 => 135,  1138 => 130,  1116 => 127,  1094 => 126,  1071 => 125,  1027 => 124,  1005 => 122,  986 => 104,  973 => 103,  950 => 102,  936 => 96,  923 => 95,  900 => 93,  877 => 89,  865 => 90,  863 => 89,  860 => 88,  847 => 87,  836 => 100,  834 => 95,  831 => 94,  829 => 93,  826 => 92,  823 => 87,  810 => 86,  788 => 83,  773 => 113,  771 => 103,  767 => 102,  764 => 101,  762 => 86,  755 => 83,  750 => 81,  737 => 80,  715 => 79,  704 => 71,  701 => 70,  688 => 69,  666 => 58,  655 => 76,  649 => 72,  647 => 69,  640 => 65,  631 => 59,  626 => 58,  623 => 57,  610 => 56,  588 => 50,  566 => 48,  520 => 40,  508 => 42,  506 => 41,  501 => 40,  488 => 39,  466 => 34,  452 => 51,  449 => 50,  446 => 49,  444 => 48,  438 => 45,  435 => 44,  433 => 39,  426 => 35,  419 => 34,  406 => 33,  384 => 25,  341 => 24,  330 => 22,  322 => 20,  314 => 18,  311 => 17,  298 => 16,  275 => 15,  264 => 14,  261 => 13,  248 => 12,  226 => 9,  212 => 148,  210 => 145,  205 => 142,  203 => 135,  197 => 131,  195 => 130,  191 => 128,  188 => 127,  185 => 126,  183 => 125,  177 => 124,  174 => 123,  172 => 122,  167 => 120,  163 => 118,  161 => 80,  157 => 79,  154 => 78,  152 => 77,  150 => 56,  147 => 55,  144 => 33,  141 => 31,  138 => 30,  135 => 29,  132 => 28,  130 => 27,  127 => 26,  125 => 25,  115 => 24,  112 => 23,  110 => 16,  105 => 15,  103 => 12,  94 => 10,  89 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
Use this as your new starter template page, use it to start your new project,
by adding this code to your own base template:

{% extends '@Tabler/layout-vertical.html.twig' %}

Enjoy your theme!
#}
<!doctype html{% block html_start %}{% endblock %}>
<html lang=\"{{ app.request.locale }}\"{% if tabler_bundle.isRightToLeft() %} dir=\"rtl\"{% endif %}>
<head>
    {% block head %}
        {% include '@Tabler/includes/html_head.html.twig' %}
    {% endblock %}
    <title>{% block title %}{{ block('page_title') }}{% endblock %}</title>
    {% block stylesheets %}
        {% if tabler_bundle.isRightToLeft() %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/tabler/tabler-rtl.css') }}?{{ tabler_asset_version() }}\">
        {% else %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/tabler/tabler.css') }}?{{ tabler_asset_version() }}\">
        {% endif %}
    {% endblock %}
</head>
<body{% block body_start %}{% endblock %} class=\"{{ 'antialiased'|tabler_body }} {% block body_class %}{% endblock %}\" data-bs-theme=\"{{ tabler_theme() }}\">
{% block after_body_start %}{% endblock %}
<div class=\"page\">
    {% set navbarStartContent = block('navbar_start') %}
    {% set navbarNotificationsContent = block('navbar_notifications') %}
    {% set navbarUserContent = block('navbar_user') %}
    {% set navbarEndContent = block('navbar_end') %}

    {# *** Layout type changes *** #}
    {% block navbar %}
        <aside id=\"{% block sidebar_id %}{% endblock %}\" class=\"navbar navbar-vertical navbar-expand-lg\" data-bs-theme=\"{{ tabler_bundle.isNavbarDark() or tabler_bundle.isDarkMode() ? 'dark' : 'light' }}\">
            <div class=\"{{ ''|tabler_container }}\">
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                {% block app_logo %}
                    <h1 class=\"{% block navbar_brand_classes %}navbar-brand {% block navbar_brand_class %}navbar-brand-autodark{% endblock %}{% endblock %}\">
                        {% include '@Tabler/includes/logo.html.twig' %}
                    </h1>
                {% endblock %}
                <div class=\"navbar-nav flex-row d-lg-none\">
                    {{ _self.navbar(navbarStartContent, navbarNotificationsContent, navbarUserContent, navbarEndContent) }}
                </div>
                <div id=\"navbar-menu\" class=\"collapse navbar-collapse\">
                    {% block navbar_menu_start %}{% endblock %}
                    {% include '@Tabler/includes/menu.html.twig' with {layout_type: 'vertical', navbar_class : 'pt-lg-3'} %}
                    {% block navbar_menu_end %}{% endblock %}
                </div>
            </div>
        </aside>
    {% endblock %}

    {% block header %}
        {% if not tabler_bundle.isCondensedNavbar() %}
            <header id=\"{% block header_id %}{% endblock %}\" class=\"navbar navbar-expand-md d-none d-lg-flex d-print-none\">
                <div class=\"{{ ''|tabler_container }}\">
                    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>

                    <div class=\"navbar-nav flex-row order-md-last\">
                        {{ _self.navbar(navbarStartContent, navbarNotificationsContent, navbarUserContent, navbarEndContent) }}
                    </div>

                    <div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
                        {% block navbar_search %}
                            {% include '@Tabler/includes/navbar_search.html.twig' %}
                        {% endblock %}
                    </div>
                </div>
            </header>
        {% endif %}
    {% endblock %}
    {# *************************** #}

    <div id=\"{% block page_wrapper_id %}{% endblock %}\" class=\"page-wrapper\">
        {% block page_header %}
            <div class=\"{{ ''|tabler_container }}\">
                {# Page title #}
                <div id=\"{% block page_header_id %}{% endblock %}\" class=\"page-header d-print-none\">
                    <div class=\"row align-items-center\">
                        <div class=\"col\">
                        {% block page_intro %}
                            {% block breadcrumb %}
                                <div class=\"page-pretitle\">
                                    {% block page_pretitle %}Overview{% endblock %}
                                </div>
                            {% endblock %}
                            <h2 class=\"page-title\">
                                {% block page_title %}Dashboard{% endblock %}
                            </h2>
                            {% block page_subtitle %}
                                <div class=\"text-body-secondary mt-1\">
                                    1-10 of 100
                                </div>
                            {% endblock %}
                        {% endblock %}
                        </div>
                        <div class=\"{% block page_actions_class %}col-auto ms-auto d-print-none{% endblock %}\">
                            {% block page_actions %}
                                <div class=\"btn-list\">
                                    <a href=\"#\" class=\"btn btn-white\">
                                        New view
                                    </a>
                                    <a href=\"#\" class=\"btn btn-primary d-none d-sm-inline-block\">
                                        Create new report
                                    </a>
                                </div>
                            {% endblock %}
                        </div>
                    </div>
                </div>
            </div>
        {% endblock %}

        <div class=\"page-body\">
            <div class=\"{{ ''|tabler_container }}\">
                <div class=\"row row-cards\">
                    {% block page_content_before %}{% endblock %}

                    <section id=\"{% block page_content_id %}{% endblock %}\" class=\"{% block page_content_class %}content{% endblock %}\">
                        {% block page_content_start %}{{ include('@Tabler/includes/flash_messages.html.twig') }}{% endblock %}
                        {% block page_content %}{% endblock %}
                        {% block page_content_end %}{% endblock %}
                    </section>

                    {% block page_content_after %}{% endblock %}
                </div>
            </div>
        </div>

        {% block footer %}
            <footer id=\"{% block footer_id %}{% endblock %}\" class=\"footer footer-transparent d-print-none\">
                <div class=\"{{ ''|tabler_container }}\">
                    {% include '@Tabler/includes/footer.html.twig' %}
                </div>
            </footer>
        {% endblock %}
    </div>
</div>

{% block javascripts %}
    <script src=\"{{ asset('bundles/tabler/tabler.js') }}?{{ tabler_asset_version() }}\"></script>
{% endblock %}
</body>
</html>

{% macro navbar(navbar_start, navbar_notifications, navbar_user, navbar_end) %}
    {% block navbar_start %}{{ (navbar_start ?? '') | raw }}{% endblock %}
    {% block navbar_notifications %}
        {% if navbar_notifications is defined %}
            {{ navbar_notifications|raw }}
        {% else %}
            {% include '@Tabler/includes/navbar_notifications.html.twig' %}
        {% endif %}
    {% endblock %}
    {% block navbar_user %}
        {% if navbar_user is defined %}
            {{ navbar_user|raw }}
        {% else %}
            {% include '@Tabler/includes/navbar_user.html.twig' %}
        {% endif %}
    {% endblock %}
    {% block navbar_end %}{{ (navbar_end ?? '') | raw }}{% endblock %}
{% endmacro %}
", "@Tabler/layout-vertical.html.twig", "C:\\wamp64\\www\\kimai\\vendor\\kevinpapst\\tabler-bundle\\templates\\layout-vertical.html.twig");
    }
}
