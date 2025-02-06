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

/* default/_form.html.twig */
class __TwigTemplate_f4de195502f25aff9f717bd5fcc1905d extends Template
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
            'form_before' => [$this, 'block_form_before'],
            'form_body_outer' => [$this, 'block_form_body_outer'],
            'form_body_pre' => [$this, 'block_form_body_pre'],
            'form_body' => [$this, 'block_form_body'],
            'form_body_post' => [$this, 'block_form_body_post'],
            'submit_button' => [$this, 'block_submit_button'],
            'form_after' => [$this, 'block_form_after'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_form.html.twig"));

        // line 1
        if (array_key_exists("form_theme", $context)) {
            // line 2
            yield "    ";
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [(isset($context["form_theme"]) || array_key_exists("form_theme", $context) ? $context["form_theme"] : (function () { throw new RuntimeError('Variable "form_theme" does not exist.', 2, $this->source); })())], true);
        }
        // line 4
        $context["_back"] = (((array_key_exists("back", $context) &&  !((isset($context["back"]) || array_key_exists("back", $context) ? $context["back"] : (function () { throw new RuntimeError('Variable "back" does not exist.', 4, $this->source); })()) === false))) ? ((isset($context["back"]) || array_key_exists("back", $context) ? $context["back"] : (function () { throw new RuntimeError('Variable "back" does not exist.', 4, $this->source); })())) : (false));
        // line 5
        $context["_reset"] = (((array_key_exists("reset", $context) && ((isset($context["reset"]) || array_key_exists("reset", $context) ? $context["reset"] : (function () { throw new RuntimeError('Variable "reset" does not exist.', 5, $this->source); })()) === false))) ? (false) : (true));
        // line 6
        yield "<div class=\"card mb-3\">
    ";
        // line 7
        yield from $this->unwrap()->yieldBlock('form_before', $context, $blocks);
        // line 8
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start', ((array_key_exists("formStartOptions", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["formStartOptions"]) || array_key_exists("formStartOptions", $context) ? $context["formStartOptions"] : (function () { throw new RuntimeError('Variable "formStartOptions" does not exist.', 8, $this->source); })()), [])) : ([])));
        yield "
    <div class=\"card-header\">
        <h3 class=\"card-title\">
            ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 11, $this->source); })()), "html", null, true);
        yield "
            ";
        // line 12
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 12), "docu_chapter", [], "any", true, true, false, 12) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "vars", [], "any", false, false, false, 12), "docu_chapter", [], "any", false, false, false, 12)))) {
            // line 13
            yield "                <a class=\"form-help\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\Extensions']->documentationLink(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "vars", [], "any", false, false, false, 13), "docu_chapter", [], "any", false, false, false, 13)), "html", null, true);
            yield "\" target=\"_blank\">?</a>
            ";
        }
        // line 15
        yield "        </h3>
    </div>
    <div class=\"card-body\">
        ";
        // line 18
        yield from $this->unwrap()->yieldBlock('form_body_outer', $context, $blocks);
        // line 28
        yield "    </div>
    <div class=\"card-footer\">
        ";
        // line 30
        yield from $this->unwrap()->yieldBlock('submit_button', $context, $blocks);
        // line 33
        yield "        ";
        if ( !((isset($context["_back"]) || array_key_exists("_back", $context) ? $context["_back"] : (function () { throw new RuntimeError('Variable "_back" does not exist.', 33, $this->source); })()) === false)) {
            // line 34
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_back"]) || array_key_exists("_back", $context) ? $context["_back"] : (function () { throw new RuntimeError('Variable "_back" does not exist.', 34, $this->source); })()), "html", null, true);
            yield "\" class=\"btn btn-link\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("back"), "html", null, true);
            yield "</a>
        ";
        }
        // line 36
        yield "        ";
        if ( !((isset($context["_reset"]) || array_key_exists("_reset", $context) ? $context["_reset"] : (function () { throw new RuntimeError('Variable "_reset" does not exist.', 36, $this->source); })()) === false)) {
            // line 37
            yield "            <input type=\"reset\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.reset"), "html", null, true);
            yield "\" class=\"btn btn-link pull-right\" />
        ";
        }
        // line 39
        yield "    </div>
    ";
        // line 40
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_end');
        yield "
    ";
        // line 41
        yield from $this->unwrap()->yieldBlock('form_after', $context, $blocks);
        // line 42
        yield "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_before(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_before"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_before"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_body_outer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_body_outer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_body_outer"));

        // line 19
        yield "            ";
        yield from $this->unwrap()->yieldBlock('form_body_pre', $context, $blocks);
        // line 22
        yield "            ";
        yield from $this->unwrap()->yieldBlock('form_body', $context, $blocks);
        // line 25
        yield "            ";
        yield from $this->unwrap()->yieldBlock('form_body_post', $context, $blocks);
        // line 27
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_body_pre(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_body_pre"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_body_pre"));

        // line 20
        yield "                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'errors');
        yield "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_body"));

        // line 23
        yield "                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'rest');
        yield "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_body_post(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_body_post"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_body_post"));

        // line 26
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submit_button(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submit_button"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submit_button"));

        // line 31
        yield "            <input type=\"submit\" data-loading-text=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("submit_button", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["submit_button"]) || array_key_exists("submit_button", $context) ? $context["submit_button"] : (function () { throw new RuntimeError('Variable "submit_button" does not exist.', 31, $this->source); })()), "action.save")) : ("action.save"))), "html", null, true);
        yield "…\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("submit_button", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["submit_button"]) || array_key_exists("submit_button", $context) ? $context["submit_button"] : (function () { throw new RuntimeError('Variable "submit_button" does not exist.', 31, $this->source); })()), "action.save")) : ("action.save"))), "html", null, true);
        yield "\" class=\"btn btn-primary\" />
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_after(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_after"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_after"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/_form.html.twig";
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
        return array (  304 => 41,  288 => 31,  275 => 30,  264 => 26,  251 => 25,  237 => 23,  224 => 22,  210 => 20,  197 => 19,  186 => 27,  183 => 25,  180 => 22,  177 => 19,  164 => 18,  142 => 7,  131 => 42,  129 => 41,  125 => 40,  122 => 39,  116 => 37,  113 => 36,  105 => 34,  102 => 33,  100 => 30,  96 => 28,  94 => 18,  89 => 15,  83 => 13,  81 => 12,  77 => 11,  70 => 8,  68 => 7,  65 => 6,  63 => 5,  61 => 4,  57 => 2,  55 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if form_theme is defined %}
    {% form_theme form form_theme %}
{% endif %}
{% set _back = back is defined and back is not same as (false) ? back : false %}
{% set _reset = reset is defined and reset is same as (false) ? false : true %}
<div class=\"card mb-3\">
    {% block form_before %}{% endblock %}
    {{ form_start(form, formStartOptions|default({})) }}
    <div class=\"card-header\">
        <h3 class=\"card-title\">
            {{ title }}
            {% if form.vars.docu_chapter is defined and form.vars.docu_chapter is not empty %}
                <a class=\"form-help\" href=\"{{ form.vars.docu_chapter|docu_link }}\" target=\"_blank\">?</a>
            {% endif %}
        </h3>
    </div>
    <div class=\"card-body\">
        {% block form_body_outer %}
            {% block form_body_pre %}
                {{ form_errors(form) }}
            {% endblock %}
            {% block form_body %}
                {{ form_rest(form) }}
            {% endblock %}
            {% block form_body_post %}
            {% endblock %}
        {% endblock %}
    </div>
    <div class=\"card-footer\">
        {% block submit_button %}
            <input type=\"submit\" data-loading-text=\"{{ (submit_button|default('action.save'))|trans }}…\" value=\"{{ (submit_button|default('action.save'))|trans }}\" class=\"btn btn-primary\" />
        {% endblock %}
        {% if _back is not same as (false) %}
            <a href=\"{{ _back }}\" class=\"btn btn-link\">{{ 'back'|trans }}</a>
        {% endif %}
        {% if _reset is not same as (false) %}
            <input type=\"reset\" value=\"{{ 'action.reset'|trans }}\" class=\"btn btn-link pull-right\" />
        {% endif %}
    </div>
    {{ form_end(form) }}
    {% block form_after %}{% endblock %}
</div>", "default/_form.html.twig", "C:\\wamp64\\www\\kimai\\templates\\default\\_form.html.twig");
    }
}
