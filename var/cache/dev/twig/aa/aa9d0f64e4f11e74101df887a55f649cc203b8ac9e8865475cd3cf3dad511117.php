<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_55034419fd194d1b398367812bd0f14928f8a0ca0d8a386898aabd6a2e9b80f9 extends Twig_Template
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
        $__internal_75fb039a3c47392636dc121bd603d40781e295d79f42db869baeaca48a997526 = $this->env->getExtension("native_profiler");
        $__internal_75fb039a3c47392636dc121bd603d40781e295d79f42db869baeaca48a997526->enter($__internal_75fb039a3c47392636dc121bd603d40781e295d79f42db869baeaca48a997526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_75fb039a3c47392636dc121bd603d40781e295d79f42db869baeaca48a997526->leave($__internal_75fb039a3c47392636dc121bd603d40781e295d79f42db869baeaca48a997526_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"*/
/* <?php if ($disabled): ?>disabled="disabled" <?php endif ?>*/
/* <?php foreach ($choice_attr as $k => $v): ?>*/
/* <?php if ($v === true): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
