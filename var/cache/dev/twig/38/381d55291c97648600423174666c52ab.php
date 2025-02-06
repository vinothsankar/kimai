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

/* reporting/report_by_user_layout.html.twig */
class __TwigTemplate_974a72c26efe7a849017b38e279ea8dd extends Template
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
            'report_form_layout' => [$this, 'block_report_form_layout'],
            'report' => [$this, 'block_report'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "reporting/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reporting/report_by_user_layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reporting/report_by_user_layout.html.twig"));

        // line 2
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "reporting/report_by_user_layout.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("reporting/layout.html.twig", "reporting/report_by_user_layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_report_form_layout(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "report_form_layout"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "report_form_layout"));

        // line 5
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "date", [], "any", false, false, false, 5), 'widget');
        yield "
    ";
        // line 6
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "user", [], "any", true, true, false, 6)) {
            // line 7
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), 'widget', ["label" => false]);
            yield "
    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 8
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8) != (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 8, $this->source); })()))) {
            // line 9
            yield "        ";
            yield $macros["widgets"]->getTemplateForMacro("macro_username", $context, 9, $this->getSourceContext())->macro_username(...[(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })())]);
            yield "
    ";
        }
        // line 11
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "sumType", [], "any", false, false, false, 11), 'widget');
        yield "
    ";
        // line 12
        $macros["_v0"] = $this->loadTemplate("@theme/components/buttons.html.twig", "reporting/report_by_user_layout.html.twig", 12)->unwrap();
        // line 13
        yield "    ";
        yield $macros["_v0"]->getTemplateForMacro("macro_submit_button", $context, 13, $this->getSourceContext())->macro_submit_button(...["download", ["attr" => ["formaction" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["export_route"]) || array_key_exists("export_route", $context) ? $context["export_route"] : (function () { throw new RuntimeError('Variable "export_route" does not exist.', 13, $this->source); })()))], "icon" => "download", "combined" => false], "primary"]);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_report(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "report"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "report"));

        // line 17
        yield "    ";
        yield from $this->loadTemplate("reporting/report_by_user_layout.html.twig", "reporting/report_by_user_layout.html.twig", 17, "126388164")->unwrap()->yield(CoreExtension::toArray(["report_content" =>         $this->unwrap()->renderBlock("report_content", $context, $blocks), "box_id" => (isset($context["box_id"]) || array_key_exists("box_id", $context) ? $context["box_id"] : (function () { throw new RuntimeError('Variable "box_id" does not exist.', 17, $this->source); })()), "fullsize" => true]));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reporting/report_by_user_layout.html.twig";
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
        return array (  134 => 17,  121 => 16,  107 => 13,  105 => 12,  100 => 11,  94 => 9,  92 => 8,  87 => 7,  85 => 6,  80 => 5,  67 => 4,  56 => 1,  54 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'reporting/layout.html.twig' %}
{% import \"macros/widgets.html.twig\" as widgets %}

{% block report_form_layout %}
    {{ form_widget(form.date) }}
    {% if form.user is defined %}
        {{ form_widget(form.user, {'label': false}) }}
    {% elseif app.user != user %}
        {{ widgets.username(user) }}
    {% endif %}
    {{ form_widget(form.sumType) }}
    {% from '@theme/components/buttons.html.twig' import submit_button %}
    {{ submit_button('download', {'attr': {'formaction': path(export_route)}, 'icon': 'download', 'combined': false}, 'primary') }}
{% endblock %}

{% block report %}
    {% embed '@theme/embeds/card.html.twig' with {report_content: block('report_content'), box_id: box_id, fullsize: true} only %}
        {% import \"macros/widgets.html.twig\" as widgets %}
        {% block box_body_class %}{{ box_id }} table-responsive m-0{% endblock %}
        {% block box_body %}
            {{ report_content|raw }}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "reporting/report_by_user_layout.html.twig", "C:\\wamp64\\www\\kimai\\templates\\reporting\\report_by_user_layout.html.twig");
    }
}


/* reporting/report_by_user_layout.html.twig */
class __TwigTemplate_974a72c26efe7a849017b38e279ea8dd___126388164 extends Template
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
            'box_body_class' => [$this, 'block_box_body_class'],
            'box_body' => [$this, 'block_box_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        return "@theme/embeds/card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reporting/report_by_user_layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reporting/report_by_user_layout.html.twig"));

        // line 18
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "reporting/report_by_user_layout.html.twig", 18)->unwrap();
        // line 17
        $this->parent = $this->loadTemplate("@theme/embeds/card.html.twig", "reporting/report_by_user_layout.html.twig", 17);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_body_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_body_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_body_class"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["box_id"]) || array_key_exists("box_id", $context) ? $context["box_id"] : (function () { throw new RuntimeError('Variable "box_id" does not exist.', 19, $this->source); })()), "html", null, true);
        yield " table-responsive m-0";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_body"));

        // line 21
        yield "            ";
        yield (isset($context["report_content"]) || array_key_exists("report_content", $context) ? $context["report_content"] : (function () { throw new RuntimeError('Variable "report_content" does not exist.', 21, $this->source); })());
        yield "
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
        return "reporting/report_by_user_layout.html.twig";
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
        return array (  286 => 21,  273 => 20,  249 => 19,  238 => 17,  236 => 18,  134 => 17,  121 => 16,  107 => 13,  105 => 12,  100 => 11,  94 => 9,  92 => 8,  87 => 7,  85 => 6,  80 => 5,  67 => 4,  56 => 1,  54 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'reporting/layout.html.twig' %}
{% import \"macros/widgets.html.twig\" as widgets %}

{% block report_form_layout %}
    {{ form_widget(form.date) }}
    {% if form.user is defined %}
        {{ form_widget(form.user, {'label': false}) }}
    {% elseif app.user != user %}
        {{ widgets.username(user) }}
    {% endif %}
    {{ form_widget(form.sumType) }}
    {% from '@theme/components/buttons.html.twig' import submit_button %}
    {{ submit_button('download', {'attr': {'formaction': path(export_route)}, 'icon': 'download', 'combined': false}, 'primary') }}
{% endblock %}

{% block report %}
    {% embed '@theme/embeds/card.html.twig' with {report_content: block('report_content'), box_id: box_id, fullsize: true} only %}
        {% import \"macros/widgets.html.twig\" as widgets %}
        {% block box_body_class %}{{ box_id }} table-responsive m-0{% endblock %}
        {% block box_body %}
            {{ report_content|raw }}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "reporting/report_by_user_layout.html.twig", "C:\\wamp64\\www\\kimai\\templates\\reporting\\report_by_user_layout.html.twig");
    }
}
