<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_be96ac874b4f6a77869bbf81dfe11a921302914123863acf1529e58998b6fc8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ed863c169a6c7e050daeea936cb7537b62b4fb189f8e2aff404d454f475f46d = $this->env->getExtension("native_profiler");
        $__internal_1ed863c169a6c7e050daeea936cb7537b62b4fb189f8e2aff404d454f475f46d->enter($__internal_1ed863c169a6c7e050daeea936cb7537b62b4fb189f8e2aff404d454f475f46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_1ed863c169a6c7e050daeea936cb7537b62b4fb189f8e2aff404d454f475f46d->leave($__internal_1ed863c169a6c7e050daeea936cb7537b62b4fb189f8e2aff404d454f475f46d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
