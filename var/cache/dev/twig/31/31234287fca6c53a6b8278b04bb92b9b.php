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

/* wizard/profile.html.twig */
class __TwigTemplate_d80a4a45bd368482d01c57b2dc37b246 extends Template
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
            'wizard_content' => [$this, 'block_wizard_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "wizard/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wizard/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wizard/profile.html.twig"));

        $this->parent = $this->loadTemplate("wizard/layout.html.twig", "wizard/profile.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_wizard_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wizard_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wizard_content"));

        // line 4
        yield "    <div class=\"card-body text-center py-4 p-sm-6\">
        <h1 class=\"mt-2\">";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("wizard.profile.title", [], "wizard"), "html", null, true);
        yield "</h1>
        <p class=\"text-body-secondary\">";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("wizard.profile.description", [], "wizard"), "html", null, true);
        yield "</p>
    </div>
    <div class=\"hr-text hr-text-center hr-text-spaceless\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("wizard.separator", [], "wizard"), "html", null, true);
        yield "</div>
    <div class=\"card-body\">
        <div class=\"mb-3\">
            ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'rest');
        yield "
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 16
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

        // line 17
        yield "    <script type=\"text/javascript\">
        window.addEventListener('load', function() {
            const skinChooser = document.getElementById('form_skin');
            if (skinChooser !== null) {
                skinChooser.addEventListener('change', () => {
                    document.querySelectorAll('[data-bs-theme]').forEach(
                        element => {
                            element.dataset['bsTheme'] = (skinChooser.value === 'default' ? 'light' : 'dark');
                        }
                    );
                });
            }

            const localeChooser = document.getElementById('form_language');
            if (localeChooser !== null) {
                localeChooser.addEventListener('change', (ev) => {
                    document.getElementById('form_reload').value = '1';
                    ev.target.form.submit();
                });
            }
        });
    </script>
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
        return "wizard/profile.html.twig";
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
        return array (  123 => 17,  110 => 16,  95 => 11,  89 => 8,  84 => 6,  80 => 5,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'wizard/layout.html.twig' %}

{% block wizard_content %}
    <div class=\"card-body text-center py-4 p-sm-6\">
        <h1 class=\"mt-2\">{{ 'wizard.profile.title'|trans({}, 'wizard') }}</h1>
        <p class=\"text-body-secondary\">{{ 'wizard.profile.description'|trans({}, 'wizard') }}</p>
    </div>
    <div class=\"hr-text hr-text-center hr-text-spaceless\">{{ 'wizard.separator'|trans({}, 'wizard') }}</div>
    <div class=\"card-body\">
        <div class=\"mb-3\">
            {{ form_rest(form) }}
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    <script type=\"text/javascript\">
        window.addEventListener('load', function() {
            const skinChooser = document.getElementById('form_skin');
            if (skinChooser !== null) {
                skinChooser.addEventListener('change', () => {
                    document.querySelectorAll('[data-bs-theme]').forEach(
                        element => {
                            element.dataset['bsTheme'] = (skinChooser.value === 'default' ? 'light' : 'dark');
                        }
                    );
                });
            }

            const localeChooser = document.getElementById('form_language');
            if (localeChooser !== null) {
                localeChooser.addEventListener('change', (ev) => {
                    document.getElementById('form_reload').value = '1';
                    ev.target.form.submit();
                });
            }
        });
    </script>
{% endblock %}
", "wizard/profile.html.twig", "C:\\wamp64\\www\\kimai\\templates\\wizard\\profile.html.twig");
    }
}
