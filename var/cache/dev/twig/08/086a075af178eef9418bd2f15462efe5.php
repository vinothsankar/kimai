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

/* user/2fa.html.twig */
class __TwigTemplate_f05f7822f5c730b0cf68c9a257936171 extends Template
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
            'form_body' => [$this, 'block_form_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "user/form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/2fa.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/2fa.html.twig"));

        // line 2
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "user/2fa.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("user/form.html.twig", "user/2fa.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        // line 5
        yield "    <div class=\"card-body\">
        <div class=\"row mb-3\">
            <p>
                ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.2fa_intro"), "html", null, true);
        yield "
            </p>
            <p>
                <img onclick=\"document.getElementById('totp_secret').classList.toggle('d-none');\" data-toggle=\"tooltip\" title=\"Click to show code\" alt=\"TOTP QR Code\" style=\"max-width: 200px; max-height: 200px;\" src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["qr_code"]) || array_key_exists("qr_code", $context) ? $context["qr_code"] : (function () { throw new RuntimeError('Variable "qr_code" does not exist.', 11, $this->source); })()), "dataUri", [], "any", false, false, false, 11), "html", null, true);
        yield "\" />
                <span id=\"totp_secret\" style=\"display: block\" class=\"d-none\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["secret"]) || array_key_exists("secret", $context) ? $context["secret"] : (function () { throw new RuntimeError('Variable "secret" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "</span>
            </p>
            ";
        // line 14
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "totpAuthenticationEnabled", [], "any", false, false, false, 14)) {
            // line 15
            yield "                ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start', ["attr" => ["id" => "user_two_factor_form"]]);
            yield "
                <p>";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.2fa_confirmation"), "html", null, true);
            yield "</p>
                ";
            // line 17
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'widget');
            yield "
                ";
            // line 18
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_end');
            yield "
            ";
        } else {
            // line 20
            yield "                <strong><i class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->icon("success", true), "html", null, true);
            yield " text-success\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("activated"), "html", null, true);
            yield "</strong>
            ";
        }
        // line 22
        yield "        </div>
    </div>
    <div class=\"card-footer\">
        ";
        // line 25
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "totpAuthenticationEnabled", [], "any", false, false, false, 25)) {
            // line 26
            yield "            ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["deactivate"]) || array_key_exists("deactivate", $context) ? $context["deactivate"] : (function () { throw new RuntimeError('Variable "deactivate" does not exist.', 26, $this->source); })()), 'form_start', ["attr" => ["id" => "user_two_factor_form"]]);
            yield "
                <input type=\"submit\" value=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("deactivate"), "html", null, true);
            yield "\" class=\"btn btn-warning\" id=\"user_two_factor_button\" />
            ";
            // line 28
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["deactivate"]) || array_key_exists("deactivate", $context) ? $context["deactivate"] : (function () { throw new RuntimeError('Variable "deactivate" does not exist.', 28, $this->source); })()), 'form_end');
            yield "
        ";
        } else {
            // line 30
            yield "            <input type=\"submit\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.save"), "html", null, true);
            yield "\" class=\"btn btn-primary\" id=\"user_two_factor_button\" />
        ";
        }
        // line 32
        yield "    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 36
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

        // line 37
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    ";
        // line 38
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "totpAuthenticationEnabled", [], "any", false, false, false, 38)) {
            // line 39
            yield "    <script>
        document.getElementById('user_two_factor_button').addEventListener('click', function(){
            document.getElementById('user_two_factor_form').submit();
        });
    </script>
    ";
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
        return "user/2fa.html.twig";
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
        return array (  188 => 39,  186 => 38,  181 => 37,  168 => 36,  155 => 32,  149 => 30,  144 => 28,  140 => 27,  135 => 26,  133 => 25,  128 => 22,  120 => 20,  115 => 18,  111 => 17,  107 => 16,  102 => 15,  100 => 14,  95 => 12,  91 => 11,  85 => 8,  80 => 5,  67 => 4,  56 => 1,  54 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'user/form.html.twig' %}
{% import \"macros/widgets.html.twig\" as widgets %}

{% block form_body %}
    <div class=\"card-body\">
        <div class=\"row mb-3\">
            <p>
                {{ 'profile.2fa_intro'|trans }}
            </p>
            <p>
                <img onclick=\"document.getElementById('totp_secret').classList.toggle('d-none');\" data-toggle=\"tooltip\" title=\"Click to show code\" alt=\"TOTP QR Code\" style=\"max-width: 200px; max-height: 200px;\" src=\"{{ qr_code.dataUri }}\" />
                <span id=\"totp_secret\" style=\"display: block\" class=\"d-none\">{{ secret }}</span>
            </p>
            {% if not user.totpAuthenticationEnabled %}
                {{ form_start(form, {'attr': {'id': 'user_two_factor_form'}}) }}
                <p>{{ 'profile.2fa_confirmation'|trans }}</p>
                {{ form_widget(form) }}
                {{ form_end(form) }}
            {% else %}
                <strong><i class=\"{{ 'success'|icon(true) }} text-success\"></i> {{ 'activated'|trans }}</strong>
            {% endif %}
        </div>
    </div>
    <div class=\"card-footer\">
        {% if user.totpAuthenticationEnabled %}
            {{ form_start(deactivate, {'attr': {'id': 'user_two_factor_form'}}) }}
                <input type=\"submit\" value=\"{{ 'deactivate'|trans }}\" class=\"btn btn-warning\" id=\"user_two_factor_button\" />
            {{ form_end(deactivate) }}
        {% else %}
            <input type=\"submit\" value=\"{{ 'action.save'|trans }}\" class=\"btn btn-primary\" id=\"user_two_factor_button\" />
        {% endif %}
    </div>

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% if not user.totpAuthenticationEnabled %}
    <script>
        document.getElementById('user_two_factor_button').addEventListener('click', function(){
            document.getElementById('user_two_factor_form').submit();
        });
    </script>
    {% endif %}
{% endblock %}
", "user/2fa.html.twig", "C:\\wamp64\\www\\kimai\\templates\\user\\2fa.html.twig");
    }
}
