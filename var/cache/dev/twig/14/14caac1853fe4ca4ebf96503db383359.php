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

/* partials/recent-activities.html.twig */
class __TwigTemplate_43a4d855b4f9d63eff3d93bb6599fa8b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/recent-activities.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/recent-activities.html.twig"));

        // line 1
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("start_own_timesheet")) {
            // line 2
            yield "    <div class=\"nav-item d-flex me-1 recent-activities\">
        <a href=\"";
            // line 3
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favorites_timesheets");
            yield "\" class=\"btn btn-icon px-0 remote-modal-load recent-activities-btn\" data-modal-title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("recent.activities"), "html", null, true);
            yield "\" tabindex=\"-1\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("recent.activities"), "html", null, true);
            yield "\">
            ";
            // line 4
            yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon("repeat", true);
            yield "
        </a>
    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/recent-activities.html.twig";
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
        return array (  61 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if is_granted('start_own_timesheet') %}
    <div class=\"nav-item d-flex me-1 recent-activities\">
        <a href=\"{{ path('favorites_timesheets') }}\" class=\"btn btn-icon px-0 remote-modal-load recent-activities-btn\" data-modal-title=\"{{ 'recent.activities'|trans }}\" tabindex=\"-1\" title=\"{{ 'recent.activities'|trans }}\">
            {{ icon('repeat', true) }}
        </a>
    </div>
{% endif %}
", "partials/recent-activities.html.twig", "C:\\wamp64\\www\\kimai\\templates\\partials\\recent-activities.html.twig");
    }
}
