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

/* @Tabler/components/buttons.html.twig */
class __TwigTemplate_a1531933c843007a4db4ad83f14a934a extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Tabler/components/buttons.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Tabler/components/buttons.html.twig"));

        // line 5
        yield "
";
        // line 9
        yield "
";
        // line 25
        yield "
";
        // line 40
        yield "
";
        // line 57
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_action_cardtoolbutton($icon = null, $attrs = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "icon" => $icon,
            "attrs" => $attrs,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "action_cardtoolbutton"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "action_cardtoolbutton"));

            // line 2
            yield "    ";
            $macros["macro"] = $this->loadTemplate("@Tabler/components/button.html.twig", "@Tabler/components/buttons.html.twig", 2)->unwrap();
            // line 3
            yield "    ";
            yield $macros["macro"]->getTemplateForMacro("macro_button", $context, 3, $this->getSourceContext())->macro_button(...[(isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 3, $this->source); })()), (isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new RuntimeError('Variable "attrs" does not exist.', 3, $this->source); })())]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 6
    public function macro_action_collapsebutton($label = null, $target = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "target" => $target,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "action_collapsebutton"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "action_collapsebutton"));

            // line 7
            yield "    ";
            yield $this->getTemplateForMacro("macro_action_cardtoolbutton", $context, 7, $this->getSourceContext())->macro_action_cardtoolbutton(...["collapse", ["collapse" => (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 7, $this->source); })()), "title" => ((array_key_exists("label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 7, $this->source); })()), "")) : (""))]]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 10
    public function macro_link_button($label = null, $href = null, $icon = null, $type = null, $size = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "href" => $href,
            "icon" => $icon,
            "type" => $type,
            "size" => $size,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "link_button"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "link_button"));

            // line 11
            yield "    ";
            $macros["macro"] = $this->loadTemplate("@Tabler/components/button.html.twig", "@Tabler/components/buttons.html.twig", 11)->unwrap();
            // line 12
            yield "    
    ";
            // line 13
            $context["_href"] = ($context["href"] ?? "#");
            // line 14
            yield "    ";
            $context["_icon"] = ($context["icon"] ?? false);
            // line 15
            yield "    ";
            $context["_type"] = ($context["type"] ?? "primary");
            // line 16
            yield "    ";
            $context["_size"] = ($context["size"] ?? null);
            // line 17
            yield "    
    ";
            // line 18
            yield $macros["macro"]->getTemplateForMacro("macro_button", $context, 18, $this->getSourceContext())->macro_button(...[(isset($context["_icon"]) || array_key_exists("_icon", $context) ? $context["_icon"] : (function () { throw new RuntimeError('Variable "_icon" does not exist.', 18, $this->source); })()), ["title" =>             // line 19
(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 19, $this->source); })()), "combined" => true, "url" =>             // line 21
(isset($context["_href"]) || array_key_exists("_href", $context) ? $context["_href"] : (function () { throw new RuntimeError('Variable "_href" does not exist.', 21, $this->source); })()), "class" => ((            // line 22
(isset($context["_size"]) || array_key_exists("_size", $context) ? $context["_size"] : (function () { throw new RuntimeError('Variable "_size" does not exist.', 22, $this->source); })())) ? (("btn-" . (isset($context["_size"]) || array_key_exists("_size", $context) ? $context["_size"] : (function () { throw new RuntimeError('Variable "_size" does not exist.', 22, $this->source); })()))) : (""))],             // line 23
(isset($context["_type"]) || array_key_exists("_type", $context) ? $context["_type"] : (function () { throw new RuntimeError('Variable "_type" does not exist.', 23, $this->source); })())]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 26
    public function macro_action_button($label = null, $action = null, $icon = null, $type = null, $size = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "action" => $action,
            "icon" => $icon,
            "type" => $type,
            "size" => $size,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "action_button"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "action_button"));

            // line 27
            yield "    ";
            $macros["macro"] = $this->loadTemplate("@Tabler/components/button.html.twig", "@Tabler/components/buttons.html.twig", 27)->unwrap();
            // line 28
            yield "    
    ";
            // line 29
            $context["_icon"] = ($context["icon"] ?? false);
            // line 30
            yield "    ";
            $context["_type"] = ($context["type"] ?? "primary");
            // line 31
            yield "    ";
            $context["_size"] = ($context["size"] ?? null);
            // line 32
            yield "    
    ";
            // line 33
            yield $macros["macro"]->getTemplateForMacro("macro_button", $context, 33, $this->getSourceContext())->macro_button(...[(isset($context["_icon"]) || array_key_exists("_icon", $context) ? $context["_icon"] : (function () { throw new RuntimeError('Variable "_icon" does not exist.', 33, $this->source); })()), ["title" =>             // line 34
(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 34, $this->source); })()), "class" => ((            // line 35
(isset($context["_size"]) || array_key_exists("_size", $context) ? $context["_size"] : (function () { throw new RuntimeError('Variable "_size" does not exist.', 35, $this->source); })())) ? (("btn-" . (isset($context["_size"]) || array_key_exists("_size", $context) ? $context["_size"] : (function () { throw new RuntimeError('Variable "_size" does not exist.', 35, $this->source); })()))) : ("")), "buttonType" => "button", "attr" => ["data-action" =>             // line 37
(isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 37, $this->source); })())]],             // line 38
(isset($context["_type"]) || array_key_exists("_type", $context) ? $context["_type"] : (function () { throw new RuntimeError('Variable "_type" does not exist.', 38, $this->source); })())]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 41
    public function macro_submit_button($icon = null, $user_values = null, $type = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "icon" => $icon,
            "user_values" => $user_values,
            "type" => $type,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "submit_button"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "submit_button"));

            // line 42
            yield "    ";
            $macros["macro"] = $this->loadTemplate("@Tabler/components/button.html.twig", "@Tabler/components/buttons.html.twig", 42)->unwrap();
            // line 43
            yield "
    ";
            // line 44
            $context["default_values"] = ["combined" => true, "attr" => ["type" => "submit"], "disabled" => false, "buttonType" => "submit"];
            // line 50
            yield "
    ";
            // line 51
            $context["values_attr"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["default_values"]) || array_key_exists("default_values", $context) ? $context["default_values"] : (function () { throw new RuntimeError('Variable "default_values" does not exist.', 51, $this->source); })()), "attr", [], "any", false, false, false, 51), ((CoreExtension::getAttribute($this->env, $this->source, ($context["user_values"] ?? null), "attr", [], "any", true, true, false, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["user_values"] ?? null), "attr", [], "any", false, false, false, 51), [])) : ([])));
            // line 52
            yield "    ";
            $context["values"] = Twig\Extension\CoreExtension::merge((isset($context["default_values"]) || array_key_exists("default_values", $context) ? $context["default_values"] : (function () { throw new RuntimeError('Variable "default_values" does not exist.', 52, $this->source); })()), ((array_key_exists("user_values", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["user_values"]) || array_key_exists("user_values", $context) ? $context["user_values"] : (function () { throw new RuntimeError('Variable "user_values" does not exist.', 52, $this->source); })()), [])) : ([])));
            // line 53
            yield "    ";
            $context["values"] = Twig\Extension\CoreExtension::merge((isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 53, $this->source); })()), ["attr" => (isset($context["values_attr"]) || array_key_exists("values_attr", $context) ? $context["values_attr"] : (function () { throw new RuntimeError('Variable "values_attr" does not exist.', 53, $this->source); })())]);
            // line 54
            yield "
    ";
            // line 55
            yield $macros["macro"]->getTemplateForMacro("macro_button", $context, 55, $this->getSourceContext())->macro_button(...[(isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 55, $this->source); })()), (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 55, $this->source); })()), (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 55, $this->source); })())]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 58
    public function macro_dropdown_button($button = null, $actions = null, $options = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "button" => $button,
            "actions" => $actions,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dropdown_button"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dropdown_button"));

            // line 59
            yield "    ";
            $macros["macro"] = $this->loadTemplate("@Tabler/components/button.html.twig", "@Tabler/components/buttons.html.twig", 59)->unwrap();
            // line 60
            yield "    ";
            $macros["utils"] = $this->loadTemplate("@Tabler/includes/utils.html.twig", "@Tabler/components/buttons.html.twig", 60)->unwrap();
            // line 61
            yield "
    ";
            // line 62
            $context["button_default"] = ["buttonType" => "button", "class" => "", "combined" => true, "attr" => ["data-bs-toggle" => "dropdown"]];
            // line 70
            yield "
    ";
            // line 71
            $context["options"] = Twig\Extension\CoreExtension::merge(((array_key_exists("options", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 71, $this->source); })()), [])) : ([])), ["icon_class" => "me-2 text-center"]);
            // line 72
            yield "    ";
            $context["values_attr"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["button_default"]) || array_key_exists("button_default", $context) ? $context["button_default"] : (function () { throw new RuntimeError('Variable "button_default" does not exist.', 72, $this->source); })()), "attr", [], "any", false, false, false, 72), ((CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "attr", [], "any", true, true, false, 72)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "attr", [], "any", false, false, false, 72), [])) : ([])));
            // line 73
            yield "    ";
            $context["values"] = Twig\Extension\CoreExtension::merge((isset($context["button_default"]) || array_key_exists("button_default", $context) ? $context["button_default"] : (function () { throw new RuntimeError('Variable "button_default" does not exist.', 73, $this->source); })()), ((array_key_exists("button", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 73, $this->source); })()), [])) : ([])));
            // line 74
            yield "    ";
            $context["values"] = Twig\Extension\CoreExtension::merge((isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 74, $this->source); })()), ["attr" => (isset($context["values_attr"]) || array_key_exists("values_attr", $context) ? $context["values_attr"] : (function () { throw new RuntimeError('Variable "values_attr" does not exist.', 74, $this->source); })())]);
            // line 75
            yield "
    <div class=\"dropdown\">
        ";
            // line 77
            yield $macros["macro"]->getTemplateForMacro("macro_button", $context, 77, $this->getSourceContext())->macro_button(...[(((CoreExtension::getAttribute($this->env, $this->source,             // line 78
($context["button"] ?? null), "icon", [], "any", true, true, false, 78) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "icon", [], "any", false, false, false, 78)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "icon", [], "any", false, false, false, 78)) : (false)), Twig\Extension\CoreExtension::merge(            // line 79
(isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 79, $this->source); })()), ["class" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 79, $this->source); })()), "class", [], "any", false, false, false, 79) . " dropdown-toggle")]), (((CoreExtension::getAttribute($this->env, $this->source,             // line 80
($context["button"] ?? null), "type", [], "any", true, true, false, 80) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "type", [], "any", false, false, false, 80)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "type", [], "any", false, false, false, 80)) : (null))]);
            // line 81
            yield "

        ";
            // line 83
            if ((is_iterable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 83, $this->source); })())) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 83, $this->source); })())) > 0))) {
                // line 84
                yield "            <div class=\"dropdown-menu\">
                ";
                // line 85
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 85, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 86
                    yield "                    ";
                    $context["_title"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "title", [], "any", true, true, false, 86) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 86)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 86)) : (null));
                    // line 87
                    yield "                    ";
                    $context["_url"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "url", [], "any", true, true, false, 87) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["action"], "url", [], "any", false, false, false, 87)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["action"], "url", [], "any", false, false, false, 87)) : ("#"));
                    // line 88
                    yield "                    ";
                    $context["_icon"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "icon", [], "any", true, true, false, 88) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 88)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 88)) : (false));
                    // line 89
                    yield "                    ";
                    $context["_attr"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "attr", [], "any", true, true, false, 89) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["action"], "attr", [], "any", false, false, false, 89)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["action"], "attr", [], "any", false, false, false, 89)) : ([]));
                    // line 90
                    yield "                    ";
                    $context["_class"] = ("dropdown-item " . (((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "class", [], "any", true, true, false, 90) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["action"], "class", [], "any", false, false, false, 90)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["action"], "class", [], "any", false, false, false, 90)) : ("")));
                    // line 91
                    yield "
                    <a class=\"";
                    // line 92
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_class"]) || array_key_exists("_class", $context) ? $context["_class"] : (function () { throw new RuntimeError('Variable "_class" does not exist.', 92, $this->source); })()), "html", null, true);
                    yield "\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_url"]) || array_key_exists("_url", $context) ? $context["_url"] : (function () { throw new RuntimeError('Variable "_url" does not exist.', 92, $this->source); })()), "html", null, true);
                    yield "\" ";
                    yield $macros["utils"]->getTemplateForMacro("macro_attr_to_html", $context, 92, $this->getSourceContext())->macro_attr_to_html(...[(isset($context["_attr"]) || array_key_exists("_attr", $context) ? $context["_attr"] : (function () { throw new RuntimeError('Variable "_attr" does not exist.', 92, $this->source); })())]);
                    yield ">";
                    // line 93
                    if ( !((isset($context["_icon"]) || array_key_exists("_icon", $context) ? $context["_icon"] : (function () { throw new RuntimeError('Variable "_icon" does not exist.', 93, $this->source); })()) === false)) {
                        // line 94
                        yield "<span class=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 94, $this->source); })()), "icon_class", [], "any", false, false, false, 94), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon((isset($context["_icon"]) || array_key_exists("_icon", $context) ? $context["_icon"] : (function () { throw new RuntimeError('Variable "_icon" does not exist.', 94, $this->source); })()), false);
                        yield "</span>
                        ";
                    }
                    // line 96
                    if ( !(null === (isset($context["_title"]) || array_key_exists("_title", $context) ? $context["_title"] : (function () { throw new RuntimeError('Variable "_title" does not exist.', 96, $this->source); })()))) {
                        // line 97
                        yield (isset($context["_title"]) || array_key_exists("_title", $context) ? $context["_title"] : (function () { throw new RuntimeError('Variable "_title" does not exist.', 97, $this->source); })());
                        yield "
                        ";
                    }
                    // line 99
                    yield "                    </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                yield "            </div>
        ";
            }
            // line 103
            yield "    </div>
";
            
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
        return "@Tabler/components/buttons.html.twig";
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
        return array (  436 => 103,  432 => 101,  425 => 99,  420 => 97,  418 => 96,  410 => 94,  408 => 93,  401 => 92,  398 => 91,  395 => 90,  392 => 89,  389 => 88,  386 => 87,  383 => 86,  379 => 85,  376 => 84,  374 => 83,  370 => 81,  368 => 80,  367 => 79,  366 => 78,  365 => 77,  361 => 75,  358 => 74,  355 => 73,  352 => 72,  350 => 71,  347 => 70,  345 => 62,  342 => 61,  339 => 60,  336 => 59,  316 => 58,  302 => 55,  299 => 54,  296 => 53,  293 => 52,  291 => 51,  288 => 50,  286 => 44,  283 => 43,  280 => 42,  260 => 41,  246 => 38,  245 => 37,  244 => 35,  243 => 34,  242 => 33,  239 => 32,  236 => 31,  233 => 30,  231 => 29,  228 => 28,  225 => 27,  203 => 26,  189 => 23,  188 => 22,  187 => 21,  186 => 19,  185 => 18,  182 => 17,  179 => 16,  176 => 15,  173 => 14,  171 => 13,  168 => 12,  165 => 11,  143 => 10,  128 => 7,  109 => 6,  94 => 3,  91 => 2,  72 => 1,  60 => 57,  57 => 40,  54 => 25,  51 => 9,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro action_cardtoolbutton(icon, attrs) %}
    {% import '@Tabler/components/button.html.twig' as macro %}
    {{ macro.button(icon, attrs) }}
{% endmacro %}

{% macro action_collapsebutton(label, target) %}
    {{ _self.action_cardtoolbutton('collapse', {collapse: target, title: label|default('')}) }}
{% endmacro %}

{% macro link_button(label, href, icon, type, size) %}
    {% import '@Tabler/components/button.html.twig' as macro %}
    
    {% set _href = href ?? '#' %}
    {% set _icon = icon ?? false %}
    {% set _type = type ?? 'primary' %}
    {% set _size = size ?? null %}
    
    {{ macro.button(_icon, {
        title: label,
        combined: true,
        url: _href,
        class: _size ? 'btn-' ~ _size : ''
    }, _type) }}
{% endmacro %}

{% macro action_button(label, action, icon, type, size) %}
    {% import '@Tabler/components/button.html.twig' as macro %}
    
    {% set _icon = icon ?? false %}
    {% set _type = type ?? 'primary' %}
    {% set _size = size ?? null %}
    
    {{ macro.button(_icon, {
        title: label,
        class: _size ? 'btn-' ~ _size : '',
        buttonType: 'button',
        attr: {'data-action': action} 
    }, _type) }}
{% endmacro %}

{% macro submit_button(icon, user_values, type) %}
    {% import '@Tabler/components/button.html.twig' as macro %}

    {% set default_values = {
        combined : true,
        attr : {type: 'submit'},
        disabled : false,
        buttonType : 'submit',
    } %}

    {% set values_attr = default_values.attr | merge(user_values.attr|default({})) %}
    {% set values = default_values | merge(user_values|default({})) %}
    {% set values = values | merge({'attr' : values_attr}) %}

    {{ macro.button(icon, values, type) }}
{% endmacro %}

{% macro dropdown_button(button, actions, options) %}
    {% import '@Tabler/components/button.html.twig' as macro %}
    {% import '@Tabler/includes/utils.html.twig' as utils %}

    {% set button_default = {
        buttonType : 'button',
        class: '',
        combined : true,
        attr : {
            'data-bs-toggle' : 'dropdown'
        },
    } %}

    {% set options = (options|default({})) | merge({icon_class: 'me-2 text-center'}) %}
    {% set values_attr = button_default.attr | merge(button.attr|default({})) %}
    {% set values = button_default | merge(button|default({})) %}
    {% set values = values | merge({'attr' : values_attr}) %}

    <div class=\"dropdown\">
        {{ macro.button(
            button.icon ?? false,
            (values|merge({class: values.class ~ ' dropdown-toggle'})),
            button.type ?? null
        ) }}

        {% if actions is iterable and actions|length > 0 %}
            <div class=\"dropdown-menu\">
                {% for action in actions %}
                    {% set _title   = action.title ?? null %}
                    {% set _url     = action.url ?? '#' %}
                    {% set _icon    = action.icon ?? false %}
                    {% set _attr    = action.attr ?? {} %}
                    {% set _class   = 'dropdown-item ' ~ (action.class ?? '') %}

                    <a class=\"{{ _class }}\" href=\"{{ _url }}\" {{ utils.attr_to_html(_attr) }}>
                        {%- if _icon is not same as (false) -%}
                            <span class=\"{{ options.icon_class }}\">{{ tabler_icon(_icon, false) }}</span>
                        {% endif %}
                        {%- if _title is not null -%}
                            {{ _title|raw }}
                        {% endif %}
                    </a>
                {% endfor %}
            </div>
        {% endif %}
    </div>
{% endmacro %}
", "@Tabler/components/buttons.html.twig", "C:\\wamp64\\www\\kimai\\vendor\\kevinpapst\\tabler-bundle\\templates\\components\\buttons.html.twig");
    }
}
