<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b768161af55626deea913b62c323ce7b50186fe688eeff53766eb577a7655f7d extends Twig_Template
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
        $__internal_40816e9fc7bed4fd271e5968328f6e5dbfe5b7ea34e7c6056d224545b586d200 = $this->env->getExtension("native_profiler");
        $__internal_40816e9fc7bed4fd271e5968328f6e5dbfe5b7ea34e7c6056d224545b586d200->enter($__internal_40816e9fc7bed4fd271e5968328f6e5dbfe5b7ea34e7c6056d224545b586d200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_40816e9fc7bed4fd271e5968328f6e5dbfe5b7ea34e7c6056d224545b586d200->leave($__internal_40816e9fc7bed4fd271e5968328f6e5dbfe5b7ea34e7c6056d224545b586d200_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
