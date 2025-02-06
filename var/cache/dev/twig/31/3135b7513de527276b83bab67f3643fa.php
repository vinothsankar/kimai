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

/* base.html.twig */
class __TwigTemplate_cd97aa0ced02e045bb5376a23ac0afdb extends Template
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

        $this->blocks = [
            'body_start' => [$this, 'block_body_start'],
            'after_body_start' => [$this, 'block_after_body_start'],
            'page_search' => [$this, 'block_page_search'],
            'page_content_class' => [$this, 'block_page_content_class'],
            'page_class' => [$this, 'block_page_class'],
            'page_content_start' => [$this, 'block_page_content_start'],
            'page_content_before' => [$this, 'block_page_content_before'],
            'main_before' => [$this, 'block_main_before'],
            'page_content_after' => [$this, 'block_page_content_after'],
            'main_after' => [$this, 'block_main_after'],
            'page_content' => [$this, 'block_page_content'],
            'main' => [$this, 'block_main'],
            'title' => [$this, 'block_title'],
            'footer' => [$this, 'block_footer'],
            'navbar_start' => [$this, 'block_navbar_start'],
            'navbar_extensions' => [$this, 'block_navbar_extensions'],
            'navbar_extensions_after' => [$this, 'block_navbar_extensions_after'],
            'page_pretitle' => [$this, 'block_page_pretitle'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'head' => [$this, 'block_head'],
            'javascripts' => [$this, 'block_javascripts'],
            'navbar_brand_class' => [$this, 'block_navbar_brand_class'],
            'app_logo' => [$this, 'block_app_logo'],
            'navbar_search' => [$this, 'block_navbar_search'],
            'page_intro' => [$this, 'block_page_intro'],
            'page_title' => [$this, 'block_page_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'page_header' => [$this, 'block_page_header'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@theme/layout/default-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $this->parent = $this->loadTemplate("@theme/layout/default-layout.html.twig", "base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    data-title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->generateTitle(), "html_attr");
        yield "\"";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "    ";
        yield from $this->loadTemplate("base.html.twig", "base.html.twig", 8, "512519754")->unwrap()->yield($context);
        // line 15
        yield "    ";
        yield from $this->loadTemplate("base.html.twig", "base.html.twig", 15, "923713437")->unwrap()->yield($context);
        // line 24
        yield "    ";
        yield from $this->unwrap()->yieldBlock('page_search', $context, $blocks);
        // line 25
        yield "    <div id=\"toast-container\" class=\"toast-container position-fixed top-0 start-50 translate-middle-x p-3\" style=\"z-index: 11\"></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_search(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_search"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 28
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

        yield from $this->yieldParentBlock("page_content_class", $context, $blocks);
        yield " ";
        yield from $this->unwrap()->yieldBlock('page_class', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_class"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 30
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

        // line 31
        yield "    ";
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "session", [], "any", false, false, false, 31) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "session", [], "any", false, false, false, 31), "started", [], "any", false, false, false, 31)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "session", [], "any", false, false, false, 31), "flashbag", [], "any", false, false, false, 31), "peekAll", [], "any", false, false, false, 31)) > 0))) {
            // line 32
            yield "        ";
            $context["domain"] = "flashmessages";
            // line 33
            yield "        <script type=\"text/javascript\">
            document.addEventListener('kimai.initialized', function(options) {
                const ALERT = options.detail.kimai.getPlugin('alert');
                ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "session", [], "any", false, false, false, 36), "flashbag", [], "any", false, false, false, 36), "all", [], "any", false, false, false, 36));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 37
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 38
                    yield "                        ";
                    if (($context["type"] == "error")) {
                        // line 39
                        yield "                            ALERT.error('";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"], [], (isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 39, $this->source); })())), "js"), "html", null, true);
                        yield "');
                        ";
                    } elseif ((                    // line 40
$context["type"] == "warning")) {
                        // line 41
                        yield "                            ALERT.warning('";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"], [], (isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 41, $this->source); })())), "js"), "html", null, true);
                        yield "');
                        ";
                    } elseif ((                    // line 42
$context["type"] == "success")) {
                        // line 43
                        yield "                            ALERT.success('";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"], [], (isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 43, $this->source); })())), "js"), "html", null, true);
                        yield "');
                        ";
                    } else {
                        // line 45
                        yield "                            ALERT.info('";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"], [], (isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 45, $this->source); })())), "js"), "html", null, true);
                        yield "');
                        ";
                    }
                    // line 47
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            yield "            });
        </script>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 54
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

        // line 55
        yield "    ";
        $context["event"] = $this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->trigger($this->env, Twig\Extension\CoreExtension::constant("App\\Event\\ThemeEvent::CONTENT_BEFORE"));
        // line 56
        yield "    ";
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 56, $this->source); })()), "content", [], "any", false, false, false, 56);
        yield "
    <div class=\"d-print-none hidden-no-space\">
        ";
        // line 58
        yield from $this->unwrap()->yieldBlock('main_before', $context, $blocks);
        // line 59
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main_before(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_before"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_before"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 62
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

        // line 63
        yield "    ";
        yield from $this->unwrap()->yieldBlock('main_after', $context, $blocks);
        // line 64
        yield "    ";
        $context["event"] = $this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->trigger($this->env, Twig\Extension\CoreExtension::constant("App\\Event\\ThemeEvent::CONTENT_AFTER"));
        // line 65
        yield "    ";
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 65, $this->source); })()), "content", [], "any", false, false, false, 65);
        yield "
    ";
        // line 66
        if ((array_key_exists("page_setup", $context) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["page_setup"]) || array_key_exists("page_setup", $context) ? $context["page_setup"] : (function () { throw new RuntimeError('Variable "page_setup" does not exist.', 66, $this->source); })()), "help", [], "any", false, false, false, 66)))) {
            // line 67
            yield "        <div class=\"float-help\">
            <a href=\"";
            // line 68
            if (CoreExtension::inFilter("://", CoreExtension::getAttribute($this->env, $this->source, (isset($context["page_setup"]) || array_key_exists("page_setup", $context) ? $context["page_setup"] : (function () { throw new RuntimeError('Variable "page_setup" does not exist.', 68, $this->source); })()), "help", [], "any", false, false, false, 68))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page_setup"]) || array_key_exists("page_setup", $context) ? $context["page_setup"] : (function () { throw new RuntimeError('Variable "page_setup" does not exist.', 68, $this->source); })()), "help", [], "any", false, false, false, 68), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\Extensions']->documentationLink(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page_setup"]) || array_key_exists("page_setup", $context) ? $context["page_setup"] : (function () { throw new RuntimeError('Variable "page_setup" does not exist.', 68, $this->source); })()), "help", [], "any", false, false, false, 68)), "html", null, true);
            }
            yield "\" target=\"_blank\" accesskey=\"h\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("help"), "html", null, true);
            yield "\">
                <i class=\"fas fa-question\"></i>
            </a>
        </div>
        <div class=\"mb-4\"></div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main_after(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_after"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_after"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 76
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

        // line 77
        yield "    ";
        $context["event"] = $this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->trigger($this->env, Twig\Extension\CoreExtension::constant("App\\Event\\ThemeEvent::CONTENT_START"));
        // line 78
        yield "    ";
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 78, $this->source); })()), "content", [], "any", false, false, false, 78);
        yield "
    ";
        // line 79
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 80
        yield "    ";
        $context["event"] = $this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->trigger($this->env, Twig\Extension\CoreExtension::constant("App\\Event\\ThemeEvent::CONTENT_END"));
        // line 81
        yield "    ";
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 81, $this->source); })()), "content", [], "any", false, false, false, 81);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 79
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 84
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

        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->generateTitle(), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 88
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

        // line 89
        yield "    ";
        if (CoreExtension::inFilter("dashboard", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "request", [], "any", false, false, false, 89), "attributes", [], "any", false, false, false, 89), "get", ["_route"], "method", false, false, false, 89))) {
            // line 90
            yield "        ";
            yield from $this->yieldParentBlock("footer", $context, $blocks);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 94
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

        // line 95
        yield "    ";
        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95)) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED"))) {
            // line 96
            yield "        ";
            yield from $this->unwrap()->yieldBlock('navbar_extensions', $context, $blocks);
            // line 97
            yield "        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("create_own_timesheet")) {
                // line 98
                yield "            ";
                yield from $this->loadTemplate("partials/ticktack.html.twig", "base.html.twig", 98)->unwrap()->yield($context);
                // line 99
                yield "        ";
            }
            // line 100
            yield "        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("view_own_timesheet")) {
                // line 101
                yield "            ";
                yield from $this->loadTemplate("partials/recent-activities.html.twig", "base.html.twig", 101)->unwrap()->yield($context);
                // line 102
                yield "        ";
            }
            // line 103
            yield "        ";
            yield from $this->loadTemplate("partials/user-shortcuts.html.twig", "base.html.twig", 103)->unwrap()->yield($context);
            // line 104
            yield "        ";
            yield from $this->unwrap()->yieldBlock('navbar_extensions_after', $context, $blocks);
            // line 108
            yield "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 96
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar_extensions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_extensions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_extensions"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 104
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar_extensions_after(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_extensions_after"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_extensions_after"));

        // line 105
        yield "            ";
        $context["event"] = $this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->trigger($this->env, Twig\Extension\CoreExtension::constant("App\\Event\\ThemeEvent::TOOLBAR"));
        // line 106
        yield "            ";
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 106, $this->source); })()), "content", [], "any", false, false, false, 106);
        yield "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 112
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 114
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

        // line 115
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabler_bundle"]) || array_key_exists("tabler_bundle", $context) ? $context["tabler_bundle"] : (function () { throw new RuntimeError('Variable "tabler_bundle" does not exist.', 115, $this->source); })()), "isRightToLeft", [], "method", false, false, false, 115)) {
            // line 116
            yield "        ";
            yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app-rtl");
            yield "
    ";
        } else {
            // line 118
            yield "        ";
            yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
            yield "
    ";
        }
        // line 120
        yield "    ";
        $context["event"] = $this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->trigger($this->env, Twig\Extension\CoreExtension::constant("App\\Event\\ThemeEvent::STYLESHEET"));
        // line 121
        yield "    ";
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 121, $this->source); })()), "content", [], "any", false, false, false, 121);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 124
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

        // line 125
        yield "    ";
        yield from $this->loadTemplate("partials/head.html.twig", "base.html.twig", 125)->unwrap()->yield($context);
        // line 126
        yield "    ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        yield "
    ";
        // line 127
        $context["event"] = $this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->trigger($this->env, Twig\Extension\CoreExtension::constant("App\\Event\\ThemeEvent::HTML_HEAD"));
        // line 128
        yield "    ";
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 128, $this->source); })()), "content", [], "any", false, false, false, 128);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 131
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

        // line 132
        yield "    ";
        // line 133
        yield "    ";
        $macros["webloader"] = $this->loadTemplate("macros/webloader.html.twig", "base.html.twig", 133)->unwrap();
        // line 134
        yield "    ";
        yield $macros["webloader"]->getTemplateForMacro("macro_init_frontend_loader", $context, 134, $this->getSourceContext())->macro_init_frontend_loader(...[]);
        yield "
    ";
        // line 135
        $context["event"] = $this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->trigger($this->env, Twig\Extension\CoreExtension::constant("App\\Event\\ThemeEvent::JAVASCRIPT"));
        // line 136
        yield "    ";
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 136, $this->source); })()), "content", [], "any", false, false, false, 136);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 139
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

        yield " d-none d-lg-inline-flex";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 141
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

        // line 142
        yield "    ";
        $context["mylogo"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield from $this->yieldParentBlock("app_logo", $context, $blocks);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 143
        yield "    ";
        // line 144
        yield "    <div class=\"d-flex justify-content-start flex-fill d-lg-none\">
        <h2 class=\"page-title d-lg-none ps-2 text-white\">";
        // line 146
        yield from         $this->unwrap()->yieldBlock("page_title", $context, $blocks);
        // line 147
        yield "</h2>
        ";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mylogo"]) || array_key_exists("mylogo", $context) ? $context["mylogo"] : (function () { throw new RuntimeError('Variable "mylogo" does not exist.', 148, $this->source); })()), "html", null, true);
        yield "
    </div>
    ";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mylogo"]) || array_key_exists("mylogo", $context) ? $context["mylogo"] : (function () { throw new RuntimeError('Variable "mylogo" does not exist.', 150, $this->source); })()), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 153
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

        // line 154
        yield "    ";
        // line 155
        yield "    <h2 class=\"page-title me-2\">";
        // line 156
        yield from         $this->unwrap()->yieldBlock("page_title", $context, $blocks);
        // line 157
        yield "</h2>";
        // line 158
        if (        $this->unwrap()->hasBlock("status", $context, $blocks)) {
            yield "<div class=\"btn-list\">";
            yield from             $this->unwrap()->yieldBlock("status", $context, $blocks);
            yield "</div>";
        }
        // line 159
        if (        $this->unwrap()->hasBlock("subtitle", $context, $blocks)) {
            yield from             $this->unwrap()->yieldBlock("subtitle", $context, $blocks);
        }
        // line 160
        if ((        $this->unwrap()->hasBlock("breadcrumb", $context, $blocks) &&         $this->unwrap()->hasBlock("table_actions", $context, $blocks))) {
            yield from             $this->unwrap()->yieldBlock("breadcrumb", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 163
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

        // line 164
        yield "    ";
        if (        $this->unwrap()->hasBlock("table_actions", $context, $blocks)) {
            // line 165
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("table_actions", $context, $blocks);
            yield "
    ";
        } elseif (        $this->unwrap()->hasBlock("breadcrumb", $context, $blocks)) {
            // line 167
            yield "        <div class=\"text-body-secondary mt-1\">
            ";
            // line 168
            yield from             $this->unwrap()->yieldBlock("breadcrumb", $context, $blocks);
            yield "
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 173
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

        // line 174
        if (array_key_exists("page_setup", $context)) {
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page_setup"]) || array_key_exists("page_setup", $context) ? $context["page_setup"] : (function () { throw new RuntimeError('Variable "page_setup" does not exist.', 175, $this->source); })()), "title", [], "any", false, false, false, 175), [], CoreExtension::getAttribute($this->env, $this->source, (isset($context["page_setup"]) || array_key_exists("page_setup", $context) ? $context["page_setup"] : (function () { throw new RuntimeError('Variable "page_setup" does not exist.', 175, $this->source); })()), "translationDomain", [], "any", false, false, false, 175)), "html", null, true);
        } else {
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->generateTitle(), "html", null, true);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 181
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

        // line 182
        yield "    ";
        $macros["_v0"] = $this->loadTemplate("macros/widgets.html.twig", "base.html.twig", 182)->unwrap();
        // line 183
        if ((array_key_exists("page_setup", $context) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["page_setup"]) || array_key_exists("page_setup", $context) ? $context["page_setup"] : (function () { throw new RuntimeError('Variable "page_setup" does not exist.', 183, $this->source); })()), "actionName", [], "any", false, false, false, 183)))) {
            // line 184
            $context["event"] = $this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->actions(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 184, $this->source); })()), "user", [], "any", false, false, false, 184), CoreExtension::getAttribute($this->env, $this->source, (isset($context["page_setup"]) || array_key_exists("page_setup", $context) ? $context["page_setup"] : (function () { throw new RuntimeError('Variable "page_setup" does not exist.', 184, $this->source); })()), "actionName", [], "any", false, false, false, 184), CoreExtension::getAttribute($this->env, $this->source, (isset($context["page_setup"]) || array_key_exists("page_setup", $context) ? $context["page_setup"] : (function () { throw new RuntimeError('Variable "page_setup" does not exist.', 184, $this->source); })()), "actionView", [], "any", false, false, false, 184), CoreExtension::getAttribute($this->env, $this->source, (isset($context["page_setup"]) || array_key_exists("page_setup", $context) ? $context["page_setup"] : (function () { throw new RuntimeError('Variable "page_setup" does not exist.', 184, $this->source); })()), "actionPayload", [], "any", false, false, false, 184));
            // line 185
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["page_setup"]) || array_key_exists("page_setup", $context) ? $context["page_setup"] : (function () { throw new RuntimeError('Variable "page_setup" does not exist.', 185, $this->source); })()), "tableAction", [], "method", false, false, false, 185)) {
                // line 186
                yield "            ";
                yield $macros["_v0"]->getTemplateForMacro("macro_table_actions", $context, 186, $this->getSourceContext())->macro_table_actions(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 186, $this->source); })()), "actions", [], "any", false, false, false, 186)]);
                yield "
        ";
            } else {
                // line 188
                yield "            ";
                yield $macros["_v0"]->getTemplateForMacro("macro_page_actions", $context, 188, $this->getSourceContext())->macro_page_actions(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 188, $this->source); })()), "actions", [], "any", false, false, false, 188)]);
                yield "
        ";
            }
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 193
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

        // line 194
        if (array_key_exists("page_setup", $context)) {
            // line 195
            if (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["page_setup"]) || array_key_exists("page_setup", $context) ? $context["page_setup"] : (function () { throw new RuntimeError('Variable "page_setup" does not exist.', 195, $this->source); })()), "actionName", [], "any", false, false, false, 195)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["page_setup"]) || array_key_exists("page_setup", $context) ? $context["page_setup"] : (function () { throw new RuntimeError('Variable "page_setup" does not exist.', 195, $this->source); })()), "hasSearchForm", [], "method", false, false, false, 195))) {
                // line 196
                yield from $this->yieldParentBlock("page_header", $context, $blocks);
            }
        } else {
            // line 199
            yield from $this->yieldParentBlock("page_header", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  1056 => 199,  1052 => 196,  1050 => 195,  1048 => 194,  1035 => 193,  1019 => 188,  1013 => 186,  1010 => 185,  1008 => 184,  1006 => 183,  1003 => 182,  990 => 181,  978 => 177,  975 => 175,  973 => 174,  960 => 173,  945 => 168,  942 => 167,  936 => 165,  933 => 164,  920 => 163,  907 => 160,  903 => 159,  897 => 158,  895 => 157,  893 => 156,  891 => 155,  889 => 154,  876 => 153,  863 => 150,  858 => 148,  855 => 147,  853 => 146,  850 => 144,  848 => 143,  842 => 142,  829 => 141,  806 => 139,  792 => 136,  790 => 135,  785 => 134,  782 => 133,  780 => 132,  767 => 131,  753 => 128,  751 => 127,  746 => 126,  743 => 125,  730 => 124,  716 => 121,  713 => 120,  707 => 118,  701 => 116,  698 => 115,  685 => 114,  663 => 112,  649 => 106,  646 => 105,  633 => 104,  611 => 96,  599 => 108,  596 => 104,  593 => 103,  590 => 102,  587 => 101,  584 => 100,  581 => 99,  578 => 98,  575 => 97,  572 => 96,  569 => 95,  556 => 94,  541 => 90,  538 => 89,  525 => 88,  514 => 85,  501 => 84,  479 => 79,  465 => 81,  462 => 80,  460 => 79,  455 => 78,  452 => 77,  439 => 76,  417 => 63,  393 => 68,  390 => 67,  388 => 66,  383 => 65,  380 => 64,  377 => 63,  364 => 62,  342 => 58,  330 => 59,  328 => 58,  322 => 56,  319 => 55,  306 => 54,  292 => 49,  286 => 48,  280 => 47,  274 => 45,  268 => 43,  266 => 42,  261 => 41,  259 => 40,  254 => 39,  251 => 38,  246 => 37,  242 => 36,  237 => 33,  234 => 32,  231 => 31,  218 => 30,  172 => 28,  150 => 24,  138 => 25,  135 => 24,  132 => 15,  129 => 8,  116 => 7,  103 => 4,  90 => 3,  67 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@theme/layout/default-layout.html.twig' %}

{% block body_start %}
    data-title=\"{{- get_title()|e('html_attr') -}}\"
{%- endblock -%}

{% block after_body_start %}
    {% embed '@theme/embeds/modal.html.twig' %}
        {% block modal_id %}remote_form_modal{% endblock %}
        {% block modal_title %}{% endblock %}
        {% block modal_body %}{% endblock %}
        {% block modal_footer %}{% endblock %}
        {% block modal_effects %}{% endblock %}
    {% endembed %}
    {% embed '@theme/embeds/modal.html.twig' %}
        {% block modal_id %}remote_modal{% endblock %}
        {% block modal_title %}{% endblock %}
        {% block modal_body %}{% endblock %}
        {% block modal_effects %}{% endblock %}
        {% block modal_footer %}
            <button type=\"button\" class=\"btn btn-cancel\" data-bs-dismiss=\"modal\">{{ 'action.close'|trans }}</button>
        {% endblock %}
    {% endembed %}
    {% block page_search %}{% endblock %}
    <div id=\"toast-container\" class=\"toast-container position-fixed top-0 start-50 translate-middle-x p-3\" style=\"z-index: 11\"></div>
{% endblock %}

{% block page_content_class %}{{ parent() }} {% block page_class %}{% endblock %}{% endblock %}

{% block page_content_start %}
    {% if app.session and app.session.started and app.session.flashbag.peekAll|length > 0 %}
        {% set domain = 'flashmessages' %}
        <script type=\"text/javascript\">
            document.addEventListener('kimai.initialized', function(options) {
                const ALERT = options.detail.kimai.getPlugin('alert');
                {% for type, messages in app.session.flashbag.all %}
                    {% for message in messages %}
                        {% if type == 'error' %}
                            ALERT.error('{{ message|trans({}, domain)|e('js') }}');
                        {% elseif type == 'warning' %}
                            ALERT.warning('{{ message|trans({}, domain)|e('js') }}');
                        {% elseif type == 'success' %}
                            ALERT.success('{{ message|trans({}, domain)|e('js') }}');
                        {% else %}
                            ALERT.info('{{ message|trans({}, domain)|e('js') }}');
                        {% endif %}
                    {% endfor %}
                {% endfor %}
            });
        </script>
    {% endif %}
{% endblock %}

{% block page_content_before %}
    {% set event = trigger(constant('App\\\\Event\\\\ThemeEvent::CONTENT_BEFORE')) %}
    {{ event.content|raw }}
    <div class=\"d-print-none hidden-no-space\">
        {% block main_before %}{% endblock %}
    </div>
{% endblock %}

{% block page_content_after %}
    {% block main_after %}{% endblock %}
    {% set event = trigger(constant('App\\\\Event\\\\ThemeEvent::CONTENT_AFTER')) %}
    {{ event.content|raw }}
    {% if page_setup is defined and page_setup.help is not null %}
        <div class=\"float-help\">
            <a href=\"{% if '://' in page_setup.help %}{{ page_setup.help }}{% else %}{{ page_setup.help|docu_link }}{% endif %}\" target=\"_blank\" accesskey=\"h\" title=\"{{ 'help'|trans }}\">
                <i class=\"fas fa-question\"></i>
            </a>
        </div>
        <div class=\"mb-4\"></div>
    {% endif %}
{% endblock %}

{% block page_content %}
    {% set event = trigger(constant('App\\\\Event\\\\ThemeEvent::CONTENT_START')) %}
    {{ event.content|raw }}
    {% block main %}{% endblock %}
    {% set event = trigger(constant('App\\\\Event\\\\ThemeEvent::CONTENT_END')) %}
    {{ event.content|raw }}
{% endblock %}

{% block title %}
    {{- get_title() -}}
{% endblock %}

{% block footer %}
    {% if 'dashboard' in app.request.attributes.get('_route') %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block navbar_start %}
    {% if app.user is not null and is_granted('IS_AUTHENTICATED_REMEMBERED') %}
        {% block navbar_extensions %}{% endblock %}
        {% if is_granted('create_own_timesheet') %}
            {% include 'partials/ticktack.html.twig' %}
        {% endif %}
        {% if is_granted('view_own_timesheet') %}
            {% include 'partials/recent-activities.html.twig' %}
        {% endif %}
        {% include 'partials/user-shortcuts.html.twig' %}
        {% block navbar_extensions_after %}
            {% set event = trigger(constant('App\\\\Event\\\\ThemeEvent::TOOLBAR')) %}
            {{ event.content|raw }}
        {% endblock %}
    {% endif %}
{% endblock %}

{# deactivated blocks from the original theme #}
{% block page_pretitle %}{% endblock %}

{% block stylesheets %}
    {% if tabler_bundle.isRightToLeft() %}
        {{ encore_entry_link_tags('app-rtl') }}
    {% else %}
        {{ encore_entry_link_tags('app') }}
    {% endif %}
    {% set event = trigger(constant('App\\\\Event\\\\ThemeEvent::STYLESHEET')) %}
    {{ event.content|raw }}
{% endblock %}

{% block head %}
    {% include 'partials/head.html.twig' %}
    {{ encore_entry_script_tags('app') }}
    {% set event = trigger(constant('App\\\\Event\\\\ThemeEvent::HTML_HEAD')) %}
    {{ event.content|raw }}
{% endblock %}

{% block javascripts %}
    {# no call to parent(), as we use a custom built for the frontend assets and don't want the default <script> #}
    {% import \"macros/webloader.html.twig\" as webloader %}
    {{ webloader.init_frontend_loader() }}
    {% set event = trigger(constant('App\\\\Event\\\\ThemeEvent::JAVASCRIPT')) %}
    {{ event.content|raw }}
{% endblock %}

{% block navbar_brand_class %} d-none d-lg-inline-flex{% endblock %}

{% block app_logo %}
    {% set mylogo %}{{ parent() }}{% endset %}
    {# only for mobile view #}
    <div class=\"d-flex justify-content-start flex-fill d-lg-none\">
        <h2 class=\"page-title d-lg-none ps-2 text-white\">
            {{- block('page_title') -}}
        </h2>
        {{ mylogo }}
    </div>
    {{ mylogo }}
{% endblock %}

{% block navbar_search %}
    {# normal desktop view #}
    <h2 class=\"page-title me-2\">
        {{- block('page_title') -}}
    </h2>
    {%- if block('status') is defined -%}<div class=\"btn-list\">{{ block('status') }}</div>{%- endif -%}
    {%- if block('subtitle') is defined -%}{{ block('subtitle') }}{%- endif -%}
    {%- if block('breadcrumb') is defined and block('table_actions') is defined -%}{{ block('breadcrumb') }}{%- endif -%}
{% endblock %}

{% block page_intro %}
    {% if block('table_actions') is defined %}
        {{ block('table_actions') }}
    {% elseif block('breadcrumb') is defined %}
        <div class=\"text-body-secondary mt-1\">
            {{ block('breadcrumb') }}
        </div>
    {% endif %}
{% endblock %}

{% block page_title %}
    {%- if page_setup is defined -%}
        {{ page_setup.title|trans({}, page_setup.translationDomain) }}
    {%- else -%}
        {{ get_title() }}
    {%- endif -%}
{% endblock %}

{% block page_actions %}
    {% from \"macros/widgets.html.twig\" import page_actions, table_actions %}
    {%- if page_setup is defined and page_setup.actionName is not null -%}
        {% set event = actions(app.user, page_setup.actionName, page_setup.actionView, page_setup.actionPayload) %}
        {% if page_setup.tableAction() %}
            {{ table_actions(event.actions) }}
        {% else %}
            {{ page_actions(event.actions) }}
        {% endif %}
    {%- endif -%}
{% endblock %}

{% block page_header %}
    {%- if page_setup is defined -%}
        {%- if page_setup.actionName is not null or page_setup.hasSearchForm() -%}
            {{ parent() }}
        {%- endif -%}
    {%- else -%}
        {{ parent() }}
    {%- endif -%}
{% endblock %}
", "base.html.twig", "C:\\wamp64\\www\\kimai\\templates\\base.html.twig");
    }
}


/* base.html.twig */
class __TwigTemplate_cd97aa0ced02e045bb5376a23ac0afdb___512519754 extends Template
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

        $this->blocks = [
            'modal_id' => [$this, 'block_modal_id'],
            'modal_title' => [$this, 'block_modal_title'],
            'modal_body' => [$this, 'block_modal_body'],
            'modal_footer' => [$this, 'block_modal_footer'],
            'modal_effects' => [$this, 'block_modal_effects'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 8
        return "@theme/embeds/modal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $this->parent = $this->loadTemplate("@theme/embeds/modal.html.twig", "base.html.twig", 8);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_modal_id(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal_id"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal_id"));

        yield "remote_form_modal";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_modal_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal_title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_modal_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal_body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_modal_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal_footer"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_modal_effects(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal_effects"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal_effects"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  1438 => 13,  1416 => 12,  1394 => 11,  1372 => 10,  1349 => 9,  1326 => 8,  1056 => 199,  1052 => 196,  1050 => 195,  1048 => 194,  1035 => 193,  1019 => 188,  1013 => 186,  1010 => 185,  1008 => 184,  1006 => 183,  1003 => 182,  990 => 181,  978 => 177,  975 => 175,  973 => 174,  960 => 173,  945 => 168,  942 => 167,  936 => 165,  933 => 164,  920 => 163,  907 => 160,  903 => 159,  897 => 158,  895 => 157,  893 => 156,  891 => 155,  889 => 154,  876 => 153,  863 => 150,  858 => 148,  855 => 147,  853 => 146,  850 => 144,  848 => 143,  842 => 142,  829 => 141,  806 => 139,  792 => 136,  790 => 135,  785 => 134,  782 => 133,  780 => 132,  767 => 131,  753 => 128,  751 => 127,  746 => 126,  743 => 125,  730 => 124,  716 => 121,  713 => 120,  707 => 118,  701 => 116,  698 => 115,  685 => 114,  663 => 112,  649 => 106,  646 => 105,  633 => 104,  611 => 96,  599 => 108,  596 => 104,  593 => 103,  590 => 102,  587 => 101,  584 => 100,  581 => 99,  578 => 98,  575 => 97,  572 => 96,  569 => 95,  556 => 94,  541 => 90,  538 => 89,  525 => 88,  514 => 85,  501 => 84,  479 => 79,  465 => 81,  462 => 80,  460 => 79,  455 => 78,  452 => 77,  439 => 76,  417 => 63,  393 => 68,  390 => 67,  388 => 66,  383 => 65,  380 => 64,  377 => 63,  364 => 62,  342 => 58,  330 => 59,  328 => 58,  322 => 56,  319 => 55,  306 => 54,  292 => 49,  286 => 48,  280 => 47,  274 => 45,  268 => 43,  266 => 42,  261 => 41,  259 => 40,  254 => 39,  251 => 38,  246 => 37,  242 => 36,  237 => 33,  234 => 32,  231 => 31,  218 => 30,  172 => 28,  150 => 24,  138 => 25,  135 => 24,  132 => 15,  129 => 8,  116 => 7,  103 => 4,  90 => 3,  67 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@theme/layout/default-layout.html.twig' %}

{% block body_start %}
    data-title=\"{{- get_title()|e('html_attr') -}}\"
{%- endblock -%}

{% block after_body_start %}
    {% embed '@theme/embeds/modal.html.twig' %}
        {% block modal_id %}remote_form_modal{% endblock %}
        {% block modal_title %}{% endblock %}
        {% block modal_body %}{% endblock %}
        {% block modal_footer %}{% endblock %}
        {% block modal_effects %}{% endblock %}
    {% endembed %}
    {% embed '@theme/embeds/modal.html.twig' %}
        {% block modal_id %}remote_modal{% endblock %}
        {% block modal_title %}{% endblock %}
        {% block modal_body %}{% endblock %}
        {% block modal_effects %}{% endblock %}
        {% block modal_footer %}
            <button type=\"button\" class=\"btn btn-cancel\" data-bs-dismiss=\"modal\">{{ 'action.close'|trans }}</button>
        {% endblock %}
    {% endembed %}
    {% block page_search %}{% endblock %}
    <div id=\"toast-container\" class=\"toast-container position-fixed top-0 start-50 translate-middle-x p-3\" style=\"z-index: 11\"></div>
{% endblock %}

{% block page_content_class %}{{ parent() }} {% block page_class %}{% endblock %}{% endblock %}

{% block page_content_start %}
    {% if app.session and app.session.started and app.session.flashbag.peekAll|length > 0 %}
        {% set domain = 'flashmessages' %}
        <script type=\"text/javascript\">
            document.addEventListener('kimai.initialized', function(options) {
                const ALERT = options.detail.kimai.getPlugin('alert');
                {% for type, messages in app.session.flashbag.all %}
                    {% for message in messages %}
                        {% if type == 'error' %}
                            ALERT.error('{{ message|trans({}, domain)|e('js') }}');
                        {% elseif type == 'warning' %}
                            ALERT.warning('{{ message|trans({}, domain)|e('js') }}');
                        {% elseif type == 'success' %}
                            ALERT.success('{{ message|trans({}, domain)|e('js') }}');
                        {% else %}
                            ALERT.info('{{ message|trans({}, domain)|e('js') }}');
                        {% endif %}
                    {% endfor %}
                {% endfor %}
            });
        </script>
    {% endif %}
{% endblock %}

{% block page_content_before %}
    {% set event = trigger(constant('App\\\\Event\\\\ThemeEvent::CONTENT_BEFORE')) %}
    {{ event.content|raw }}
    <div class=\"d-print-none hidden-no-space\">
        {% block main_before %}{% endblock %}
    </div>
{% endblock %}

{% block page_content_after %}
    {% block main_after %}{% endblock %}
    {% set event = trigger(constant('App\\\\Event\\\\ThemeEvent::CONTENT_AFTER')) %}
    {{ event.content|raw }}
    {% if page_setup is defined and page_setup.help is not null %}
        <div class=\"float-help\">
            <a href=\"{% if '://' in page_setup.help %}{{ page_setup.help }}{% else %}{{ page_setup.help|docu_link }}{% endif %}\" target=\"_blank\" accesskey=\"h\" title=\"{{ 'help'|trans }}\">
                <i class=\"fas fa-question\"></i>
            </a>
        </div>
        <div class=\"mb-4\"></div>
    {% endif %}
{% endblock %}

{% block page_content %}
    {% set event = trigger(constant('App\\\\Event\\\\ThemeEvent::CONTENT_START')) %}
    {{ event.content|raw }}
    {% block main %}{% endblock %}
    {% set event = trigger(constant('App\\\\Event\\\\ThemeEvent::CONTENT_END')) %}
    {{ event.content|raw }}
{% endblock %}

{% block title %}
    {{- get_title() -}}
{% endblock %}

{% block footer %}
    {% if 'dashboard' in app.request.attributes.get('_route') %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block navbar_start %}
    {% if app.user is not null and is_granted('IS_AUTHENTICATED_REMEMBERED') %}
        {% block navbar_extensions %}{% endblock %}
        {% if is_granted('create_own_timesheet') %}
            {% include 'partials/ticktack.html.twig' %}
        {% endif %}
        {% if is_granted('view_own_timesheet') %}
            {% include 'partials/recent-activities.html.twig' %}
        {% endif %}
        {% include 'partials/user-shortcuts.html.twig' %}
        {% block navbar_extensions_after %}
            {% set event = trigger(constant('App\\\\Event\\\\ThemeEvent::TOOLBAR')) %}
            {{ event.content|raw }}
        {% endblock %}
    {% endif %}
{% endblock %}

{# deactivated blocks from the original theme #}
{% block page_pretitle %}{% endblock %}

{% block stylesheets %}
    {% if tabler_bundle.isRightToLeft() %}
        {{ encore_entry_link_tags('app-rtl') }}
    {% else %}
        {{ encore_entry_link_tags('app') }}
    {% endif %}
    {% set event = trigger(constant('App\\\\Event\\\\ThemeEvent::STYLESHEET')) %}
    {{ event.content|raw }}
{% endblock %}

{% block head %}
    {% include 'partials/head.html.twig' %}
    {{ encore_entry_script_tags('app') }}
    {% set event = trigger(constant('App\\\\Event\\\\ThemeEvent::HTML_HEAD')) %}
    {{ event.content|raw }}
{% endblock %}

{% block javascripts %}
    {# no call to parent(), as we use a custom built for the frontend assets and don't want the default <script> #}
    {% import \"macros/webloader.html.twig\" as webloader %}
    {{ webloader.init_frontend_loader() }}
    {% set event = trigger(constant('App\\\\Event\\\\ThemeEvent::JAVASCRIPT')) %}
    {{ event.content|raw }}
{% endblock %}

{% block navbar_brand_class %} d-none d-lg-inline-flex{% endblock %}

{% block app_logo %}
    {% set mylogo %}{{ parent() }}{% endset %}
    {# only for mobile view #}
    <div class=\"d-flex justify-content-start flex-fill d-lg-none\">
        <h2 class=\"page-title d-lg-none ps-2 text-white\">
            {{- block('page_title') -}}
        </h2>
        {{ mylogo }}
    </div>
    {{ mylogo }}
{% endblock %}

{% block navbar_search %}
    {# normal desktop view #}
    <h2 class=\"page-title me-2\">
        {{- block('page_title') -}}
    </h2>
    {%- if block('status') is defined -%}<div class=\"btn-list\">{{ block('status') }}</div>{%- endif -%}
    {%- if block('subtitle') is defined -%}{{ block('subtitle') }}{%- endif -%}
    {%- if block('breadcrumb') is defined and block('table_actions') is defined -%}{{ block('breadcrumb') }}{%- endif -%}
{% endblock %}

{% block page_intro %}
    {% if block('table_actions') is defined %}
        {{ block('table_actions') }}
    {% elseif block('breadcrumb') is defined %}
        <div class=\"text-body-secondary mt-1\">
            {{ block('breadcrumb') }}
        </div>
    {% endif %}
{% endblock %}

{% block page_title %}
    {%- if page_setup is defined -%}
        {{ page_setup.title|trans({}, page_setup.translationDomain) }}
    {%- else -%}
        {{ get_title() }}
    {%- endif -%}
{% endblock %}

{% block page_actions %}
    {% from \"macros/widgets.html.twig\" import page_actions, table_actions %}
    {%- if page_setup is defined and page_setup.actionName is not null -%}
        {% set event = actions(app.user, page_setup.actionName, page_setup.actionView, page_setup.actionPayload) %}
        {% if page_setup.tableAction() %}
            {{ table_actions(event.actions) }}
        {% else %}
            {{ page_actions(event.actions) }}
        {% endif %}
    {%- endif -%}
{% endblock %}

{% block page_header %}
    {%- if page_setup is defined -%}
        {%- if page_setup.actionName is not null or page_setup.hasSearchForm() -%}
            {{ parent() }}
        {%- endif -%}
    {%- else -%}
        {{ parent() }}
    {%- endif -%}
{% endblock %}
", "base.html.twig", "C:\\wamp64\\www\\kimai\\templates\\base.html.twig");
    }
}


/* base.html.twig */
class __TwigTemplate_cd97aa0ced02e045bb5376a23ac0afdb___923713437 extends Template
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

        $this->blocks = [
            'modal_id' => [$this, 'block_modal_id'],
            'modal_title' => [$this, 'block_modal_title'],
            'modal_body' => [$this, 'block_modal_body'],
            'modal_effects' => [$this, 'block_modal_effects'],
            'modal_footer' => [$this, 'block_modal_footer'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 15
        return "@theme/embeds/modal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $this->parent = $this->loadTemplate("@theme/embeds/modal.html.twig", "base.html.twig", 15);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_modal_id(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal_id"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal_id"));

        yield "remote_modal";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_modal_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal_title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_modal_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal_body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_modal_effects(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal_effects"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal_effects"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_modal_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal_footer"));

        // line 21
        yield "            <button type=\"button\" class=\"btn btn-cancel\" data-bs-dismiss=\"modal\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.close"), "html", null, true);
        yield "</button>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  1843 => 21,  1830 => 20,  1808 => 19,  1786 => 18,  1764 => 17,  1741 => 16,  1718 => 15,  1438 => 13,  1416 => 12,  1394 => 11,  1372 => 10,  1349 => 9,  1326 => 8,  1056 => 199,  1052 => 196,  1050 => 195,  1048 => 194,  1035 => 193,  1019 => 188,  1013 => 186,  1010 => 185,  1008 => 184,  1006 => 183,  1003 => 182,  990 => 181,  978 => 177,  975 => 175,  973 => 174,  960 => 173,  945 => 168,  942 => 167,  936 => 165,  933 => 164,  920 => 163,  907 => 160,  903 => 159,  897 => 158,  895 => 157,  893 => 156,  891 => 155,  889 => 154,  876 => 153,  863 => 150,  858 => 148,  855 => 147,  853 => 146,  850 => 144,  848 => 143,  842 => 142,  829 => 141,  806 => 139,  792 => 136,  790 => 135,  785 => 134,  782 => 133,  780 => 132,  767 => 131,  753 => 128,  751 => 127,  746 => 126,  743 => 125,  730 => 124,  716 => 121,  713 => 120,  707 => 118,  701 => 116,  698 => 115,  685 => 114,  663 => 112,  649 => 106,  646 => 105,  633 => 104,  611 => 96,  599 => 108,  596 => 104,  593 => 103,  590 => 102,  587 => 101,  584 => 100,  581 => 99,  578 => 98,  575 => 97,  572 => 96,  569 => 95,  556 => 94,  541 => 90,  538 => 89,  525 => 88,  514 => 85,  501 => 84,  479 => 79,  465 => 81,  462 => 80,  460 => 79,  455 => 78,  452 => 77,  439 => 76,  417 => 63,  393 => 68,  390 => 67,  388 => 66,  383 => 65,  380 => 64,  377 => 63,  364 => 62,  342 => 58,  330 => 59,  328 => 58,  322 => 56,  319 => 55,  306 => 54,  292 => 49,  286 => 48,  280 => 47,  274 => 45,  268 => 43,  266 => 42,  261 => 41,  259 => 40,  254 => 39,  251 => 38,  246 => 37,  242 => 36,  237 => 33,  234 => 32,  231 => 31,  218 => 30,  172 => 28,  150 => 24,  138 => 25,  135 => 24,  132 => 15,  129 => 8,  116 => 7,  103 => 4,  90 => 3,  67 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@theme/layout/default-layout.html.twig' %}

{% block body_start %}
    data-title=\"{{- get_title()|e('html_attr') -}}\"
{%- endblock -%}

{% block after_body_start %}
    {% embed '@theme/embeds/modal.html.twig' %}
        {% block modal_id %}remote_form_modal{% endblock %}
        {% block modal_title %}{% endblock %}
        {% block modal_body %}{% endblock %}
        {% block modal_footer %}{% endblock %}
        {% block modal_effects %}{% endblock %}
    {% endembed %}
    {% embed '@theme/embeds/modal.html.twig' %}
        {% block modal_id %}remote_modal{% endblock %}
        {% block modal_title %}{% endblock %}
        {% block modal_body %}{% endblock %}
        {% block modal_effects %}{% endblock %}
        {% block modal_footer %}
            <button type=\"button\" class=\"btn btn-cancel\" data-bs-dismiss=\"modal\">{{ 'action.close'|trans }}</button>
        {% endblock %}
    {% endembed %}
    {% block page_search %}{% endblock %}
    <div id=\"toast-container\" class=\"toast-container position-fixed top-0 start-50 translate-middle-x p-3\" style=\"z-index: 11\"></div>
{% endblock %}

{% block page_content_class %}{{ parent() }} {% block page_class %}{% endblock %}{% endblock %}

{% block page_content_start %}
    {% if app.session and app.session.started and app.session.flashbag.peekAll|length > 0 %}
        {% set domain = 'flashmessages' %}
        <script type=\"text/javascript\">
            document.addEventListener('kimai.initialized', function(options) {
                const ALERT = options.detail.kimai.getPlugin('alert');
                {% for type, messages in app.session.flashbag.all %}
                    {% for message in messages %}
                        {% if type == 'error' %}
                            ALERT.error('{{ message|trans({}, domain)|e('js') }}');
                        {% elseif type == 'warning' %}
                            ALERT.warning('{{ message|trans({}, domain)|e('js') }}');
                        {% elseif type == 'success' %}
                            ALERT.success('{{ message|trans({}, domain)|e('js') }}');
                        {% else %}
                            ALERT.info('{{ message|trans({}, domain)|e('js') }}');
                        {% endif %}
                    {% endfor %}
                {% endfor %}
            });
        </script>
    {% endif %}
{% endblock %}

{% block page_content_before %}
    {% set event = trigger(constant('App\\\\Event\\\\ThemeEvent::CONTENT_BEFORE')) %}
    {{ event.content|raw }}
    <div class=\"d-print-none hidden-no-space\">
        {% block main_before %}{% endblock %}
    </div>
{% endblock %}

{% block page_content_after %}
    {% block main_after %}{% endblock %}
    {% set event = trigger(constant('App\\\\Event\\\\ThemeEvent::CONTENT_AFTER')) %}
    {{ event.content|raw }}
    {% if page_setup is defined and page_setup.help is not null %}
        <div class=\"float-help\">
            <a href=\"{% if '://' in page_setup.help %}{{ page_setup.help }}{% else %}{{ page_setup.help|docu_link }}{% endif %}\" target=\"_blank\" accesskey=\"h\" title=\"{{ 'help'|trans }}\">
                <i class=\"fas fa-question\"></i>
            </a>
        </div>
        <div class=\"mb-4\"></div>
    {% endif %}
{% endblock %}

{% block page_content %}
    {% set event = trigger(constant('App\\\\Event\\\\ThemeEvent::CONTENT_START')) %}
    {{ event.content|raw }}
    {% block main %}{% endblock %}
    {% set event = trigger(constant('App\\\\Event\\\\ThemeEvent::CONTENT_END')) %}
    {{ event.content|raw }}
{% endblock %}

{% block title %}
    {{- get_title() -}}
{% endblock %}

{% block footer %}
    {% if 'dashboard' in app.request.attributes.get('_route') %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block navbar_start %}
    {% if app.user is not null and is_granted('IS_AUTHENTICATED_REMEMBERED') %}
        {% block navbar_extensions %}{% endblock %}
        {% if is_granted('create_own_timesheet') %}
            {% include 'partials/ticktack.html.twig' %}
        {% endif %}
        {% if is_granted('view_own_timesheet') %}
            {% include 'partials/recent-activities.html.twig' %}
        {% endif %}
        {% include 'partials/user-shortcuts.html.twig' %}
        {% block navbar_extensions_after %}
            {% set event = trigger(constant('App\\\\Event\\\\ThemeEvent::TOOLBAR')) %}
            {{ event.content|raw }}
        {% endblock %}
    {% endif %}
{% endblock %}

{# deactivated blocks from the original theme #}
{% block page_pretitle %}{% endblock %}

{% block stylesheets %}
    {% if tabler_bundle.isRightToLeft() %}
        {{ encore_entry_link_tags('app-rtl') }}
    {% else %}
        {{ encore_entry_link_tags('app') }}
    {% endif %}
    {% set event = trigger(constant('App\\\\Event\\\\ThemeEvent::STYLESHEET')) %}
    {{ event.content|raw }}
{% endblock %}

{% block head %}
    {% include 'partials/head.html.twig' %}
    {{ encore_entry_script_tags('app') }}
    {% set event = trigger(constant('App\\\\Event\\\\ThemeEvent::HTML_HEAD')) %}
    {{ event.content|raw }}
{% endblock %}

{% block javascripts %}
    {# no call to parent(), as we use a custom built for the frontend assets and don't want the default <script> #}
    {% import \"macros/webloader.html.twig\" as webloader %}
    {{ webloader.init_frontend_loader() }}
    {% set event = trigger(constant('App\\\\Event\\\\ThemeEvent::JAVASCRIPT')) %}
    {{ event.content|raw }}
{% endblock %}

{% block navbar_brand_class %} d-none d-lg-inline-flex{% endblock %}

{% block app_logo %}
    {% set mylogo %}{{ parent() }}{% endset %}
    {# only for mobile view #}
    <div class=\"d-flex justify-content-start flex-fill d-lg-none\">
        <h2 class=\"page-title d-lg-none ps-2 text-white\">
            {{- block('page_title') -}}
        </h2>
        {{ mylogo }}
    </div>
    {{ mylogo }}
{% endblock %}

{% block navbar_search %}
    {# normal desktop view #}
    <h2 class=\"page-title me-2\">
        {{- block('page_title') -}}
    </h2>
    {%- if block('status') is defined -%}<div class=\"btn-list\">{{ block('status') }}</div>{%- endif -%}
    {%- if block('subtitle') is defined -%}{{ block('subtitle') }}{%- endif -%}
    {%- if block('breadcrumb') is defined and block('table_actions') is defined -%}{{ block('breadcrumb') }}{%- endif -%}
{% endblock %}

{% block page_intro %}
    {% if block('table_actions') is defined %}
        {{ block('table_actions') }}
    {% elseif block('breadcrumb') is defined %}
        <div class=\"text-body-secondary mt-1\">
            {{ block('breadcrumb') }}
        </div>
    {% endif %}
{% endblock %}

{% block page_title %}
    {%- if page_setup is defined -%}
        {{ page_setup.title|trans({}, page_setup.translationDomain) }}
    {%- else -%}
        {{ get_title() }}
    {%- endif -%}
{% endblock %}

{% block page_actions %}
    {% from \"macros/widgets.html.twig\" import page_actions, table_actions %}
    {%- if page_setup is defined and page_setup.actionName is not null -%}
        {% set event = actions(app.user, page_setup.actionName, page_setup.actionView, page_setup.actionPayload) %}
        {% if page_setup.tableAction() %}
            {{ table_actions(event.actions) }}
        {% else %}
            {{ page_actions(event.actions) }}
        {% endif %}
    {%- endif -%}
{% endblock %}

{% block page_header %}
    {%- if page_setup is defined -%}
        {%- if page_setup.actionName is not null or page_setup.hasSearchForm() -%}
            {{ parent() }}
        {%- endif -%}
    {%- else -%}
        {{ parent() }}
    {%- endif -%}
{% endblock %}
", "base.html.twig", "C:\\wamp64\\www\\kimai\\templates\\base.html.twig");
    }
}
