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

/* @theme/components/button.html.twig */
class __TwigTemplate_e77d7f44ac67751e8496120b22e25e81 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@theme/components/button.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@theme/components/button.html.twig"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_button($icon = null, $values = null, $type = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "icon" => $icon,
            "values" => $values,
            "type" => $type,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "button"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "button"));

            // line 2
            yield "    ";
            $macros["͜macros"] = $this->loadTemplate("@Tabler/includes/utils.html.twig", "@theme/components/button.html.twig", 2)->unwrap();
            // line 4
            if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 4, $this->source); })()) === false)) {
                // line 6
                $context["class"] = "";
            } elseif ((null ===             // line 7
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 7, $this->source); })()))) {
                // line 8
                $context["class"] = "btn ";
            } else {
                // line 10
                $context["class"] = (("btn btn-" . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 10, $this->source); })())) . " ");
            }
            // line 13
            $context["icon"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "icon", [], "any", true, true, false, 13) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "icon", [], "any", false, false, false, 13)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "icon", [], "any", false, false, false, 13)) : ((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 13, $this->source); })())));
            // line 14
            $context["disabled"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "disabled", [], "any", true, true, false, 14) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "disabled", [], "any", false, false, false, 14)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "disabled", [], "any", false, false, false, 14)) : (false));
            // line 15
            $context["url"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "url", [], "any", true, true, false, 15) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "url", [], "any", false, false, false, 15)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "url", [], "any", false, false, false, 15)) : ("#"));
            // line 16
            $context["onclick"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "onclick", [], "any", true, true, false, 16) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "onclick", [], "any", false, false, false, 16)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "onclick", [], "any", false, false, false, 16)) : (null));
            // line 17
            $context["collapse"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "collapse", [], "any", true, true, false, 17) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "collapse", [], "any", false, false, false, 17)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "collapse", [], "any", false, false, false, 17)) : (null));
            // line 18
            $context["modal"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "modal", [], "any", true, true, false, 18) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "modal", [], "any", false, false, false, 18)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "modal", [], "any", false, false, false, 18)) : (null));
            // line 19
            $context["toggle"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "toggle", [], "any", true, true, false, 19) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "toggle", [], "any", false, false, false, 19)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "toggle", [], "any", false, false, false, 19)) : (null));
            // line 20
            $context["target"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "target", [], "any", true, true, false, 20) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "target", [], "any", false, false, false, 20)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "target", [], "any", false, false, false, 20)) : (null));
            // line 21
            $context["id"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "id", [], "any", true, true, false, 21) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "id", [], "any", false, false, false, 21)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "id", [], "any", false, false, false, 21)) : (null));
            // line 22
            $context["title"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "title", [], "any", true, true, false, 22) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "title", [], "any", false, false, false, 22)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "title", [], "any", false, false, false, 22)) : (null));
            // line 23
            $context["class"] = ((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 23, $this->source); })()) . ((CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "class", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "class", [], "any", false, false, false, 23), "")) : ("")));
            // line 24
            $context["attr"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "attr", [], "any", true, true, false, 24) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "attr", [], "any", false, false, false, 24)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "attr", [], "any", false, false, false, 24)) : ([]));
            // line 25
            $context["forceTitle"] = (((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 25, $this->source); })()) === false) || (((CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "combined", [], "any", true, true, false, 25) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "combined", [], "any", false, false, false, 25)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "combined", [], "any", false, false, false, 25)) : (false)));
            // line 26
            $context["badge"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "badge", [], "any", true, true, false, 26) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "badge", [], "any", false, false, false, 26)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "badge", [], "any", false, false, false, 26)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "label", [], "any", true, true, false, 26) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "label", [], "any", false, false, false, 26)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "label", [], "any", false, false, false, 26)) : (null))));
            // line 27
            $context["badge_color"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "badgeColor", [], "any", true, true, false, 27) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "badgeColor", [], "any", false, false, false, 27)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "badgeColor", [], "any", false, false, false, 27)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "labelColor", [], "any", true, true, false, 27) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "labelColor", [], "any", false, false, false, 27)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "labelColor", [], "any", false, false, false, 27)) : ("yellow"))));
            // line 28
            $context["translation_domain"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "translation_domain", [], "any", true, true, false, 28) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "translation_domain", [], "any", false, false, false, 28)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "translation_domain", [], "any", false, false, false, 28)) : ("messages"));
            // line 29
            $context["translation_params"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "translation_params", [], "any", true, true, false, 29) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "translation_params", [], "any", false, false, false, 29)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "translation_params", [], "any", false, false, false, 29)) : ([]));
            // line 30
            $context["isSubmit"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "buttonType", [], "any", true, true, false, 30) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 30, $this->source); })()), "buttonType", [], "any", false, false, false, 30) == "submit"));
            // line 31
            $context["buttonType"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "buttonType", [], "any", true, true, false, 31) && ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 31, $this->source); })()), "buttonType", [], "any", false, false, false, 31) == "button") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 31, $this->source); })()), "buttonType", [], "any", false, false, false, 31) == "submit")))) ? ("button") : ("a"));
            // line 32
            $context["tooltip"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "tooltip", [], "any", true, true, false, 32) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "tooltip", [], "any", false, false, false, 32)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "tooltip", [], "any", false, false, false, 32)) : (true));
            // line 33
            $context["accesskey"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "accesskey", [], "any", true, true, false, 33)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 33, $this->source); })()), "accesskey", [], "any", false, false, false, 33)) : (null));
            // line 35
            if ((((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 35, $this->source); })()) != "link") &&  !((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 35, $this->source); })()) === false)) && ( !(isset($context["forceTitle"]) || array_key_exists("forceTitle", $context) ? $context["forceTitle"] : (function () { throw new RuntimeError('Variable "forceTitle" does not exist.', 35, $this->source); })()) && (null === (isset($context["badge"]) || array_key_exists("badge", $context) ? $context["badge"] : (function () { throw new RuntimeError('Variable "badge" does not exist.', 35, $this->source); })())))) && (!((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 35, $this->source); })()) === false)))) {
                // line 36
                $context["class"] = ((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 36, $this->source); })()) . " btn-icon");
            }
            // line 39
            if (((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 39, $this->source); })()) === true)) {
                // line 40
                $context["class"] = ((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 40, $this->source); })()) . " disabled");
            }
            // line 43
            yield "<";
            yield (isset($context["buttonType"]) || array_key_exists("buttonType", $context) ? $context["buttonType"] : (function () { throw new RuntimeError('Variable "buttonType" does not exist.', 43, $this->source); })());
            yield " class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 43, $this->source); })())), "html", null, true);
            yield "\"";
            // line 44
            if ( !((isset($context["buttonType"]) || array_key_exists("buttonType", $context) ? $context["buttonType"] : (function () { throw new RuntimeError('Variable "buttonType" does not exist.', 44, $this->source); })()) === "button")) {
                yield " href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 44, $this->source); })()), "html", null, true);
                yield "\"";
            }
            // line 45
            if (((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 45, $this->source); })()) === true)) {
                yield " disabled=\"disabled\"";
            }
            // line 46
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 46, $this->source); })()))) {
                yield " id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 46, $this->source); })()), "html", null, true);
                yield "\"";
            }
            // line 47
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["toggle"]) || array_key_exists("toggle", $context) ? $context["toggle"] : (function () { throw new RuntimeError('Variable "toggle" does not exist.', 47, $this->source); })()))) {
                yield " data-bs-toggle=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["toggle"]) || array_key_exists("toggle", $context) ? $context["toggle"] : (function () { throw new RuntimeError('Variable "toggle" does not exist.', 47, $this->source); })()), "html", null, true);
                yield "\"";
            }
            // line 48
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["modal"]) || array_key_exists("modal", $context) ? $context["modal"] : (function () { throw new RuntimeError('Variable "modal" does not exist.', 48, $this->source); })()))) {
                yield " data-bs-toggle=\"modal\" data-bs-target=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["modal"]) || array_key_exists("modal", $context) ? $context["modal"] : (function () { throw new RuntimeError('Variable "modal" does not exist.', 48, $this->source); })()), "html", null, true);
                yield "\"";
            }
            // line 49
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["collapse"]) || array_key_exists("collapse", $context) ? $context["collapse"] : (function () { throw new RuntimeError('Variable "collapse" does not exist.', 49, $this->source); })()))) {
                yield " data-bs-toggle=\"collapse\" data-bs-target=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["collapse"]) || array_key_exists("collapse", $context) ? $context["collapse"] : (function () { throw new RuntimeError('Variable "collapse" does not exist.', 49, $this->source); })()), "html", null, true);
                yield "\"";
            }
            // line 50
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["onclick"]) || array_key_exists("onclick", $context) ? $context["onclick"] : (function () { throw new RuntimeError('Variable "onclick" does not exist.', 50, $this->source); })()))) {
                yield " onclick=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["onclick"]) || array_key_exists("onclick", $context) ? $context["onclick"] : (function () { throw new RuntimeError('Variable "onclick" does not exist.', 50, $this->source); })()), "html", null, true);
                yield "\"";
            }
            // line 51
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 51, $this->source); })()))) {
                yield " ";
                if ((isset($context["isSubmit"]) || array_key_exists("isSubmit", $context) ? $context["isSubmit"] : (function () { throw new RuntimeError('Variable "isSubmit" does not exist.', 51, $this->source); })())) {
                    yield "formtarget";
                } else {
                    yield "target";
                }
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 51, $this->source); })()), "html", null, true);
                yield "\"";
            }
            // line 52
            if (((((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 52, $this->source); })()) &&  !(isset($context["forceTitle"]) || array_key_exists("forceTitle", $context) ? $context["forceTitle"] : (function () { throw new RuntimeError('Variable "forceTitle" does not exist.', 52, $this->source); })())) &&  !(null === (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 52, $this->source); })()))) &&  !((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 52, $this->source); })()) === false))) {
                yield " ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "tooltip_attr", [], "any", true, true, false, 52) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "tooltip_attr", [], "any", false, false, false, 52)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), "tooltip_attr", [], "any", false, false, false, 52), "html", null, true)) : ("data-bs-toggle"));
                yield "=\"tooltip\" data-bs-placement=\"top\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 52, $this->source); })()), (isset($context["translation_params"]) || array_key_exists("translation_params", $context) ? $context["translation_params"] : (function () { throw new RuntimeError('Variable "translation_params" does not exist.', 52, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 52, $this->source); })())), "html", null, true);
                yield "\"";
            }
            // line 53
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["accesskey"]) || array_key_exists("accesskey", $context) ? $context["accesskey"] : (function () { throw new RuntimeError('Variable "accesskey" does not exist.', 53, $this->source); })()))) {
                yield " accesskey=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["accesskey"]) || array_key_exists("accesskey", $context) ? $context["accesskey"] : (function () { throw new RuntimeError('Variable "accesskey" does not exist.', 53, $this->source); })()), "html", null, true);
                yield "\"";
            }
            // line 54
            yield $macros["͜macros"]->getTemplateForMacro("macro_attr_to_html", $context, 54, $this->getSourceContext())->macro_attr_to_html(...[(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 54, $this->source); })())]);
            // line 55
            yield ">";
            // line 56
            if ( !((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 56, $this->source); })()) === false)) {
                // line 57
                yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 57, $this->source); })()), (!CoreExtension::inFilter("btn-sm", (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 57, $this->source); })())) && !CoreExtension::inFilter("btn-lg", (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 57, $this->source); })()))), (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 57, $this->source); })()));
            }
            // line 59
            if ((((isset($context["forceTitle"]) || array_key_exists("forceTitle", $context) ? $context["forceTitle"] : (function () { throw new RuntimeError('Variable "forceTitle" does not exist.', 59, $this->source); })()) || ((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 59, $this->source); })()) === false)) &&  !(null === (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 59, $this->source); })())))) {
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 60, $this->source); })()), (isset($context["translation_params"]) || array_key_exists("translation_params", $context) ? $context["translation_params"] : (function () { throw new RuntimeError('Variable "translation_params" does not exist.', 60, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 60, $this->source); })())), "html", null, true);
            }
            // line 62
            if ( !(null === (isset($context["badge"]) || array_key_exists("badge", $context) ? $context["badge"] : (function () { throw new RuntimeError('Variable "badge" does not exist.', 62, $this->source); })()))) {
                // line 63
                yield "<span class=\"badge bg-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["badge_color"]) || array_key_exists("badge_color", $context) ? $context["badge_color"] : (function () { throw new RuntimeError('Variable "badge_color" does not exist.', 63, $this->source); })()), "html", null, true);
                yield " ";
                if (((isset($context["forceTitle"]) || array_key_exists("forceTitle", $context) ? $context["forceTitle"] : (function () { throw new RuntimeError('Variable "forceTitle" does not exist.', 63, $this->source); })()) &&  !(null === (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 63, $this->source); })())))) {
                    yield "ms-1";
                }
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["badge"]) || array_key_exists("badge", $context) ? $context["badge"] : (function () { throw new RuntimeError('Variable "badge" does not exist.', 63, $this->source); })()), "html", null, true);
                yield "</span>";
            }
            // line 65
            yield "</";
            yield (isset($context["buttonType"]) || array_key_exists("buttonType", $context) ? $context["buttonType"] : (function () { throw new RuntimeError('Variable "buttonType" does not exist.', 65, $this->source); })());
            yield ">
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
        return "@theme/components/button.html.twig";
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
        return array (  243 => 65,  232 => 63,  230 => 62,  227 => 60,  225 => 59,  222 => 57,  220 => 56,  218 => 55,  216 => 54,  210 => 53,  202 => 52,  190 => 51,  184 => 50,  178 => 49,  172 => 48,  166 => 47,  160 => 46,  156 => 45,  150 => 44,  144 => 43,  141 => 40,  139 => 39,  136 => 36,  134 => 35,  132 => 33,  130 => 32,  128 => 31,  126 => 30,  124 => 29,  122 => 28,  120 => 27,  118 => 26,  116 => 25,  114 => 24,  112 => 23,  110 => 22,  108 => 21,  106 => 20,  104 => 19,  102 => 18,  100 => 17,  98 => 16,  96 => 15,  94 => 14,  92 => 13,  89 => 10,  86 => 8,  84 => 7,  82 => 6,  80 => 4,  77 => 2,  57 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro button(icon, values, type) %}
    {% import '@Tabler/includes/utils.html.twig' as macros %}

    {%- if type is same as (false) -%}
        {# when using in dropdown actions for example, which might not have a \"btn\" class #}
        {%- set class = \"\" %}
    {%- elseif type is null -%}
        {%- set class = \"btn \" -%}
    {%- else -%}
        {%- set class = \"btn btn-\" ~ type ~ \" \" -%}
    {%- endif -%}

    {%- set icon = values.icon ?? icon -%}
    {%- set disabled = values.disabled ?? false -%}
    {%- set url = values.url ?? '#' -%}
    {%- set onclick = values.onclick ?? null -%}
    {%- set collapse = values.collapse ?? null -%}
    {%- set modal = values.modal ?? null -%}
    {%- set toggle = values.toggle ?? null -%}
    {%- set target = values.target ?? null -%}
    {%- set id = values.id ?? null -%}
    {%- set title = values.title ?? null -%}
    {%- set class = class ~ ( values.class | default(\"\")) -%}
    {%- set attr = values.attr ?? {} -%}
    {%- set forceTitle = icon is same as (false) or (values.combined ?? false) -%}
    {%- set badge = values.badge ?? (values.label ?? null) -%}
    {%- set badge_color = values.badgeColor ?? (values.labelColor ?? 'yellow') -%}
    {%- set translation_domain = values.translation_domain ?? 'messages' -%}
    {%- set translation_params = values.translation_params ?? {} -%}
    {%- set isSubmit = values.buttonType is defined and values.buttonType == 'submit' -%}
    {%- set buttonType = values.buttonType is defined and (values.buttonType == 'button' or values.buttonType == 'submit') ? 'button' : 'a' -%}
    {%- set tooltip = values.tooltip ?? true -%}
    {%- set accesskey = values.accesskey is defined ? values.accesskey : null -%}

    {%- if type != 'link' and icon is not same as (false) and (not forceTitle and badge is null) and (type is not same as (false)) %}
        {%- set class = class ~ ' btn-icon' -%}
    {%- endif -%}

    {%- if disabled is same as (true) %}
        {%- set class = class ~ \" disabled\" -%}
    {%- endif -%}

    <{{ buttonType|raw }} class=\"{{ class | trim }}\"
    {%- if buttonType is not same as (\"button\") %} href=\"{{ url }}\"{% endif -%}
    {%- if disabled is same as (true) %} disabled=\"disabled\"{% endif -%}
    {%- if id is not empty %} id=\"{{ id }}\"{% endif -%}
    {%- if toggle is not empty %} data-bs-toggle=\"{{ toggle }}\"{% endif -%}
    {%- if modal is not empty %} data-bs-toggle=\"modal\" data-bs-target=\"{{ modal }}\"{% endif -%}
    {%- if collapse is not empty %} data-bs-toggle=\"collapse\" data-bs-target=\"{{ collapse }}\"{% endif -%}
    {%- if onclick is not empty %} onclick=\"{{ onclick }}\"{% endif -%}
    {%- if target is not empty %} {% if isSubmit %}formtarget{% else %}target{% endif -%}=\"{{ target }}\"{% endif -%}
    {%- if tooltip and not forceTitle and title is not null and type is not same as (false) %} {{ values.tooltip_attr ?? 'data-bs-toggle' }}=\"tooltip\" data-bs-placement=\"top\" title=\"{{ title|trans(translation_params, translation_domain) }}\"{% endif -%}
    {%- if accesskey is not empty %} accesskey=\"{{ accesskey }}\"{% endif -%}
    {{- macros.attr_to_html(attr) -}}
    >
    {%- if icon is not same as (false) -%}
        {{ tabler_icon(icon, (\"btn-sm\" not in class and \"btn-lg\" not in class), icon) }}
    {%- endif -%}
    {%- if (forceTitle or icon is same as (false)) and title is not null -%}
        {{ title|trans(translation_params, translation_domain) }}
    {%- endif -%}
    {%- if badge is not null -%}
        <span class=\"badge bg-{{ badge_color }} {% if forceTitle and title is not null %}ms-1{% endif %}\">{{ badge }}</span>
    {%- endif -%}
    </{{ buttonType|raw }}>
{% endmacro %}
", "@theme/components/button.html.twig", "C:\\wamp64\\www\\kimai\\vendor\\kevinpapst\\tabler-bundle\\templates\\components\\button.html.twig");
    }
}
