<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d9ded4b7e8d230d1bafbbc3658ca6e22928920972dc7f423bbc079b01209fc4d extends Twig_Template
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
        $__internal_d46ccd2ddb7a8da04e3c78a90573d5f30d45390c18e8c9424c6fe0defe601d4c = $this->env->getExtension("native_profiler");
        $__internal_d46ccd2ddb7a8da04e3c78a90573d5f30d45390c18e8c9424c6fe0defe601d4c->enter($__internal_d46ccd2ddb7a8da04e3c78a90573d5f30d45390c18e8c9424c6fe0defe601d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d46ccd2ddb7a8da04e3c78a90573d5f30d45390c18e8c9424c6fe0defe601d4c->leave($__internal_d46ccd2ddb7a8da04e3c78a90573d5f30d45390c18e8c9424c6fe0defe601d4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
